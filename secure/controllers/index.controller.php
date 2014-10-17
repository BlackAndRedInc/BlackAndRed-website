<?php

	$app->get('/', function () use($app) {
	    $app->render("index.php");
	});

	$app->get('/ps-like-fonzie', function () use($app) {
	    $app->render("photoshop-like-fonzie.php");
	});

?>