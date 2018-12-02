<?php
$jsonUrl = "b.json"; //JSONファイルの場所とファイル名を記述
if(file_exists($jsonUrl)){
    $json = file_get_contents($jsonUrl);
    //$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    //$obj2 = json_decode($json,true);
    print $json;
}
?>