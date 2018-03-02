<link rel="shortcut icon" type="image/png" href="/img/rtmlogo.png"/>
@extends('admin.layouts.app')
@section('script')
    @include("admin.rtm_app.rtm_scripts")
@endsection
@section('htmlheader_title')
    Accessibility
@endsection
@section('contentheader')
    <h1>
        @yield('contentheader_title', 'Grievance Menu')
        <small>@yield('contentheader_description')</small>
    </h1>
@endsection
@section('main-content')


{{--    <div class="row">
        <div class="col-md-3">
            <a href src="url">URL of the website</a>
        </div>
        <div class="col-md-3">
            <br>
            Phantom js screenshot
        </div>
        <div class="col-md-2">
            <div class="cir" style="position: relative;top:2px;left: 2px;text-align: center;width: 96px;height: 96px;border-radius: 100%;background-color: rgb(255, 255, 255);">
                <span class="perc" style="display:block;width:100px;height: 100px;line-height: 100px;vertical-align: middle;font-size: 15px;font-weight: normal;color: rgb(92, 147, 200);">75%</span></div>
        </div>
        <div class="col-md-2">
            <img src="img/varified.jpg" alt="Accessible" style="width:120px;height:120px;">
        </div>
        <div class="col-md-2">
            <br>
            <br>
            <button type="button" class="btn btn-success">Download Report</button>
        </div>
    </div>--}}


<div class="ui cards">



    {{--1--}}
    <div class="card" style="width:234px;height:380px" >
        <div class="content">
            <div class="header">

            </div>
            <div class="box box-widget widget-user">

            <div class="meta">
           <h3>     {{$data['label']['type']}}</h3>

            </div>


            <div class="box box-danger">
                <canvas id="pieChartlabel" style="height:250px"></canvas>
            </div>

                <div class="ui two buttons">
                    <div class="ui basic green button">Total: {{$data['label']['total_input']}}</div>
                    <div class="ui basic red button">Error: {{$data['label']['total_input']-$data['label']['total_label']}}</div>
                </div>
                Ex:
                <br>
                <span style="color:brown"><span style="color:mediumblue">&lt;</span>label<span style="color:red"> for<span style="color:mediumblue">="male"</span></span><span style="color:mediumblue">&gt;</span></span>Male<span style="color:brown"><span style="color:mediumblue">&lt;</span>/label<span style="color:mediumblue">&gt;
          </span> </span>
                <br>
                <br>
                <br>
            <hr>

                There must be label tag associated with each Input Tag in Html
            </div>


        </div>

    </div>
    {{--2--}}

    <div class="card" style="width:234px;height:380px" >
        <div class="content">
            <div class="header">

            </div>
            <div class="meta">
               <h3>{{$data['link']['type']}}</h3>
            </div>
            <div class="box box-danger">
                <canvas id="link" style="height:250px"></canvas>
            </div>
            <div class="ui two buttons">
                <div class="ui basic green button">Total: {{$data['link']['total_links']}}</div>
                <div class="ui basic red button">Error: {{$data['link']['total_links']-$data['link']['total_alt']}}</div>
            </div>
            Ex:
            <br>
            <span class="cm-m-xml cm-tag cm-bracket" style="color:brown">&lt;</span><span class="cm-m-xml cm-tag" style="color:mediumblue">a&nbsp;</span><span class="cm-m-xml"> </span><span class="cm-m-xml cm-attribute" style="color:brown">href</span><span class="cm-m-xml">=</span><span class="cm-m-xml cm-string" style="color:mediumblue">"https://xyz.com"</span><span class="cm-m-xml cm-tag cm-bracket">&gt;</span><span class="cm-m-xml" style="color:#FBBD08">Visit our Site</span><span class="cm-m-xml cm-tag cm-bracket">&lt;/</span><span class="cm-m-xml cm-tag">a</span>

            <hr>
           There must be meaningful Links, Avoid use of "Click here" & "More"
        </div>
    </div>
    {{--3--}}
    <div class="card" style="width:234px;height:380px" >
        <div class="content">
            <div class="header">
            </div>
            <div class="meta">
               <h3>{{$data['image']['type']}}</h3>
            </div>
            <div class="box box-danger">
                <canvas id="image" style="height:250px"></canvas>
            </div>
            <div class="ui two buttons">
                <div class="ui basic green button">Total: {{$data['image']['total']}}</div>
                <div class="ui basic red button">Error: {{$data['image']['total'] - $data['image']['alt_tag']}}</div>
            </div>
            Ex:
            <br>
            <span style="color:brown"><span style="color:mediumblue">&lt;</span>img<span style="color:red"> src<span style="color:mediumblue">="pic_mountain.jpg"</span>
