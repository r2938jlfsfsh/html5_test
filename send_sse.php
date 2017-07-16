<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

//generate random number for demonstration
$new_data = rand(0, 1000);
//echo the new number
//echo "retry: 5000\ndata: {$newdata}\n\n";
echo "data: {$new_data}\n\n";
flush();
?>
