<?php
include_once "./oauth/library/OAuthStore.php";
include_once "./oauth/library/OAuthRequester.php";

$key = 'fvXL5ADvVyzm2V2toPsCFQ'; // this is your consumer key
$secret = 'uDbWsadviz7QxQYdzIe2X8ScciUQjHYuG8SNBZi0'; // this is your secret key

$options = array( 'consumer_key' => $key, 'consumer_secret' => $secret );
OAuthStore::instance("2Leg", $options );

$url = "https://api.twitter.com/1/statuses/user_timeline.json?screen_name=eshwarz&count=2"; // this is the URL of the request
$method = "GET"; // you can also use POST instead
$params = null;

// try
// {
	// Obtain a request object for the request we want to make
	$request = new OAuthRequester($url, $method, $params);

	// Sign the request, perform a curl request and return the results, 
	// throws OAuthException2 exception on an error
	// $result is an array of the form: array ('code'=>int, 'headers'=>array(), 'body'=>string)
	$result = $request->doRequest();

	$response = $result['body'];
	echo $response;
// }
// catch(OAuthException2 $e)
// {
// 	echo 'Something went wrong';
// }
?>