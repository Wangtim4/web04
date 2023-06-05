<h2 class="ct">填寫資料</h2>
<table class="all">
<?php
$mem=$Mem->find(['acc'=>$_SESSION['mem']]);
?>
    <tr>
        <td class="tt ct">登入帳號</td>
        <td class="pp"><?=$mem['acc'];?></td>
    </tr>
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"
        value="<?=$mem['name'];?>"></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email"
        value="<?=$mem['email'];?>"></td>
    </tr>
    <tr>
        <td class="tt ct">聯絡地址</td>
        <td class="pp"><input type="text" name="addr" id="addr"
        value="<?=$mem['addr'];?>"></td>
    </tr>
    <tr>
        <td class="tt ct">聯絡電話</td>
        <td class="pp"><input type="text" name="tel" id="tel"
        value="<?=$mem['tel'];?>"></td>
    </tr>
</table>

<table class="all">
    <tr class="tt ct">
        <td>商品名稱</td>
        <td>編號</td>
        <td>數量</td>
        <td>單價</td>
        <td>小計</td>
    </tr>
    <?php
    $sum = 0 ;
foreach($_SESSION['cart'] as $id => $qt){
    $row = $Goods->find($id);
?>
    <tr class="pp ct">
        <td><?=$row['name'];?></td>
        <td><?=$row['no'];?></td>
        <td><?=$qt;?></td>
        <td><?=$row['price'];?></td>
        <td><?=$row['price'] * $qt;?></td>
    </tr>
    <?php
    $sum += $row['price'] * $qt;
    }
    ?>
</table>
<div class="all ct tt">總價:<?=$sum;?></div>
<div class="ct">
    <button onclick="checkout()">確認送出</button>
    <button onclick="location.href='?do=buycart'">返回修改</button>
</div>

<script>
    function checkout(){
        let form = {
            name:$('#name').val(),
            email:$('#email').val(),
            addr:$('#addr').val(),
            tel:$('#tel').val(),
            total:<?=$sum;?>,
        }
        $.post('./api/save_order.php',form,(res)=>{
            // console.log(res);
            alert('訂購成功');
        })
    }
</script>