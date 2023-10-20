It is used to check whether a Variables is empty. It also checks whether the variable is set/declared:
<?php
$x = 0;
// True because $x is set 
if (isset($x)) {
echo "Variable 'x' is set";
}
