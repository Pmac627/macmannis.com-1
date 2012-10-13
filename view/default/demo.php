<?php /* demo.php */
$page_fubar = "<div class='div_page'>
<h1 class='page_title'>" . $page_info[$page]['page_title'] . " Page</h1>";
if(!empty($page_posts))
{
	foreach($page_posts as $page_post_fubar)
	{
		$page_fubar .= "<h3 class='post_title'>" . $page_post_fubar['post_title'] . "</h3>
			<span class='post_body'>" . $page_post_fubar['post_body'] . "</span>";
	}
}

if(!empty($demos_list_live))
{
	$page_fubar .= "<h4 class='page_subtitle'>:: live demos ::</h4>";
	foreach($demos_list_live as $demos_item_live)
	{
		$page_fubar .= "<div class='portfolio_title'>
				<h2 class='portfolio_title'>" . $demos_item_live['demo_title'] . "</h2>
				<span class='portfolio_url'><a href='" . $demos_item_live['demo_url'] . "' class='inline_link' target='_blank' title='" . $demos_item_live['demo_title'] . "'>Visit the " . $demos_item_live['demo_title'] . " demo now!</a></span>
			</div>
			<div class='portfolio_body'>
				<a href='view/images/" . $demos_item_live['demo_img_large'] . "' title='A larger view of the " . $demos_item_live['demo_title'] . " demo!' class='thickbox' ><img src='view/images/" . $demos_item_live['demo_img'] . "' class='portfolio_img' alt='" . $demos_item_live['demo_title'] . " demo preview' title='" . $demos_item_live['demo_title'] . " Demo Preview' /></a>
				<span class='portfolio_desc'>" . $demos_item_live['demo_desc'] . "</span>
			</div>";
	}
}

if(!empty($demos_list_proto))
{
	$page_fubar .= "<h4 class='page_subtitle'>:: draft demos ::</h4>";
	foreach($demos_list_proto as $demos_item_proto)
	{
		$page_fubar .= "<div class='portfolio_title'>
				<h2 class='portfolio_title'>" . $demos_item_proto['demo_title'] . "</h2>
			</div>
			<div class='portfolio_body'>
				<a href='view/images/" . $demos_item_proto['demo_img_large'] . "' title='A larger view of the " . $demos_item_proto['demo_title'] . " demo!' class='thickbox' ><img src='view/images/" . $demos_item_proto['demo_img'] . "' class='portfolio_img' alt='" . $demos_item_proto['demo_title'] . " demo preview' title='" . $demos_item_proto['demo_title'] . " Demo Preview' /></a>
				<span class='portfolio_desc'>" . $demos_item_proto['demo_desc'] . "</span>
			</div>";
	}
}

echo $page_fubar;
?>