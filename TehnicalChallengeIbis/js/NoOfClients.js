

Highcharts.setOptions({
    colors: ['#C3FAFE']
});

Highcharts.chart('container8', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'HGw - Number Of Clients'
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
            text: 'Number of Clients'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: 'GB'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5,
            marker: {
                enabled: false
            }
        
        },

        spline: {
            marker: {
                enabled: false
            }
        }
    },
    series: [ {
        name: 'Jane',
        type:'areaspline',
        data: [18, 33, 80, 110, 43, 56, 70, 143],
        pointInterval: 36e5 // one hour
    }

]
});