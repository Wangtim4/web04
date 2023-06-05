<?php
if(!isset($_SESSION['mem'])){
    to("?do=login");
}
dd($_GET);
?>
<h2 class="ct">XXX購物車</h2>

<table class="all">
    <tr class="tt ct">
        <th>編號</th>
        <th>產品名稱</th>
        <th>數量</th>
        <th>庫存量</th>
        <th>小計</th>
        <th>刪除</th>
    </tr>
    <tr class="pp ct">
        <td>編號</td>
        <td>產品名稱</td>
        <td>數量</td>
        <td>庫存量</td>
        <td>小計</td>
        <td>刪除</td>
    </tr>
</table>