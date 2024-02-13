@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="row col-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form method="POST" id="business_store_form" action="{{ route('business_store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row col-12">
                            <div class="col-md-6">
                                <div class="form-control">
                                    <label for="business_name_id" class="form-label">Business Name</label>
                                    <input type="text" class="form-control" name= "name" id="business_name_id" placeholder="Enter the Business name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-control">
                                    <label for="email_address_id"  class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email_address_id" placeholder="amar@bms.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-control">
                                    <label for="phone_number_id" class="form-label">Phone Number</label>
                                    <input type="int" class="form-control"  id="phone_number_id" name="phone_number" placeholder="1234567890">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-control">
                                    <label for="logo_id" class="form-label">Add your Business Logo</label>
                                    <input type="file" class="form-control"  id="logo_id" name="logo">
                                </div>
                            </div>
                            <div class="col-md-2 mt-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection