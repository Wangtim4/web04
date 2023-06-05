<h2 class="ct">訂單管理</h2>
<table class="all">
    <tr class="tt ct">
        <th>訂單編號</th>
        <th>金額</th>
        <th>會員帳號</th>
        <th>姓名</th>
        <th>下單日期</th>
        <th>操作</th>
    </tr>
    <?php
    $rows = $Orders->all();
    foreach ($rows as $row) {
    ?>
        <tr class="pp ct">
            <td>
                <a href="?do=detail&id=<?=$row['id'];?>">
                <?=$row['no'];?>
                </a>
            </td>
            <td><?=$row['total'];?></td>
            <td><?=$row['acc'];?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['orddate'];?></td>
            <td>
                <button>修改</button>
                <button  onclick="del('orders',<?=$row['id'];?>)">刪除</button>
            </td>
        </tr>
    <?php
    }
    ?>

</table>