<?php /* closed.php */
if($redirect == 1)
{
	header('index/home');
}
?>
<!DOCTYPE html>
<html xml:lang='<?php echo $sb_grande['sb_dc_language']; ?>' lang='<?php echo $sb_grande['sb_dc_language']; ?>'>
<head>
	<title><?php echo $sb_grande['sb_title']; ?></title>
	<meta charset='<?php echo $sb_grande['sb_charset']; ?>' />
	<meta http-equiv='content-type' content='<?php echo $sb_grande['sb_dc_format']; ?>; charset=<?php echo $sb_grande['sb_charset']; ?>' />
	<meta http-equiv='content-language' content='<?php echo $sb_grande['sb_dc_language']; ?>'>
	<meta name='keywords' content='<?php echo $sb_grande['sb_keywords']; ?>' />
	<meta name='description' content='<?php echo $sb_grande['sb_description']; ?>' />
	<meta name='application-name' content='<?php echo $sb_grande['sb_app_name']; ?>' />
	<meta name='author' content='<?php echo $sb_grande['sb_author']; ?>' />
	<?php
		switch($page_info[$page]['page_index'])
		{
			case 0:
				$index = 'index';
				break;
			case 1:
				$index = 'noindex';
				break;
		}
		switch($page_info[$page]['page_follow'])
		{
			case 0:
				$follow = 'follow';
				break;
			case 1:
				$follow = 'nofollow';
				break;
		}
	?>
	<meta name='robots' content='<?php echo $index; ?>,<?php echo $follow; ?>' />
	<link type='text/css' rel='stylesheet' href='view/default/styles/closed.css' />
	<link type='image/x-icon' rel='icon' href='view/default/images/favicon.png' />
	<link type='image/x-icon' rel='shortcut icon' href='view/default/images/favicon.png' />
	<script type='text/javascript'>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-29803754-1']);
		_gaq.push(['_setDomainName', 'macmannis.com']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body>
	<div class='header'></div>
	<div class='main'>
		<div class='div_page'>
			<?php
			$page_fubar = '';
			$page_fubar = "<h1 class='page_title'>" . $page_info[$page]['page_title'] . " Page</h1>";
			if(!empty($page_posts))
			{
				foreach($page_posts as $page_post_fubar)
				{
					$page_fubar .= "<h3 class='post_title'>" . $page_post_fubar['post_title'] . "</h3>
						<span class='post_body'>" . $page_post_fubar['post_body'] . "</span>
						<span class='post_author'>" . $page_post_fubar['post_author'] . "</span>
						<span class='post_date'>" . date("F j, Y @ g:i a", $page_post_fubar['post_date']) . "</span>";
				}
				echo $page_fubar;
			}
			?>
			<footer>
				<div class='footer'>
					<table class='footer'>
						<tr>
							<td class='footer'><span class='vcard'><a href='index/contact' class=' credits' title='Get in touch with me via the contact page!' target='_blank' rel='nofollow'><span class='fn'>patrick macmannis</span></a></span> <span class='shrink'> &copy; <?php echo date('Y'); ?></span> ~ <a href='humans.txt' class='credits' target='_blank' title='Credits' rel='nofollow'>credits</a></td>
						</tr>
					</table>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>