<?php
$Score = 100;
switch(intval($Score/10)){
    case 10:
    case 9:
        echo "A";
        break;
    case 8:
        echo "B";
        break;
    case 7:
        echo "C";
        break;
    case 6:
        echo "D";
        break;
    default:
        echo "E";
        break;
}
?>