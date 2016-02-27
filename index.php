<?php

require('vendor/autoload.php');

$app = new Silex\Application();


// Our web handlers

$app->get('/', function() use($app) {
	 $poi = file_get_contents('info.json');
	 return $poi;
});

$app->run();
