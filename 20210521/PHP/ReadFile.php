<?php
    $file=file_get_contents('ReadFile.html');
    $file=str_replace('{titlename}','Welcome',$file);
    if(date('H')>=12){
        $file=str_replace('{color}','blue',$file);
    }else{
        $file=str_replace('{color}','red',$file);
    }
    $file=str_replace('{name}','Peter',$file);

    print $file;
?>