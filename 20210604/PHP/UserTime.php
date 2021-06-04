<?php
// cookie 一小時後過期
setcookie('short-user','Peter01',time()+60*60);

// cookie 一天後過期
setcookie('longer-user','Peter02',time()+60*60*24);

// cookie 指定日期過後，才會過期
$datetime = new DateTime("2021-10-01 12:00:00");
setcookie('date-user','Peter03',$datetime->format('U'));

setcookie('path-user','');

setcookie('path-user','Peter04',time()+60*60*24,'./manager/','.example.com',true,true);
?>