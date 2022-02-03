<?php 

    $dbhost = "localhost";
    $dbname = "chat";
    $dbuser = "root";
    $dbpass = "";

    try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
   
    /*
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "chat";

    $db = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName );
     */
?>