<?php
// Get your db connection file, be sure it has a new connection to the
// tech support database
// require_once('../../../databases.php');
// $db = tech_support_link();

// Get the models needed - work will need to be done in both
require('model/prospects_db.php');
require('db_connection.php');

$link = db_link();

$action = filter_input(INPUT_POST, 'action');
$lang = filter_input(INPUT_GET, 'lang');

// language settings
include 'trans_index.php';
session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang']=1;
}

if ($lang != NULL) {
  if ($lang == 'es') {
    $_SESSION['lang']=1;
  } else {
    $_SESSION['lang']=0;
  }
}

$language = $_SESSION['lang'];

if ($action == NULL) {
    $action = 'commingsoon';
}

if ($action == 'commingsoon') {
  include('comming_soon.php');

} else if ($action == 'register') {
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  if ($email == NULL || $email == FALSE) {
    $customer = NULL;
    $error = $enter_valid_email[$language];
    include('comming_soon.php');
  } else {
    addProspect($email);
    header('Location: thankyou.php');
  }
}
