<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Game 5');

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
						<figure class="main_box1"><img class="img_data" src="../../images/isang/gloc-9.jpg" alt="gloc-9" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/francis-magalona.jpg" alt="francis magalona" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/parokya-ni-edgar.jpg" alt="parokya ni edgar" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Parokya ni Edgar - Bagsakan ft. Francis Magalona & Gloc-9</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang/game6" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
