<?php 

include('merkclass.php');
$config = parse_ini_file(__DIR__ . "\config.ini", true);
$merkObject = new MerkClass;
$id = $_POST["id"];
$Name = $_POST["UpdateName"];
$Beschreibung = $_POST["UpdateBeschreibung"];
$Datum = $_POST["UpdateDatum"];
$Uhrzeit = $_POST["UpdateUhrzeit"];
      
if(!isset($_POST["DataUpdate"]) && !isset($_POST["Remove"])){
        
        if(isset($_POST["StatusCheck"])){
                
                $newStatus = "erledigt";

        
        $merkObject->checkboxUpdate($config["database"]["hostname"]
        ,$config["database"]["username"]
        ,$config["database"]["password"]
        ,$config["database"]["database"],$id,$newStatus);
        
        header('location:../');
        
        }else{
                $newStatus = "nicht erledigt";
        
        $merkObject->checkboxUpdate($config["database"]["hostname"]
        ,$config["database"]["username"]
        ,$config["database"]["password"]
        ,$config["database"]["database"],$id,$newStatus);
        
        header('location:../');
        }

}elseif(isset($_POST["DataUpdate"])){
                $merkObject->update($config["database"]["hostname"]
                ,$config["database"]["username"]
                ,$config["database"]["password"]
                ,$config["database"]["database"],$id,$Name,$Beschreibung,$Datum,$Uhrzeit);
                header('location:../'); 

}elseif(isset($_POST["Remove"])){
                $merkObject->remove($config["database"]["hostname"]
                ,$config["database"]["username"]
                ,$config["database"]["password"]
                ,$config["database"]["database"],$id);
                header('location:../');
 
}



?>

