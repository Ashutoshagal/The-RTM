<script src="{{asset('/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('/semantic/semantic.js') }}"></script>
<script src={{asset('/plugins/Chart.min.js')}}></script>
{{--<script src="{{asset ('/js/test.js')}}"></script>--}}

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src={{asset('/js/counters.js')}}></script>
<script src={{asset('/js/chart.js')}}></script>

{{--1--}}
<script>

    $(function () {

        //-------------
        //- PIE CHART -
        //-------------

        // Get context with jQuery - using jQuery's .get() method.
        {{--//var e='{{$h}}';--}}

        var pieChartCanvas = $("#pieChartlabel").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
            {{-- @if("{{$data['label']['total_label']}t ")--}}
            {
                value: "{{$data['label']['total_input']-$data['label']['total_label']}}",
                color: "red",
                highlight:"#E81B0A",
                label: "Not ok"
            },
            {
                value: "{{$data['label']['total_input']}}",
                color: "green",
                highlight: "#24A205",
                label: "ok"
            }

        ];

        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);



    });
</script>
{{--2--}}
<script>

    $(function () {

        //-------------
        //- PIE CHART -
        //-------------

        // Get context with jQuery - using jQuery's .get() method.
        {{--//var e='{{$h}}';--}}

        var pieChartCanvas = $("#link").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
            {
                value: "{{$data['link']['total_links']-$data['link']['total_alt']}}",
                color: "red",
                highlight:"#E81B0A",
                label: "Not ok"
            },
            {
                value: "{{$data['link']['total_alt']}}",
                color: "green",
                highlight: "#24A205",
                label: "ok"
            }

        ];

        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);



    });
</script>
{{--3--}}
<script>
$(function () {

//-------------
//- PIE CHART -
//-------------

// Get context with jQuery - using jQuery's .get() method.
{{--//var e='{{$h}}';--}}

var pieChartCanvas = $("#image").get(0).getContext("2d");
var pieChart = new Chart(pieChartCanvas);
var PieData = [
{
value: "{{$data['image']['total']-$data['image']['alt_tag']}}",
color: "red",
highlight:"red",
label: "Not ok"
},
{
value: "{{$data['image']['alt_tag']}}",
color: "green",
highlight: "green",
label: "ok"
}

];

var pieOptions = {
//Boolean - Whether we should show a stroke on each segment
segmentShowStroke: true,
//String - The colour of each segment stroke
segmentStrokeColor: "#fff",
//Number - The width of each segment stroke
segmentStrokeWidth: 2,
//Number - The percentage of the chart that we cut out of the middle
percentageInnerCutout: 50, // This is 0 for Pie charts
//Number - Amount of animation steps
animationSteps: 100,
//String - Animation easing effect
animationEasing: "easeOutBounce",
//Boolean - Whether we animate the rotation of the Doughnut
animateRotate: true,
//Boolean - Whether we animate scaling the Doughnut from the centre
animateScale: false,
//Boolean - whether to make the chart responsive to window resizing
responsive: true,
// Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
maintainAspectRatio: true,
//String - A legend template
legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
};
//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
pieChart.Doughnut(PieData, pieOptions);



});
</script>
{{--4--}}

{{--5--}}

{{--6--}}
<script>

    $(function () {

        //-------------
        //- PIE CHART -
        //-------------

        // Get context with jQuery - using jQuery's .get() method.
        {{--//var e='{{$h}}';--}}

        var pieChartCanvas = $("#aria").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
            {
                value: "<?php if($data['image']['alt_tag'])?>{{$data['image']['alt_tag']}}",
                color: "<?php if($data['image']['alt_tag']==0)?>red",
                highlight:"#E81B0A",
                label: "Not ok"
            },
            {
                value: "{{$data['image']['total']-$data['image']['alt_tag']}}",
                color: "#1B7E02",
                highlight: "#24A205",
                label: "ok"
            }

        ];

        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);



    });

</script>
{{--7--}}
{{--8--}}
<script>

    $(function () {

        //-------------
        //- PIE CHART -
        //-------------

        // Get context with jQuery - using jQuery's .get() method.
        {{--//var e='{{$h}}';--}}

        var pieChartCanvas = $("#blink").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
            {
                value: "{{$data['image']['alt_tag']}}",
                color: "red",
                highlight:"#E81B0A",
                label: "Not ok"
            },
            {
                value: "{{$data['image']['total']-$data['image']['alt_tag']}}",
                color: "#1B7E02",
                highlight: "#24A205",
                label: "ok"
            }

        ];

        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);



    });
</script>
{{--9--}}
<script>

    $(function () {

        //-------------
        //- PIE CHART -
        //-------------

        // Get context with jQuery - using jQuery's .get() method.
        {{--//var e='{{$h}}';--}}

        var pieChartCanvas = $("#long").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
            {
                value: "{{$data['long']['total_images']-$data['long']['total_long_desc']}}",
                color: "red",
                highlight:"#E81B0A",
                label: "Not ok"
            },
            {
                value: "{{$data['long']['total_long_desc']}}",
                color: "green",
                highlight: "#24A205",
                label: "ok"
            }

        ];

        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);



    });
</script>
{{--10--}}
<script>
$(function () {

//-------------
//- PIE CHART -
//-------------

// Get context with jQuery - using jQuery's .get() method.
{{--//var e='{{$h}}';--}}

var pieChartCanvas = $("#lang").get(0).getContext("2d");
var pieChart = new Chart(pieChartCanvas);
var PieData = [
{
value: "{{$data['long']['total_images']-$data['long']['total_long_desc']}}",
color: "red",
highlight:"#E81B0A",
label: "Not ok"
},
{
value: "{{$data['long']['total_long_desc']}}",
color: "green",
highlight: "#24A205",
label: "ok"
}

];

var pieOptions = {
//Boolean - Whether we should show a stroke on each segment
segmentShowStroke: true,
//String - The colour of each segment stroke
segmentStrokeColor: "#fff",
//Number - The width of each segment stroke
segmentStrokeWidth: 2,
//Number - The percentage of the chart that we cut out of the middle
percentageInnerCutout: 50, // This is 0 for Pie charts
//Number - Amount of animation steps
animationSteps: 100,
//String - Animation easing effect
animationEasing: "easeOutBounce",
//Boolean - Whether we animate the rotation of the Doughnut
animateRotate: true,
//Boolean - Whether we animate scaling the Doughnut from the centre
animateScale: false,
//Boolean - whether to make the chart responsive to window resizing
responsive: true,
// Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
maintainAspectRatio: true,
//String - A legend template
legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
};
//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
pieChart.Doughnut(PieData, pieOptions);



});
</script>
{{--11--}}
<script>

    $(function () {

        //-------------
        //- PIE CHART -
        //-------------

        // Get context with jQuery - using jQuery's .get() method.
        {{--//var e='{{$h}}';--}}

        var pieChartCanvas = $("#video").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
            {
                value: "{{$data['video']['total_videos']-$data['video']['total_transcripts']}}",
                color: "red",
                highlight:"#E81B0A",
                label: "Not ok"
            },
            {
                value: "{{$data['video']['total_videos']}}",
                color: "#1B7E02",
                highlight: "#24A205",
                label: "ok"
            }

        ];

        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);



    });
</script>