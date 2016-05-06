<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <?php
        foreach($this->css as $v){ ?>
    <link rel="stylesheet" href="<?php echo $v;?>" />

   <?php }?>
<link rel="stylesheet" href="<?php echo URL::asset('assets/css/base.css');?>" />
<link rel="stylesheet" href="<?php echo URL::asset('assets/css/info-reg.css');?>" />
<script type="text/javascript" src="<?php echo URL::asset('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo URL::asset('assets/js/common.js');?>"></script>
<title>wnsys</title>
</head>
