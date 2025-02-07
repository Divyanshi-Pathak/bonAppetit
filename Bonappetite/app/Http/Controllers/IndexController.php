<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Item;
use App\Models\Blog;
use App\Models\Services;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $category = Category::all()->toArray();
        return view('index', compact('category'));
    }

    public function about()
    {
        $category = Category::all()->toArray();
        return view('about', compact('category'));
    }

    public function contact()
    {
        $category = Category::all()->toArray();
        return view('contact', compact('category'));
    }

    public function blogs()
    {
        $category = Category::all()->toArray();
        $blogs = Blog::all()->toArray();
        return view('blog', compact('category','blogs'));
    }
    public function services()
    {
        $category = Category::all()->toArray();
        $service = Services::all()->toArray();
        return view('services', compact('category','service'));
    }
   public function menu($id)
   {
       $category_name = Category::where('id', $id)->value('category_name'); 
       $items = Item::where('category', $category_name)->get();
       $category = Category::all()->toArray();
       return view('menu', compact('category', 'category_name', 'items'));
   }
    public function reservation()
    {
        $category = Category::all()->toArray();
        return view('reservation', compact('category'));
    }

}
