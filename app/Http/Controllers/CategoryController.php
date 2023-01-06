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
    public function show($id){
        
        return redirect()->route('category.show');
    }

    public function edit($id){
        
        return redirect()->route('category.edit');
    }

    public function destroy($id){
        
        return redirect()->route('category.destroy');
    }
}
