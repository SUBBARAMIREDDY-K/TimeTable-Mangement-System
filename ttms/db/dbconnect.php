<?php
    $host = getenv("HOST");
    $user = getenv("USER");
    $pass = getenv("PASSWORD");
    $dbname = getenv("DB");
    if($mycon = @mysqli_connect($host,$user,$pass))
    {
        if(!mysqli_select_db($mycon,$dbname))
        {
            echo 'Could not connect to the DataBase';
        }
    }
    else{
        echo 'Could not connect to the server';
    }
?>