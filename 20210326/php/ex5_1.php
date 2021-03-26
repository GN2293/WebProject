<?php
//print user name
function name(){
    return"Peter";
}
//caculate the score level
function score($num){
    $level=intval($num/10);
    switch($level){
        case 10:
        case 9:
            return "A";
            break;
        case 8:
            return "B";
            break;
        case 7:
            return "C";
            break;
        case 6:
            return "D";
            break;
        default:
            return "E";
            break;
    }
}
//run program
$name=name();
$score=score(85);
printf("姓名:%s,成绩:%s级",$name,$score);
?>