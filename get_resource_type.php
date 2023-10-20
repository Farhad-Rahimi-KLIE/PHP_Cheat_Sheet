It returns the Resource type:
<?php
// prints: stream 
$fp = fopen("foo", "w");
echo get_resource_type($fp) . "\n";
// prints: curl
$c = curl_init ();
echo get_resource_type($c) . "\n"; // works prior to PHP 8.0.0 as since 8.0 
?>
