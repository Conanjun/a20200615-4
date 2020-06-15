<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui">
<link rel="stylesheet" href="__PUBLIC__/Manage/css/bootstrap.css">
<link rel="stylesheet" href="__PUBLIC__/Manage/fonts/web-icons/web-icons.css">
<link rel="stylesheet" href="__PUBLIC__/Manage/fonts/font-awesome/font-awesome.css">
<script src="__PUBLIC__/Manage/js/jquery.js"></script>
<script src="__PUBLIC__/Manage/js/jquery.form.js"></script>
<script src="__PUBLIC__/Manage/js/bootstrap.js"></script>
<script src="__PUBLIC__/Manage/js/layer/layer.js"></script>
<script src="__PUBLIC__/Manage/js/cvphp.js"></script>
		<link rel="stylesheet" href="__PUBLIC__/Manage/css/table.css">
		<title>保险截图：<?php echo ($data["oid"]); ?></title>
		<style>
			td { font-size:13px; }
			.nestable{
				margin: 0 auto;
				*margin: 20px !important;
				*border: 1px solid #5961c7;
				width: 1275px !important;
				height:555px !important;
				padding: 0px !important;
				background:url(Public/images/hd_bg1.png) repeat-x;
				background-size: cover;
	
			}
			.nestable{
				background-color: #999;
			}
			.content{
				width: 100%;
				padding-top:250px !important;
				padding-left:125px !important;
				*margin: 16px auto;
			}

			.pp{
				-webkit-box-sizing:border-box;
				-moz-box-sizing:border-box;
				box-sizing:border-box;
				display: block;
				float:left;
				width: 100%;
				font-size: 12px;
				height:30px;
				line-height:30px;
			}
			.tits{
				float:left; 
				width:585px;
				text-align: right;
			}
			.co{float:left; }
			.copy{
				width: 100%;
				margin: 16px auto;
				text-align: center;
				}
			.copy button{
			 padding: 8px 25px;
			margin:15px auto;
			}
.copy a{
	width: 10%;
    padding: 8px 30px;
	margin:15px auto;
    height: 32px;
    font-size: 12px;
    font-weight: normal;
    text-align: center;
    border: 1px solid transparent;
    border-radius: 4px;
	background-color: #f2f2f2;
 line-height: 14px;
  text-decoration:none;
}
.copy a:hover{
  text-decoration:none;
}
		</style>
		<script src="__PUBLIC__/Manage/js/html2canvas.js"></script>
	</head>
	<body>
		<div id="div_hd" class="nestable">
			
			<div class="content">
			<table border="1" width="1101px" height="108px" style="border-collapse:collapse;border-color:#c9d4da;">
				 <tbody>
			<tr align="center">
            <td bgcolor="#F5F6FA"><strong>保险名称</strong></td>
            <td bgcolor="#F5F6FA"><strong>贷款概要</strong></td>
            <td bgcolor="#F5F6FA"><strong>投保人</strong></td>
            <td bgcolor="#F5F6FA"><strong>投保金额</strong></td>
            <td bgcolor="#F5F6FA"><strong>保险期限</strong></td>
            <td bgcolor="#F5F6FA"><strong>保单状态</strong></td>
			<td bgcolor="#F5F6FA"><strong>保单类型</strong></td>
			<td bgcolor="#F5F6FA"><strong>投保资料</strong></td>
			</tr>
			 <tr>
				<?php echo ($tpl); ?></tr>
				<tr>
				<td colspan="8" align="left" bgcolor="#ffffff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #e81b1b;">保单生效后，保险金额的90%（<?php echo ($smm6); ?>元），将随同贷款金额返还投保人银行账户。</span></td>
				</tr>	
			    </tbody>
			</table>
			</div>
		</div>
			<div class="copy">
			
			<button class="but"  style="display:block;" >点我截屏</button>
			<a class="down" style="display:none;" href="" download="hd<?php echo ($data["oid"]); ?>">下载</a>
			 <div id="box"></div>
			</div>
			
<script>
    $(document).ready(function () {

        html2canvas(document.getElementById('div_hd'), { 
            onrendered: function (canvas) { 
                var canvasData = canvas.toDataURL(); 
                var eg = new Image(); 
                eg.src = canvasData;
                $("button").on("click", function () {
					$(".down").css("display","block");
					$(".but").css("display","none");
					$box = $("#box");
                    $box.prepend(eg);
					document.querySelector(".down").setAttribute('href',canvasData);
                })
            }, 
            // useCORS: true// 此代码针对跨域问题 
        });
    })
            </script>
	</body>
</html>