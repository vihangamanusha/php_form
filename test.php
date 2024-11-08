<?php
   $conn=mysqli_connect('localhost','root','801@Vihanga');
   if(!$conn){
    die ('couldnot connect :'.mysqli_error($conn));
   }
   echo "connected succesfully<br>";
   
   $database='newmy';
   $sql_database_create="CREATE DATABASE IF NOT EXISTS $database";

   if(!$sql_database_create){
    die ("can not create database $database:".mysqli_error($conn));
   }

   echo ("database $database created succesfully<br>");


   
   mysqli_close($conn);


   
?>