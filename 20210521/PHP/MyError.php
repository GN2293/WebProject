<?php
    function my_error_handler($error_no,$error_msg){
        echo "Opps,something went wrong: \n";
        echo "Error number:[$error_no] \n";
        echo "Error Description:[$error_msg] \n";
    }
    set_error_handler(my_error_handler(203,"Program_Error!"));
    echo(5/0);
?>