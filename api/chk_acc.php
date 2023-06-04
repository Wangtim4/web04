<?php
include_once "../base.php";

$table = $_POST['table'];

$DB = new DB($table);

$chk = $DB->math('count','id',['acc'=>$_POST['acc']]);

echo ($chk>0)?1:0;
?>