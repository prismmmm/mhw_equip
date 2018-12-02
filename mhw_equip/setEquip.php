<?php
        //-JSONデータの受信処理---------------------------------------------------//
        // file_get_contents()で送信データを受信(JSONの場合はここがミソ。らしい。)
        $json2 = file_get_contents("php://input");

        // JSON形式データをPHPの配列型に変換
        $data = json_decode($json2);
        //file_put_contents("b.json",json_encode($data));
        $jsonUrl = "b.json"; //JSONファイルの場所とファイル名を記述
        if(file_exists($jsonUrl)){

            $json = file_get_contents($jsonUrl);
            if($json == null){
                file_put_contents("b.json",json_encode($data));
            }else{
                $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
                $obj2 = json_decode($json,true);
                $marge = array_merge($obj2, $data);
                print $json;
                file_put_contents("c.txt",$json2);
                $new  = $json.','.$json2.'';
                file_put_contents("b.json",json_encode($marge));
            }
          
        }


// $arr = array(
//     array(
//     'user' => 'user name', 
//     'name' => 'gaira multi', 
//     'wepon' => 'arrow ',
//     'wepon_dec' => 'dec * 1',
//     'helm' => 'helm name',
//     'helm_dec'=>'dec * 1',
//     'body' => 'body name',
//     'body_dec'=>'dec * 1',
//     'hand' => 'hand name',
//     'hand_dec'=>'dec * 1',
//     'waist' => 'waist  name',
//     'waist_dec'=>'dec * 1',
//     'leg' => 'leg name',
//     'leg_dec'=>'dec * 1',
//     'comment'=>'hello wwwww',
//     'skil'=>array(
//         'taijutu','kyouka'
//     )),
//     array(
//         'user' => 'user name', 
//         'name' => 'chaaku multi', 
//         'wepon' => 'arrow ',
//         'wepon_dec' => 'dec * 1',
//         'helm' => 'helm name',
//         'helm_dec'=>'dec * 1',
//         'body' => 'body name',
//         'body_dec'=>'dec * 1',
//         'hand' => 'hand name',
//         'hand_dec'=>'dec * 1',
//         'waist' => 'waist  name',
//         'waist_dec'=>'dec * 1',
//         'leg' => 'leg name',
//         'leg_dec'=>'dec * 1',
//         'comment'=>'hello wwwww',
//         'skil'=>array(
//             'taijutu','kyouka'
//         ))
// );

// $enc = json_encode($arr);
// file_put_contents("a.json",$enc);
?>