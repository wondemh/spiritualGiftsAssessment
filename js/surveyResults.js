function SurveyResults() {

	$(document).ready(function() {
	});
	
	var generateChartColor = function() {
		var letters = '0123456789ABCDEF'.split('');
		var color = '#';
		for (var i = 0; i < 6; i++ ) {
			color += letters[Math.floor(Math.random() * 16)];
		}
		return color;
	};

	this.drawIndividualGiftsChart = function(chartLabels, chartData) {
		var data = {
			labels : chartLabels,
			datasets : [{
				label : "My First dataset",
				fillColor : generateChartColor(),
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill : "rgba(220,220,220,0.75)",
				highlightStroke : "rgba(220,220,220,1)",
				data : chartData
			}]
		};
		var ctx = $("#individualGiftsChart").get(0).getContext("2d");
		var myBarChart = new Chart(ctx).Bar(data);
	};
	
	this.drawAllGiftsChart = function(chartLabels, chartData) {
		var data = {
			labels : chartLabels,
			datasets : [{
				label : "My First dataset",
				fillColor : generateChartColor(),
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill : "rgba(220,220,220,0.75)",
				highlightStroke : "rgba(220,220,220,1)",
				data : chartData
			}]
		};
		var ctx = $("#allGiftsChart").get(0).getContext("2d");
		var myBarChart = new Chart(ctx).Bar(data);
	};
	
	this.drawPieChart = function(chartId, chartLegendContainerId, chartData) {
		var ctx = $("#" + chartId).get(0).getContext("2d");
		var myPieChart = new Chart(ctx).Pie(chartData);
		var legend = myPieChart.generateLegend();
		legend = legend.replace(/<\/span>/g, '&nbsp;&nbsp;&nbsp;&nbsp;</span>');
		legend = legend.replace(/style=\"/g, 'style="margin-right: 5px; ');
		
		legend = legend.replace(/<ul class="pie-legend">/g, '');
		legend = legend.replace(/<\/ul>/g, '');
		legend = legend.replace(/<li>/g, '');
		legend = legend.replace(/<\/li>/g, '<br/>');
		
		$('#' + chartLegendContainerId).html(legend);
	};

}