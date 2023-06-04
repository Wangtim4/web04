<?php
include_once "../base.php";

dd($_POST);

$DB = new DB($_POST['table']);
$id = $_POST['id'];
$row = $DB->find($id);
// dd($row);原本資料

foreach($_POST['form'] as $col){
    $row[$col['name']]=$col['value'];
}

// dd($row);
$DB->save($row);

