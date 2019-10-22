<?php
//課題1
function double($d){
    return $d*2;
}
echo double(2)." ".double(1.5)." ".double(5.2)."\n";
//課題2
function f($a,$b){
    return $a+$b;
}
echo f(1,2)." ".f(5.5,4.5)." ".f(5.5,4)."\n";
//課題3
$arr =array(1, 3, 5 ,7, 9);
function multi($arr){
    $result =1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo "課題3修正:";
echo multi($arr)."\n";
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