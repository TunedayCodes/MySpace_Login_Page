<!-- ## HOW TO CONNECT MYSQL DATABASE IN PHP -->

<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "formdb";
    $conn = "";


    try{
      $conn = mysqli_connect($db_server,$db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
      echo"Could not connect... Check connection and try again";
    }


?>