/**
 * Created by radius on 1/4/17.
 */


google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Most Accessible sites',     12],
        ['Average Accessible sites',     4],
        ['Least Accessible sites',  2],

    ]);

    var options = {
        title: 'Website Accessibilty',
        is3D: true
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
}