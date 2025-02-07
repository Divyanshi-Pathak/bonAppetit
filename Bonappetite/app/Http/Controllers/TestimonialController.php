<?php

namespace App\Http\Controllers;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
     public function testimonials()
    {
        $testimonial = Testimonials::all()->toArray();
        return view('admin.testimonials',compact('testimonial'));
    }
    public function add_new_testimonial()
    {
        return view('admin.add_new_testimonial');
    }
    public function save_testimonial(Request $request)
    {
         
        $testimonial = new Testimonials();
        
        $testimonial->name = $request->name;
        $testimonial->email = $request->email;
        $testimonial->message = $request->message;
        $testimonial->save();

        return redirect()->route('testimonials')->with('success', 'Added !!');
    }
    public function testimonial_delete($id)
    {
        $testimonial = Testimonials::find($id);
        $testimonial->delete();

        return redirect()->back()->with('danger', 'Deleted!!');
    }
    public function testimonial_edit($id)
    {
        $testimonial = Testimonials::find($id);
        return view('admin.testimonial_edit', compact('testimonial'));
    }
    public function update_testimonial(Request $request)
    {
         
        $testimonial = Testimonials::find($request->id);
        
        $testimonial->name = $request->name;
        $testimonial->email = $request->email;
        $testimonial->message = $request->message;
        $testimonial->save();

        return redirect()->route('testimonials')->with('success', 'Updated !!');
    }
}

