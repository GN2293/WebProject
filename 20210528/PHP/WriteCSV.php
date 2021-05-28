<?php
    $files = fopen('Email.csv','wb');
    $files_tmp = array();

    while((!feof($files))&&($line = fgetcsv($files))){
            array_push($files_tmp,$line);
    }
    fclose($files);
    $new_line = array("peter@hello.com",5,28,2021,1000);
    array_push($files_tmp,$new_line);
    $files = fopen('Email.csv','w');
    foreach($files_tmp as $line){
        fputcsv($files,$line);
    }
    fclose($files);
    print("写入完成!");
?>