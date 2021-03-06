requirejs.config({
    baseUrl: "/ffsm/statics/cdn.12ystar.com/website/Content/hlybz/js/",
    map: {
        "*": {
            css: "/ffsm/statics/cdn.12ystar.com/website/Content/hlybz/js/css.min.js"
        }
    },
    shim: {},
    paths: {
        "ffsm.layer": "/ffsm/statics/cdn.12ystar.com/website/Content/hlybz/js/layer",
        "ffsm.datepicker": "/ffsm/statics/cdn.12ystar.com/website/Content/hlybz/js/rui-datepicker.min",
        "ffsm.ajaxForm": "/ffsm/statics/cdn.12ystar.com/website/Content/hlybz/js/ajaxForm.min",
        "ffsm.zhChinese": "/ffsm/statics/cdn.12ystar.com/website/Content/hlybz/js/zhChinese.min"
    }
}),
define("layer", ["ffsm.layer"],
function () {
    layer.config({
        path: "/ffsm/statics/cdn.12ystar.com/website/Content/hlybz/js/layer/"
    })
}),

$('.J_ajax_submit_btn').click(function(){
		
		var username = document.login.username.value;
		if (username == "") {
			layer.msg("请输入姓名")
			document.login.username.focus();
			return false;
		}
		
		var reg = new RegExp("[\\u4E00-\\u9FFF]+","g");
	　　if(!reg.test(username)){     
		   layer.msg("请输入正确的姓名")
		   document.login.username.focus();
		   return false; 
		}
		
		var birthday = document.login.b_input.value;
		
		if (birthday == "") {
			layer.msg("请输入生日")
			//document.login.username.focus();
			return false;
		}
		
        	showLoading();
            setTimeout(function(){  //使用  setTimeout（）方法设定定时2000毫秒
			
              document.getElementById("submit1").submit();
            },2000);
	});

