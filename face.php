<?php
session_start();
require_once 'vendor/autoload.php';
$fb = new \Facebook\Facebook([
  'app_id' => '167345997177659',
  'app_secret' => '7c2e25fc8593c07b675c8f9dcf3ad24a',
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);

$helper = $fb->getRedirectLoginHelper();

//var_dump($helper);
$permissions = ['email']; // Optional permissions


try {
  if (isset($_SESSION['face_acess_token'])){
    $accessToken = $_SESSION['face_acess_token'];
    
  }else {
    
    $accessToken = $helper->getAccessToken();
    

  }
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  $url_login = 'http://localhost/phpjobs/face.php';
  $loginUrl = $helper->getLoginUrl($url_login, $permissions);
  
}else{
  $url_login = 'http://localhost/phpjobs/face.php';
  $loginUrl = $helper->getLoginUrl($url_login, $permissions);
  //usuário já autenticado
  if (isset($_SESSION['face_acess_token'])){
    $fb->setDefaultAccessToken($_SESSION['face_acess_token']);
    
  }//usuário não está autenticado
  else{
    $_SESSION['face_acess_token'] = (string) $accessToken;
    $oAuth2Client = $fb->getOAuth2Client();
    $_SESSION['face_acess_token'] = $oAuth2Client->getLongLivedAccessToken($_SESSION['face_acess_token']);
    $fb->setDefaultAccessToken($_SESSION['face_acess_token']);
    
    
  }
  try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=id,name, picture, email');
    $user = $response->getGraphUser();
    var_dump($user);    
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }

}
?>

<a href="<?php echo $loginUrl; ?>">Facebook</a>

