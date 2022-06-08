@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/cheques">Cheques</a></li>
            <li class="breadcrumb-item active">Cheques' Lists</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Cheques's Table
                </div> 
                <div class="tools">
                  <a href="/admin/disbursement-cheque-summary" class="btn btn-sm btn-danger mr-3"><i class="fa fa-file-pdf-o"></i> Generate PDF</a>

                    <a href="/admin/cheques/create" class="btn btn-sm btn-primary"><i class="ti-plus"></i> Click
                        To Add New Cheque</a>
                </div>
            </div>
        @if (count($cheques) > 0)
        <div class="card-body">
            <div class="table-responsive">
                <div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    
                          <table class="table table-bordered table-hover dataTable no-footer" id="dt-addrows" aria-describedby="dt-addrows_info">
                    <thead class="thead-light">
                        <tr>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">id</th>
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
                              <td>{{$cheque->id}}</td>
                              <td>{{$cheque->cheque_number}}</td>
                              <td>{{$cheque->amount}}</td>
                              <td>{{$cheque->employee->employee_name}}</td>
                              <td>{{$cheque->datetime}}</td>
                              <td class="text-center">
                                  <a href="/admin/cheques/{{$cheque->id}}" class="btn btn-primary px-1"><i class="fa fa-vcard-o"></i>Show</a>
                                  <a href="/admin/cheques/{{$cheque->id}}/edit" class="btn btn-secondary"><i class="ti-write"></i>Edit</a>
                              </td>
                          </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
          </div>            
        @endif
</div>
</div>
</div>
</div>
@endsection