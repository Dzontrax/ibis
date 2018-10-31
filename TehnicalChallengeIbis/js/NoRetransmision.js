

Highcharts.setOptions({
    colors: ['#004777', '#C3FAFE']
});

Highcharts.chart('container7', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'HGw - Number of Retransmision'
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
            text: ''
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: 'B'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        line: {
           
            marker: {
                enabled: false
            }
        
        },

        tooltip: 
            {
                formatter: function() {
                    return 'The value for <b>' + this.x + '</b> is <b>' + this.y + '</b>, in series '+ this.series.name;
                }
        },

        spline: {
            marker: {
                enabled: false
            }
        }
    },
    series: [{
        name: 'Bytes',
        data: [10,10 ,10 , 121,0, 33, 0,0,56,70,10,10],
        pointInterval: 36e5 // one hour
        
    }, {
        name: 'Retransmited bytes',
        data: [10,10 ,10 , 80,0, 10, 0,0,30,60,5,5],
        pointInterval: 36e5 // one hour
    }

]
});