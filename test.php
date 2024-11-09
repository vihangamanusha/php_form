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
    echo ("can use database $database"."<br>");
   }
   
   $sql_table='CREATE TABLE IF NOT EXISTS student(
                   NIC INT(2)AUTO_INCREMENT,
                   NAME VARCHAR(50),
                   ADDERESS VARCHAR(250),
                   PRIMARY KEY(NIC)
   ) ';

   if(!mysqli_query($conn,$sql_table)){
    die('can not create table'.mysqli_error($conn));
   }else{
    echo 'create table succesfully';
   }

   $sql_data_insert="INSERT INTO student
                        (NAME,ADDERESS)
                     VALUES
                        ('Vihanga','dehiowita'),
                        ('kavindu','awissawella')";
   if(!mysqli_query($conn,$sql_data_insert)){
      die ('can not insrt data to table :'.mysqli_error($conn));
   }else{
      echo 'data insert successfully';
   }
   
   
   mysqli_close($conn);


   
?>