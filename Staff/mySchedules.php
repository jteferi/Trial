<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    
</head>

<body>
    
<?php

include_once './dbh.inc.php';
$username = $_COOKIE['userName'];
$userId = $_COOKIE['userId'];



$sqlall = "SELECT * FROM schedule WHERE Staffname = '$username'";
$resultall = mysqli_query($conn, $sqlall);
$resultCheckall = mysqli_num_rows($resultall);



if($resultCheckall > 0) {

    while($row = mysqli_fetch_assoc($resultall)){
        echo '<tr>
        <td>'.$row['Date'].'</td>
        <td>'.$row['Time'].'</td>
    </tr>';

    }
}

?> 