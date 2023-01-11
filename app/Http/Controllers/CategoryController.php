<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('order_by')->get();
        return view('backend.modules.category.index', compact('categories'));
    }


    public function create(){
        return view('backend.modules.category.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:categories',
            'order_by' => 'required|numeric',
            'status' => 'required'
        ]);

        $category_data = $request->all();
        $category_data['slug']=Str::slug($request->input('slug'));

        Category::create($category_data);
        session()->flash('cls', 'success');
        session()->flash('msg', 'Category Created Successfully');

        return redirect()->route('category.index');
    }
    public function show(Request $request, $id){
        $category = Category::find($id);
        return view('backend.modules.category.show', compact('category'));
    }

    public function edit(Request $request, $id){
        
        $category = Category::find($id);
        return view('backend.modules.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category, $id){
        //  return $id;
        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:categories,slug,'.$category->id,
            'order_by' => 'required|numeric',
            'status' => 'required'
        ]);
        $category_data['slug']=Str::slug($request->input('slug'));

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = $category_data['slug'];
        $category->order_by = $request->order_by;
        $category->status = $request->status;
        $category->update();
  

        session()->flash('cls', 'success');
        session()->flash('msg', 'Category Updated Successfully');

        return redirect()->route('category.index');


    }

    public function destroy(Category $category, $id){
        
        $category = Category::find($id);
        $category->delete();
       
        session()->flash('cls', 'error');
        session()->flash('msg', 'Category Deleted Successfully');

        return redirect()->route('category.index');
    }
}
