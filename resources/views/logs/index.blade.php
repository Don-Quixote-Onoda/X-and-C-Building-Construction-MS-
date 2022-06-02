@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col">
      <div class="card mb-3">
          <div class="card-header">
              <div class="caption uppercase">
                  <i class="ti-briefcase"></i> Logs's Table
              </div> 
              <div class="tools">
                  <a href="/admin/projectInvoice" class="btn btn-sm btn-danger"><i class="fa fa-file-pdf-o""></i> Generate PDF</a>
              </div>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                      
                            <table class="table table-bordered table-hover dataTable no-footer" id="dt-addrows" aria-describedby="dt-addrows_info">
                      <thead class="thead-light">
                          <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 1: activate to sort column descending" aria-sort="ascending" style="width: 150.609px;">id</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">user_id</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">log_type</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">affected table</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">description</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 4: activate to sort column ascending" style="width: 150.609px;">actions</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($logs as $log)      
                            <tr>
                                <td>{{$log->id}}</td>
                                <td>{{$log->user_id}}</td>
                                <td>{{$log->log_type}}</td>
                                <td>{{$log->affected_table}}</td>
                                <td>{{$log->description}}</td>
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