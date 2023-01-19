<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Game 4');

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
						<figure class="main_box1"><img class="img_data" src="../../images/isang/big-sean.jpg" alt="big sean" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/calvin-harris.jpg" alt="calvin harris" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/katy-perry.jpg" alt="katy perry" /></figure>
						<figure class="main_box4"><img class="img_data" src="../../images/isang/pharrell-williams.jpg" alt="pharrell williams" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Calvin Harris - Feels ft. Pharell Williams, Katy Perry & Big Sean</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang/game5" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
