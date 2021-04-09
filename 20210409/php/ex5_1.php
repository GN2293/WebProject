<?php
function buycoffee(...$cost){
    $total=0;
    foreach($cost as $i){
        $total+=$i;
    }
    $cup=$total/50;
    return $cup;
}
$peter=buycoffee(300,210,50,40);
printf("Peter买了%d杯咖啡！",$peter);
$marry=buycoffee(200);
printf("Marry买了%d杯咖啡！",$marry);
?>