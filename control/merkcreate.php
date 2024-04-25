<?php 
       $Name = $_POST["Name"];
       $Beschreibung = $_POST["Beschreibung"];
       $Datum = $_POST["Datum"];
       $Uhrzeit = $_POST["Uhrzeit"];
       $Status = "nicht erledigt";
       
        $config = parse_ini_file(__DIR__ . "\config.ini", true);
        
        include('merkclass.php');
        $get_data = new MerkClass;
        $get_data->create($config["database"]["hostname"]
        ,$config["database"]["username"]
        ,$config["database"]["password"]
        ,$config["database"]["database"],$Name,$Beschreibung,$Datum,$Uhrzeit,$Status); 

        header('location:../');

?>