<?php

require_once 'facebook-php-sdk/src/facebook.php';

$config = array(
      'appId' => 'YOUR_APP_ID',
      'secret' => 'YOUR_APP_SECRET',
    );

$facebook = new Facebook($config);
$user = $facebook->getUser();

if($user){
    $token = $facebook->getAccessToken();
    echo $token;
}
 else {
     $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'publish_stream' ));
     echo 'Please <a href="' . $loginUrl . '">login.</a>';
}

?>