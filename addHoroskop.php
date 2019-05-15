


<?php session_start(); 
 
class AddHoroskop{
    function __construct(){
       include_once('database.php');
       $this->database = new Database(); 
    }

    public function showMyHoroscope($chosenDate) {
        $query = $this->database->connection->prepare("SELECT horoscopeSign FROM 'labb-3'
        WHERE (dateFrom <= '$chosenDate') AND (dateUntil >= '$chosenDate');");
        $query->execute();
        $result = $query->fetchAll();

        if(empty($result)){
            return array("error" => "Somethings wrong homie!");
        }
        return check($date, $result);

        }
    }
     if($_SERVER['REQUEST_METHOD'] == "POST"){
         try{
             if($_POST['collection'] == 'horoskope') {
                 $date = $_POST['inputDate'];
                 $currentHoroskop = new AddHoroskop();
                 $databaseResult = $currentHoroskop->showMyHoroscope($date);
                 echo json_encode($databaseResult);
                 exit();
             }
             else {
                 include "updateHoroskop.php";
                 $date = $_POST['inputDate'];
                 $currentHoroskop = new updateHoroskop();
                 $databaseResult = $currentHoroskop->update($date);
                 echo json_encode($databaseResult);
                 exit();
             }
             
         } catch(PODException $e){
             throw $e;
         }
     } 

?>