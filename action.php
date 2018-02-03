<?php
require_once "helpers.php";
require_once "server/config.php";

$lines = countLines("instructions.txt");
if($lines >100) {
    unlink("instructions.txt");
    file_put_contents("instructions.txt","");
}

$d = 'version';
$var = file("instructions.txt");
$last_instruction = $var[count($var)-1];
$to_display = explode(";",$last_instruction)[1];


echo json_encode(['instruction'=>$to_display, 'data'=>$d]);



if(isset($_GET['ping'])&&isset($_GET['key']))
{
    if($_GET['key']===API_KEY)
    {if(countLines("ping.txt")>3600)
        unlink("ping.txt");
    $data = $mydate.";".$_GET['ping']."\n";
    file_put_contents("ping.txt",$data,FILE_APPEND);}
}
