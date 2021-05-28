<?php
    $files = file_get_contents('Card.html');
    $files = str_replace('{Information}','Project',$files);
    $files = str_replace('{cardimages}','Bumblebee.png',$files);
    $files = str_replace('{username}','Petr Wang',$files);
    $files = str_replace('{content}','Welcome to my site...',$files);
    $files = str_replace('{siteurl}','http://php.onlinedoc.tw',$files);

    //print $files;
    file_put_contents('Card.html',$files);
?>