<?php
$cookieName = 'username';
$cookieValue = 'Anton Mike';
$expirationTime = time() + 3600; //1hr in seconds.

setcookie($cookieName, $cookieValue, $expirationTime);
echo "Cookie named 'username' has been set with value of 'Anton Mike'. ";
?>