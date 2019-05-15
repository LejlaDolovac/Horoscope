*/ PUT */

<?php 
 parse_str(file_get_contents("php://input"), $_PUT);

 include './addHoroskop.php';

 if(($_SERVER['REQUEST_METHOD'] == 'POST') AND ($_POST['collection'] == 'update')){
       $date = $_POST['newHoroskop'];
       $horoskope = new addHoroskop();
       $newHScope = $horoskope->showHoroskope($date);

       if(isset($_SESSION['horoskope'])){
           unset($_SESSION['horoskope']);
           $_SESSION['horoskope'] = $newHScope;
           exit;
       } else {
           echo json_encode(false);
       }
 } else {
     echo json_encode(false);
 }



?>