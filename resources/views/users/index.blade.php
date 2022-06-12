@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col">
      <div class="card mb-3">
          <div class="card-header">
              <div class="caption uppercase">
                  <i class="ti-briefcase"></i> Users Table
              </div> 
              <div class="tools">
                  <a href="/admin/users/create" class="btn btn-sm btn-primary"><i class="ti-plus"></i> Click
                      To Add New User</a>
              </div>
          </div>
          @if (count($users) > 0)
          <div class="card-body">
            <div class="table-responsive">
                <div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    
                          <table class="table table-bordered table-hover dataTable no-footer" id="dt-addrows" aria-describedby="dt-addrows_info">
                    <thead class="thead-light">
                        <tr>
                          <th class="sorting sorting_asc d-none" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 1: activate to sort column descending" aria-sort="ascending" style="width: 150.609px;">id</th>
                          <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">employee id</th>
                          <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">name</th>
                          <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">email</th>
                          <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">user type</th>
                          <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">status</th>
                          <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)      
                          <tr>
                              <td class="d-none">{{$user->id}}</td>
                              <td>{{$user->employee_id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>
                                  {{($user->user_type_id == 0) ? 'Administrator' : ''}}
                                  {{($user->user_type_id == 1) ? 'Fund Manager' : ''}}
                                  {{($user->user_type_id == 2) ? 'Transaction Recorder' : ''}}
                              </td>
                              <td>{{($user->status == 1) ? 'active' : 'inactive'}}</td>
                              <td class="text-center">
                                <a href="/admin/users/{{$user->id}}" class="btn btn-primary px-1"><i class="fa fa-vcard-o"></i></a>
                                <a href="/admin/users/{{$user->id}}/edit" class="btn btn-secondary"><i class="ti-write"></i></a>
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
          </div>
        </div>
          @endif
      </div>
  </div>
</div>


{{-- <script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script> --}}

@endsection