<?php /* contact.php */
$page_fubar = "<div class='div_page'>
<h1 class='page_title'>" . $page_info[$page]['page_title'] . " Page</h1>";
if(!empty($page_posts))
{
	foreach($page_posts as $page_post_fubar)
	{
		$page_fubar .= "<h3 class='post_title'>" . $page_post_fubar['post_title'] . "</h3>
			<span class='post_body'>" . $page_post_fubar['post_body'] . "</span>";
	}

	$page_fubar .= "<form action='index/process' method='post' class='form_body' name='contact_form' id='contact_form' autocomplete='off'>
			<table class='form_table'>
				<tr>
					<td class='form_label_td'><label class='form_label' for='contact_email' form='contact_form'>Email</label></td>
					<td class='form_input_td'><input class='form_input' type='email' name='contact_email' id='contact_email' form='contact_form' placeholder='email...' title='**Required** Please enter your Email so I can promptly reply!' required='required' /></td>
				</tr>
				<tr>
					<td class='form_label_td'><label class='form_label' for='contact_name' form='contact_form'>Full Name</label></td>
					<td class='form_input_td'><input class='form_input' type='text' name='contact_name' id='contact_name' form='contact_form' placeholder='full name...' title='**Required** Please enter your Full Name so I can address you properly!' required='required' /></td>
				</tr>
				<tr>
					<td class='form_label_td'><label class='form_label' for='contact_message' form='contact_form'>Message</label></td>
					<td class='form_input_td'><textarea class='form_textarea' form='contact_form' name='contact_message' id='contact_message' placeholder='message...' title='*Required* Please enter your Questions and/or Comments so I can cry or dance around the room!' required='required'></textarea></td>
				</tr>
				<tr>
					<td class='form_submit_td' colspan='2'><input class='form_submit' type='submit' name='submit' form='contact_form' value='Send Message!' /></td>
				</tr>
			</table>
		</form>";
}

echo $page_fubar;
?>