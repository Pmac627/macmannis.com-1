<?php /* portfolio.php */
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

if(!empty($portfolio_list_live))
{
	$page_fubar .= "<h4 class='page_subtitle'>:: live portfolio ::</h4>";
	foreach($portfolio_list_live as $portfolio_item_live)
	{
		$page_fubar .= "<div class='portfolio_title'>
				<h2 class='portfolio_title'>" . $portfolio_item_live['portfolio_title'] . "</h2>
				<span class='portfolio_url'><a href='" . $portfolio_item_live['portfolio_url'] . "' class='inline_link' target='_blank' title='" . $portfolio_item_live['portfolio_title'] . "'>Visit the " . $portfolio_item_live['portfolio_title'] . " website now!</a></span>
			</div>
			<div class='portfolio_body'>
				<a href='view/images/" . $portfolio_item_live['portfolio_img_large'] . "' title='A larger screenshot of the " . $portfolio_item_live['portfolio_title'] . " website!' class='thickbox' ><img src='view/images/" . $portfolio_item_live['portfolio_img'] . "' class='portfolio_img' alt='" . $portfolio_item_live['portfolio_title'] . " site preview' title='" . $portfolio_item_live['portfolio_title'] . " Site Preview' /></a>
				<span class='portfolio_desc'>" . $portfolio_item_live['portfolio_desc'] . "</span>
			</div>";
	}
}

if(!empty($portfolio_list_proto))
{
	$page_fubar .= "<h4 class='page_subtitle'>:: draft portfolio ::</h4>";
	foreach($portfolio_list_proto as $portfolio_item_proto)
	{
		$page_fubar .= "<div class='portfolio_title'>
				<h2 class='portfolio_title'>" . $portfolio_item_proto['portfolio_title'] . "</h2>
			</div>
			<div class='portfolio_body'>
				<a href='view/images/" . $portfolio_item_proto['portfolio_img_large'] . "' title='A larger screenshot of the " . $portfolio_item_proto['portfolio_title'] . " website!' class='thickbox' ><img src='view/images/" . $portfolio_item_proto['portfolio_img'] . "' class='portfolio_img' alt='" . $portfolio_item_proto['portfolio_title'] . " site preview' title='" . $portfolio_item_proto['portfolio_title'] . " Site Preview' /></a>
				<span class='portfolio_desc'>" . $portfolio_item_proto['portfolio_desc'] . "</span>
			</div>";
	}
}

echo $page_fubar;
?>