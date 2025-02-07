<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function items()
    {
        $items = Item::all()->toArray();
        return view('admin.items',compact('items'));
    }

    public function add_new_item()
    {
        $category = Category::all()->toArray();
        return view('admin.add_new_item', compact('category'));
    }

    public function save_item(Request $request)
    {
        $item = new Item();
 
        if($request->hasfile('image')) //check if u added image or not
        {
            $file = $request->file('image'); //recieve your file in variable
            $ext = $file->getClientOriginalExtension(); //extract its extension
            $filename = time(). '.'. $ext; // rename the file with current time and extension
            $file->move('images', $filename); // now move this file to images folder of the public folder
            $item->image = $filename; // save the new file name in db
        }
        else {
           
            $item->image = ""; // if no image is uploaded then db save nothing.
        }    

        $item->item_name = $request->item_name;
        $item->category = $request->category;
        $item->featured = $request->has('featured');
        $item->ingredients = $request->ingredients;
        $item->price = $request->price;
        $item->save();

        return redirect()->route('items')->with('success', 'Added !!');
    }
    
    public function items_delete($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect()->back()->with('danger', 'Deleted!!');
    }

    public function items_edit($id)
    {
        $item = Item::find($id);
        $category = Category::all()->toArray();
        return view('admin.item_edit', compact('item', 'category'));
    }

    public function update_item(Request $request)
    {

        $item = Item::find($request->id);


        if($request->image != "") //check if u have updated the image or not, if not then
        {
            $previousImagePath = $item->image; //this command save the same again.

            // This is checking if u have updated a new one then Delete the previous image file from the folder
            if (file_exists(public_path('images/'.$previousImagePath))) {
                unlink(public_path('images/'.$previousImagePath));
            }
            $file = $request->file('image'); //catching a file
            $ext = $file->getClientOriginalExtension(); // extracting extention of the file
            $filename = time(). '.'. $ext; // creating a new name for file current time then . and then extention
            $file->move('images', $filename);// move the file to the Image folder 
            $item->image = $filename; // save the name in db
        }
        else {
           
            $item->image = Item::where('id', $request->id)->value('image');
        }
        $item->item_name = $request->item_name;
        $item->category = $request->category;
        $item->featured = $request->has('featured');
        $item->ingredients = $request->ingredients;
        $item->price = $request->price;
        $item->save();
        return redirect()->route('items')->with('success', 'Updated !!');
    }
}
