<?php
   $cookiename = 'name';
   $cookievalue = 'peter';
   $cookieexpire = time() + 3600; // Expires in 1 hour
   $cookiedomain = '127.0.0.1';
   
   // Set the cookie
   setcookie($cookiename, $cookievalue, $cookieexpire, '/', $cookiedomain, 0);

   // Check if the cookie is set before trying to access it
   if (isset($_COOKIE[$cookiename])) {
       $value = $_COOKIE[$cookiename];
       echo "Cookie value: " . $value;
   } else {
       echo "Cookie not yet set. Refresh the page to see the value.";
   }
?>

<html>
    <body>
        <h1>First Cookie</h1>
    </body>
</html>
