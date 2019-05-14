<?php 
session_start();

if($_SERVER["REQUEST_METHOD"] == "DELETE"){
     
if(isset($_SESSION["horoskope"])){
     unset($_SESSION["horoskope"]);
     echo json_encode(true);
    } else {
        echo json_encode(false);
    }
}







?>