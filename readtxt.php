<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mytxt{color: #FF00FF;}
    </style>

</head>
<body>
    <h1>ข้อมูลนักศึกษา : ใช้ fread</h1>
    <?php

    $myfile = fopen("myname.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("myname.txt"));
    fclose($myfile);
    echo "<p>------------------------------------------------------------------</p>";
    ?>

   
    <h1>ข้อมูลนักศึกษา : ใช้ fgets</h1>
    <?php
    $myfile = fopen("myname.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("myname.txt"));
    fclose($myfile);
    echo "<p>------------------------------------------------------------------</p>";
    ?>


<h1>ข้อมูลนักศึกษา : ใช้ fgets รว่มกับ feof</h1>
    <?php
    $myfile = fopen("myname.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    ?>


</body>
</html>