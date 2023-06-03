
<?php
if(!empty($_POST)){
    $bot=$Bot->find(1);
    $bot['bot']=$_POST['bot'];
    $Bot->save($bot);
}
?>
<h2 class="ct">編輯頁尾版權區</h2>
<form action="?do=bot" method="post">
    <div style="display: flex;">
        <div class="tt ct" style="width:30%">頁尾版權內容</div>
        <div class="pp" style="width:60%">
            <input style="width:90%" type="text"
            name="bot" value="<?=$Bot->find(1)['bot'];?>">
        </div>
    </div>
    <div class="ct">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>