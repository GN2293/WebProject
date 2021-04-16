<?php
include "pants.php";
/*
$tshirt=new clothes("白衬衫",1000);
printf("衣服名字:%s\n",$tshirt->getName());
printf("衣服的价钱:%d\n",$tshirt->getPrice());
printf("衣服清洗方式:%s\n",$tshirt->doWash());
*/
$cowpant=new Pant("鬼洗",3000,100,30);
printf("裤子名称:%s\n",$cowpant->getName());
printf("裤子的价钱:%d元\n",$cowpant->getPrice());
printf("裤子的长度:%dcm\n",$cowpant->getLength());
printf("裤子的腰围:%d吋\n",$cowpant->getWaist());
printf("裤子清洗方式:%s",$cowpant->doWash());

$cowpant->setMark(new class implements Mark{
    public function mark(string $mark){
        print($mark);
    }
});
?>