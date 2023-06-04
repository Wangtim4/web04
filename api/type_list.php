<?php
include_once "../base.php";
?>
<table class="all ct">
    <?php
    $bigs = $Type->all(['parent' => 0]);
    foreach ($bigs as $big) {
    ?>
        <tr class="tt">
            <td><?= $big['name']; ?></td>
            <td>
                <button onclick="editType(<?= $big['id']; ?>,'<?= $big['name']; ?>')">修改</button>
                <button onclick="del('type',<?= $big['id']; ?>)">刪除</button>
            </td>
        </tr>

        <?php
        $mids = $Type->all(['parent' => $big['id']]);
        if (!empty($mids)) {
            foreach ($mids as $mid) {

        ?>
                <tr class="pp">
                    <td><?= $mid['name']; ?></td>
                    <td>
                        <button onclick="editType(<?= $mid['id']; ?>,'<?= $mid['name']; ?>')">修改</button>
                        <button onclick="del('type',<?= $mid['id']; ?>)">刪除</button>
                    </td>
                </tr>
    <?php
            }
        }
    }
    ?>
</table>

<script>
    function editType(id, name) {
        let input = prompt("請輸入要修改的分類", name);
        // console.log(input);
        if (input != null) {
            $.post('./api/save_type.php', {
                name: input,
                id: id
            }, (res) => {
                // console.log(res);
                typeList();
            })
        }
    }
</script>