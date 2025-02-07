<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $category = Category::all()->toArray();
        return view('admin.category',compact('category'));
    }
    
    public function add_new_category()
    {
        return view('admin.add_new_category');
    }
    public function save_category(Request $request)
    {
         
        $category = new Category();
        
        $category->category_name = $request->category_name;
        
        $category->save();

        return redirect()->route('category')->with('success', 'Added !!');
    }

    public function category_delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->back()->with('danger', 'Deleted!!');
    }
    public function category_edit($id)
    {
        $category = Category::find($id);
        return view('admin.category_edit', compact('category'));
    }

    public function update_category(Request $request)
    {
         
        $category = Category::find($request->id);
        
        $category->category_name = $request->category_name;
        
        $category->save();

        return redirect()->route('category')->with('success', 'Updated !!');
    }
    
}

