<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data['categories'] = Category::all();
        return view('backend.superadmin.category')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $data['name'] = $request->name;
        $data['status'] = 1;
        Category::create($data);
        return redirect()->route('categories.index')->with('success','Category added successfully');
    }

    public function update(Request $request,Category $category){
        $request->validate([
            'name' => 'required|unique:categories|max:255'.$category->id,
        ]);
        $data['name'] = $request->name;
        $data['status'] = 1;
        Category::create($data);
        return redirect()->route('categories.index')->with('success','Category added successfully');
    }
}
