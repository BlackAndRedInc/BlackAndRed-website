<?php

	require_once 'projects.model.php';

	$app->get('/projects', function () use($app) {
		$app->response()->header('Content-Type', 'application/json');
		echo json_encode(BlackAndRed_Model_Projects::get());
	});

	$app->get('/projects/:id', function ($id) use($app) {
		$app->response()->header('Content-Type', 'application/json');
		echo json_encode(BlackAndRed_Model_Projects::get($id));
	});

?>