<?php
while(true){
    echo"这是第一层迴圈!";
    while(true){
        echo"这是第二层迴圈!";
        break 2;
    }
}
echo"已跳出二层迴圈!";
?>