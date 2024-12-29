<?php
    $l="localhost";
    $u="root";
    $p="asha13";
    $db="project";
    $con=mysqli_connect($l,$u,$p,$db);
    if(!$con){
        die("not connect".mysqli_connect_error());
    }
    else{
        echo"connected";
    }
	
?>
