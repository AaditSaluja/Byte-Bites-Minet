<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<?= style_link_tag("THEME_".$theme); ?>
	<?= style_link_tag("PAGE_".$page_css); ?>
	<?= style_link_tag("SPECIAL_".$special_css); ?>
	<?= style_link_tag("_base"); ?>
	<?= script_tag("snap.svg-min"); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="//platform.linkedin.com/in.js">
    // api_key:   81v2wai46zvipl
    authorize: TRUE
</script>
	<!--Favicon stuff begin-->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700" rel="stylesheet">
	<meta name="msapplication-TileColor" content="#da532c">
	<!--Favicon stuff end-->

 	</head>
<body onload="linkedin()" class="<?=$page_css?>">
	<script>
		function linkedin() {
			// IN.User.authorize();
		}
	</script>


