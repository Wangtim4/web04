<?php
// type=0為全部類別
if (isset($_GET['type']) && $_GET['type'] != 0) {
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
        <a href="?do=detail&id=<?=$row['id'];?>">
            <img style="width: 90%;" src="./img/<?= $row['img']; ?>" alt="">
        </a>
        </div>
        <div style="width: 60%;">
            <div class="tt"><?= $row['name']; ?></div>
            <div >價格:<?= $row['price']; ?>
                <a style="float:right;" href="?do=buycart&id=<?=$row['id'];?>&qt=1">
                    <img src="./icon/0402.jpg" >
                </a>
            </div>
            <div>規格:<?= $row['spec']; ?></div>
            <div>簡介:<?= mb_substr($row['intro'], 0, 25); ?>...</div>
        </div>
    </div>
<?php
}
?>