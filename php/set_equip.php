<?php
  //�������
  $username ="";
  $json = "";
  

  $dsn = 'mysql:dbname=test;host=localhost';
  $user = 'root';
  $password = '';
	
  
  //�f�[�^�ǉ�
  $stmt = $dbh->prepare("INSERT INTO `equip` (`name`, `user`, `wepon`, `id`) VALUES ('', '', '', '')");
  $stmt->execute(); 

?>