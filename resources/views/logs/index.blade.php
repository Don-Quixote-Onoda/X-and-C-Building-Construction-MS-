@extends('layouts.app')
@section('content')

@if (count($logs) > 0)
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Logs Table
                </div> 
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        
                              <table class="table table-bordered table-hover dataTable no-footer" id="dt-addrows" aria-describedby="dt-addrows_info">
                        <thead class="thead-light">
                            <tr>
                              <th class="sorting sorting_desc d-none" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="id: activate to sort column ascending" style="width: 107.594px;" aria-sort="descending">id</th>
                              <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">user_id</th>
                              <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">log_type</th>
                              <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">affected table</th>
                              <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">description</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($logs as $log)      
                              <tr>
                                  <td class="d-none">{{$log->id}}</td>
                                  <td>
                                      {{($log->user_id == 0) ? 'Administrator' : ''}}
                                      {{($log->user_id == 1) ? 'Fund Manager' : ''}}
                                      {{($log->user_id == 2) ? 'Transaction Recorder' : ''}}
                                    
                                    </td>
                                  <td>
                                    {{($log->log_type == 0) ? 'User Access' : ''}}
                                    {{($log->log_type == 1) ? 'New Record':''}}
                                    {{($log->log_type == 2) ? 'Edit Record':''}}
                                    </td>
                                  <td>{{$log->affected_table}}</td>
                                  <td>{{$log->description}}</td>
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
@endif

@endsection