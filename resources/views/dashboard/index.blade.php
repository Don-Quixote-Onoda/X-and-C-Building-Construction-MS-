@extends('layouts.app')
@section('content')


    <!-- BOF Breadcrumb -->
    <div class="row">
        <div class="col">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="ti-home"></i> Dashboard</a></li>
            </ol>
        </div>
    </div>
    <!-- EOF Breadcrumb -->

    <!-- BOF MAIN-BODY -->
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="icon-left text-secondary"><i class="ti-bar-chart"></i></div>
                    <div class="number-right text-right">
                        <h6 class="bold text-secondary">Number of Projects</h6>
                        <h3 class="card-title text-warning bold">{{count($projects)}}</h3>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="icon-left text-secondary"><i class="ti-receipt"></i></div>
                    <div class="number-right text-right">
                        <h6 class="bold text-secondary">Ongoing Projects</h6>
                        <h3 class="card-title text-primary bold">{{count($ongoingProjects)}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="icon-left text-secondary"><i class="ti-wallet"></i></div>
                    <div class="number-right text-right">
                        <h6 class="bold text-secondary">Number of Clients</h6>
                        <h3 class="card-title text-bubblegum bold">{{count($clients)}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Year Comparison Chart -->
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body" id="year-comparison-chart"></div>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <!-- Employees Sales -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="caption">
                        <i class="ti-user"></i> Employees
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12 scrollbox-md" data-simplebar>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Employee Name</th>
                                            <th class="text-right">Position</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if (count($employees) > 0)
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td scope="row">
                                                    <a href="javascript:;">{{$employee->employee_name}}</a>
                                                </td>
                                                <td class="text-right">{{$employee->position}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Tasks -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="caption">
                        Projects
                    </div>
                </div>
                <div class="card-body">
                    <div class="row py-3">
                        <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                            <h2 class="text-success bold">{{count($inProgressProjects)}}</h2>
                            In-Progress
                        </div>
                        <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                            <h2 class="text-secondary bold">{{count($completeProjects)}}</h2>
                            Completed
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 scrollbox-md" data-simplebar>
                            <ul class="list-group list-group-flush">
                                @if (count($projects) > 0)
                                    @foreach ($projects as $project)
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-baseline">
                                            <div class="custom-checkbox custom-control">
                                                {{-- <input type="checkbox" class="custom-control-input" id="checkbox1" name="checkbox1"> --}}
                                                {{-- <label class="custom-control-label" for="checkbox1">&nbsp;</label> --}}
                                            </div>
                                            <div class="pl-4">
                                                <strong>{{$project->project_name}}</strong><br>{{$project->location}}
                                            </div>
                                            <div class="ml-auto text-right">
                                                <div class="btn-group btn-group-sm">
                                                    {!!Form::open(['action' => ['ProjectController@destroy', $project->id], 'method' => 'POST'])!!}
                                                        {{Form::hidden('_method', 'DELETE')}}
                                                        <button type="submit" class="btn btn-sm btn-success"><i class="ti-check"></i></button>
                                                    {!!Form::close()!!}
                                                    {{-- <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                @endif
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <!-- Product Sales Chart -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body" id="product-sales-chart"></div>
            </div>
        </div>
        <!-- Expenses Chart -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body" id="expenses-chart"></div>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <!-- Company Timeline -->
        {{-- <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="caption text-primary">
                        <i class="ti-panel"></i> Company Timeline
                    </div>
                </div>
                <div class="card-body scrollbox-md" data-simplebar>
                    <div class="timeline-wrapper">
                        <div class="timeline-item" data-date="04-22-2020">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quam nisi distinctio dolorum est tempora.</p>
                            <a href="javascript:;" class="btn btn-sm btn-primary">More Info</a>
                        </div>
                        <div class="timeline-item" data-date="04-16-2020">
                            <p>Completed dashboard layout and add all required widgets.</p>
                        </div>
                        <div class="timeline-item" data-date="04-14-2020">
                            <p>Added new page to UI Element category. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit officiis ut natus et minima expedita.</p>
                            <a href="javascript:;" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Recent Memebers -->
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="caption text-primary">
                        <i class="ti-user"></i> Recent Clients
                    </div>
                    {{-- <div class="tools">
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="ti-import" data-toggle="tooltip" title="Download List"></i></a>
                    </div> --}}
                </div>
                <div class="card-body">
                    @if (count($clients) > 0)
                    <div class="row">
                        @foreach ($clients as $client)
                        <div class="col-md-4  mb-md-0">
                            <div class="card mb-3">
                                <img src="assets/img/profile/profile-01.jpg" alt="" class="card-img-top">
                                <div class="card-body p-2 text-center">
                                    <h5 class="card-title">{{$client->client_name}}</h5>
                                    <p class="card-text font-size-12">{{$client->company_name}}</p>
                                    <p class="card-text font-size-12">{{$client->contact_details}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- EOF MAIN-BODY -->
@endsection