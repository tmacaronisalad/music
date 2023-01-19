<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Game 3');

require('../../constant.php');

include('../../header.php');

$data->game_type = 'isang_kanta_lang';
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<div class="main_content wow fadeInUp">
					<div class="main_boxes">
						<figure class="main_box1"><img class="img_data" src="../../images/isang/anne-marie.jpg" alt="anne marie" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/sean-paul.jpg" alt="sean paul" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/clean-bandit.jpg" alt="clean bandit" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Clean Bandit - Rockabye ft. Anne-Marie & Sean Paul</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang/game4" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
