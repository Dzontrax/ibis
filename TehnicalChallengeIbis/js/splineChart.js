

Highcharts.setOptions({
    colors: ['#004777', '#C3FAFE']
});

Highcharts.chart('container', {
    chart: {
        type: 'spline'
    },
    credits: {
        enabled: false
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
    responsive: {
        rules: [{
          condition: {
            maxWidth: 500
          },
          chartOptions: {
            legend: {
              enabled: false
            }
          }
        }]
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
            text: 'GB'
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
    series: [{
        
        data: [15, 45, 100, 121, 95, 33, 68,183],
        pointInterval: 36e5 // one hour
        
    }, {
    
        type:'areaspline',
        data: [18, 33, 80, 110, 43, 56, 70, 143],
        pointInterval: 36e5 // one hour
    }

],

exporting: {
    
    buttons: {
       
        contextButton: {
            symbolStroke: false,
            text: 'Export',
           buttons: [
            'printChart',
            'separator',
            'downloadPNG',
            'downloadJPEG',
            'downloadPDF',
            'downloadSVG'
         ]
        }
    }
}
});