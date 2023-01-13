<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{

    public function index(){

        $tags = Tag::orderBy('order_by')->get();

        return view('backend.modules.tag.index', compact('tags'));
    }



    public function create(){ 

        return view('backend.modules.tag.create');

    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:tags',
            'order_by' => 'required|numeric',
            'status' => 'required'
        ]);

        $tag_data = $request->all();
        $tag_data['slug'] = Str::slug($request->input('slug'));

        Tag::create($tag_data);

        session()->flash('cls', 'success');

        session()->flash('msg', 'Tag Created Successfully');

        return redirect()->route('tag.index');
    }

    public function show(Request $request, $id){
        $tag = Tag::find($id);
        return view('backend.modules.tag.show', compact('tag'));
    }

    public function edit(Request $request, $id){
        
        $tag = Tag::find($id);
        return view('backend.modules.tag.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag, $id){
        //  return $id;
        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:tags,slug,'.$tag->id,
            'order_by' => 'required|numeric',
            'status' => 'required'
        ]);
        $tag_data['slug']=Str::slug($request->input('slug'));

        $tag = Tag::findOrFail($id);
        $tag->name = $request->name;
        $tag->slug = $tag_data['slug'];
        $tag->order_by = $request->order_by;
        $tag->status = $request->status;
        $tag->update();
  

        session()->flash('cls', 'success');
        session()->flash('msg', 'Tag Updated Successfully');

        return redirect()->route('tag.index');


    }

    public function destroy(Tag $tag, $id){
        
        $tag = Tag::find($id);
        $tag->delete();
       
        session()->flash('cls', 'error');
        session()->flash('msg', 'Tag Deleted Successfully');

        return redirect()->route('tag.index');
    }
}
