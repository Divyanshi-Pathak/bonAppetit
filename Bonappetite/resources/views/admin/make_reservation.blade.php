@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Make_Reservation') }}</div>

                <div class="card-body">
                    <form action="{{ route('save_reservation')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input  required type="text" class="form-control" id="name" name ="name" placeholder="name">
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Number</label>
                                    <input  required type="text" class="form-control" name="number" id="number" placeholder="mobile number">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                            <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input  required type="email" class="form-control" id="email" name ="email" placeholder="email">
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input  required type="date" class="form-control" name="date" id="date" placeholder="date">
                                </div>
                                <div class="mb-3">
                                    <label for="time" class="form-label">Time</label>
                                    <input  required type="time" class="form-control" name="time" id="time" placeholder="time">
                                </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="decoration" class="form-label">Decoration</label>
                            <textarea  required class="form-control" name ="decoration" id="decoration" rows="3"></textarea>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3">
                            <input  required type="checkbox" class="form-check-input" name="confirm" id="confirm" value="1">
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