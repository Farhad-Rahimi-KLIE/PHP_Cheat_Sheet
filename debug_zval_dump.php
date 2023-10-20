debug_zval_dump is used to dump a string representation of an internal zval structure to output
<?php
$var1 = 'Hello';
$var1 .= ' World';
$var2 = $var1;
debug_zval_dump($var1);
?>