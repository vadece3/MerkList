<?php 

include('merkclass.php');
$merkObject = new MerkClass;
$id = $_POST["id"];
$Name = $_POST["UpdateName"];
$Beschreibung = $_POST["UpdateBeschreibung"];
$Datum = $_POST["UpdateDatum"];
$Uhrzeit = $_POST["UpdateUhrzeit"];
      
if(!isset($_POST["DataUpdate"]) && !isset($_POST["Remove"])){
        
        if(isset($_POST["StatusCheck"])){
                
                $newStatus = "erledigt";

        
        $merkObject->checkboxUpdate("localhost","root","","merkdata",$id,$newStatus);
        
        header('location:../');
        
        }else{
                $newStatus = "nicht erledigt";
        
        $merkObject->checkboxUpdate("localhost","root","","merkdata",$id,$newStatus);
        
        header('location:../');
        }

}elseif(isset($_POST["DataUpdate"])){
                $merkObject->update("localhost","root","","merkdata",$id,$Name,$Beschreibung,$Datum,$Uhrzeit);
                header('location:../'); 

}elseif(isset($_POST["Remove"])){
                $merkObject->remove("localhost","root","","merkdata",$id);
                header('location:../');
 
}



?>

