<?php /* dbc_resume_class.php */
// Create dbc_resume class
class dbc_resume extends dbc {
	// Create list_categories method
	public function list_categories($conn) {
		$sql = $conn->prepare('SELECT id_category, category_title FROM categories');
		$sql->execute(); // Execute prepared statement
		$categories_list = array(); // Create categories_list property
		$count = ''; // Create count property
		foreach($sql->fetchAll() as $record) {
			$count = $record['id_category'];
			$this->categories_list[$count] = $record['category_title'];
		}
		return $this->categories_list;
	}

	// Create generate_resume method
	public function generate_resume($conn) {
		$sql = $conn->prepare('SELECT resume.id_resume, resume_categories.id_category, resume.resume_title, resume.resume_subtitle, resume.resume_body, resume.resume_popup FROM resume INNER JOIN resume_categories ON resume.id_resume=resume_categories.id_resume WHERE resume.resume_show=1 ORDER BY resume_categories.id_category, resume.id_resume');
		$sql->execute(); // Execute prepared statement
		$resume_list = array(); // Create resume_list property
		$count = ''; // Create count property
		foreach($sql->fetchAll() as $record) {
			$count = $record['id_resume'];
			$this->resume_list[$count] = array('id_category' => $record['id_category'], 'resume_title' => $record['resume_title'], 'resume_subtitle' => $record['resume_subtitle'], 'resume_body' => $record['resume_body'], 'resume_popup' => $record['resume_popup']);
		}
		return $this->resume_list;
	}
}
?>