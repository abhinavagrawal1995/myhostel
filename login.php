<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBW1hzii6rbHf2vTS29IYtVzPAJuJe7CLQ",
    authDomain: "project-5399686963087685171.firebaseapp.com",
    databaseURL: "https://project-5399686963087685171.firebaseio.com",
    storageBucket: "",
  };
  firebase.initializeApp(config);
</script>

<?php 
include 'keys.php'; 
require_once 'Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => $app_id, // Replace {app-id} with your app id
  'app_secret' => $app_secret,
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>