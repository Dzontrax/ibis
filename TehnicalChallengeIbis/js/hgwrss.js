Highcharts.setOptions({
    colors: ['#FF5B58', '#FFA712', '#59F5A8']
});

Highcharts.chart('container5', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'HGw status'
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
        title: {
            text: 'dBm'
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
        data: [15, 45, 100, 121, 95, 33, 68,183],
        pointInterval: 36e5 // one hour
        
    }, {
        name: 'Average',
        data: [18, 33, 80, 110, 43, 17, 54, 143],
        pointInterval: 36e5 // one hour
    },
    {
        name: 'Minimum',
        data: [11, 22, 60, 100, 20, 2, 40, 100],
        pointInterval: 36e5 // one hour
    }

]
});