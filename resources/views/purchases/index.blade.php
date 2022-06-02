@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/purchases">Purchase</a></li>
            <li class="breadcrumb-item active">Purchase Lists</li>
        </ol>
    </div>
</div>
<div class="card-body">
  <div class="table-responsive">
      <div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          
    <table class="table table-bordered table-hover dataTable no-footer" id="dt-addrows" aria-describedby="dt-addrows_info">
          <thead class="thead-light">
              <tr>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">or number</th>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">transaction date</th>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">cheque id</th>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">project id</th>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">amount</th>
                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 4: activate to sort column ascending" style="width: 150.609px;">actions</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($purchases as $purchase)      
                <tr>
                    <td>{{$purchase->OR_Number}}</td>
                    <td>{{$purchase->transaction_date}}</td>
                    <td>{{$purchase->cheque->cheque_number}}</td>
                    <td>{{$purchase->project->project_name}}</td>
                    <td>{{$purchase->amount}}</td>
                    <td class="text-center">
                        <a href="/admin/purchases/{{$purchase->id}}" class="btn btn-primary px-1"><i class="fa fa-vcard-o"></i>Show</a>
                        <a href="/admin/purchases/{{$purchase->id}}/edit" class="btn btn-secondary"><i class="ti-write"></i>Edit</a>
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