<?php

header('Content-Type: application/json');

$json_file="./assets/json/disks.json";
$json_data= file_get_contents($json_file);
echo ($json_data);

?>