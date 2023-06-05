<?php
// type=0為全部類別
if ($_GET['type'] != 0) {
    // 判斷分類
    $type = $Type->find($_GET['type']);
    // dd($type);
    if ($type['parent'] == 0) {
        $typebig = $type['name'];
        $rows = $Goods->all(['sh' => 1, 'big' => $type['id']]);
    } else {
        $typebig = $Type->find($type['parent'])['name'];
        $typemid = " > " . $type['name'];
        $rows = $Goods->all(['sh' => 1, 'mid' => $type['id']]);
    }
} else {
    $typebig = '全部商品';
    $rows = $Goods->all(['sh' => 1]);
}
?>
<h1><span><?= $typebig; ?></span> <span><?= $typemid ?? ''; ?></span></h1>

<?php
foreach ($rows as $row) {
?>
    <div style="width: 90%; margin:auto; display:flex;" class="pp">
        <div style="width: 40%; padding:1rem;">
            <img style="width: 90%;" src="./img/<?=$row['img'];?>" alt="">
        </div>
        <div style="width: 60%;">
            <div class="tt"><?=$row['name'];?></div>
            <div><?=$row['price'];?>價格</div>
            <div><?=$row['spec'];?>規格</div>
            <div><?=$row['intro'];?>簡介</div>
        </div>
    </div>
<?php
}
?>