@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Users's Table
                </div> 
                <div class="tools">
                    <a href="/projects/create" class="btn btn-sm btn-primary"><i class="ti-plus"></i> Click
                        To Add New Project</a>
                </div>
            </div>
<div class="card-body">
  <div class="table-responsive">
      <div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          
                <table class="table table-bordered table-hover dataTable no-footer" id="dt-addrows" aria-describedby="dt-addrows_info">
          <thead class="thead-light">
              <tr>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">cheque number</th>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">amount</th>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">employee id</th>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">datetime</th>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 4: activate to sort column ascending" style="width: 150.609px;">actions</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($cheques as $cheque)      
                <tr>
                    <td>{{$cheque->cheque_number}}</td>
                    <td>{{$cheque->amount}}</td>
                    <td>{{$cheque->employee_id}}</td>
                    <td>{{$cheque->datetime}}</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-primary"><i class="fa fa-vcard-o"></i>
                            Show
                        </button>
                        <button class="btn btn-sm btn-warning"><i class="ti-write"></i>
                            Edit
                        </button>
                    </td>
                </tr>
            @endforeach
          </tbody>
      </table>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection