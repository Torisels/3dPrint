<?php

$arr = scandir("../files");
unset($arr[0]);
unset($arr[1]);
$arr = array_values($arr);
echo json_encode(['files'=>$arr]);
