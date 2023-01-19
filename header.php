<!DOCTYPE html>
<!--[if lt IE 10]>      <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 10]>         <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 11]>         <html class="no-js lt-ie11"> <![endif]-->
<!--[if gt IE 11]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<title><?= TITLE ?></title>

	<?php
		if(TITLE == 'Countdown') {
	?>
		<link rel="stylesheet" href="<?= BASE_URL ?>/style.css">
	<?php
		} else {
	?>
		<link rel="stylesheet" href="style.css">
	<?php
		}
	?>
	<link rel="stylesheet" href="<?= BASE_URL ?>/main.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>/css/skitter.styles.css" type="text/css" media="all"  />
</head>
	<body>
		<div class="protect-me">
		<div class="clearfix">