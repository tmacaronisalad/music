<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Game 1');

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
						<figure class="main_box1"><img class="img_data" src="../../images/isang/drake.jpg" alt="drake" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/kanye-west.jpg" alt="kanye west" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/lil-wayne.jpg" alt="lil-wayne" /></figure>
						<figure class="main_box4"><img class="img_data" src="../../images/isang/eminem.jpg" alt="eminem" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Drake - Forever ft. Kanye West, Lil Wayne & Eminem</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang/game2" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
