<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Show logs</title>
</head>
<body>
<?php
require_once "helpers.php";
$files = showFiles("files");

echo "<br>";
//$lines = file("postlog.txt");
//$count = 0;
//foreach ($lines as $line)
//{
//    echo $count.". ".$line."<br>";
//    $count++;
//}
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" ></script>



<select class="custom-select">
    <option selected>Select a file</option>
    <?php
    $counter = 1;
    foreach ($files as $file)
    {echo "<option value=\"$counter\">$file</option>";
    $counter++;}
    ?>

</select>

</body>
</html>
