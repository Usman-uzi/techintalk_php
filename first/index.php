<!DOCTYPE HTML>
<html>
<head>
    <title>PHP Application</title>
</head>
<body>

<?php

# we can use '#' or '//' to comment in php

// this is how to declare variables in php
$userName = 1;

// this is how to define constants in php
define("baseUrl","Good to goo");

echo 'hello word '. baseUrl;

// print works same way as echo except it ouputs one string and also retuns 1, 
// thats why its little slower
$ret = print 'hello word '. baseUrl;
echo $ret; // 1 will be printed

$a = 123.00; // decimal number
var_dump($a);

?>

</body>
</html>