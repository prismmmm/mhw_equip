<?php
  //引数受取
  $username ="";
  $json = "";
  

  $dsn = 'mysql:dbname=test;host=localhost';
  $user = 'root';
  $password = '';
	
  
  //データ追加
  $stmt = $dbh->prepare("INSERT INTO `equip` (`name`, `user`, `wepon`, `id`) VALUES ('', '', '', '')");
  $stmt->execute(); 

?>