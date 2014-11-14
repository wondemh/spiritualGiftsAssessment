<?php
include 'shared/header.php';
include 'shared/chartDataGenerator.php';
?>

<div class="container">
	<h1>Survey Results</h1>
	<p>
		Below are the results of your survey. Scroll down for more.
	</p>
	<div>
		<ul id="surveyResultTabs" class="nav nav-tabs" role="tablist">
			<li class="active">
				<a data-toggle="tab" role="tab" href="#charts">Charts</a>
			</li>
			<li>
				<a data-toggle="tab" role="tab" href="#communicationMinistryMatching">Communication Ministry Match</a>
			</li>
			<li>
				<a data-toggle="tab" role="tab" href="#caringMatching">Caring Gift Matching</a>
			</li>
			<li>
				<a data-toggle="tab" role="tab" href="#corporateMatching">Corporate Gift Matching</a>
			</li>
			<li>
				<a data-toggle="tab" role="tab" href="#captivatingMatching">Captivating Gifts</a>
			</li>
			<li>
				<a data-toggle="tab" role="tab" href="#callMatching">Call Matching</a>
			</li>
		</ul>

		<div id="tabContents" class="tab-content">
			<div id="charts" class="tab-pane fade in active">
				<?php
				include 'resulttabs/surveyCharts.php';
				?>
			</div>
			<div id="communicationMinistryMatching" class="tab-pane fade">
				<?php
				include 'resulttabs/communicationMinistryMatching.php';
				?>
			</div>
			<div id="caringMatching" class="tab-pane fade">
				<?php
				include 'resulttabs/caringMatching.php';
				?>
			</div>
			<div id="corporateMatching" class="tab-pane fade">
				<?php
				include 'resulttabs/corporateMatching.php';
				?>
			</div>
			<div id="captivatingMatching" class="tab-pane fade">
				<?php
				include 'resulttabs/captivatingMatching.php';
				?>
			</div>
			<div id="callMatching" class="tab-pane fade">
				<?php
				include 'resulttabs/callMatching.php';
				?>
			</div>
		</div>
	</div>
</div>
<?php
$dataGenerator = new ChartDataGenerator();

$individualGiftsData = $dataGenerator -> getIndividualGiftsData();
$allGiftsData = $dataGenerator -> getAllGiftsData();
?>

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
