<?php
if (isset($_POST['submit1'])) {
require_once('kundan-php-develop/src/codebird.php');
 
\Codebird\Codebird::setConsumerKey("XXXXXXXXXXXXXXXXX", "XXXXXXXXXXXXXXXXXXXXXXXXXXXXX"); // Put your Consumer Key (API Key) and Consumer Secret (API Secret) respectively
$cb = \Codebird\Codebird::getInstance();
$cb->setToken("XXXXXXXXXXXXXXXXXXXXXX", "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"); // Put your Access Token and Access Token Secret respectively

$params = array(
  'status' => $_POST['tweet']
);

	$reply = $cb->statuses_update($params);
	echo "Your Tweet has been successfully posted.<br><br>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tweet Directly</title>
</head>
<body>
<form method="post"><textarea name="tweet"></textarea><input type="submit" name="submit1"></form>
</body>
</html>