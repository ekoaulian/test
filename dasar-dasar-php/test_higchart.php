<!DOCTYPE html>
<html>
<head>
	<title>cek</title>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
</head>
<body>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script>
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Statistik peserta ujian berdasarkan kategori ujian tahun 2019'
    },
    
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Jumlah Peserta ujian'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'TPA',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 27.3, 30.3, 33.9, 39.6]
    }, {
        name: 'TOEFL',
        data: [2.9, 3.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 15.3, 16.6, 20.8]
    }, {
        name: 'TPIU',
        data: [5.5, 7.2, 9.7, 12.5, 18.9, 20.2, 23.0, 25.6, 22.2, 23.3, 26.6, 28.8]
    }, {
        name: 'TKDA',
        data: [8.9, 4.2, 15.7, 18.5, 18.9, 15.2, 13.0, 11.6, 12.2, 11.3, 16.6, 8.8]
    }, {
        name: 'Try Out CPNS',
        data: [3.9, 4.2, 5.7, 8.5, 8.9, 10.2, 13.0, 15.6, 12.2, 3.3, 6.6, 8.8]
    }]
});
</script>


<script src="https://code.highcharts.com/highcharts.js"></script>
</body>
</html>