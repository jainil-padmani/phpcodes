<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal Variable</title>
</head>
<body>
    <?php
        echo $_SERVER["DOCUMENT_ROOT"] . "<br>";  // display the current path of root directory 
        echo $_SERVER["PHP_SELF"] . "<br>"; // display the current file name path 
        echo $_SERVER["SERVER_NAME"] . "<br>"; // display the server name 
        echo $_SERVER["REQUEST_METHOD"] . "<br>"; // display the request method (get, post ...)
        /*
        POST - submit the data to database or website  (eg - login credentials )
        GET - trying to get the data from database and show to the user (eg - to get the username in profile page after login)
        */
        echo $_GET["name"] . " "; // insert the data in link to get from it --- eg link?name=Jainil
        echo $_GET["surname"] . "<br>"; // insert the data in link to get from it --- eg link?name=Jainil&&surname=Padmani
        /*
        other superglobal variables are $_FILE, $_SESSION, $_COOKIE, $_ENV
        to grab the data from server using SESSION and COOKIE
        */ 
    ?>
</body>
</html>