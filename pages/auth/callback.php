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

  try {
    // CALLBACK
    if (isset($_GET['code'])) {
      // HAAL DE TOKENS OP AAN DE HAND VAN DE TERUGGEGEVEN CODE
      $response = $client->getAccessToken('https://oauth.smartschool.be/OAuth/index/token', 'authorization_code', [
        'code'         => $_GET['code'],
        'redirect_uri' => $callBackUrl
      ]);

      if ($response['code'] != '200') {
        throw new \Exception('De authenticatie is niet gelukt!');
      }
      $accessToken = $response['result']['access_token'];

      $result = file_get_contents('https://oauth.smartschool.be/Api/V1/userinfo?access_token=' . $accessToken);
      $decoded                   = json_decode($result);
      $_SESSION['userReference'] = $decoded->userID;
      $_SESSION['firstname']     = $decoded->name;
      $_SESSION['lastname']      = $decoded->surname;
      $_SESSION['username']      = $decoded->username;
      $_SESSION['platform']      = str_replace(['https://', '/'], '', $decoded->platform);

      session_commit();
      // Check if there is a redirect url set in the session
      if (isset($_SESSION['redirect'])) {
        $redirect = $_SESSION['redirect'];
        unset($_SESSION['redirect']);
        Location($redirect);
      } else {
        Location('/');
      }
    }
  } catch (\Exception $e) {
    echo $e->getMessage();
    die;
  }
}

Location("/login");
