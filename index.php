<?php

// kickstart the framework
$f3 = require('lib/base.php');

// Some constants to tell the framework where the header/footer files are
define('HEADER_PATH', 'views/includes/header.htm');
define('FOOTER_PATH', 'views/includes/footer.htm');

/*
 * GET /
 * -> if authenticated go to main page
 * -> otherwise go to login page
 */
$f3->route('GET /', function($f3) {
	
	// header & footer files
	$f3->set('header', HEADER_PATH);
	$f3->set('footer', FOOTER_PATH);

	// set the class of '<body>' tag
	$f3->set('bodyclass', 'login-page');

	// render the template
	echo Template::instance()->render('views/login.htm');
});

// run the application
$f3->run();