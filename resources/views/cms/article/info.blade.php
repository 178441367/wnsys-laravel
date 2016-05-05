<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo URL::asset('assets/css/base.css');?>" />
<link rel="stylesheet" href="<?php echo URL::asset('assets/css/info-reg.css');?>" />
<title>移动办公自动化系统</title>
</head>

<body>
<div class="title"><h2>会员基本信息</h2></div>
<div class="main">
	<p class="short-input ue-clear newstyle">
    	<label>会员名：</label>uimaker
    </p>
    <p class="short-input ue-clear newstyle">
    	<label>姓名：</label>UI制造者
    </p>
    <p class="long-input ue-clear newstyle">
    	<label>性别：</label>男
    </p>
    <p class="long-input ue-clear newstyle">
    	<label>电子邮件：</label>admin@uimaker.com
    </p>
    <p class="long-input ue-clear newstyle">
    	<label>移动电话：</label>13913915658
    </p>
    <p class="short-input ue-clear newstyle">
    	<label>公司名称：</label>南京信息科技股份有限公司
    </p>   
    <p class="short-input ue-clear newstyle">
    	<label>国家地区：</label>China
    </p>
    <p class="short-input ue-clear newstyle">
    	<label>接收邮件语言：</label>英文
    </p>
    <p class="short-input ue-clear newstyle">2014-08-27 16:49:20
    	<label>注册日期：</label>
    </p>
</div>
<div class="btn1 ue-clear">
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
