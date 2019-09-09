<?php

namespace tranber;

use tranber\services\Conf;
use tranber\services\App;

include '../vendor/autoload.php';

$data = [
	'site-url' => 'http://localhost/tranber/public/',
	'routes'   => [
		'/'       => 'tranber\controllers\Home',
		'sign-up' => 'tranber\controllers\SignUp',
	],
	'database' => [
		'name' => 'tranber',
		'user' => 'root',
		'pass' => '',
		'host' => 'localhost',
	],
];

$conf = Conf::getInstance($data);
// $conf = new Conf($data);

$app = App::getInstance($conf);
// $app = new App($conf);
$app->run();