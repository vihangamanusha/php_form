<?php
   $file="myfile.txt";
   $handle=fopen($file,"r") or die('can not open the file :'.$file);  
   $filesize=filesize($file);
   $filetext=fread($handle,$filesize);
   fclose($handle);

   echo("file size $filesize and text is $filetext");
   
?>