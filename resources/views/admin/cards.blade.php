
    <link rel="stylesheet" href="{{asset('semantic/semantic.css') }}">
    <link rel="stylesheet" href="{{asset('css/h1.css') }}">

@extends('admin.layouts.app')
@section('script')
    @include("admin.rtm_app.rtm_scripts")
@endsection
@section('htmlheader_title')
    Grievance
@endsection
@section('contentheader')

    <h1>
        @yield('contentheader_title', 'Grievance Menu')
        <small>@yield('contentheader_description')</small>
    </h1>
@endsection
@section('main-content')
<div class="row">
    <div class="col-md-3">

        <a href ="www.mlvtec.ac.in">www.mlvtec.ac.in</a>
        </div>

    <div class="col-md-3">
    </div>
<div class="col-md-3">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Accessible',     11],
                ['Not Accessible',5],

            ]);

            var options = {
                title: 'Aceessibilty',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>

    <div id="donutchart" style="width: 200px; height: 150px;"></div>
</div>
    </div>


    <div class="row">
<div class="col-md-3">
            <div class="ui cards">
                <div class="card">
                    <div class="content">
<center><b>
                        <div class="header">
                            Image tag
                        </div>
                        <div class="meta">

                        </div>
                        <div class="description">
                            Total 7
                        </div>
        </b>
</center>
                        <div class="extra content">
                            <div class="ui two buttons">
                                <div class="ui basic green  button">4</div>
                                <div class="ui basic red button">3</div>
                            </div>
                        </div>



   </div>
</div>
                </div>
    </div>
        <div class="col-md-3">
            <div class="ui cards">
                <div class="card">
                    <div class="content">

                        <div class="header">
                            Image tag
                        </div>
                        <div class="meta">

                        </div>
                        <div class="description">
                            Total 7
                        </div>

                        <div class="extra content">
                            <div class="ui two buttons">
                                <div class="ui basic green  button">4</div>
                                <div class="ui basic red button">3</div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ui cards">
                <div class="card">
                    <div class="content">

                        <div class="header">
                            Image tag
                        </div>
                        <div class="meta">

                        </div>
                        <div class="description">
                            Total 7
                        </div>

                        <div class="extra content">
                            <div class="ui two buttons">
                                <div class="ui basic green  button">4</div>
                                <div class="ui basic red button">3</div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ui cards">
                <div class="card">
                    <div class="content">

                        <div class="header">
                            Image tag
                        </div>
                        <div class="meta">

                        </div>
                        <div class="description">
                            Total 7
                        </div>

                        <div class="extra content">
                            <div class="ui two buttons">
                                <div class="ui basic green  button">4</div>
                                <div class="ui basic red button">3</div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
    <link rel="stylesheet" href="{{asset('semantic/semantic.js') }}">
<link rel="stylesheet" href="{{asset('js/jquery.circliful.min.js')}}">
    <link rel="stylesheet" href="{{asset('js/jquery.circliful.js')}}">