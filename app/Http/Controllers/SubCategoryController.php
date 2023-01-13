<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{

    public function index(){
        
        $sub_categories = SubCategory::with('category')->orderBy('order_by')->get();

        //  $sub_categories = SubCategory::join('categories','categories.id','=','sub_categories.category_id')
        // ->select('sub_categories.id','categories.name as cat_name','sub_categories.name','sub_categories.slug','sub_categories.status','sub_categories.order_by')
        // ->get();
        
        return view('backend.modules.sub_category.index', compact('sub_categories'));
    }

    public function create(){

        $categories = Category::pluck('name', 'id');
       
        return view('backend.modules.sub_category.create', compact('categories'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:sub_categories',
            'order_by' => 'required|numeric',
            'status' => 'required',
            'category_id' => 'required'
        ]);

        $sub_category_data = $request->all();
        $sub_category_data['slug'] = Str::slug($request->input('slug'));

        $sub_category = new SubCategory;
        $sub_category->name = $request->name;
        $sub_category->slug = $sub_category_data['slug'];
        $sub_category->order_by = $request->order_by;
        $sub_category->status = $request->status;
        $sub_category->category_id = $request->category_id;
        $sub_category->save();

        session()->flash('cls', 'success');
        session()->flash('msg', 'Sub Category Created Successfully');

        return redirect()->route('sub-category.index');
    }

    public function show(Request $request, $id){

        $request->load('category');
        $sub_category = SubCategory::find($id);
        return view('backend.modules.sub_category.show', compact('sub_category'));
    }

    public function edit(Request $request, SubCategory $sub_category, $id){
        
        $sub_category = SubCategory::find($id);

        $categories = Category::pluck('name', 'id');

        return view('backend.modules.sub_category.edit', compact('sub_category', 'categories'));
    }

    public function update(Request $request, SubCategory $sub_category, $id){
        //  return $id;
        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:sub_categories,slug,'.$sub_category->id,
            'order_by' => 'required|numeric',
            'status' => 'required',
            'category_id' => 'required'
        ]);
        $sub_category_data['slug'] = Str::slug($request->input('slug'));

        $sub_category = SubCategory::findOrFail($id);
        $sub_category->name = $request->name;
        $sub_category->slug = $sub_category_data['slug'];
        $sub_category->order_by = $request->order_by;
        $sub_category->status = $request->status;
        $sub_category->category_id = $request->category_id;
        $sub_category->update();
  

        session()->flash('cls', 'success');
        session()->flash('msg', 'Sub Category Updated Successfully');

        return redirect()->route('sub-category.index');


    }

    public function destroy(SubCategory $sub_category, $id){
        
        $sub_category = SubCategory::where('id', $id)->first();
        $sub_category->delete();
       
        session()->flash('cls', 'error');
        session()->flash('msg', 'Sub Category Deleted Successfully');

        return redirect()->route('sub-category.index');
    }
}
