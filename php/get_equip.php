<?php
  //ˆø”ŽóŽæ
  $username ="";
  
  $dsn = 'mysql:dbname=test;host=localhost';
  $user = 'root';
  $password = '';
	
  if(username !== ""){
    $sql = "SELECT * FROM equip";
    foreach ($dbh->query($sql) as $row){
    //print($row['name'].',');
    //print($row['user'].',');
    //print($row['wepon'].',');
    //print($row['id'].'<br>');
    }
  }

  //print($json);
?>