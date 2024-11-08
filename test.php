<?php
   $host='localhost';
   $username='root';
   $password='801@Vihanga';

   $conn=mysqli_connect($host,$username,$password);

   if(!$conn){
    die('could not connect :'.mysqli_error($conn));}

   echo 'connected successfully';
   mysqli_close($conn);
   
?>