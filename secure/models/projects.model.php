<?php

class BlackAndRed_Model_Projects {

	static function get($id = null){
		$projects = ORM::for_table('projects');

		if(isset($id)){
			$response = $projects->find_one($id);
			return $response ? array($response->as_array()) : array(); 
		}else{
			return $projects->find_many(true);
		}
	}
}

?>