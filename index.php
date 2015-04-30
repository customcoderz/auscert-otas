<?php

// kickstart the framework
$f3 = require('lib/base.php');

// some constants to tell the framework where the header/footer files are
define('HEADER_PATH', 'views/includes/header.htm');
define('FOOTER_PATH', 'views/includes/footer.htm');

// tell the framework we're working on this database
$f3->set('DB', new DB\SQL('mysql:host=127.0.0.1;dbname=auscertdb', 'root', ''));

// tell the framework we'll use sessions
new DB\SQL\Session($f3->get('DB'));

/*
 * GET /
 * -> if authenticated go to main page
 * -> otherwise go to login page
 */
$f3->route('GET /', function($f3) {
  // !!TODO!!

  // if the user has not logged in
  if (!$f3->exists('SESSION.email')) {
    $f3->reroute('/login');
  } else {
    // TODO: display main page

  }
});

/*
 * GET /login
 * -> display login form
 */
$f3->route('GET /login', function($f3) {
  // clear the session first
  $f3->clear('SESSION');

  // header & footer files
  $f3->set('header', HEADER_PATH);
  $f3->set('footer', FOOTER_PATH);

  // set the class of '<body>' tag
  $f3->set('bodyclass', 'login-page');

  // render the template
  echo Template::instance()->render('views/login.htm');
});

/*
 * POST /login
 * -> the real authentication process
 */
$f3->route('POST /login', function($f3) {
  // instantiate sql mapper
  $mapper = new DB\SQL\Mapper($f3->get('DB'), 'user');

  // instantiate authenticator
  $auth = new Auth($mapper, array('id' => 'email', 'pw' => 'password'));

  // authenticate
  if ($auth->login($f3->get('POST.user-email'), $f3->get('POST.user-password'))) {
    // if successful
    // TODO
  } else {
    // if fail
    // TODO
  }
});

// $f3->route('GET /db', function($f3) {
//   $db = $f3->get('DB');
//   $mapper = new DB\SQL\Mapper($db, 'user');
//   $auth = new Auth($mapper, array('id' => 'email', 'pw' => 'password'));
//   var_dump($auth->login('john@example.com', 'jmayer1234'));
// });

// run the application
$f3->run();
