<?php
  //ˆø”ŽóŽæ
  $username ="";
  $json = "";
  

  $dsn = 'mysql:dbname=test;host=localhost';
  $user = 'root';
  $password = '';
	
  
  //ƒf[ƒ^’Ç‰Á
  $stmt = $dbh->prepare("INSERT INTO `equip` (`name`, `user`, `wepon`, `id`) VALUES ('', '', '', '')");
  $stmt->execute(); 

?>