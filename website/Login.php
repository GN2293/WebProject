<?php
$name = trim($_POST['name']);
$password = trim($_POST['password']);

if ($name == "Peter"){
    if ($password == "abc123"){
        echo "登入成功!";
    }else{
        echo "登入失败!";
    }
}else{
    echo "登入失败!";
}
?>