 <?
 	if ($_SESSION['member_name']!='')
	{
	header('location: /index/home/order/id/'.$_GET['id'].'.html');
}
$ll='true';
  ?><html lang="zh-cn">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <title>用户登录 - <?=$site_name?></title>
    <meta name="keywords" content="社区平台是全国最大,卡密社区排行榜第一的社区平台,主打空间业务以及各类游戏业务社区,进货价格便宜,货源稳定,社区商品众多"/>
    <meta name="description" content="卡密社区,<?=$site_name?>,卡密社区,社区自助下单平台,<?=$site_name?>社区,系统,社区系统,社区,系统,系统货源站,社区系统,社区系统货源站,社区系统货源站"/>
<link rel="stylesheet" href="
/template/login/<?=$site_moban3?>/assets/css/mdui.min.css">
<script src="http://cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>
  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="http://www.to60.cn/image/png" href="http://www.to60.cn/assets/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="http://www.to60.cn/assets/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="http://www.to60.cn/assets/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="http://www.to60.cn/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="/template/login/<?=$site_moban3?>/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/template/login/<?=$site_moban3?>/assets/css/app.css">
    <link rel="stylesheet" href="/template/login/<?=$site_moban3?>/assets/css/pic.css">
<style>
.dz-box{
width:%100; height:48px;background:skyblue;color:white;
}
.dz-box1{
width:%100; height:48px;color:grey;border-bottom-style:inset;
}
.am-header{
height:48px;
}
</style>
</head>
  <body class="mdui-drawer-body-left mdui-theme-primary-light-blue">
<!--顶栏开始-->
  <header data-am-widget="header"
          class="am-header" style="background:skyblue;color:white">
      <div class="am-header-left am-header-nav">
          <a href="/">
                <i class="am-header-icon am-icon-home" style="color:white"></i>
          </a>
      </div>
      <h1 class="am-header-title">
          <a href="/" style="color:white">
           登录
          </a>
      </h1>
     <div class="am-header-right am-header-nav">
          <a href="">
                <i class="am-header-icon am-icon-bars" style="color:white"></i>
          </a>
      </div>
  </header>
    <link href="/template/login/<?=$site_moban3?>/assets/css/toastr.min_1.css" rel="stylesheet">
<!--顶栏结束-主体开始-->
<center>
<div style="padding-top:20px;padding-bottom:20px;center" class="mdui-col-sm-12 mdui-col-md-12">
<div class="mdui-card mdui-hoverable mdui-ripple" style="width:80%">
  <div class="mdui-card-media">
    <div style="background:skyblue;color:white;width:100%;height:180px">
    <h1 style="line-height:180px;"><?=$site_name?></h1>
  </div>
<div class="tab-pane fade in active" id="user_login_form">
<form method="post" id="loginForm">                                                               
<input name="act" type="hidden" value="login"> 
  <div class="mdui-tab mdui-tab-centered mdui-tab-full-width" mdui-tab>
  <a href="#login" class="mdui-ripple">登录</a>
  <a href="#reg" class="mdui-ripple">注册</a>
</div>
  <div id="login" class="mdui-container mdui-p-a-2">
        <div class="mdui-textfield">
  <input name="m_name" type="text" placeholder=" 账号" class="mdui-textfield-input"/>
</div>
  <div class="mdui-textfield">
  <input name="m_password" type="password" placeholder=" 密码" class="mdui-textfield-input"/>
</div>
<br>
<div class="form-group">
  <a id="login_btn" style="background:skyblue;color:white" class="mdui-btn mdui-btn-block mdui-ripple" >立即登录</a>
</div>
 </div>
  </form>
  <br>
<form method="post" id="regForm">
<input name="act" type="hidden" value="reg">
  <div class="mdui-container mdui-p-a-2" id="reg">
        <div class="mdui-textfield">
  <input name="m_name" placeholder=" 账号" class="mdui-textfield-input"/>
</div>
  <div class="mdui-textfield">
  <input name="m_password" placeholder=" 密码" class="mdui-textfield-input"/>
</div>
 <div class="mdui-textfield">
  <input name="m_qq" placeholder=" QQ" class="mdui-textfield-input"/>
</div>
 <div class="mdui-textfield">
  <input name="m_key" placeholder=" 验证码" class="mdui-textfield-input"/>
</div>
                                            <img title="点击刷新" src="picture/verifycode_1.php" align="absbottom" onClick="this.src='/system/verifycode.php?'+Math.random();" style="width:50px;height:38px;padding-top:10px">
<br>
<div class="form-group">
  <a  onclick="action='reg';" id="reg_btn" style="background:skyblue;color:white" class="mdui-btn mdui-btn-block mdui-ripple" >立即注册</a>
  </div>
</div>
  </div>
  </form>
  <br>
  </div>
</div>
</div>
</center>
</script>


<!--主体结束-底栏开始-->

﻿<script>!window.jQuery && document.write("<script src=\"http://www.to60.cn/assets/style/js/jquery-1.11.1.min.js\">" + "</scr" + "ipt>");</script>
<script src="/template/login/<?=$site_moban3?>/assets/js/toastr.min.js"></script>
<script src="/template/login/<?=$site_moban3?>/assets/js/md5.min.js"></script>
<script src="/template/login/<?=$site_moban3?>/assets/js/layer.js"></script>
<script src="/template/login/<?=$site_moban3?>/assets/js/klsf.js"></script>
    <div style="color:grey">
      <center>  <p>©2020  | 乐购</p></center>
    </div>
<!--底栏结束>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://www.to60.cn/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="http://www.to60.cn/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

     
<? require_once('footer.php');
?>

 <script type="text/javascript">
    var action = 'login';
    $(document).ready(function () {
        $("#login_btn").click(function () {
            var data = $("#loginForm").serialize();
            $.klsf.ajax("/post/login.php?act=login", data, function (json) {
                if (json.code === 0) {
                    $.klsf.showMessage(json.message,'success');
                    setTimeout(function () {
                        window.location.href = '/index/home/order/id/<?=$_GET['id']?>.html';
                    }, 1500);
                } else {
                    $.klsf.showMessage(json.message,'error');
                }
            });
        });
        $("#reg_btn").click(function () {
            var data = $("#regForm").serialize();
            $.klsf.ajax("/post/login.php?act=reg", data, function (json) {
                if (json.code === 0) {
                    $.klsf.showMessage(json.message,'success');
                    setTimeout(function () {
                        window.location.href = '/index/home/order/id/<?=$_GET['id']?>.html';
                    }, 1500);
                } else {
                    $(".code_img").click();
                    $.klsf.toastrError(json.message,'error');
                }
            });
        });
    });
    $.klsf.keyup(13, function () {
        $("#" + action + "_btn").click();
    })
</script>



 
<script language="javascript">

var countdown = 60;
var but = document.getElementById('email_btn');
but.addEventListener('click', function (e) {
    setTime(this);
})
 
function setTime (elem) {
    if (countdown === 0) {
        elem.innerHTML = "获取验证码";
        countdown = 5;
        elem.disabled = false;
        clearTimeout(anima);
    } else {
        countdown--;
        elem.innerHTML = "重新获取(" + countdown + ")";       
        elem.disabled = true;
        var anima = setTimeout(function () {
            setTime(elem);
        }, 1000);
    }
}
</script>	</body>
</html>