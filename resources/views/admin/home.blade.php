@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
    <h1 class="text-center mt-3">Dashboard</h1>
    <div class="text-center">
        <div class="text-muted small font-weight-bold">Summary</div>
        <a href="{{route('admin.series')}}" class="btn btn-lg btn-outline-dark shadow-sm mt-2">
            Active Series <span class="badge badge-light">{{$series->where('deleted_at', null)->count()}}</span>
        </a>
        <a href="{{route('admin.episodes')}}" class="btn btn-lg btn-outline-dark shadow-sm mt-2">
            Active Episodes <span class="badge badge-light">{{$episodes->where('deleted_at', null)->count()}}</span>
        </a>
        <a href="{{route('admin.quizzes')}}" class="btn btn-lg btn-outline-dark shadow-sm mt-2">
            Active Quizzes <span class="badge badge-light">{{$quizzes->where('deleted_at', null)->count()}}</span>
        </a>
        <a href="{{route('transaction.pending')}}" class="btn btn-lg btn-outline-dark shadow-sm mt-2">
            Pending Transactions <span class="badge badge-light">{{$transactions->where('status_transaksi', 1)->count()}}</span>
        </a>
        <a href="{{route('member.list')}}" class="btn btn-lg btn-outline-dark shadow-sm mt-2">
            Active Member <span class="badge badge-light">{{$member->where('banned', 0)->count()}}</span>
        </a>
        <a href="{{route('blog.list')}}" class="btn btn-lg btn-outline-dark shadow-sm mt-2">
            Active Post <span class="badge badge-light">{{$posts->where('status_aktif', 1)->count()}}</span>
        </a>
    </div>
    <div class="chart-container mt-4" style="position: relative; height:40vh; width:80vw">
        <canvas id="chart"></canvas>
        <div class="text-right pb-5">
            <h5>Total Income: {{number_format( $total , 0 , '.' , ',' )}}</h5>
        </div>
    </div>

@endsection
@section('script')
<script>
    var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var ctx = document.getElementById('chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: MONTHS,
            datasets: [{
                label: 'Transactions',
                data: [
                {{number_format( $jan , 0 , '.' , ',' )}},
                {{$feb}},
                {{$mar}},
                {{$apr}},
                {{$may}},
                {{$june}},
                {{$july}},
                {{$aug}},
                {{$sep}},
                {{$oct}},
                {{$nov}},
                {{$des}},
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: "Transactions This Year"
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Transactions'
                    },
                    ticks:{
                        callback: function(value, index, values) {
                            if(parseInt(value) >= 1000){
                                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            } else {
                                return value;
                            }
                        }
                    }
                }]
            }
        }
    });
</script>
@endsection
