<?php
session_start();

// Use your App ID and App Secret from Facebook Developer Dashboard
$facebookAppId = '139500992262442';
$facebookAppSecret = 'd258193ddbc9b0220555b8de61416722';
$redirectUri = 'https://beeown.com'; // Replace with your callback URL

if(isset($_GET['code'])) {
  $code = $_GET['code'];
  $accessTokenUrl = "https://graph.facebook.com/v13.0/oauth/access_token?client_id={$facebookAppId}&redirect_uri={$redirectUri}&client_secret={$facebookAppSecret}&code={$code}";
  
  $accessTokenData = file_get_contents($accessTokenUrl);
  $accessTokenData = json_decode($accessTokenData);

  if(isset($accessTokenData->access_token)) {
    $userAccessToken = $accessTokenData->access_token;

    // Fetch user data using the access token
    $userDataUrl = "https://graph.facebook.com/v13.0/me?fields=id,name,email&access_token={$userAccessToken}";
    $userData = file_get_contents($userDataUrl);
    $userData = json_decode($userData);

    // Now you can create or update the user profile in your system
    $userId = $userData->id;
    $userName = $userData->name;
    $userEmail = $userData->email;

    // Example: Save $userId, $userName, $userEmail to your database
  } else {
    echo 'Access token not obtained.';
  }
} else {
  echo 'Code not received.';
}
?>
