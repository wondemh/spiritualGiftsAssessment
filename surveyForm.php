<?php
include 'shared/header.php';
?>

<div class="container">
	<h1>Spiritual Gift Assessment</h1>
	<div role="alert" class="alert alert-info">
	      <strong>Instructions:</strong> 
	      Leaving no question blank, rate how these qualities apply to you on a scale of 0 to 3. 
		  0 = Does Not Apply to Me; 1 = May Apply to Me; 2=Applies to Me; 3 = Always Applies to Me.
	</div>
	<div id="surveyErrorsMsg" role="alert" class="alert alert-danger" style="display: none;">
	      <strong>Missed some questions!</strong> Please answer the highlighted questions below.  It will help us make a better evaluation of your gifts.
	</div>	

	<form id="surveyForm" role="form" action="surveyResults.php" method="post">
		<table id="surveyFormTable" class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>SPIRITUAL GIFTS</th>
					<th>DOESN'T APPLY</th>
					<th>MAY APPLY</th>
					<th>APPLIES</th>
					<th>ALWAYS APPLIES</th>
				</tr>
			</thead>
			<tbody id="surveyQuestionsContainer"></tbody>
		</table>
		<div style="margin-bottom: 100px;">
			<input type="button" class="btn btn-large btn-danger pull-right" value="Clear Survey" onclick="survey.clearSurveyForm();"/>
			<input type="button" class="btn btn-large btn-primary pull-right" value="View Survey Results" style="margin-right: 20px;" onclick="survey.submitSurvey();"/>
		</div>
	</form>
</div>

<script id="surveyFormTemplate" type="text/x-handlebars-template">
	{{#each .}}
	<tr id="questionRow_{{this.inputId}}">
		<td>{{this.index}}</td>
		<td>{{this.question}}</td>
		<td><input type="radio" name="{{this.inputId}}" value="0"/></td>
		<td><input type="radio" name="{{this.inputId}}" value="1"/></td>
		<td><input type="radio" name="{{this.inputId}}" value="2" checked/></td>
		<td><input type="radio" name="{{this.inputId}}" value="3"/></td>
	</tr>
	{{/each}}
</script>

<?php
include 'shared/footer.php';
?>

<script src="js/surveyForm.js"></script>
<script type="text/javascript">
	var survey = new SurveyForm();
	var surveyTable = $('#surveyFormTable').DataTable(
		{
			"paging": false,
			"searching": false,
			"ordering": false,
			"info": false,
			"columnDefs": [
				{ "width": "5%", "targets": 0 },
				{ "width": "40%", "targets": 1 },
				{ "width": "13%", "targets": [0, 2, 3, 4, 5] }
			]
		}
	);
    new $.fn.dataTable.FixedHeader(surveyTable);
</script>