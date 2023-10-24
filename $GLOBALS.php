$GLOBALS is a Php Super Global Variable which is used to access global variables from anywhere
in the PHP script.
<?php
$a = 10;
$b = 15;
function addition() {
$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
addition();
echo $c;
?>
