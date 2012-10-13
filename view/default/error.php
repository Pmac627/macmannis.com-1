<?php /* error.php */
$page_fubar = "<div class='div_page'>
<h1 class='page_title'>" . $page_info[$page]['page_title'] . " Page</h1>";
if(!empty($page_posts))
{
	foreach($page_posts as $page_post_fubar)
	{
		$page_fubar .= "<h3 class='post_title'>" . $page_post_fubar['post_title'] . "</h3>
			<span class='post_body'>" . $page_post_fubar['post_body'] . "</span>";
	}
	echo $page_fubar;
}
?>