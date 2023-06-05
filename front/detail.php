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
        <div>詳細說明:<?=$good['qt'];?></div>
    </div>
</div>
<div class="ct tt">
    購買數量: <input type="number" name="qt" id="qt" value='1'>
    <a href="#" onclick="buycart()">
    <img src="./icon/0402.jpg" alt="">
    </a>
</div>
<div class="ct">
    <button onclick="location.href='index.php'">返回</button>
</div>

<script>
    function buycart(){
        console.log("1");
        let qt=$('#qt').val()
        location.href=`?do=buycart&id=<?=$good['id'];?>&qt=${qt}`
    }
</script>