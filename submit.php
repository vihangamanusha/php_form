<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    if(!preg_match("/^[a-zA-Z\s]*$/",$name)){
        $nameerr="only letters and white spaces";
        echo $nameerr;
    }
    else{
        echo "your name is :".htmlspecialchars($name);
    }
}
?>











































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































