@include('admin/common/header')
<body>
<div class="title"><h2>添加模型</h2></div>
<div class="main">

    <p class="long-input ue-clear">
        <label>模型名称：</label>
        <input type="text" placeholder=""  name="name"/>
    </p>
    <p class="long-input ue-clear">
        <label>模型表键名：</label>
        <input type="text" placeholder="" name="tableName"/>
    </p>

</div>
<div class="btn ue-clear">
    <a href="javascript:;" class="confirm">确定</a>
    <a href="javascript:;" class="clear">清空内容</a>
</div>
<script>
    $().ready(function(){
        alert(1);
    })

</script>
@include('admin/common/footer')
