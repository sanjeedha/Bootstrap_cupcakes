<?php

    error_reporting(E_ALL ^ E_DEPRECATED);
    echo "entered!!";
    $db_host = "127.0.0.1";
    $db_username = "root";
    $db_pass = "";
    $db_name = "280Bootstrap";

    $name = $_POST['usrnameR'];
    $pass = $_POST['pswR'];
    echo $pass;
    if(!( $database = mysql_connect($db_host,$db_username,$db_pass)))
    					{die("Could not connect to database!"); echo 'could not connect1';}
    					//echo "connected to db";

    				//open Products database
    				if(!mysql_select_db($db_name, $database))
    					{die("Could not open cmpe280database!"); echo 'could not connect2'; }
    				echo "connected";

    				 mysql_query("INSERT INTO user (name,password) VALUES ('$name','$pass') ");
    				 echo "query";

   ?>