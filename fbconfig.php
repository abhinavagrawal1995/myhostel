<?php
session_start();
// added in v4.0.0
require_once 'Facebook/autoload.php';
include 'keys.php'
//require 'functions.php';  
use FacebookFacebookSession;
use FacebookFacebookRedirectLoginHelper;
use FacebookFacebookRequest;
use FacebookFacebookResponse;
use FacebookFacebookSDKException;
use FacebookFacebookRequestException;
use FacebookFacebookAuthorizationException;
use FacebookGraphObject;
use FacebookEntitiesAccessToken;
use FacebookHttpClientsFacebookCurlHttpClient;
use FacebookHttpClientsFacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( $app_id,$app_secret );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://projects.abhinavagrawal.in/myhostel/fbconfig.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
	/* ---- Session Variables -----*/
	    $_SESSION['FBID'] = $fbid;           
        $_SESSION['FULLNAME'] = $fbfullname;
	    $_SESSION['EMAIL'] =  $femail;
  //checkuser($fuid,$ffname,$femail);
  header("Location: index.php");
} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
?>