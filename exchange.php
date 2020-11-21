<?php
$rate=array(28.3,3.5,36.7,20.5,21.3);
$data=array(50000,30000,45000,80000,120000);
$name=array('美金','港幣','英鎊','澳幣','加拿大幣');

for($i=0;$i<count($data);$i++){
    echo "新台幣".$data[$i]."元換算成".$name[$i]."是".round($data[$i]/$rate[$i],2)."元<br>";
}

?>