<?php 
       $Name = $_POST["Name"];
       $Beschreibung = $_POST["Beschreibung"];
       $Datum = $_POST["Datum"];
       $Uhrzeit = $_POST["Uhrzeit"];
       $Status = "nicht erledigt";
       
       
        include('merkclass.php');
        $get_data = new MerkClass;
        $get_data->create("localhost","root","","merkdata",$Name,$Beschreibung,$Datum,$Uhrzeit,$Status); 

        header('location:../');

?>