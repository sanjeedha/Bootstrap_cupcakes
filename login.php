<?php

    error_reporting(E_ALL ^ E_DEPRECATED);
    
    $db_host = "127.0.0.1";
    $db_username = "root";
    $db_pass = "";
    $db_name = "280Bootstrap";

    $name = $_POST['usrnameL'];
    $pass = $_POST['pswL'];
    
    if(!( $database = mysql_connect($db_host,$db_username,$db_pass)))
    					{die("Could not connect to database!"); echo 'could not connect1';}
    					//echo "connected to db";

    				//open Products database
    				if(!mysql_select_db($db_name, $database))
    					{die("Could not open cmpe280database!"); echo 'could not connect2'; }
    				
 
    				$result= mysql_query("SELECT * FROM user WHERE name='{$name}' && password= '{$pass}' ");
                    if(mysql_num_rows($result) == 0) {
                        echo "error";

                    } else {
                        echo "success";
                    }
    				
   ?>