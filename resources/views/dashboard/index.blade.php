@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    Sample Announcement
    <br>
    JOB HIRING!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="row">
    <div class="col-12">
        <h4 class="h6">Barangay Data</h4>
    </div>
</div>
<hr class="mt-0">
<div class="row">
     <div class="col-md-3">
        <div class="info-box mb-3 p-0 shadow-sm">
            <span class="info-box-icon bg-primary elevation-1 shadow-none"><i data-feather="users" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">

            <span class="text-xl info-box-number">{{$population}}</span>
            <span class="info-box-text text-secondary pb-2">Population</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box mb-3 shadow-sm p-0">
            <span class="info-box-icon bg-custom-violet elevation-1 shadow-none"><i data-feather="home" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">
            <span class="text-xl info-box-number">{{$households}}</span>
            <span class="info-box-text text-secondary pb-2">Household</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>

     <div class="col-md-3">
        <div class="info-box mb-3 p-0 shadow-sm">
            <span class="info-box-icon bg-custom-orange elevation-1 shadow-none"><i data-feather="briefcase" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">

            <span class="text-xl info-box-number">{{$businesses}}</span>
            <span class="info-box-text text-secondary pb-2">Businesses</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
     <div class="col-md-3">
        <div class="info-box mb-3 p-0 shadow-sm">
            <span class="info-box-icon bg-custom-olive elevation-1 shadow-none"><i data-feather="thumbs-up" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">

            <span class="info-box-number text-xl">{{$registered_voters}}</span>
            <span class="info-box-text text-secondary pb-2">Registered Voters</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col-12">
        <h4 class="h6">Charts</h4>
    </div>
</div>
<hr class="mt-0">
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="h6">Gender Chart</h5>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <canvas id="myChart" height="400" width="400"></canvas>
                    </div>
                    <div class="col-md-12">
                        <hr class="mt-3 mb-2">
                        <span class="h6">Female</span>
                        <span class="float-right h6 ">
                            {{ $female_percent }}% ({{$female_residents}})
                        </span>
                        <hr class="mt-3 mb-2">
                        <span class="h6">Male</span>
                        <span class="float-right h6 ">
                            {{ $male_percent }}% ({{$male_residents}})
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="h6">Age Chart</h5>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-9">
                        <canvas id="myChart2" width="400" height="200"></canvas>
                    </div>
                    <div class="col-md-3">
                        <span class="h6">Senior</span>
                        <span class="float-right h6 ">
                            {{ $female_percent }}% ({{$female_residents}})
                        </span>
                        <hr class="mt-3 mb-2">
                        <span class="h6">Adult</span>
                        <span class="float-right h6 ">
                            {{ $male_percent }}% ({{$male_residents}})
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col-12">
        <h4 class="h6">Idegency</h4>
    </div>
</div>
<hr class="mt-0">
<div class="row">
     <div class="col-md-3">
        <div class="info-box mb-3 p-0 shadow-none">
            <span class="info-box-icon bg-info elevation-1 shadow-none"><i data-feather="heart" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">

            <span class="text-xl info-box-number">{{$pwd}}</span>
            <span class="info-box-text text-secondary pb-2">Person with disability (PWD)</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box mb-3 shadow-none p-0">
            <span class="info-box-icon bg-secondary elevation-1 shadow-none"><i data-feather="smile" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">
            <span class="text-xl info-box-number">34</span>
            <span class="info-box-text text-secondary pb-2">Senior (Age 60+)</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box mb-3 p-0 shadow-none">
            <span class="info-box-icon bg-info elevation-1 shadow-none"><i data-feather="heart" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">

            <span class="text-xl info-box-number">{{$pwd}}</span>
            <span class="info-box-text text-secondary pb-2">Person with disability (PWD)</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box mb-3 shadow-none p-0">
            <span class="info-box-icon bg-secondary elevation-1 shadow-none"><i data-feather="smile" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">
            <span class="text-xl info-box-number">34</span>
            <span class="info-box-text text-secondary pb-2">Senior (Age 60+)</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
</div>


<div class="row mt-2">
    <div class="col-12">
        <h4 class="h6">Covid Monitoring</h4>
    </div>
</div>
<hr class="mt-0">
<div class="row">
    <div class="col-md-4">
        <div class="info-box mb-3 shadow-none p-0">
            <span class="info-box-icon bg-custom-danger elevation-1 shadow-none"><i data-feather="thermometer" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">
            <span class="text-xl info-box-number">{{$covid_total}}</span>
            <span class="info-box-text text-secondary pb-2">Covid Total Case</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box mb-3 shadow-none p-0">
            <span class="info-box-icon bg-custom-olive elevation-1 shadow-none"><i data-feather="user-check" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">
            <span class="text-xl info-box-number">{{$covid_recovered}}</span>
            <span class="info-box-text text-secondary pb-2">Covid Recovered Patients</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box mb-3 shadow-none p-0">
            <span class="info-box-icon bg-custom-orange elevation-1 shadow-none"><i data-feather="monitor" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">
            <span class="text-xl info-box-number">{{$covid_pum}}</span>
            <span class="info-box-text text-secondary pb-2">Patients Under Monitor (PUM)</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            console.log("ready!");
        });

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Male', 'Female'],
                datasets: [{
                    label: '# of Votes',
                    data: [{{$male_residents}}, {{$female_residents}}],
                    backgroundColor: [
                        'rgba(67,127,254, 0.5)',
                        'rgba(234,112,99, 0.5)',

                    ],
                    borderColor: [
                        'rgb(67,127,254)',
                        'rgb(234,112,99)',

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Male', 'Female'],
                datasets: [{
                    label: '# of Votes',
                    data: [{{$male_residents}}, {{$female_residents}}],
                    backgroundColor: [
                        'rgba(67,127,254, 0.5)',
                        'rgba(234,112,99, 0.5)',

                    ],
                    borderColor: [
                        'rgb(67,127,254)',
                        'rgb(234,112,99)',

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection

