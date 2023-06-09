<?php
// 判斷是否為會員
if(!isset($_SESSION['mem'])){
    to("?do=login");
}

// 判斷是購買哪個商品的id
if(isset($_GET['id'])){
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}

// 判斷是否有購物
if(empty($_SESSION['cart'])){
    echo "<h2 class='ct'>購物車為空</h2>";
}else{
?>
<h2 class="ct"><?=$_SESSION['mem'];?>購物車</h2>

<table class="all">
    <tr class="tt ct">
        <th>編號</th>
        <th>產品名稱</th>
        <th>數量</th>
        <th>庫存量</th>
        <th>規格</th>
        <th>單價</th>
        <th>小計</th>
        <th>刪除</th>
    </tr>
<?php
foreach($_SESSION['cart'] as $id => $qt){
    $row = $Goods->find($id);
?>
    <tr class="pp ct">
        <td><?=$row['no'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$qt;?></td>
        <td>庫存量</td>
        <td><?=$row['spec'];?></td>
        <td><?=$row['price'];?></td>
        <td><?=$row['price']*$qt;?></td>
        <td>
            <a href="#" onclick="delGoods(<?=$row['id'];?>)">
                <img src="./icon/0415.jpg" alt="">
            </a>
        </td>
    </tr>

<?php
}
echo "</table>";
}
?>

<div class="ct">
    <a href="index.php"><img src="./icon/0411.jpg" alt=""></a>
    <a href="?do=checkout"><img src="./icon/0412.jpg" alt=""></a>
</div>

<script>
 function delGoods(id){
    $.post('./api/del_goods.php',{id},(res)=>{
        console.log(res);
        location.reload();
    })
 }
</script>