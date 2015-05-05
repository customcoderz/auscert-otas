<?php

// kickstart the framework
$f3 = require('lib/base.php');

// tell the framework where the header and footer files are
$f3->set('header', 'views/includes/header.htm');
$f3->set('footer', 'views/includes/footer.htm');

// tell the framework we're working on this database
$f3->set('DB', new DB\SQL('mysql:host=127.0.0.1;dbname=auscertdb', 'root', ''));

// tell the framework we'll use sessions
new DB\SQL\Session($f3->get('DB'));

// user model
$f3->set('user', new DB\SQL\Mapper($f3->get('DB'), 'user'));

// a function that can be used to check
// authentication status of the user
$f3->set('isAuthenticated', function() {
  return F3::exists('SESSION.email');
});

/*
 * GET /
 * -> if authenticated go to main page
 * -> otherwise go to login page
 */
$f3->route('GET /', function($f3) {

  // if the user has not logged in
  if (!$f3->exists('SESSION.email')) {
    // go to login page
    $f3->reroute('/login');
  } else {
    // retrieve user mapper
    $user = $f3->get('user');

    // get currently active user data
    $user = $user->find("email = '" . $f3->get('SESSION.email') . "'")[0];
    $f3->set('username', "{$user->first_name} {$user->last_name}");

    // set the class of '<body>' tag
    $f3->set('bodyclass', 'skin-purple');

    // render the template
    echo Template::instance()->render('views/index.htm');
  }
});

/*
 * GET /login
 * -> display login form
 */
$f3->route('GET /login', function($f3) {
  // If already logged in, go to main page
  if ($f3->exists('SESSION.email')) {
    $f3->reroute('/');
    return;
  }

  // set the class of '<body>' tag
  $f3->set('bodyclass', 'login-page');

  // render the template
  echo Template::instance()->render('views/login.htm');

  // clear the flash message after use
  $f3->clear('SESSION.flash');
});

/*
 * POST /login
 * -> the real authentication process
 */
$f3->route('POST /login', function($f3) {
  // instantiate sql mapper
  $user = $f3->get('user');

  // instantiate authenticator
  $auth = new Auth($user, array('id' => 'email', 'pw' => 'password'));

  // authenticate
  if ($auth->login($f3->get('POST.user-email'), $f3->get('POST.user-password'))) {
    // if successful
    
    // set session
    $f3->set('SESSION.email', $f3->get('POST.user-email'));
    $f3->set('authenticated', TRUE);

    // get currently active user data
    $user = $user->find("email = '" . $f3->get('SESSION.email') . "'")[0];
    $f3->set('username', "{$user->first_name} {$user->last_name}");

    // display main page
    $f3->reroute('/');
  } else {
    // if fail

    // make a flash message
    $f3->set('SESSION.flash', 'Invalid email or password.');

    // display login form again
    $f3->reroute('/login');
  }
});

/*
 * GET /logout
 * -> logout the user, redirect to login page
 */
$f3->route('GET /logout', function($f3) {
  // clear the login data
  $f3->clear('SESSION.email');

  // make a flash message
  $f3->set('SESSION.flash', 'You\'ve been logged out');

  // redirect
  $f3->reroute('/');
});

$f3->route('GET /profile', function($f3) {

  // if the user has not logged in
  if (!$f3->exists('SESSION.email')) {
    // go to login page
    $f3->reroute('/login');
  } else {
    // retrieve user mapper
    $user = $f3->get('user');

    // get currently active user data
    $user = $user->find("email = '" . $f3->get('SESSION.email') . "'")[0];
    $f3->set('username', "{$user->first_name} {$user->last_name}");

    // set the class of '<body>' tag
    $f3->set('bodyclass', 'skin-purple');

    // render the template
    echo Template::instance()->render('views/mydetails.htm');
  }
});

$f3->route('GET /training', function($f3) {
  // if the user has not logged in
  if (!$f3->exists('SESSION.email')) {
    // go to login page
    $f3->reroute('/login');
  } else {
    // retrieve user mapper
    $user = $f3->get('user');

    // get currently active user data
    $user = $user->find("email = '" . $f3->get('SESSION.email') . "'")[0];
    $f3->set('username', "{$user->first_name} {$user->last_name}");

    // set the class of '<body>' tag
    $f3->set('bodyclass', 'skin-purple');

    // render the template
    echo Template::instance()->render('views/mytraining.htm');
  }
});

// run the application
$f3->set('DEBUG', 3);
$f3->run();
