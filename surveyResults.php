<?php
include 'shared/header.php';
include 'shared/chartDataGenerator.php';

$dataGenerator = new ChartDataGenerator();

$individualGiftsData = $dataGenerator -> getIndividualGiftsData();
$allGiftsData = $dataGenerator -> getAllGiftsData();

?>

<div class="container">
	<h1><img class="img-responsive" src="images/logo.jpg" alt="" style="display: inline;"/> Survey Results</h1>
	<p>
		Below are the results of your survey. Scroll down for more.
	</p>
	<div>
		<ul id="surveyResultTabs" class="nav nav-tabs" role="tablist">
			<li class="active">
				<a data-toggle="tab" role="tab" href="#charts">Charts</a>
			</li>
			<li>
				<a data-toggle="tab" role="tab" href="#matches">Temperament and Ministry Matches</a>
			</li>
			<li>
				<a data-toggle="tab" role="tab" href="#aboutAssessment">About the Assessment</a>
			</li>
		</ul>

		<div id="tabContents" class="tab-content">
			<div id="charts" class="tab-pane fade in active">
				<?php
				include 'resulttabs/surveyCharts.php';
				?>
			</div>
			<div id="matches" class="tab-pane fade">
				<?php
				include 'resulttabs/matches.php';
				?>
			</div>
			<div id="aboutAssessment" class="tab-pane fade">
				<?php
				include 'resulttabs/aboutAssessment.php';
				?>
			</div>
		</div>
	</div>
</div>

<script src="js/surveyResults.js"></script>
<script type="text/javascript">
var surveyResults = new SurveyResults();
surveyResults.drawIndividualGiftsChart(<?php echo json_encode(array_keys($individualGiftsData)); ?>,<?php echo json_encode(array_values($individualGiftsData)); ?>);
surveyResults.drawAllGiftsChart(<?php echo json_encode(array_keys($allGiftsData)); ?>,<?php echo json_encode(array_values($allGiftsData)); ?>);
surveyResults.drawPieChart('communicationGiftsChart', 'communicationGiftsChartLegend', <?php echo $dataGenerator -> getCommunicationGiftsJSON(); ?>);
surveyResults.drawPieChart('caringGiftsChart', 'caringGiftsChartLegend', <?php echo $dataGenerator -> getCaringGiftsJSON(); ?>);
surveyResults.drawPieChart('corporateGiftsChart', 'corporateGiftsChartLegend', <?php echo $dataGenerator -> getCorporateJSON(); ?>);
surveyResults.drawPieChart('captivatingGiftsChart', 'captivatingGiftsChartLegend', <?php echo $dataGenerator -> getCaptivatingGiftsJSON(); ?>);</script>

<?php
include 'shared/footer.php';
?>
