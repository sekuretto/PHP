<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="urlcode.php" method="get">
Syöte:<br>
<input type=text name="indata" value="yks + kaks">
<input type=submit>
</form>

<pre>
<?php
echo ("1:" . $_GET['indata'] . "\n");
echo ("2:" . urlencode($_GET['indata']) . "\n");
echo ("3:" . rawurlencode($_GET['indata']) . "\n");
$indata_urlcoded = urlencode($_GET['indata']);
$indata_rawurlcoded = rawurlencode($_GET['indata']);
echo ("4:" . urldecode($indata_urlcoded) . "\n");
echo ("5:" . rawurldecode($indata_rawurlcoded) . "\n");
?>
</pre>
</body>
</html>