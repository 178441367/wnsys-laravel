@include('admin/common/header')
<body>
<div class="title"><h2>信息登记</h2></div>
<div class="main">
	<p class="short-input ue-clear">
    	<label>来文时间：</label>
        <input type="text" placeholder="来文时间" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
        <span><em>*</em>请输入正确的时间格式</span>
    </p>
    <p class="short-input ue-clear">
    	<label>收文时间：</label>
        <input type="text" placeholder="收文时间" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
    </p>
    <p class="long-input ue-clear">
    	<label>来文单位：</label>
        <input type="text" placeholder="来文单位" />
    </p>
    <p class="long-input ue-clear">
    	<label>文件编号：</label>
        <input type="text" placeholder="请输入编号" />
    </p>
    <p class="long-input ue-clear">
    	<label>文件标题：</label>
        <input type="text" placeholder="请输入标题" />
    </p>
    <p class="short-input ue-clear">
    	<label>分类号：</label>
        <input type="text" placeholder="分类号" />
    </p>
    <div class="short-input select ue-clear">
    	<label>密级：</label>
        <div class="select-wrap">
        	<div class="select-title ue-clear"><span>平件</span><i class="icon"></i></div>
            <ul class="select-list">
            	<li>平件</li>
                <li>保密</li>
                <li>高级保密</li>
            </ul>
        </div>
    </div>
    <p class="short-input ue-clear">
    	<label>归档时间：</label>
        <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
    </p>
    <p class="short-input ue-clear">
    	<label>保管期限：</label>
        <input type="text" />
    </p>
    <p class="short-input ue-clear">
    	<label>备注：</label>
        <textarea placeholder="请输入内容"></textarea>
    </p>
</div>
<div class="btn ue-clear">
	<a href="javascript:;" class="confirm">确定</a>
    <a href="javascript:;" class="clear">清空内容</a>
</div>
</body>
<script type="text/javascript" src="<?php echo URL::asset('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo URL::asset('assets/js/common.js');?>"></script>
<script type="text/javascript" src="<?php echo URL::asset('assets/js/WdatePicker.js');?>"></script>
<script type="text/javascript">
$(".select-title").on("click",function(){
	$(".select-list").toggle();
	return false;
});
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(".select-title").find("span").text(txt);
});


showRemind('input[type=text], textarea','placeholder');
</script>
</html>
