<?php

	require_once 'clients.model.php';

	$app->get('/clients', function () use($app) {
		$app->response()->header('Content-Type', 'application/json');
		echo json_encode(BlackAndRed_Model_Clients::get());
	});

	$app->get('/clients/:id', function ($id) use($app) {
		$app->response()->header('Content-Type', 'application/json');
		echo json_encode(BlackAndRed_Model_Clients::get($id));
	});

?>