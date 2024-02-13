@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-3">
                        <img class="card-img-top" src="{{url("images/business/logo").'/'.$business->logo_image_path}}" alt="Business logo" height="200px" width="200px">
                            <div class="card-body">
                                <h2 class="card-title">{{ $business->name }}</h2>
                                <p class="card-text">Phone Number : {{ $business->phone_number }}</p>
                                <p class="card-text"><small class="text-muted">Email : {{ $business->email}}</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <table class="table dt-column-search table-responsive" id="branch_table_id">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Branch Name</th>
                                    <th>View Branch</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>Pending...</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection