<?php
define('TITLE', 'Tunugan - ISANG KANTA LANG - Game 7');

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
						<figure class="main_box1"><img class="img_data" src="../../images/isang/dionne-warwick.jpg" alt="dionne warwick" /></figure>
						<figure class="main_box2"><img class="img_data" src="../../images/isang/stevie-wonder.jpg" alt="stevie wonder" /></figure>
						<figure class="main_box3"><img class="img_data" src="../../images/isang/gladys-knight.jpg" alt="gladys knight" /></figure>
						<figure class="main_box4"><img class="img_data" src="../../images/isang/elton-john.jpg" alt="elton john" /></figure>
					</div>

					<div class="content wow zoomIn hidden">
						<h2>Dionne Warwick - That's What Friends Are For ft. Stevie Wonder, Gladys Knight & Elton John</h2>
					</div>
				</div>
			</main>

			<button data-href="<?= BASE_URL ?>/isang/game8" class="next disabled">Next</button>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
