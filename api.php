<?php

$contents = file_get_contents('myndir.json');
 
$contentsDecoded = json_decode($contents, true);

print_r($contentsDecoded);

$contentsDecoded['counter']++;
 
$json = json_encode($contentsDecoded);
 
file_put_contents('myndir.json', $json);
