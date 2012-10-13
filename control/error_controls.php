<?php /* error_controls.php */
// Create error_controls class
class error_controls extends base_controls
{
	// Create index method
	public function index()
	{
		// Set values for the site
		$this->registry->template->sb_grande = dbc_switchboard::get_switchboard($this->registry->dbc);

		if($this->sb_grande['sb_open'] == 1)
		{
			// Record visitor
			$this->registry->template->visitors = dbc_visitors::record_visitors($this->registry->dbc, $this->sb_grande['sb_cookie']);

			// Grab the content from the database to display
			$this->registry->template->page = 8;
			$this->registry->template->page_info = dbc_pages::get_page_info($this->registry->dbc);
			$this->registry->template->page_posts = dbc_pages::get_page_posts($this->registry->dbc, 8);

			// Grab error.php template
			$this->registry->template->show('header');
			$this->registry->template->show('error');
			$this->registry->template->show('footer');
		}
		else
		{
			// Grab content from database
			$this->registry->template->page = 7;
			$this->registry->template->page_info = dbc_pages::get_page_info($this->registry->dbc);
			$this->registry->template->page_posts = dbc_pages::get_page_posts($this->registry->dbc, 7);

			// Grab closed.php template
			$this->registry->template->show('closed');
		}
	}
}
?>