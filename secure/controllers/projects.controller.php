<?php

	$app->get('/projects', function () use($app) {
		$projects = ORM::for_table('projects')
		->find_many(true);

		$app->response()->header('Content-Type', 'application/json');
		echo json_encode($projects);
		
	});

	$app->get('/projects/:id', function ($id) use($app) {
		$projects = ORM::for_table('projects')
		->find_one($id);
		
		$response = $projects ? $projects->as_array() : array();

		$app->response()->header('Content-Type', 'application/json');
		echo json_encode($response);
		
	});

?>