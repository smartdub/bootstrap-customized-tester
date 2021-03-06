<?php
	//phpinfo();
	$rootPath	= '';
	require_once ($rootPath .'inc/vars.php');
?><!doctype html>
<html lang="<?= $culture; ?>">
<head>
	<meta charset="UTF-8" />
	<title>Bootstrap v.4 <?= $theTitle; ?> | <?= $siteTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $hdMeta_description; ?>" />
	<meta name="keywords" content="<?= $hdMeta_keywords; ?>" />
	<meta name="author" content="MartinDube.net" />
	<meta name="robots" content="index,follow,noodp,noydir" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!--[if lte IE 9]><link rel="stylesheet" media="all" href="<?= $siteUi; ?>css/if-ie9.css" /><![endif]-->
	<link rel="shortcut icon" type="image/x-icon" href="<?= $siteUi; ?>img/logo/favicon.ico" />
	<link rel="icon" type="image/png" href="<?= $siteUi; ?>img/logo/favicon.png" />

	<style type="text/css">
		/* pour demo */ 
		select .today { font-weight:bold; background-color:yellow; }
		.page-header, .page-footer { width:100%; }
		.row.demo div section { background-color: whitesmoke; margin-bottom:1rem; padding:.5rem; }
		#sidebar dl  { position:relative; padding-left:5%; }
		#sidebar dl dd { padding-left:2rem; }
	</style>

	<script src="http://www.google.com/jsapi" charset="utf-8" ></script>
	<script>
		// Load jQuery
		google.load('jquery', '3', {uncompressed:false});
		google.load('visualization', '1');
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body class="<?= $langTag; ?>">
	<div class="doc container-fluid">
		<div class="row">
			<header id="header" class="page-header">

				<a id="logo" href="#" title="<?= $siteTitle; ?>"><img src="<?= $siteUi; ?>img/logo/<?= $siteTitle; ?>-small.png" alt="logo" /><span><strong><?= $siteTitle; ?></strong></span></a>
				<form id="searchForm">
					<fieldset>
						<div class="inPlaceholder">
							<input type="search" class="text" id="searchField" name="searchField" accesskey="f" tabindex="1" placeholder="<?= $p6_title; ?>">
							<button type="submit" class="submit" title="Search your query"><span>Go</span></button>
						</div>
					</fieldset>
				</form><!-- /#searchForm -->
				<nav id="mainMenu">
					<ul class="list-inline">
						<li class="list-inline-item first"><a href="#"><span><?= $p2_title; ?></span></a></li>
						<li class="list-inline-item"><a href="#"><span><?= $p3_title; ?></span></a></li>
						<li class="list-inline-item"><a href="#"><span><?= $p4_title; ?></span></a></li>
						<li class="list-inline-item"><a href="#"><span><?= $p5_title; ?></span></a></li>
					</ul>
				</nav><!-- /#mainMenu -->
				<nav id="topMenu">
					<ul class="list-inline">
						<li class="list-inline-item first"><a href="type-html5-bootstrap.php"><span>Reset page</span></a></li>
						<li class="list-inline-item"><a href="type-html5-bootstrap.php?lang=<?= $altLangTag; ?>"><span><?= $altLangLabel; ?></span></a></li>
					</ul>
				</nav><!-- /#topMenu -->
			</header><!-- /#header -->
		</div><!-- /.row -->
		<main class="page-core container">
			<div class="row">

				<div id="content" class="col col-12 col-lg-8">
					<article>
						<header>
							<a class="aboveTheTitle" href="#"><?= $theParentTitle; ?></a>
							<h1 class="theTitle"><a href="#">Bootstrap 4 + <?= $theTitle; ?></a></h1>
							<p class="subTitle">Sub-title lorem ipsum</p>
						</header>
						<hr />

						<?php
						include 'inc/placeholder.bootstrap4-columns.php';
						include 'inc/placeholder.wysiwyg.php';
						?>

					</article>
				</div><!-- /#content -->
				<div id="sidebar" class="col col-12 col-lg-4">
					<aside>

						<?php
						include 'inc/placeholder.sidebar-content.php';
						?>

					</aside>
				</div><!-- /#sidebar -->
			</div><!-- /.row -->
		</main><!-- /.core -->
		<div class="row">
			<footer id="footer" class="page-footer">

				<hr />
				<p>Footer text: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare, massa vel interdum bibendum, nisl nulla sollicitudin est, sed imperdiet est ligula eu elit.</p>
				<nav id="footMenu">
					<ul class="list-inline">
						<li class="list-inline-item first"><a href="#p1"><span><?= $p1_title; ?></span></a></li>
						<li class="list-inline-item"><a href="#p2"><span><?= $p2_title; ?></span></a></li>
						<li class="list-inline-item"><a href="#p3"><span><?= $p3_title; ?></span></a></li>
						<li class="list-inline-item"><a href="#p4"><span><?= $p4_title; ?></span></a></li>
						<li class="list-inline-item"><a href="#p5"><span><?= $p5_title; ?></span></a></li>
						<li class="list-inline-item"><a href="type-html5-bootstrap.php?lang=<?= $altLangTag; ?>"><span><?= $altLangLabel; ?></span></a></li>
					</ul>
				</nav><!-- /#footMenu -->
				<nav id="copyright">
					<ul class="list-inline">
						<li class="list-inline-item first"><abbr title="Tous droits réservés">&copy;</abbr> <?= $siteTitle; ?>, <?php echo date('Y'); ?></li>
						<li class="list-inline-item"><a href="http://www.1idweb.com" class="external" title="Ce site web est une conception et réalisation de 1idweb (www.1idweb.com)">Crédits</a></li>
					</ul>
				</nav><!-- /#copyright -->

			</footer><!-- /#footer -->
		</div><!-- /.row -->
		<div class="clear"></div>
	</div><!-- /.doc -->

	<!-- SCRIPT -->
	<script src="<?= $siteUi; ?>script/ui.js" charset="utf-8" ></script>
</body>
</html>
