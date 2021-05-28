<?php
    header('content-type:text/csv');
    header('content-disposition:attachment;filename="Email.csv"');

    $line = fopen('Email.csv','rb');
    $files = fopen('php://output','wb');

    while((!feof($line))&&($line = fgetcsv($line))){
        fputcsv($files,$line);
    }
?>