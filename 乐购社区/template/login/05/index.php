<!DOCTYPE html>
<!-- saved from url=(0036) -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>会员登录/注册 - <?=$site_name?></title>
    <!-- MDUI CSS/JS -->
 <link rel="stylesheet" href="/template/login/05/css/mdui.css"/>
 
 <script src="/template/login/05/js/mdui.js"></script>
    <style>
        a,span {
    color: white!important;
}

.mdui-card {
    margin: 0 auto 18px auto;
    padding: 0 0 20px 0px;
}

#card-head {
    color: white;
    height: 150px;
    width: 100%;
    background: skyblue;
}

#card-head h1 {
    margin: 0;
    line-height: 150px;
}

.copy {
    color: grey;
}
    </style>
    <!--自定义CSS-->
    <style>
    </style>
    <link rel="stylesheet" href="/template/login/05/mb/layer.css" id="layuicss-layer">
</head>

<body class="mdui-theme-primary-light-blue mdui-theme-accent-light-blue mdui-loaded">
    <div id="vue">
        <div class="mdui-appbar">
            <div class="mdui-toolbar mdui-color-theme"><a href="javascript:;" class="mdui-typo-title"><i class="mdui-icon material-icons">cloud</i> &nbsp; <?=$site_name?></a> 
                <div class="mdui-toolbar-spacer"></div> 
            </div>
        </div>
        <div mdui-tab="" class="mdui-tab mdui-color-theme mdui-tab-fulid"><a href="#登录" class="mdui-ripple mdui-ripple-white">登录</a> <a href="#注册" class="mdui-ripple mdui-ripple-white">注册</a>  <a href="#忘记密码" class="mdui-ripple mdui-ripple-white">忘记密码</a>
        </div>
        <form action="#" id="form-login">
            <div mdui-tab="" id="登录" style="display: none;">
                <div class="mdui-container-fluid" style="padding: 50px;">
                    <div class="mdui-row">
                        <div class="mdui-card">
                            <div id="card-head">
                                <center>
                                    <h1><?=$site_name?> - 登录</h1>
                                </center>
                            </div>
                            <div style="padding: 20px 20px 0px;">
							<div class="mdui-textfield">
								<i class="mdui-icon material-icons">account_circle</i>
								<input class="mdui-textfield-input" name="m_name" id="m_name" placeholder="用户名"/>
							</div>
							<div class="mdui-textfield">
								<i class="mdui-icon material-icons">lock</i>
								<input class="mdui-textfield-input" name="m_password" id="m_password" placeholder="密码"/>
							</div>
							<button type="button" @click="login" class="mdui-btn mdui-btn-block" style="background:skyblue;color:white;margin:15px auto 10px">
登录
							</button>
                                <div class="copy">
                                    <center>乐购社区系统</center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdui-tab-indicator"></div>
            </div>
        </form>
        <form action="#" id="form-reg">
            <div mdui-tab="" id="注册" style="display: none;">
                <div class="mdui-container-fluid" style="padding: 50px;">
                    <div class="mdui-row">
                        <div class="mdui-card">
                            <div id="card-head">
                                <center>
                                    <h1>注册</h1>
                                </center>
                            </div>
                            <div style="padding: 20px 20px 0px;">
							<div class="mdui-col-md-6">
								<div class="mdui-textfield">
									<i class="mdui-icon material-icons">account_circle</i>
									<input class="mdui-textfield-input" name="m_name" id="m_name" placeholder="用户名"/>
								</div>
							</div>
							<div class="mdui-col-md-6">
								<div class="mdui-textfield">
									<i class="mdui-icon material-icons">lock</i>
									<input type="password" class="mdui-textfield-input" name="m_password" id="m_password" placeholder="密码"/>
								</div>
							</div>
							<div class="mdui-col-md-6">
								<div class="mdui-textfield">
									<i class="mdui-icon material-icons">message</i>
									<input class="mdui-textfield-input" id="m_qq" name="m_qq" placeholder="联系QQ"/>
								</div>
							</div>
							<div class="mdui-col-md-6">
								<div class="mdui-textfield">
											<input class="mdui-textfield-input" name="m_key" id="m_key" placeholder="验证码"/>
											<br/>
											<img  title="点击刷新" src="/system/verifycode.php" align="absbottom" onClick="this.src='/system/verifycode.php?'+Math.random();" style="width: 100px;height: 32px;"   ></img>
								</div>
							</div>
							<button type="button" @click="reg" class="mdui-btn mdui-btn-block" style="background:skyblue;color:white;margin:15px auto 10px">
