<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" xml:lang='<?php echo $sb_grande['sb_dc_language']; ?>' lang='<?php echo $sb_grande['sb_dc_language']; ?>'> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" xml:lang='<?php echo $sb_grande['sb_dc_language']; ?>' lang='<?php echo $sb_grande['sb_dc_language']; ?>'> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" xml:lang='<?php echo $sb_grande['sb_dc_language']; ?>' lang='<?php echo $sb_grande['sb_dc_language']; ?>'> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xml:lang='<?php echo $sb_grande['sb_dc_language']; ?>' lang='<?php echo $sb_grande['sb_dc_language']; ?>'> <!--<![endif]-->
<head>
	<base href='<?php echo $sb_grande['sb_base_url']; ?>' />
	<link href='<?php echo $sb_grande['sb_base_url']; ?>' rel='canonical' />
	<link href='http://www.macmannis.com/humans.txt' rel='author' />
	<link href='http://www.macmannis.com/dc.dcxml' rel='profile' />
	<title><?php echo $sb_grande['sb_title']; ?> <?php echo $page_info[$page]['page_title']; ?> :: <?php echo $page_info[$page]['page_subtitle']; ?></title>
	<meta charset='<?php echo $sb_grande['sb_charset']; ?>' />
	<meta http-equiv='content-type' content='<?php echo $sb_grande['sb_dc_format']; ?>; charset=<?php echo $sb_grande['sb_charset']; ?>' />
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
	<meta name='description' content='<?php echo $sb_grande['sb_description']; ?><?php echo $page_info[$page]['page_description']; ?>' />
	<meta name='keywords' content='<?php echo $sb_grande['sb_keywords']; ?><?php echo $page_info[$page]['page_keywords']; ?>' />
	<meta name='application-name' content='<?php echo $sb_grande['sb_app_name']; ?>' />
	<?php
		switch($page_info[$page]['page_index'])
		{
			case 1:
				$index = 'index';
				break;
			case 0:
				$index = 'noindex';
				break;
		}
		switch($page_info[$page]['page_follow'])
		{
			case 1:
				$follow = 'follow';
				break;
			case 0:
				$follow = 'nofollow';
				break;
		}
	?>

	<meta name='robots' content='<?php echo $index; ?>,<?php echo $follow; ?>' />
	<meta name='google-site-verification' content='2SrQP-qonPjeiKmmGA7sARrWcl9Ibaeq-OocK2FNJ6M' />
	<link rel='stylesheet' href='http://www.macmannis.com/view/default/styles/all-min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='http://www.macmannis.com/view/default/styles/print-min.css' type='text/css' media='print' />
	<?php
		if($page_info[$page]['page_thickbox'] == 1)
		{
			echo "<link type='text/css' rel='stylesheet' href='http://www.macmannis.com/view/default/styles/thickbox-min.css' />"; // If ThickBox needed
		}
	?>
	<link rel='apple-touch-icon' sizes='57x57' href='http://www.macmannis.com/view/default/images/macmannicon.png' />
	<link type='image/x-icon' rel='icon' href='http://www.macmannis.com/view/default/images/favicon.png' />
	<link type='image/x-icon' rel='shortcut icon' href='http://www.macmannis.com/view/default/images/favicon.png' />
	<link rel='image_src' href='http://www.macmannis.com/view/default/images/macmannimage.png' />
	<script type='text/javascript' src='http://www.macmannis.com/view/javascript/foutbgone.js'></script>
	<script type='text/javascript'>
		fbg.hideFOUT('asap');
	</script>
	<script type='text/javascript'>
		<!--
		if (screen.width <= 960) //if mobile phone
		{
			window.location.replace("http://m.macmannis.com/")
		}
		//-->
	</script>
</head>
<body>
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->
	<div class='header' id='<?php echo strtolower($page_info[$page]['page_title']); ?>_page'>
		<header>
			<nav>
				<table class='header'>
					<tr>
						<?php
							$link1 = $page_info[1]['page_title'];
							$link2 = $page_info[2]['page_title'];
							$link3 = $page_info[3]['page_title'];
							$link4 = $page_info[4]['page_title'];
							$link5 = $page_info[5]['page_title'];
						?>
						<td class='header_box' id='<?php echo strtolower($link1); ?>_box'>
							<div class='link_div'><a href='index/<?php echo strtolower($link1); ?>' class='header_link' id='<?php echo strtolower($link1); ?>_link' title='<?php echo $page_info[1]['page_popup_title']; ?> Page' rel='home'><?php echo $link1; ?></a></div>
						</td>
						<td class='header_box' id='<?php echo strtolower($link2); ?>_box'>
							<div class='link_div'><a href='index/<?php echo strtolower($link2); ?>' class='header_link' id='<?php echo strtolower($link2); ?>_link' title='<?php echo $page_info[2]['page_popup_title']; ?> Page' rel='tag'><?php echo $link2; ?></a></div>
						</td>
						<td class='header_box' id='<?php echo strtolower($link3); ?>_box'>
							<div class='link_div'><a href='index/<?php echo strtolower($link3); ?>' class='header_link' id='<?php echo strtolower($link3); ?>_link' title='<?php echo $page_info[3]['page_popup_title']; ?> Page' rel='tag'><?php echo $link3; ?></a></div>
						</td>
						<td class='header_box' id='<?php echo strtolower($link4); ?>_box'>
							<div class='link_div'><a href='index/<?php echo strtolower($link4); ?>' class='header_link' id='<?php echo strtolower($link4); ?>_link' title='<?php echo $page_info[4]['page_popup_title']; ?> Page' rel='tag'><?php echo $link4; ?></a></div>
						</td>
						<td class='header_box' id='<?php echo strtolower($link5); ?>_box'>
							<div class='link_div'><a href='index/<?php echo strtolower($link5); ?>' class='header_link' id='<?php echo strtolower($link5); ?>_link' title='<?php echo $page_info[5]['page_popup_title']; ?> Page'><?php echo $link5; ?></a></div>
						</td>
					</tr>
				</table>
			</nav>
		</header>
	</div>
	<div class='main'>
