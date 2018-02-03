<?php
/**
 * Created by PhpStorm.
 * User: Gustaw
 * Date: 21-Jan-18
 * Time: 17:03
 */
function countLines($file)
{
    $lineCount = 0;
    $handle = fopen($file, "r");
    while(!feof($handle)){
        fgets($handle);
        $lineCount++;
    }

    fclose($handle);

    return $lineCount;
}

function handleFileLines($lines_to_delete,$filename)
{
    $lines = countLines($filename);

    if ($lines > $lines_to_delete) {
        unlink($filename);
        touch($filename);
    }
}
function showFiles($path)
{
    $arr = scandir($path);
    unset($arr[0]);
    unset($arr[1]);
    return array_values($arr);
}




$date = new DateTime();
$mydate = $date->format('Y-m-d H:i:s');