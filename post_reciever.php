<?php
require_once "helpers.php";
require_once "server/config.php";

 if(isset($_POST['data'])&&isset($_POST['key']))
{
    if($_POST['key']===API_KEY)
    {
        $data = $mydate . ";" . $_POST['data'] . "\n";
        file_put_contents("postlog.txt", $data, FILE_APPEND);
        handleFileLines(100, "instructions.txt");
        $lines = file("instructions.txt");
        $last_instruction = explode(";", end($lines))[1];
        if($last_instruction==='GET'||$last_instruction==='PUT')
        {
            file_put_contents("instructions.txt",$mydate.";PING;".PHP_EOL,FILE_APPEND);
        }
    }
}
