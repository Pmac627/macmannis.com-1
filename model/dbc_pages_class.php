<?php /* dbc_pages_class.php */
// Create dbc_pages class
class dbc_pages extends dbc
{
	// Create get_page_info method
	public function get_page_info($conn)
	{
		$sql = $conn->prepare('SELECT id_page, page_title, page_subtitle, page_popup_title, page_follow, page_index, page_keywords, page_description, page_jquery, page_thickbox FROM pages');
		$sql->execute(); // Execute prepared statement
		$page_info = array(); // Create page_info property
		foreach($sql->fetchAll() as $record)
		{
			$this->page_info[$record['id_page']] = array('page_title' => $record['page_title'], 'page_subtitle' => $record['page_subtitle'], 'page_popup_title' => $record['page_popup_title'], 'page_follow' => $record['page_follow'], 'page_index' => $record['page_index'], 'page_keywords' => $record['page_keywords'], 'page_description' => $record['page_description'], 'page_jquery' => $record['page_jquery'], 'page_thickbox' => $record['page_thickbox']);
		}
		return $this->page_info;
	}

	// Create get_page_posts method
	public function get_page_posts($conn, $page)
	{
		$sql = $conn->prepare('SELECT posts.id_post, posts.post_title, posts.post_body, posts.post_author, posts.post_date FROM posts RIGHT JOIN pages_posts ON posts.id_post=pages_posts.id_post WHERE pages_posts.id_page=? AND posts.post_show=1 ORDER BY posts.id_post, posts.post_date');
		$sql->bindParam(1, $page, PDO::PARAM_STR); // Bind parameter
		$sql->execute(); // Execute prepared statement
		$page_posts = array(); // Create page_posts property
		foreach($sql->fetchAll() as $record)
		{
			$this->page_posts[$record['id_post']] = array('post_title' => $record['post_title'], 'post_body' => $record['post_body'], 'post_author' => $record['post_author'], 'post_date' => $record['post_date']);
		}
		return $this->page_posts;
	}
}
?>