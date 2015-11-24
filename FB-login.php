<?php

define('FACEBOOK_SDK_V4_SRC_DIR', '/path/to/fb-php-sdk-v4/src/Facebook/');
require __DIR__ . '/path/to/facebook-php-sdk-v4/autoload.php';

/*
$host = "localhost";   
$user = "root";
$pass = "root";
$db = "illness"; 


$conn = new PDO("mysql:host=$host;databasename=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

use Facebook\FacebookSession;
FacebookSession::setDefaultApplication('477303215782687', 'd1dedb940fedaa0a1ad6437110c0ae57');


   $facebook = new Facebook(array(
        'appId'  => '477303215782687',
        'secret' => 'd1dedb940fedaa0a1ad6437110c0ae57',
        
));

        $user = $facebook->getUser();

        if ($user) {
          try {
            // Proceed knowing you have a logged in user who's authenticated.
            $user_profile = $facebook->api('/me');
            $logoutUrl = $facebook->getLogoutUrl();
          } catch (FacebookApiException $e) {
            $user = null;
          }
        } else {
            $loginUrl = $facebook->getLoginUrl();
        }

                //var_dump($first_name);
                //var_dump($last_name);
*/
?>
