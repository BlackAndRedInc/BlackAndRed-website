<?php

	$app->get('/clients', function () use($app) {
		$clients = ORM::for_table('clients')
		->find_many(true);

		$app->response()->header('Content-Type', 'application/json');
		echo json_encode($clients);
		
	});

	$app->get('/clients/:id', function ($id) use($app) {
		$clients = ORM::for_table('clients')
		->find_one($id);
		
		$response = $clients ? $clients->as_array() : array();

		$app->response()->header('Content-Type', 'application/json');
		echo json_encode($response);
		
	});

?>