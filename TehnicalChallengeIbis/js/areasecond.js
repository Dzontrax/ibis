Highcharts.setOptions({
    colors: ['#FF5B58', '#FFA712', '#59F5A8']
});
                
Highcharts.chart('container2', {
chart: {
type: 'areaspline'
},
title: {
text: 'US and USSR nuclear stockpiles'
},
xAxis: {
    type: 'datetime',
allowDecimals: false,
labels: {
formatter: function () {
return this.value; // clean, unformatted number for year
}
}
},
yAxis: {
title: {
text: 'Nuclear weapon states'
},
labels: {
formatter: function () {
return this.value / 1000 + 'k';
}
}
},
tooltip: {
pointFormat: '{series.name} had stockpiled <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
},

plotOptions: {

    areaspline: {
    pointStart: 1940,
        marker: {
            enabled: false,
            symbol: 'circle',
            radius: 2,
    states: {
        hover: {
            enabled: false
            }
        }
    }
}
},
series: [{
name: 'Good',
data: [15, 45, 100, 121, 95, 320, 68,183],
pointInterval: 36e5 // one hour
}, {
name: 'Medium',
data: [18, 33, 80, 110, 43, 300, 54, 143],
pointInterval: 36e5 // one hour
},
{
name: 'Bad',
data: [11, 22, 60, 100, 20, 280, 40, 100],
pointInterval: 36e5 // one hour
}]
});