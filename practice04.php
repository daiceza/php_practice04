<?php
//課題1
function double($d){
    $result =0;
    $result = $d*2;
    return $result;
}
echo double(2)." ".double(1.5)." ".double(5.2)."\n";
//課題2
function f($a,$b){
    $result =0;
    $result =$a+$b;
    return $result;
}
echo f(1,2)." ".f(5.5,4.5)." ".f(5.5,4)."\n";
//課題3
$arr =array(1, 3, 5 ,7, 9);
print_r($arr);
//課題4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array($arr)."\n";
//課題5
//strip_tags — 文字列から HTML および PHP タグを取り除く
$strip ="<p>課題5</p><h2>Strip_tags</h2>";
echo strip_tags($strip,"<p>")."\n";
//array_push - 一つ以上の要素を配列の最後に追加する
$arr_p=array("zero","one");
array_push($arr_p,"two");
print_r($arr_p);
//array_merge — ひとつまたは複数の配列をマージする
$arr_m=array("number" => "san");
$mer_res=array_merge($arr_p,$arr_m);
print_r($mer_res);
/*time, mktime - タイムスタンプを取得
  date - 日付文字列を取得*/
echo time()." ".mktime(0, 0, 0, 10, 20, 2019)." ".date('Y-m-d H:i:s')."\n";
?>