alt<span style="color:mediumblue">="Mountain View"</span> style<span style="color:mediumblue">="width:304px;height:228px;"</span></span><span style="color:mediumblue">&gt;</span></span>
        <hr>
            There must be alt="" attribute available in each Image Tag in Html
        </div>
    </div>
    {{--4--}}

    {{--5--}}

    {{--6--}}
    <div class="card" style="width:234px;height:380px" >
        <div class="content">
            <div class="header">

            </div>
            <div class="meta">
               <h3>{{$data['aria']['type']}}</h3>
            </div>
            <div class="box box-danger">
                <canvas id="aria" style="height:250px"></canvas>
            </div>
            <div class="ui two buttons">
                <div class="ui basic green button">Total: {{$data['aria']['aria_wtg']}}</div>

            </div>
            Ex:
            <br>
                 <span class="hljs-tag">&lt;<span class="hljs-name" style="color:brown">button</span> <span class="hljs-attr" style="color:brown">role</span>=<span class="hljs-string" style="color:mediumblue">"heading"</span>&gt;</span>search<span class="hljs-tag">&lt;/<span class="hljs-name" style="color:brown">button</span>&gt;</span>

            <hr>
          Aria  must be used In html to clearify the role="" of the an entity
        </div>
    </div>
    {{--7--}}

    {{--8--}}
    <div class="card" style="width:234px;height:380px" >
        <div class="content">
            <div class="header">

            </div>
            <div class="meta">
              <h3>{{$data['blink']['type']}}</h3>
            </div>
            <div class="box box-danger">
                <canvas id="blink" style="height:250px"></canvas>
            </div>
            <div class="ui two buttons">
                <div class="ui basic green button">Total: {{$data['link']['total_alt']}}</div>
                <div class="ui basic red button">Error: {{$data['link']['total_alt']}}</div>
            </div>
            Ex:
            <br>
            <span class="hljs-tag">&lt;<span class="hljs-name" style="color:brown">blink</span> <span class="hljs-attr" style="color:brown"></span>=<span class="hljs-string" style="color:mediumblue"></span>&gt;</span>This will blink in supported browser versions<span class="hljs-tag">&lt;/<span class="hljs-name" style="color:brown">blink</span>&gt;</span>
<br>
            <br>
            <hr>
            Avoid the use of blink in Html
        </div>
    </div>
    {{--9--}}

    {{--10--}}
    <div class="card" style="width:234px;height:380px" >
        <div class="content">
            <div class="header">

            </div>
            <div class="meta">
              <h3>{{$data['long']['type']}}</h3>
            </div>
            <div class="box box-danger">
                <canvas id="long" style="height:250px"></canvas>
            </div>
            <div class="ui two buttons">
                <div class="ui basic green button">Total: {{$data['long']['total_images']}}</div>
                <div class="ui basic red button">Error: {{$data['long']['total_images']-$data['long']['total_long_desc']}}</div>
            </div>
            Ex:
            <br>
            <span style="color:brown"><span style="color:mediumblue">&lt;</span>img<span style="color:red"> src<span style="color:mediumblue">=""</span> alt<span style="color:mediumblue">="xyz.com"</span> width<span style="color:mediumblue">="100"</span> height<span style="color:mediumblue">="132"</span> longdesc<span style="color:mediumblue">="xyz.txt"</span></span><span style="color:mediumblue">&gt;</span></span>
        <hr>
            longdesc="" attribute must be used for some Tags in Html
        </div>
    </div>
    {{--11--}}
    <div class="card" style="width:234px;height:380px" >
        <div class="content">
            <div class="header">

            </div>
            <div class="meta">
               <h3>{{$data['lang']['type']}}</h3>
            </div>
            <div class="box box-danger">
                <canvas id="lang" style="height:250px"></canvas>
            </div>
            <div class="ui two buttons">
                <div class="ui basic green button">{{$data['lang']['lang_existance']}}</div>
                <div class="ui basic red button">Decline</div>
            </div>
            Ex:
            <br>
            <span style="color:brown"><span style="color:mediumblue">&lt;</span>html<span style="color:red"> xmlns<span style="color:mediumblue">="http://www.xyz.org"</span> lang<span style="color:mediumblue">="en"</span> xml:lang<span style="color:mediumblue">="en"</span></span><span style="color:mediumblue">&gt;</span></span>
            <hr>
            lang="" attribute must be used in Html
        </div>
    </div>
    {{--12--}}
    <div class="card" style="width:234px;height:380px" >
        <div class="content">
            <div class="header">

            </div>
            <div class="meta">
              <h3>{{$data['video']['type']}}</h3>
            </div>
            <div class="box box-danger">
                <canvas id="video" style="height:250px"></canvas>
            </div>
            <div class="ui two buttons">
                <div class="ui basic green button">Total: {{$data['video']['total_videos']}}</div>
                <div class="ui basic red button">Error: {{$data['video']['total_videos']-$data['video']['total_transcripts']}}</div>
            </div>
            Ex:
            <br>

                <span style="color:brown"><span style="color:mediumblue">&lt;</span>video<span style="color:red"><span style="color:mediumblue"></span><span style="color:mediumblue"></span></span><span style="color:mediumblue">&gt;</span></span><br>
                &nbsp; <span style="color:brown"><span style="color:mediumblue">&lt;</span>source<span style="color:red"> src<span style="color:mediumblue">="x.mp4"</span> type<span style="color:mediumblue">="video/mp4"</span></span><span style="color:mediumblue">&gt;</span></span>
                <span style="color:brown"><span style="color:mediumblue">&lt;</span>/video<span style="color:mediumblue">&gt;</span>
           </span>

                <hr>
            There must be transcript  associated with each Video Tag in Html
            (kind="" , rel="")
        </div>
        </div>
    </div>
</div>



@endsection