<?php
include_once "../base.php";
$_POST['pr'] = serialize($_POST['pr']);
$id=$_POST['id'];
$row = $Admin->find($id);
// dd($row);原資料

foreach($_POST as $col => $value){
    $row[$col]= $value;
}
// dd($row);改資料

$Admin->save($row);

to('../back.php?do=admin');
?>