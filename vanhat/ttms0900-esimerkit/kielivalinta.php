<html>
<head>
    <title>PHP-esimerkki kielivalinta.php</title>
</head>
<body>
<?php
    // Testataan, löytyykö selaimen lähettämästä Accept-Language-otsakkeesta
// merkkijonoa "fi"
if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], "fi"))
{
   echo "Haloo, Maailma!<br>\n";
   echo "IP-numerosi on: {$_SERVER['REMOTE_ADDR']}<br>\n";
   echo "Käyttämäsi selain on: {$_SERVER['HTTP_USER_AGENT']}<br>\n";

}
else
{
   echo "Hello, World!<br>\n";
   echo "Your IP-number is: {$_SERVER['REMOTE_ADDR']}<br>\n";
   echo "Your browser is: {$_SERVER['HTTP_USER_AGENT']}<br>\n";
}
?>
</body>
</html>