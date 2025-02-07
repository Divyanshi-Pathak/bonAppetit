<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::all()->toArray();
        return view('admin.manage_blogs',compact('blogs'));
    }
    public function add_new_blog()
    {
        return view('admin.add_new_blog');
    }
    public function save_blog(Request $request)
    {
        $blog = new Blog();

        if($request->hasfile('image')) //check if u added image or not
        {
            $file = $request->file('image'); //recieve your file in variable
            $ext = $file->getClientOriginalExtension(); //extract its extension
            $filename = time(). '.'. $ext; // rename the file with current time and extension
            $file->move('images', $filename); // now move this file to images folder of the public folder
            $blog->image = $filename; // save the new file name in db
        }
        else {
           
            $blog->image = ""; // if no image is uploaded then db save nothing.
        }    
        $blog->title = $request->title;
        $blog->author = $request->author;
     
        $blog->content = $request->content;
        
        $blog->save();

        return redirect()->route('blog')->with('success', 'Added !!');
    }
    public function blog_delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->back()->with('danger', 'Deleted!!');
    }
    public function blog_edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog_edit', compact('blog'));
    }
    public function update_blog(Request $request)
    {
        $blog = Blog::find($request->id);
        if($request->image != "") //check if u have updated the image or not, if not then
        {
            $previousImagePath = $blog->image; //this command save the same again.

            // This is checking if u have updated a new one then Delete the previous image file from the folder
            if (file_exists(public_path('images/'.$previousImagePath))) {
                unlink(public_path('images/'.$previousImagePath));
            }

            $file = $request->file('image'); //catching a file
            $ext = $file->getClientOriginalExtension(); // extracting extention of the file
            $filename = time(). '.'. $ext; // creating a new name for file current time then . and then extention
            $file->move('images', $filename);// move the file to the Image folder 
            $blog->image = $filename; // save the name in db
        }
        else {
           
            $blog->image = Blog::where('id', $request->id)->value('image');
        }
        // Save the form data to the database using the "Blog" model
      

        
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->content = $request->content;
        
        $blog->save();

        return redirect()->route('blog')->with('success', 'Updated !!');
        
    }
}
