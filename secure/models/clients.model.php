<?php

class BlackAndRed_Model_Clients {

	static function get($id = null){
		$clients = ORM::for_table('clients');

		if(isset($id)){
			$response = $clients->find_one($id);
			return $response ? array($response->as_array()) : array(); 
		}else{
			return $clients->find_many(true);
		}
	}
}

?>