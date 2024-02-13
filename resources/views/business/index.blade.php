@extends('layouts.app')
@section('styles')
@endsection
@section('content')
<div class="container">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="row col-12">
                    <div class="col-md-10">
                        <h3>Business</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ Route('business_form') }}" class="btn btn-xs btn-primary pull-right">Add Business</a>
                    </div>
                </div>
            </div>
            <table class="table dt-column-search table-responsive" id="business_table_id">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>View Branch</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var dt_filter_table = $('.dt-column-search');
    if (dt_filter_table.length) {
  
      var dt_filter = dt_filter_table.DataTable({
        ajax: '{{ url("/business/data")}}',
        processing: true,
        responsive: true,
        serverSide: true,
        columns: [{
            data: 'id',
            name: 'id',
            orderable: true,
            searchable: true
          },{
            data: 'name',
            name: 'name',
            orderable: true,
            searchable: true
          },{
            data: 'email',
            name: 'email',
            orderable: false,
            searchable: true
          },
          {
            data: 'phone_number',
            name: 'phone_number',
            orderable: false,
            searchable: true
          },
          {
            data: 'id',
            name: 'id',
            orderable: false,
            searchable: true
          }
        ],
        columnDefs: [{
          targets: 4,
          width: 100,
          responsivePriority: 4,
          render: function(data, type, full, meta) {
          var $Id = full['id'];
          var $viewUrl = "{{ url('/business/view')}}/" + $Id;
            return '<a href="' + $viewUrl + '" type="button" class="btn btn-icon btn-outline-primary waves-effect"><i class= "bi bi-eye">View</i></a> ';
          }
        }],
       
        dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        orderCellsTop: true,
        lengthMenu: [10, 25, 50, 75, 100],
        language: {
          paginate: {
            previous: '&nbsp;',
            next: '&nbsp;'
          }
        }
      });
    };
</script>
@endsection