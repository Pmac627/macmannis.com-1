<?php /* index_controls.php */
// Create index_controls class
class index_controls extends base_controls
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

			// Grab content from database
			$this->registry->template->page = 1;
			$this->registry->template->page_info = dbc_pages::get_page_info($this->registry->dbc);
			$this->registry->template->page_posts = dbc_pages::get_page_posts($this->registry->dbc, 1);

			// Grab home.php template
			$this->registry->template->show('header');
			$this->registry->template->show('home');
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

	// Create home method
	public function home()
	{
		// Set values for the site
		$this->registry->template->sb_grande = dbc_switchboard::get_switchboard($this->registry->dbc);

		if($this->sb_grande['sb_open'] == 1)
		{
			// Record the visitor, if it has not already been done
			$this->registry->template->visitors = dbc_visitors::record_visitors($this->registry->dbc, $this->sb_grande['sb_cookie']);

			// Grab the content from the database to display
			$this->registry->template->page = 1;
			$this->registry->template->page_info = dbc_pages::get_page_info($this->registry->dbc);
			$this->registry->template->page_posts = dbc_pages::get_page_posts($this->registry->dbc, 1);

			// Grab home.php template
			$this->registry->template->show('header');
			$this->registry->template->show('home');
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

	// Create resume method
	public function resume()
	{
		// Set values for the site
		$this->registry->template->sb_grande = dbc_switchboard::get_switchboard($this->registry->dbc);

		if($this->sb_grande['sb_open'] == 1)
		{
			// Record the visitor, if it has not already been done
			$this->registry->template->visitors = dbc_visitors::record_visitors($this->registry->dbc, $this->sb_grande['sb_cookie']);

			// Grab the content from the database to display
			$this->registry->template->page = 2;
			$this->registry->template->page_info = dbc_pages::get_page_info($this->registry->dbc);
			$this->registry->template->page_posts = dbc_pages::get_page_posts($this->registry->dbc, 2);
			$this->registry->template->categories_list = dbc_resume::list_categories($this->registry->dbc);
			$this->registry->template->resume_list = dbc_resume::generate_resume($this->registry->dbc);

			// Grab resume.php template
			$this->registry->template->show('header');
			$this->registry->template->show('resume');
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

	// Create portfolio method
	public function portfolio()
	{
		// Set values for the site
		$this->registry->template->sb_grande = dbc_switchboard::get_switchboard($this->registry->dbc);

		if($this->sb_grande['sb_open'] == 1)
		{
			// Record the visitor, if it has not already been done
			$this->registry->template->visitors = dbc_visitors::record_visitors($this->registry->dbc, $this->sb_grande['sb_cookie']);

			// Grab the content from the database to display
			$this->registry->template->page = 3;
			$this->registry->template->page_info = dbc_pages::get_page_info($this->registry->dbc);
			$this->registry->template->page_posts = dbc_pages::get_page_posts($this->registry->dbc, 3);
			$this->registry->template->portfolio_list_live = dbc_portfolio::generate_portfolio_live($this->registry->dbc);
			$this->registry->template->portfolio_list_proto = dbc_portfolio::generate_portfolio_proto($this->registry->dbc);

			// Grab portfolio.php template
			$this->registry->template->show('header');
			$this->registry->template->show('portfolio');
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

	// Create demos method
	public function demos()
	{
		// Set values for the site
		$this->registry->template->sb_grande = dbc_switchboard::get_switchboard($this->registry->dbc);

		if($this->sb_grande['sb_open'] == 1)
		{
			// Record the visitor, if it has not already been done
			$this->registry->template->visitors = dbc_visitors::record_visitors($this->registry->dbc, $this->sb_grande['sb_cookie']);

			// Grab the content from the database to display
			$this->registry->template->page = 4;
			$this->registry->template->page_info = dbc_pages::get_page_info($this->registry->dbc);
			$this->registry->template->page_posts = dbc_pages::get_page_posts($this->registry->dbc, 4);
			$this->registry->template->demos_list_live = dbc_demos::generate_demos_live($this->registry->dbc);
			$this->registry->template->demos_list_proto = dbc_demos::generate_demos_proto($this->registry->dbc);

			// Grab demo.php template
			$this->registry->template->show('header');
			$this->registry->template->show('demo');
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

	// Create contact method
	public function contact()
	{
		// Set values for the site
		$this->registry->template->sb_grande = dbc_switchboard::get_switchboard($this->registry->dbc);

		if($this->sb_grande['sb_open'] == 1)
		{
			// Record the visitor, if it has not already been done
			$this->registry->template->visitors = dbc_visitors::record_visitors($this->registry->dbc, $this->sb_grande['sb_cookie']);

			// Grab the content from the database to display
			$this->registry->template->page = 5;
			$this->registry->template->page_info = dbc_pages::get_page_info($this->registry->dbc);
			$this->registry->template->page_posts = dbc_pages::get_page_posts($this->registry->dbc, 5);

			// Grab contact.php template
			$this->registry->template->show('header');
			$this->registry->template->show('contact');
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

	// Create process method
	public function process()
	{
		// Set values for the site
		$this->registry->template->sb_grande = dbc_switchboard::get_switchboard($this->registry->dbc);

		if($this->sb_grande['sb_open'] == 1)
		{
			// Record the visitor, if it has not already been done
			$this->registry->template->visitors = dbc_visitors::record_visitors($this->registry->dbc, $this->sb_grande['sb_cookie']);

			// Grab the content from the database to display
			$this->registry->template->page = 6;
			$this->registry->template->page_info = dbc_pages::get_page_info($this->registry->dbc);
			$this->registry->template->page_posts = dbc_pages::get_page_posts($this->registry->dbc, 6);

			// Process the contact form, should it actually have been sent
			$this->registry->template->contact = dbc_contact::process_contact($this->registry->dbc, $this->sb_grande['sb_author'], $this->sb_grande['sb_cookie'], $this->sb_grande['sb_app_name'], $this->sb_grande['sb_title'], $this->sb_grande['sb_site_email']);

			// Grab process.php template
			$this->registry->template->show('header');
			$this->registry->template->show('process');
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

	// Create closed method
	public function closed()
	{
		// Set values for the site
		$this->registry->template->sb_open = dbc_switchboard::get_open($this->registry->dbc);

		if($this->sb_open['sb_open'] == 1)
		{
			// Redirect visitor
			$this->registry->template->redirect = 1;

			// Grab content from database
			$this->registry->template->page = 7;
			$this->registry->template->page_info = dbc_pages::get_page_info($this->registry->dbc);
			$this->registry->template->page_posts = dbc_pages::get_page_posts($this->registry->dbc, 7);

			// Grab closed.php template
			$this->registry->template->show('closed');
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