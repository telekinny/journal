<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Электронный журнал</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/css/jquery-ui-1.7.1.custom.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/css/ui.jqgrid.css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
        <script src="/js/grid.locale-ru.js" type="text/javascript"></script>
        <script src="/js/jquery.jqGrid.min.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="menu">

						<a href="/">Главная</a>
						<a href="/services">Услуги</a>
						<a href="/portfolio">Портфолио</a>
						<a href="/contacts">Контакты</a>

					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
					<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>

					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>


				<br class="clearfix" />
			</div>
		</div>

	</body>
</html>