<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        $service = Services::all()->toArray();
        return view('admin.manage_services',compact('service'));
    }

    public function add_new_service()
    {
        return view('admin.add_new_service');
    }
    public function save_service(Request $request)
    {
        $service = new Services();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('service')->with('success', 'Added !!');
    }
    public function service_delete($id)
    {
        $service = Services::find($id);
        $service->delete();

        return redirect()->back()->with('danger', 'Deleted!!');
    }
    public function service_edit($id)
    {
        $service = Services::find($id);
        return view('admin.service_edit', compact('service'));
    }
    public function update_service(Request $request)
    {
        $service = Services::find($request->id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('service')->with('success', 'Updated !!');
        
    }

}

