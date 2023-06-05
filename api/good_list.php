<?php
include_once "../base.php";
?>

<table class="all">
    <tr class="tt ct">
        <th>編號</th>
        <th>商品名稱</th>
        <th>庫存量</th>
        <th>狀態</th>
        <th>操作</th>
    </tr>
    <?php
    $rows = $Goods->all();
    foreach ($rows as $row) {
    ?>
        <tr class="pp ct">
            <td><?=$row['no'];?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['qt'];?></td>
            <td><?=($row['sh'])?'販售中':'已下架';?></td>
            <td>
                <button>修改</button>
                <button onclick="del('goods',<?=$row['id'];?>)">刪除</button>
                <button onclick="sh(<?=$row['id'];?>,1)">上架</button>
                <button onclick="sh(<?=$row['id'];?>,0)">下架</button>
            </td>
        </tr>
    <?php
    }
    ?>

</table>

<script>
    function sh(id,sh){
        $.post('./api/sh.php',{id,sh},(res)=>{
            console.log(res);
            
        })
    }
</script>