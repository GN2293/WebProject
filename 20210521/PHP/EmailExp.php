<?php
    class EmailFormatException extends Exception{
        function printMessage(){
            echo "例外讯息:".$this->getMessage()."\n";
            echo "例外讯息编码:".$this->getCode()."\n";
        }
    }
    function checkEmail($email){
        if(!strpos($email,"@"))throw new EmailFormatException("E-mail格式需要包含'@'子元!",100);
    }
    try{
        checkEmail('abc$hello.com');
    }catch(EmailFormatException $e){
        $e->printMessage();
    }
?>