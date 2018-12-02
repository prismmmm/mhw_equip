<?php

  // [ user.php ]
  if(isset($_GET['name'])) {
    $name = $_GET['name'];

    }


$jsonUrl = "b.json"; //JSONファイルの場所とファイル名を記述
if(file_exists($jsonUrl)){
    $json = file_get_contents($jsonUrl);
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $obj = json_decode($json,true);

    $cnt = 0;
    foreach ($obj as $v) {
        if($v['name'] == $name){
            unset($obj[$cnt]);
            $obj= array_values($obj);

        }
        $cnt++;
        //print $v['name'].'<bsr>';
    }
    file_put_contents("b.json",json_encode($obj));
}
?>