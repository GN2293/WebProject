<?php
    class DivideByZeroException extends Exception{};
    class DivideByNegativeException extends Exception{};
    function process($denominator){
        try{
            if($denominator == 0){
                throw new DivideByZeroException();
            }elseif($denominator<0){
                throw new DivideByNegativeException();
            }else{
                echo (25/$denominator);
            }
        }catch(DivideByZeroException $ex){
            echo "发生被0除的意外!";
        }catch(DivideByNegativeException $ex){
            echo "发生负数意外!";
        }catch(Exception $e){
            echo "未知的意外";
        }
    }
//执行进入点
process(-2);
?>