$(function () {
    function evaluateConfirmCallback(e, a) {
        var o = e.msg;
        o.msg && (o = e.msg.msg),
        e.code > 0 ? layer.msg(o, {
            icon: 1,
            time: 2e3
        },
        function () {
            $("body").removeClass("base_popup"),
            $(document).scrollTop(popScrollTop),
            evlPop.remove()
        }) : e.code <= 0 && layer.msg(o, {
            time: 1e3
        })
    }
    if ($.ajaxSetup({
        complete: function (e) { },
        data: {},
        error: function (e, a, o) {
            require(["layer"],
            function () {
                //layer.msg("" + this.url, {
       // icon: 2,
        //time: 2e3
    //},
      //          function () { })
    })
    }
    }), /msie/.test(navigator.userAgent.toLowerCase()) && $.ajaxSetup({
        cache: !1
    }), "" !== document.createElement("input").placeholder && $("[placeholder]").focus(function () {
        var e = $(this);
        e.val() == e.attr("placeholder") && (e.val(""), e.removeClass("placeholder"))
    }).blur(function () {
        var e = $(this);
        "" != e.val() && e.val() != e.attr("placeholder") || (e.addClass("placeholder"), e.val(e.attr("placeholder")))
    }).blur().parents("form").submit(function () {
        $(this).find("[placeholder]").each(function () {
            var e = $(this);
            e.val() == e.attr("placeholder") && e.val("")
    })
    }), $(".J_pay_remind").click(function () {
        require(["layer"],
        function () {
            setTimeout(function () {
                layer.msg("付费后才能看")
    },
            50)
    })
    }), $(".Js_date").length > 0 && require(["ffsm.datepicker", "css!/ffsm/statics/cdn.12ystar.com/website/Content/hlybz/css/rui-datepicker.min.css"],
    function () {
        for (var e = 0,
        a = $(".Js_date").length; e < a; e++) {
(new ruiDatepicker).init("#" + $(".Js_date").eq(e).attr("id"))
    }
    }), $("#protocolShowBtn").length) {
        var protocolPopBox = $("#protocolPopBox"),
        popScrollTop = 0;
        $("#protocolShowBtn").on("click",
        function () {
            protocolPopBox.show(),
            popScrollTop = $(document).scrollTop(),
            $("body").addClass("base_popup"),
            $("body").css("top", -popScrollTop)
        }),
        $("#protocolHideBtn").on("click",
        function () {
            $("body").removeClass("base_popup"),
            $(document).scrollTop(popScrollTop),
            protocolPopBox.hide()
        })
    }
    var ajaxForm_list = $("form.J_ajaxFormsss");
    ajaxForm_list.length && require(["ffsm.ajaxForm", "layer"],
    function () {
        var layer_load, isBrowserMsie = /msie/.test(navigator.userAgent.toLowerCase());
        isBrowserMsie && ajaxForm_list.on("submit",
        function (e) {
            e.preventDefault()
        });
        var lock = !1;
        $(".J_ajax_submit_btn").on("click",
        function (e) {
            if ($("#agreeInput").length && !$("#agreeInput").is(":checked")) return layer.msg("您未同意个人隐私协议"),
            !1;
            if (lock) return !1;
            lock = !0,
            e.preventDefault();
            var btn = $(this),
            form = btn.parents("form.J_ajaxFormsss"),
            formArr,
            callback = function (e, a) {
                var o = e.msg,
                t = "";
                o.msg && (o = e.msg.msg, t = e.msg.field),
                e.code > 0 ? layer.msg(o, {
                    icon: 1,
                    time: 2e3
                },
                function () {
                    e.url && (window.location.href = e.url),
                    form.resetForm(),
                    form.find('input[name="birthday"]').val(""),
                    form.find('input[name="girl_birthday"]').val("")
                }) : e.code <= 0 && (layer.msg(o, {
                    time: 1e3
                }), a.removeProp("disabled").removeClass("disabled"), "" != t && $("#" + t).focus())
            };
            "" !== btn.data("callback") && void 0 != btn.data("callback") && (callback = eval(btn.data("callback"))),
            isBrowserMsie && form.find("[placeholder]").each(function () {
                var e = $(this);
                e.val() == e.attr("placeholder") && e.val("")
            }),
            form.ajaxSubmit({
                url: btn.data("action") ? btn.data("action") : form.attr("action"),
                dataType: "json",
                beforeSubmit: function (e, a, o) {
                    var t = btn.text();
                    formArr = e;
                    //btn.text(t + "中...").prop("disabled", !0).addClass("disabled");
					btn.text(t + "").prop("disabled", !0).addClass("disabled");
                    //if (!showLoading()) {
                      //  layer_load = layer.load(0, {
                        //    shade: !1
                        //});
                    //}
                },
                success: function (e, a, o, t) {
                    if (e.code > 0 && window.localStorage) for (var r = 0,
                    l = formArr.length; r < l; r++) try {
                        localStorage.setItem(formArr[r].name, formArr[r].value)
                    } catch (e) { }
                    var n = btn.text();
                    //btn.removeClass("disabled").text(n.replace("中...", "")).parent().find("span").remove();
					btn.removeClass("disabled").text(n.replace("", "")).parent().find("span").remove();
                    if (!hideLoading()) {
                        layer.close(layer_load);
                    }
                    callback(e, btn),
                    setTimeout(function () {
                        lock = !1
                    },
                    2e3)
                }
            })
        })
    });
    var sexCheckbox = $(".J_sex");
    if (sexCheckbox.length && sexCheckbox.children("span").on("click",
    function () {
        $(this).addClass("cur"),
        $(this).siblings("span").removeClass("cur");
        var e = $(this).data("value");
        $(this).parent().find("input").val(e)
    }), $("form.J_ajaxFormsss").length > 0) for (var formInput = $("form.J_ajaxFormsss").find("input"), inp = 0, inpMax = formInput.length; inp < inpMax; inp++) {
        var fthis = formInput.eq(inp),
        fname = fthis.attr("name");
        if ("" != fname && window.localStorage && localStorage.getItem(fname)) switch (!0) {
            case / birthday /.test(fname): $("#" + fname).attr("data-date", localStorage.getItem(fname));
                break;
            default:
                if ("true" == fthis.attr("nolocal")) break;
                "text" == fthis.attr("type") && fthis.val(localStorage.getItem(fname))
        }
    }
    if ($("#bindPhonePopup").length) {
        var bindPhonePopup = $("#bindPhonePopup"),
        popScrollTop = 0;
        bindPhonePopup.show(),
        $("body").addClass("base_popup"),
        $("#bindPhonePopupClose").on("click",
        function () {
            $("body").removeClass("base_popup"),
            bindPhonePopup.remove()
        })
    }
    if ($("#evaluatePopup").length) {
        var evlPop = $("#evaluatePopup"),
        evlStar = $("#evaluatePopupStar"),
        evlStarInput = $("#evaluateStarInput"),
        popScrollTop = 0;
        $(window).scroll(function () {
            var e = $(this).scrollTop(),
            a = $(document).height();
            e + $(this).height() + 200 >= a && (evlPop.hasClass("active") || (popScrollTop = $(document).scrollTop(), $("body").addClass("base_popup"), $("body").css("top", -popScrollTop), evlPop.addClass("active").show()))
        }),
        evlStar.children(".J_evaluateStar").on("click",
        function () {
            for (var e = $(this).index(), a = 0; a < 5; a++) a <= e ? evlStar.children(".J_evaluateStar").eq(a).addClass("on") : evlStar.children(".J_evaluateStar").eq(a).removeClass("on");
            evlStarInput.val(e + 1)
        }),
        $("#evaluatePopupCancel").on("click",
        function () {
            $("body").removeClass("base_popup"),
            $(document).scrollTop(popScrollTop),
            evlPop.remove()
        })
    }
    require(["ffsm.zhChinese"])
});