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
     <div class="col-md-3">
        <div class="info-box mb-3 p-0 shadow-none">
            <span class="info-box-icon bg-primary elevation-1 shadow-none"><i data-feather="users" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">
            
            <span class="text-xl info-box-number">4,410</span>
            <span class="info-box-text text-secondary pb-2">Population</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
     <div class="col-md-3">
        <div class="info-box mb-3 shadow-none p-0">
            <span class="info-box-icon bg-custom-violet elevation-1 shadow-none"><i data-feather="home" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">
            <span class="text-xl info-box-number">31,510</span>
            <span class="info-box-text text-secondary pb-2">Household</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
     <div class="col-md-3">
        <div class="info-box mb-3 p-0 shadow-none">
            <span class="info-box-icon bg-custom-orange elevation-1 shadow-none"><i data-feather="briefcase" class="ml-1 mr-0" width='92' height="92"></i></span>

            <div class="info-box-content">
            
            <span class="text-xl info-box-number">2,210</span>
            <span class="info-box-text text-secondary pb-2">Businesses</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
     <div class="col-md-3">
        <div class="info-box mb-3 p-0 shadow-none">
            <span class="info-box-icon bg-custom-olive elevation-1 shadow-none"><i data-feather="thumbs-up" class="ml-1 mr-0" width='92' height="92"></i></span>
            
            <div class="info-box-content">
            
            <span class="info-box-number text-xl">10</span>
            <span class="info-box-text text-secondary pb-2">Registered Voters</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-12">
                        <hr class="mt-3 mb-2">
                        <span class="h6">Female</span>
                        <span class="float-right h6 ">40%</span>
                        <hr class="mt-3 mb-2">
                        <span class="h6">Male</span>
                        <span class="float-right h6 ">60%</span>
                    </div>
    
                </div>
            </div> 
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
            data: [12, 19],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
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

