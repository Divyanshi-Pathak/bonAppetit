@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Add Testimonial') }}</div>

                <div class="card-body">
                    <form action="{{ route('save_testimonial')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input  required type="text" class="form-control" id="name" name ="name" placeholder="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input  required type="email" class="form-control" name="email" id="email" placeholder="email">
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row">
                        <div class="mb-3">
  <label for="message" class="form-label">Message</label>
  <textarea  required class="form-control" name ="message" id="message" rows="3"></textarea>
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