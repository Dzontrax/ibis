// $.getJSON('localhost:8080/technicalchallengeibis/data.json', function (data)
// {

Highcharts.setOptions({
    colors: ['#56FCAA', '#FFA712', '#FF5B58']
});

Highcharts.chart('container6', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'HGw Bite Rate'
    },
    legend: {
        layout: 'horizontal',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    xAxis: {
        type: 'datetime',
        
        plotBands: [{ // visualize the weekend
            from: 4.5,
            to: 6.5,
            color: '#C3FAFE'
        }]
    },
    yAxis: {
        max: 250,
        title: {
            text: 'Mbps'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: 'dBm'
    },
    credits: {
        enabled: false
    },
    
    plotOptions: {
        areaspline: {
            fillOpacity: 0,
            marker: {
                enabled: false
            }
        }
       
    },
    series: [{
        name: 'Maximum',
        data: [200, 20, 120, 220, 95, 33, 68,183, 210, 190, 180],
        pointInterval: 36e5 // one hour
        
    }, {
        name: 'Average',
        data: [150, 15, 100, 115, 43, 17, 54, 145, 135],
        pointInterval: 36e5 // one hour
    },
    {
        name: 'Minimum',
        data: [100, 10, 80, 100, 20, 2, 40, 100, 90],
        pointInterval: 36e5 // one hour
    }

]
});
// });