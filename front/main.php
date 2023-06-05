<?php
// type=0為全部類別
if($_GET['type']!=0){
    // 判斷分類
    $type=$Type->find($_GET['type']);
    // dd($type);
    if($type['parent']==0){
        $typebig=$type['name'];
    }else{
        $typebig=$Type->find($type['parent'])['name'];
        $typemid=" > ".$type['name'];
    }
}else{
    $typebig='全部商品';
}
?>
<h1><span><?=$typebig;?></span> <span><?= $typemid??'';?></span></h1>
<div style="width: 90%; margin:auto; display:flex;" class="pp">
    <div style="width: 40%; padding:1rem;">
        <img style="width: 90%;"src="./img/0403.jpg" alt="">
    </div>
    <div style="width: 60%;">
        <div class="tt">皮件</div>
        <div>價格</div>
        <div>規格</div>
        <div>簡介</div>
    </div>
</div>