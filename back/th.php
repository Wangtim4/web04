<h2 class="ct">商品分類</h2>
<div class="ct">
    新增大分類
    <input type="text" name="big" id="big">
    <button onclick="addType('big')">新增</button>
</div>
<div class="ct">
    新增中分類
    <select name="bigtype" id="bigtype"></select>
    <input type="text" name="mid" id="mid">
    <button onclick="addType('mid')">新增</button>
</div>
<div id="typeList">
    
</div>



<h2 class="ct">商品管理</h2>
<div class="ct"><button>新增商品</button></div>

<h2 class="ct">訂單管理</h2>
<table class="all">
    <tr class="tt ct">
        <th>編號</th>
        <th>商品名稱</th>
        <th>庫存量</th>
        <th>狀態</th>
        <th>操作</th>
    </tr>
    <tr class="pp ct">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <button>修改</button>
            <button>刪除</button>
            <button>上架</button>
            <button>下架</button>
        </td>
    </tr>
</table>

<script>
    typeList();
    bigtypes();
    function addType(type){
        let name,parent;
        switch(type){
            case 'big':
                name=$("#big").val();
                parent=0;
            break;
            case 'mid':
                name=$("#mid").val();
                parent=$("#bigtype").val();
            break;
        }
        $.post("./api/save_type.php",{name,parent},()=>{
            bigtypes();
            $("#big,#mid").val('')
            typeList();
        })
    }

    function typeList() {
        $.get('./api/type_list.php', (list) => {
            $('#typeList').html(list);
        })
    }

    function bigtypes() {
        $.get("./api/get_type.php", {
            type: 'big',
            parent: 0
        }, (options) => {
            $('#bigtype').html(options)
        })
    }
</script>