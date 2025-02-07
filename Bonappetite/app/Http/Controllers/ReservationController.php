<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservation()
    {
        $reservation = Reservation::all()->toArray();
        return view('admin.manage_reservation',compact('reservation'));
    } 
    public function make_reservation()
    {
        return view('admin.make_reservation');
    }
    public function save_reservation(Request $request)
    {
         
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->number = $request->number;
        $reservation->email = $request->email;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->decoration = $request->decoration;
        $reservation->confirm = $request->has('confirm');

        $reservation->save();

        return redirect()->route('reservation')->with('success', 'Added !!');
    }
    public function reservation_delete($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->back()->with('danger', 'Deleted!!');
    }
    public function reservation_edit($id)
    {
        $reservation = Reservation::find($id);
        return view('admin.reservation_edit', compact('reservation'));
    }

    public function update_reservation(Request $request)
    {
        $reservation = Reservation::find($request->id);
        $reservation->name = $request->name;
        $reservation->number = $request->number;
        $reservation->email = $request->email;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->decoration = $request->decoration;
        $reservation->confirm = $request->has('confirm');

        $reservation->save();

        return redirect()->route('reservation')->with('success', 'Updated !!');
        
    }
}
