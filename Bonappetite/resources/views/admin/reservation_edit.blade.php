@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Edit_Reservation') }}</div>

                <div class="card-body">
                    <form action="{{ route('update_reservation')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$reservation['id']}}">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input   type="text" class="form-control" id="name" name ="name" value ="{{$reservation['name']}}">
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Number</label>
                                    <input   type="text" class="form-control" name="number" id="number" value ="{{$reservation['number']}}">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                            <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input   type="email" class="form-control" id="email" name ="email" value ="{{$reservation['email']}}">
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input   type="date" class="form-control" name="date" id="date" value="{{ $reservation['date']}}">
                                </div>
                                <div class="mb-3">
                                    <label for="time" class="form-label">Time</label>
                                    <input   type="time" class="form-control" name="time" id="time" value ="{{$reservation['time']}}">
                                </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="decoration" class="form-label">Decoration</label>
                            <textarea   class="form-control" name ="decoration" id="decoration" rows="3">"{{$reservation['number']}}"</textarea>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3">
                            @if($reservation['confirm'] == 0)
                            <input   type="checkbox" class="form-check-input" name="confirm" id="confirm" value="0">   
                            @else
                            <input   type="checkbox" class="form-check-input" name="confirm" id="confirm" value="1">
                            @endif
                           <label class="form-check-label" for="confirm">Confirm</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection