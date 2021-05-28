<?php
    $files = fopen('Email.csv','rb');

    while((!feof($files))&&($line = fgetcsv($files))){
        printf("信箱名称:%s",$line[0]);
        printf("建立时间:%d/%d/%d",$line[3],$line[1],$line[2]);
        printf("年费:%d",$line[4]);
        printf("\n",$line[0]);
    }
    fclose($files);
?>