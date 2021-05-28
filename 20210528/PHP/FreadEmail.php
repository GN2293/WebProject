<?php
    $files = fopen('Email.txt','rb');

    while((!feof($files))&&($line = fgets($files))){
        $line = trim($line);
        $info = explode('|',$line);

        print '<li><a href="mailto:'.$info[0].'">'.$info[1].'</a></li>';
    }
    fclose($files);
?>