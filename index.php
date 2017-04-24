<html>
<head>
<title>Molar Mass Calculator</title>
</head>

<body>

<pre>
<?php

$input = "Ag3PO4(H2O)23(HCL)2";

$matches = null;
$returnValue = preg_match_all('/[A-Z][a-z]?\\d*|\\((?:[^()]*(?:\\(.*\\))?[^()]*)+\\)\\d+/', $input, $matches);

print_r($matches);


preg_match_all("/[A-z][^0-9](?!\d)/", $input, $output_array);

print_r($output_array);

?>
</pre>

</body>
</html>
