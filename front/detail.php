<?php
$good = $Goods->find($_GET['id']);
// dd($good);
?>
<h2 class="ct"><?= $good['name']; ?></h2>
<div class="pp" style="display: flex;">
    <div style="width: 60%;">
        <img width="80%" src="./upload/<?= $good['img']; ?>" alt="">
    </div>
    <div style="width: 40%;">
        <div>分類:<?=$Type->find($good['big'])['name'].">".$Type->find($good['mid'])['name'];?></div>
        <div>編號:<?=$good['no'];?></div>
        <div>價格:<?=$good['price'];?></div>
        <div>詳細說明:<?=$good['intro'];?></div>
    </div>
</div>
<div class="ct tt">
    購買數量: <input type="number" name="qt" id="qt" value="qt">
    <img src="./icon/0402.jpg" alt="">
</div>
<div class="ct">
    <button onclick="location.href='index.php'">返回</button>
</div>