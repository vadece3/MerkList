<?php 
      include('control/merkclass.php');
      $get_data = new MerkClass;
      $get_data->read("localhost", "root", "", "merkdata");
?>