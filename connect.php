<?php
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '';
	 $dbname = 'banking';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         
        
         
         ?>