注册
							</button>
                                <div class="copy">
                                    <center>社区</center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdui-tab-indicator"></div>
            </div>
        </form>
        <form action="#" id="form-getpwd">
            <div mdui-tab="" id="忘记密码" style="display: none;">
                <div class="mdui-container-fluid" style="padding: 50px;">
                    <div class="mdui-row">
                        <div class="mdui-card">
                            <div id="card-head">
                                <center>
                                    <h1>忘记密码</h1>
                                </center>
                            </div>
                            <div style="padding: 20px 20px 0px;">
                                <div class="mdui-textfield"><i class="mdui-icon material-icons">account_circle</i> 
                                    <input name="m_name" id="m_name" placeholder="用户名" class="mdui-textfield-input">
                                </div>
                                <div class="mdui-textfield"><i class="mdui-icon material-icons">message</i> 
                                    <input name="m_qq" id="m_qq" placeholder="联系QQ" class="mdui-textfield-input">
                                </div>
                                <div style="width: 130px; margin: 0px auto;">
                                    <div class="mdui-textfield">
                                        <img id="clickMe" src="/system/verifycode.php" align="absbottom" onclick="this.src=&#39;/system/verifycode.php?&#39;+Math.random();" style="width: 100%;">
                                        <input name="m_key" id="m_key" placeholder="验证码" class="mdui-textfield-input">
                                    </div>
                                </div>
                                <button type="button" class="mdui-btn mdui-btn-block" style="background: skyblue; color: white; margin: 15px auto 10px;">找回</button>
                                <div class="copy">
                                    <center><?=$site_name?></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdui-tab-indicator"></div>
            </div>
        </form>
    </div>
    <!--注册结束-->  
    <script src="/template/login/05/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="/template/login/05/js/layer.js"></script>
    <script src="/template/login/05/js/main.js"></script>
    <script>
        new Vue({
            el: '#vue',
            data: {
                act: 'login',
                loginType: 'user',
            },
            methods: {
                login: function() {
                    var vm = this;
                    this.$post('/post/login.php?act=login', new FormData(document.getElementById("form-login"))).then(function(data) {
                        if (data.code == 0) {
                            window.location.href = '/index/home/order/id/<?=$_GET['id']?>.html';
                        } else {
                            layer.alert(data.message);
                        }
                    });
                },
                pwd: function() {
                    var vm = this;
                    this.$post('/ajax/pwd.php', new FormData(document.getElementById("form-getpwd"))).then(function(data) {
                        if (data.code == 0) {
                            layer.alert(data.message);
                        } else if (data.message == '找回失败:验证码不正确!') {
                            layer.alert(data.message);
                            document.getElementById("clickMe").click();
                        } else {
                            layer.alert(data.message);
                        }
                    });
                },
                reg: function() {
                    var vm = this;
                    this.$post('/post/login.php?act=reg', new FormData(document.getElementById("form-reg"))).then(function(data) {
                        $("#code").click();
                        if (data.code == 0) {
                            vm.act = 'login';
                            layer.alert('恭喜你，注册成功。马上登录！');
                        }
                        if (data.message == '注册失败:验证码不正确!') {
                            layer.alert(data.message);
                            document.getElementById("clickMe").click();
                        } else {
                            layer.alert(data.message);
                        }
                    });
                }
            },
            mounted: function() {
                var vm = this;
                document.onkeyup = function(e) {
                    var code = parseInt(e.charCode || e.keyCode);
                    if (code == 13) {
                        vm.act == 'login' ? vm.login() : vm.reg();
                    }
                }
            }
        });
    </script>
</body>
<div id="translate-button" style="display: none;">
    <img src="data:image/png;base64,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">
</div>

</html>