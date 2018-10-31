$(function () {

    var gaugeOptions = {

        chart: {
            type: 'solidgauge'
        },

        title: null,

        legend: {
            
        },

        pane: {
            center: ['50%', '50%'],
            size: '50%',
            startAngle: 0,
            endAngle:360,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#DF5353',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
            },
            
        },

        tooltip: {
            enabled: false
        },

        exporting: { 
            enabled: false 
        },

        // the value axis
        yAxis: {
            stops: [
                [1, '#20FC8F'], // green
                [0.5, '#DF5353'], // yellow
                [0.9, '#DDDF0D'] // red
            ],
            lineWidth: 0,
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            title: {
                y: -100
            },
            labels: {
                enabled:false
            }
        },

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: -20,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        }
    };

    // The speed gauge
    $('#container12').highcharts(Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'Speed'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'Speed',
            marker: {
                symbol: 'circle',
                fillColor: '#20FC8F',
            },
            data: [46, 80, 46],
            dataLabels: {
                format: '<div class="gaugeValue" style="text-align:center"><span style="font-size:18px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || '#20FC8F') + '">{y}%</span><br/>' +
                       '</div>'
            },
            tooltip: {
                valueSuffix: ' %'
            }
        }],
       

    }));



});