<link rel="shortcut icon" type="image/png" href="/img/rtmlogo.png"/>
@extends('admin.layouts.app')
@section('script')
    @include("admin.rtm_app.test_scr")
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
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><img src="/img/1.png" alt="Second slide" height="60px" width="60px"></span>

            <div class="info-box-content"> <div class="stat">
            <span class="stat-count" >4200</span>
            <p class="stat-detail"> LINES OF WEBSITES</p>
        </div>
        </div>
        </div>
    </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><img src="/img/2.png" alt="Second slide" height="60px" width="60px"></span>

                <div class="info-box-content"> <div class="stat">
                        <span class="stat-count">420</span>
                        <p class="stat-detail"> PAGES WEBSITES </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><img src="/img/3.png" alt="Second slide" height="60px" width="60px"></span>

                <div class="info-box-content"> <div class="stat">
                        <span class="stat-count">42</span>
                        <p class="stat-detail">NO OF WEBSITES</p>
                    </div>
                </div>
            </div>
        </div>
</div>
<!--
 <div class="row">
<!--     <img src="/img/1.png" alt="Second slide" height="60px" width="60px">

            <div class="col-md-12">
                <div class="box box-solid">
                    {{--<div class="box-header with-border">
                      <h3 class="box-title">Carousel</h3>
                    </div>--}}
                    <!-- /.box-header
                    <div class="box-body">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="/img/last.jpg" alt="First slide">



                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/img/last22.png" alt="Second slide">

                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/img/last1.jpg" alt="Third slide">

                                    <div class="carousel-caption">

                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                            </a>
                        </div>
                    </div>
                    <!-- /.box-body -
                </div>
                <!-- /.box

            </div>
     <div>



      </div>
-->
    <div class="container">
        <div class="row">


            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>


                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="/img/m1.jpg" alt="visualy disabled people" height="120" width="1500">
                        <div class="carousel-caption">

                        </div>
                    </div>


                    <div class="item">
                        <img src="/img/m4.jpg"alt="Hearing imapairment" height="120" width="1500">
                        <div class="carousel-caption">


                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/m2.jpg" alt="visualy disabled people" height="120" width="1500">
                        <div class="carousel-caption">


                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>



    </div>

    <div class="row">
    <div class="col-xs-12">
        <br>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Our Processed URLs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th>S.No</th>
                        <th>Url</th>
                        <th>Progress</th>
                        <th>Accessibility</th>
                        <th>View-Report</th>
                    </tr>
                    @foreach($url as $ur)

                    <tr>
                        <td>{{$c++}}</td>
                        <td>{{$ur['domain']}}</td>
                        <td>
                        <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar  @if($ur['accessibility'] > '65') progress-bar-success @else progress-bar-danger @endif" style="width: {{$ur['accessibility']}}%"></div>
                        </div>
                        </td>
                        <td>
                            <span class="badge @if($ur['accessibility'] > '65') bg-green @else bg-red @endif">{{$ur['accessibility']}} %</span>
                        </td>
                        <td>
                            <a href="{{route('browse::detail',['url'=>$ur['domain']])}}" type="button" class="btn btn-block btn-primary btn-flat">View Report &nbsp;&nbsp; <span class="glyphicon glyphicon-eye-open"></span></a>
                        </td>

                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>



@endsection

