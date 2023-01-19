<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Game 9');

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
						<figure class="main_box1"><img class="img_data" src="../../images/isang/lil-wayne-2.jpg" alt="lil wayne" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/busta-rhymes.jpg" alt="busta rhymes" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/chris-brown.jpg" alt="chris brown" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Chris Brown - Look At Me Now ft. Busta Rhymes & Lil Wayne</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang/game10" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
