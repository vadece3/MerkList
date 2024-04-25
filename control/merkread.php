<?php 
      include('control/merkclass.php');
      $config = parse_ini_file(__DIR__ . "\config.ini", true);
      $get_data = new MerkClass;
      $get_data->read($config["database"]["hostname"]
      ,$config["database"]["username"]
      ,$config["database"]["password"]
      ,$config["database"]["database"]);
?>