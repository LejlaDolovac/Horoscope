*/ GET */

<?php 
 session_start();
 if($_SERVER['REQUEST_METHOD'] == "GET"){
     if(isset($_SESSION["horoskope"])) {
         echo json_encode($_SESSION['horoskope']);
         exit();
     }
 }


?>