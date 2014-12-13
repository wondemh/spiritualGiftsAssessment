<?php $cellCount = 0;
$totalCount = 0;
?>

<div class="container" style="margin-bottom: 40px;">

	<p style="padding-top: 20px; padding-bottom: 20px;">
		Based on your test responses, your highest gift scores are indicated below.  The tables are temperamental and ministry matches for each of these high scoring gifts.
	</p>

	<?php
if ($dataGenerator -> getGiftValue("Falsification Level") >= 4) {
	?>
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert">
			<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
		</button>
		<strong>Warning!</strong> Your responses may have been falsified.
	</div>

	<?php
	}
	?>

	<?php
	if ($dataGenerator -> getGiftValue("Prophecy") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/prophecy.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($dataGenerator -> getGiftValue("Teaching") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/teaching.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Wisdom") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/wisdom.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Knowledge") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/knowledge.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Encouragement") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/encouragement.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Mercy") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/mercy.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Hospitality") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/hospitality.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Faith") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/faith.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Giving") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/giving.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Leadership") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/leadership.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Service") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/service.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Helps") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/helps.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Administration") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/administration.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Miracles") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/miracles.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Discerning of Spirits") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/discerningOfSpirits.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Healing") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/healing.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Tongues") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/tongues.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Interpretation of Tongues") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/interpretationOfTongues.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Pastor") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/pastor.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Deacon") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/deacon.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Evangelist") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/evangelist.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount == 2) {
		echo "</div>";
		$cellCount = 0;
	}
	if ($dataGenerator -> getGiftValue("Missionary") >= 7) {
		if ($cellCount == 0) {
			echo "<div class=\"row\">";
		}
		echo "<div class=\"col-md-6\">";
		include 'ministryMatches/missionary.php';
		echo "</div>";
		$cellCount++;
		$totalCount++;
	}
	if ($cellCount > 0) {
		echo "</div>";
	}
	?>

	<?php
if ($totalCount == 0) {
	?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<strong>Warning!</strong> Unable to find any ministry matches based on your profile.
	</div>
	<?php
	}
	?>
	</div>
