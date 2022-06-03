<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.dist.php';

session_start();

if (!isset($_SESSION['userReference'])) {
  // INITIALISEER OAUTH CLIENT
  $client = new OAuth2\Client($smartschool['oauthClient'], $smartschool['oauthPassword']);

  // OAUTH CALLBACK URL = URL VAN UW EIGEN TOEPASSING
  $callBackUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/login.php';

  // OAUTH CALLBACK URL = URL VAN UW EIGEN TOEPASSING
  $callBackUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/callback";

  // INITIALISEER DE OAUTH FLOW NAAR SPECIFIEK PLATFORM
  $oAuthUrl = 'https://' . $smartschool['platform'] . '/OAuth';

  try {
    // HAAL DE AUTHENTICATIE URL OP
    $auth_url = $client->getAuthenticationUrl(
      $oAuthUrl,
      $callBackUrl,
      ['scope' => 'userinfo']
    );
    //REDIRECT NAAR DE AUTHENTICATIE URL
    Location($auth_url);
    die;
  } catch (\Exception $e) {
    echo $e->getMessage();
    die;
  }
} else Location('/');
