<?php
define('TITLE', 'Countdown - Result');

require('constant.php');
require('score.php');

include('header.php');
?>
<!-- Main -->
<div id="main_area2">
	<div class="wrapper">
		<div class="main_con">
			<main class="result">
				<h1 class="h1_title wow zoomIn">CONGRATULATIONS</h1>
				<div class="main-entry main-result wow bounceInDown">
<?php
	arsort($players);

	foreach($players as $key=>$score) {
?>
					<div class="flexbox flex<?= $key ?>">
						<div class="col1"><?= $key ?></div>
						<div class="col2"><?= $score ?></div>
					</div>
<?php
	}
?>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('footer.php'); ?>
