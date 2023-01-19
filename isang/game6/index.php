<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Game 6');

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
						<figure class="main_box1"><img class="img_data" src="../../images/isang/50-cent.jpg" alt="50 cent" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/ed-sheeran-2.jpg" alt="ed sheeran" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/eminem-2.jpg" alt="eminem" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Ed Sheeran - Remember The Name ft. Eminem & 50 Cent</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang/game7" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
