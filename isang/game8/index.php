<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Game 8');

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
						<figure class="main_box1"><img class="img_data" src="../../images/isang/ben-and-ben.jpg" alt="ben&ben" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/zild-benitez.jpg" alt="zild benitez" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/juan-karlos-labajo.jpg" alt="juan karlos labajo" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Ben&Ben - Lunod ft. Zild Benitez & Juan Karlos Labajo</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang/game9" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
