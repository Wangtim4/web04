<?php
include_once "../base.php";
// dd($_POST);
$_POST['no'] = date("Ymd") . rand(100000, 999999);
$_POST['acc'] = $_SESSION['mem'];
$_POST['cart'] = serialize($_SESSION['cart']);
$_POST['orddate'] = date("Y-m-d");

$Orders->save($_POST);
