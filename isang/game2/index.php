<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Game 2');

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
						<figure class="main_box1"><img class="img_data" src="../../images/isang/wiz-khalifa.jpg" alt="wiz khalifa" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/bruno-mars.jpg" alt="bruno mars" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/snoop-dogg.jpg" alt="snoop dogg" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Snoop Dogg and Wiz Khalifa - Young, Wild & Free ft. Bruno Mars</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang/game3" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
