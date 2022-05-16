<?php
   $server="localhost";
   $username="root";
   $password="";
   $dbname="blood";

   $con=mysqli_connect($server,$username,$password,$dbname);

   if(!$con){
     die("Connection to this database failed due to" . mysqli_connect_error());
   }
   //echo "Successfully connected";
 ?>
