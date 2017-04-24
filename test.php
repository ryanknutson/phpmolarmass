<pre>
<?php
$re = '/\((?:[^\)]+)\)([1-9]+)/';
$str = 'H20(CO2)24';

preg_match($re, $str, $matches, PREG_OFFSET_CAPTURE, 0);

// Print the entire match result
var_dump($matches);
?>
</pre>
