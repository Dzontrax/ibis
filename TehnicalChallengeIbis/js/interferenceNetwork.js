
Highcharts.setOptions({
    colors: ['#8EF8FF', '#0088BC', '#006799', '#00C2E2']
});


Highcharts.chart('container4', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'No of interterence Network'
    },

    xAxis: [{
        title: {
            text: 'Teritorial Directions'
        }

    }],
    
    yAxis: [{
        max: 500,
        className: 'highcharts-color-0',
        title: {
            text: 'No of Clients'
        }
    }, {
        className: 'highcharts-color-1',
        opposite: false,
        title: {
            text: ' '
        }
    },{
        className: 'highcharts-color-1',
        opposite: true, 
        className: 'highcharts-color-2',
        opposite: true,
        className: 'highcharts-color-3',
        opposite: true, 
            
    }],

    

    series: [{
        name: 'A',
        className: 'highcharts-color-0',
        data: [324, 133, 347, 261, 243, 125, 195, 266, 122, 145, 165, 186, 220],
        yAxis: 1
        }, 
        {
        name: 'B',
        className: 'highcharts-color-1',
        data: [324, 124, 547, 221, 325, 243, 234, 322, 169, 212, 55, 169,],
        yAxis: 1
        },
        {
        name: 'C',
        className: 'highcharts-color-2',
        data: [324,222, 323, 416, 220, 180, 240, 182, 323, 89, 95, 215, 156],
        yAxis: 1
        },
        {
        name: 'D',
        className: 'highcharts-color-3',
        data: [324, 124, 547, 221, 343, 225, 125, 216, 312, 213, 105, 126, 200],
        yAxis: 1
        }
        

    ]

});