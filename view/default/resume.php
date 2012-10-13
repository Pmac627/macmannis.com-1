<?php /* resume.php */
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

if(!empty($resume_list))
{
	$resume_edu = $resume_exp = $resume_skill = $resume_hobbies = $resume_obj = $resume_comp = $resume_ref = '';
	$c1 = $c2 = $c3 = $c4 = $c5 = $c6 = $c7 = $popup_c = 0;

	foreach($resume_list as $resume_item)
	{
		switch($resume_item['id_category'])
		{
			case 1: // Objective
				if($c1 == 0)
				{
					$resume_obj = "<div class='portfolio_title'>
							<h3 class='portfolio_title'>" . $categories_list[$resume_item['id_category']] . "</h3>
						</div>";
					$c1++;
				}
				else
				{
					$resume_obj .= "";
				}

				$resume_obj_popup_link = '';
				$resume_obj_popup_cont = '';
				if(!empty($resume_item['resume_popup']))
				{
					$resume_obj_popup_link = "<a href='#TB_inline?height=300&amp;width=400&amp;inlineId=resume_popup_" . $popup_c . "' class='thickbox' rel='nofollow'><img src='view/default/images/thoughtbubble.png' class='popup_img' alt='' title='Details about my career objective' /></a>";
					$resume_obj_popup_cont = "<div class='resume_popup' id='resume_popup_" . $popup_c . "'>
												<p>" . $resume_item['resume_popup'] . "</p>
											</div>";
					$popup_c++;
				}

				$resume_obj .= "<div class='resume_body'>
									<span class='resume_body'>" . $resume_item['resume_body'] . $resume_obj_popup_link . "</span>
								</div>". $resume_obj_popup_cont;
				break;
			case 2: // Education
				if($c2 == 0)
				{
					$resume_edu = "<div class='portfolio_title'>
								<h3 class='portfolio_title'>" . $categories_list[$resume_item['id_category']] . "</h3>
							</div>";
					$c2++;
				}
				else
				{
					$resume_edu .= "";
				}

				$resume_edu_popup_link = '';
				$resume_edu_popup_cont = '';
				if(!empty($resume_item['resume_popup']))
				{
					$resume_edu_popup_link = "<a href='#TB_inline?height=300&amp;width=400&amp;inlineId=resume_popup_" . $popup_c . "' class='thickbox' rel='nofollow'><img src='view/default/images/thoughtbubble.png' class='popup_img' alt='' title='Details about my education at " . $resume_item['resume_title'] . "' /></a>";
					$resume_edu_popup_cont = "<div class='resume_popup' id='resume_popup_" . $popup_c . "'>
												<p>" . $resume_item['resume_popup'] . "</p>
											</div>";
					$popup_c++;
				}

				$resume_edu .= "<div class='resume_body'>
									<span class='resume_title'>" . $resume_item['resume_title'] . ", " . $resume_item['resume_subtitle'] . $resume_edu_popup_link . "</span>
									<span class='resume_body'>" . $resume_item['resume_body'] . "</span>
								</div>". $resume_edu_popup_cont;
				break;
			case 3: // Experience
				if($c3 == 0)
				{
					$resume_exp = "<div class='portfolio_title'>
							<h3 class='portfolio_title'>" . $categories_list[$resume_item['id_category']] . "</h3>
						</div>";
					$c3++;
				}
				else
				{
					$resume_exp .= "";
				}

				$resume_exp_popup_link = '';
				$resume_exp_popup_cont = '';
				if(!empty($resume_item['resume_popup']))
				{
					$resume_exp_popup_link = "<a href='#TB_inline?height=300&amp;width=400&amp;inlineId=resume_popup_" . $popup_c . "' class='thickbox' rel='nofollow'><img src='view/default/images/thoughtbubble.png' class='popup_img' alt='' title='Details about my experience at " . $resume_item['resume_title'] . "' /></a>";
					$resume_exp_popup_cont = "<div class='resume_popup' id='resume_popup_" . $popup_c . "'>
												<p>" . $resume_item['resume_popup'] . "</p>
											</div>";
					$popup_c++;
				}

				$resume_exp .= "<div class='resume_body'>
									<span class='resume_title'>" . $resume_item['resume_title'] . ", " . $resume_item['resume_subtitle'] . $resume_exp_popup_link . "</span>
									<span class='resume_body'>" . $resume_item['resume_body'] . "</span>
								</div>". $resume_exp_popup_cont;
				break;
			case 4: // Competencies
				if($c4 == 0)
				{
					$resume_comp = "<div class='portfolio_title'>
							<h3 class='portfolio_title'>" . $categories_list[$resume_item['id_category']] . "</h3>
						</div>";
					$c4++;
				}
				else
				{
					$resume_comp .= "";
				}

				$resume_comp_popup_link = '';
				$resume_comp_popup_cont = '';
				if(!empty($resume_item['resume_popup']))
				{
					$resume_comp_popup_link = "<a href='#TB_inline?height=300&amp;width=400&amp;inlineId=resume_popup_" . $popup_c . "' class='thickbox' rel='nofollow'><img src='view/default/images/thoughtbubble.png' class='popup_img' alt='' title='Details about my competency with " . $resume_item['resume_body'] . "' /></a>";
					$resume_comp_popup_cont = "<div class='resume_popup' id='resume_popup_" . $popup_c . "'>
												<p>" . $resume_item['resume_popup'] . "</p>
											</div>";
					$popup_c++;
				}

				$resume_comp .= "<div class='resume_list'>
									<span class='resume_body'>" . $resume_item['resume_body'] . $resume_comp_popup_link . "</span>
								</div>". $resume_comp_popup_cont;
				break;
			case 5: // Skills
				if($c5 == 0)
				{
					$resume_skill = "<div class='portfolio_title'>
							<h3 class='portfolio_title'>" . $categories_list[$resume_item['id_category']] . "</h3>
						</div>";
					$c5++;
				}
				else
				{
					$resume_skill .= "";
				}

				$resume_skill_popup_link = '';
				$resume_skill_popup_cont = '';
				if(!empty($resume_item['resume_popup']))
				{
					$resume_skill_popup_link = "<a href='#TB_inline?height=300&amp;width=400&amp;inlineId=resume_popup_" . $popup_c . "' class='thickbox' rel='nofollow'><img src='view/default/images/thoughtbubble.png' class='popup_img' alt='' title='Details about my " . $resume_item['resume_body'] . " skillset' /></a>";
					$resume_skill_popup_cont = "<div class='resume_popup' id='resume_popup_" . $popup_c . "'>
												<p>" . $resume_item['resume_popup'] . "</p>
											</div>";
					$popup_c++;
				}

				$resume_skill .= "<div class='resume_list'>
									<span class='resume_body'>" . $resume_item['resume_body'] . $resume_skill_popup_link . "</span>
								</div>". $resume_skill_popup_cont;
				break;
			case 6: // Hobbies
				if($c6 == 0)
				{
					$resume_hobbies = "<div class='portfolio_title'>
							<h3 class='portfolio_title'>" . $categories_list[$resume_item['id_category']] . "</h3>
						</div>";
					$c6++;
				}
				else
				{
					$resume_hobbies .= "";
				}

				$resume_hobbies_popup_link = '';
				$resume_hobbies_popup_cont = '';
				if(!empty($resume_item['resume_popup']))
				{
					$resume_hobbies_popup_link = "<a href='#TB_inline?height=300&amp;width=400&amp;inlineId=resume_popup_" . $popup_c . "' class='thickbox' rel='nofollow'><img src='view/default/images/thoughtbubble.png' class='popup_img' alt='' title='Details about my " . $resume_item['resume_body'] . " hobby' /></a>";
					$resume_hobbies_popup_cont = "<div class='resume_popup' id='resume_popup_" . $popup_c . "'>
												<p>" . $resume_item['resume_popup'] . "</p>
											</div>";
					$popup_c++;
				}

				$resume_hobbies .= "<div class='resume_body'>
										<span class='resume_body'>" . $resume_item['resume_body'] . $resume_hobbies_popup_link . "</span>
									</div>". $resume_hobbies_popup_cont;
				break;
			case 7: // References
				if($c7 == 0)
				{
					$resume_ref = "<div class='portfolio_title'>
							<h3 class='portfolio_title'>" . $categories_list[$resume_item['id_category']] . "</h3>
						</div>";
					$c7++;
				}
				else
				{
					$resume_ref .= "";
				}

				$resume_ref .= "<div class='resume_body'>
									<span class='resume_body'>" . $resume_item['resume_title'] . ", " . $resume_item['resume_subtitle'] . " " . $resume_item['resume_body'] . "</span>
								</div>";
				break;
		}
	}
	$page_fubar .= $resume_obj . $resume_edu . $resume_exp . 
		"<table class='resume_comp_skill'>
			<tr>
				<td class='resume_comp_td'>$resume_comp</td>
				<td class='resume_skill_td'>$resume_skill</td>
			</tr>
		</table>" . $resume_hobbies . $resume_ref;
}

echo $page_fubar;
?>