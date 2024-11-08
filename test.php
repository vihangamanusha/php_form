<?php
   $conn=mysqli_connect('localhost','root','801@Vihanga');
   if(!$conn){
    die ('couldnot connect :'.mysqli_error($conn));
   }
   echo "connected succesfully<br>";
   
   $database='newmy';
   $sql_database_create="CREATE DATABASE IF NOT EXISTS $database";

   if(!mysqli_query($conn,$sql_database_create)){
    die ("can not create database $database:".mysqli_error($conn));
   }

   echo ("database $database created succesfully <br>");

   $db_selected=mysqli_select_db($conn, $database);
   if(!$db_selected){
    die ('con not use database '.mysqli_error($conn));
   }else{
    echo ("can use database $database");
   }

   mysqli_close($conn);


   
?>