<?php $cellCount = 0; ?>

<div class="container" style="margin-bottom: 40px;">

	<h3>PERSONALITY PROFILE AND MINISTRY MATCHING</h3>
	<div class="row">
		<?php
		if ($dataGenerator -> getGiftValue("Prophecy") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/prophecy.php';
			echo "</div>";
			$cellCount++;
		}
		if ($dataGenerator -> getGiftValue("Teaching") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/teaching.php';
			echo "</div>";
			$cellCount++;
		}

		if ($cellCount == 2) {
			echo "</div>";
			echo "<div class=\"row\">";
			$cellCount = 0;
		}

		if ($dataGenerator -> getGiftValue("Wisdom") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/wisdom.php';
			echo "</div>";
			$cellCount++;

		}

		if ($dataGenerator -> getGiftValue("Knowledge") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/knowledge.php';
			echo "</div>";
			$cellCount++;

		}

		if ($cellCount == 2) {
			echo "</div>";
			echo "<div class=\"row\">";
			$cellCount = 0;
		}

		if ($dataGenerator -> getGiftValue("Encouragement") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/encouragement.php';
			echo "</div>";
			$cellCount++;

		}

		if ($dataGenerator -> getGiftValue("Mercy") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/mercy.php';
			echo "</div>";
			$cellCount++;

		}

		if ($cellCount == 2) {
			echo "</div>";
			echo "<div class=\"row\">";
			$cellCount = 0;
		}

		if ($dataGenerator -> getGiftValue("Hospitality") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/hospitality.php';
			echo "</div>";
			$cellCount++;

		}

		if ($dataGenerator -> getGiftValue("Faith") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/faith.php';
			echo "</div>";
			$cellCount++;

		}

		if ($cellCount == 2) {
			echo "</div>";
			echo "<div class=\"row\">";
			$cellCount = 0;
		}

		if ($dataGenerator -> getGiftValue("Giving") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/giving.php';
			echo "</div>";
			$cellCount++;

		}

		if ($dataGenerator -> getGiftValue("Leadership") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/leadership.php';
			echo "</div>";
			$cellCount++;

		}

		if ($cellCount == 2) {
			echo "</div>";
			echo "<div class=\"row\">";
			$cellCount = 0;
		}

		if ($dataGenerator -> getGiftValue("Service") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/service.php';
			echo "</div>";
			$cellCount++;

		}
		if ($dataGenerator -> getGiftValue("Helps") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/helps.php';
			echo "</div>";
			$cellCount++;

		}

		if ($cellCount == 2) {
			echo "</div>";
			echo "<div class=\"row\">";
			$cellCount = 0;
		}

		if ($dataGenerator -> getGiftValue("Administration") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/administration.php';
			echo "</div>";
			$cellCount++;

		}
		if ($dataGenerator -> getGiftValue("Miracles") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/miracles.php';
			echo "</div>";
			$cellCount++;

		}

		if ($cellCount == 2) {
			echo "</div>";
			echo "<div class=\"row\">";
			$cellCount = 0;
		}

		if ($dataGenerator -> getGiftValue("Discerning of Spirits") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/discerningOfSpirits.php';
			echo "</div>";
			$cellCount++;

		}

		if ($dataGenerator -> getGiftValue("Healing") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/healing.php';
			echo "</div>";
			$cellCount++;

		}

		if ($cellCount == 2) {
			echo "</div>";
			echo "<div class=\"row\">";
			$cellCount = 0;
		}

		if ($dataGenerator -> getGiftValue("Tongues") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/tongues.php';
			echo "</div>";
			$cellCount++;

		}

		if ($dataGenerator -> getGiftValue("Interpretation of Tongues") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/interpretationOfTongues.php';
			echo "</div>";
			$cellCount++;

		}

		if ($cellCount == 2) {
			echo "</div>";
			echo "<div class=\"row\">";
			$cellCount = 0;
		}

		if ($dataGenerator -> getGiftValue("Pastor") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/pastor.php';
			echo "</div>";
			$cellCount++;

		}

		if ($dataGenerator -> getGiftValue("Deacon") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/deacon.php';
			echo "</div>";
			$cellCount++;

		}

		if ($cellCount == 2) {
			echo "</div>";
			echo "<div class=\"row\">";
			$cellCount = 0;
		}

		if ($dataGenerator -> getGiftValue("Evangelist") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/evangelist.php';
			echo "</div>";
			$cellCount++;

		}

		if ($dataGenerator -> getGiftValue("Missionary") > 7) {
			echo "<div class=\"col-md-6\">";
			include 'ministryMatches/missionary.php';
			echo "</div>";
			$cellCount++;

		}

		if ($cellCount == 2) {
			echo "</div>";
		}

		?>

		</div>
