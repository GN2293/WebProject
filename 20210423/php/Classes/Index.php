<?php
//這是 index.php
include_once __DIR__ . "AutoLoad.php";

$member = new Members();
$member->getMemberList();
?>