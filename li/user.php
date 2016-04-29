<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" href="css/bi-style.css" />
    <script type="text/javascript" src="jq/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="jq/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="js/laydate.js"></script>
    <script type="text/javascript" src="jq/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="jq/jquery-barIndicator.js"></script>
    <script type="text/javascript" src="jq/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="jq/jquery.zoom.min.js"></script>
    <script type="text/javascript" src="js/layer/layer.js"></script>
    <title></title>
</head>

<body>
        <!--header-->
    <div class="header">
        <div class="w1200">
            <div class="header_left">
                
            </div>
            <div class="header_right">
                <a href="register.php">注册</a>|
                <a href="login.php">登录</a>
            </div>
        </div>
    </div>
    <!--nav-->
    <div class="nav">
        <div class="w1200">
            <div class="nav_left">
                <img src="img/logo.png" />
                <img src="img/logo2.png" />
            </div>
            <div class="nav_right">
                <ul>
                    <li class="on"><a href="index.php">首   页</a></li>
                    <li><a href="yuding.php">酒店预定</a></li>
                    <li><a href="my_order.php">我的订单</a></li>
                    <li><a href="mall.php">积分商城</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--banner-->
    <div class="fullSlide">
                <div class="bd">
            <ul>
                <li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;">
                    <a target="_blank" href="javascript:void(0);"></a>
                </li>
                <li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;">
                    <a target="_blank" href="javascript:void(0);"></a>
                </li>
                <li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;">
                    <a target="_blank" href="javascript:void(0);"></a>
                </li>
                <li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;">
                    <a target="_blank" href="javascript:void(0);"></a>
                </li>
                <li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;">
                    <a target="_blank" href="javascript:void(0);"></a>
                </li>
            </ul>
        </div>
        <div class="hd">
            <ul></ul>
        </div>
        <div class="banner_date"></div>
        <div class="banner_date2">
            <div class="w1200">
                <input placeholder="入住日期" class="laydate-icon opc" id="input_in" onClick="laydate({istime: true, format: 'YYYY-MM-DD'})">
                <span>至<span><input placeholder="退房日期" class="laydate-icon opc" id="input_out" onClick="laydate({istime: true, format: 'YYYY-MM-DD'})">
					<select id="select_num">
							<option>1位房客</option><option>2位房客</option><option>3位房客</option><option>4位房客</option>
					</select>
 					<button id="find">搜索</button></div>
					
				</div>
				
		<span class="prev"></span>
                <span class="next"></span>
            </div>


            <script type="text/javascript">
                /* 控制左右按钮显示 */
                jQuery(".fullSlide").hover(function () {
                    jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
                }, function () {
                    jQuery(this).find(".prev,.next").fadeOut()
                });
                /* 调用SuperSlide */
                jQuery(".fullSlide").slide({
                    titCell: ".hd ul"
                    , mainCell: ".bd ul"
                    , effect: "fold"
                    , autoPlay: true
                    , autoPage: true
                    , trigger: "click"
                    , startFun: function (i) {
                        var curLi = jQuery(".fullSlide .bd li").eq(i); /* 当前大图的li */
                        if (!!curLi.attr("_src")) {
                            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src") /* 将_src地址赋予li背景，然后删除_src */
                        }
                    }
                });
            </script>
            <script type="text/javascript">
                ! function () {
                    laydate.skin('dahong'); //切换皮肤，请查看skins下面皮肤库
                    laydate({
                        elem: '#demo'
                    }); //绑定元素
                }();

                //日期范围限制
                var start = {
                    elem: '#start'
                    , format: 'YYYY-MM-DD'
                    , min: laydate.now(), //设定最小日期为当前日期
                    max: '2099-06-16', //最大日期
                    istime: true
                    , istoday: false
                    , choose: function (datas) {
                        end.min = datas; //开始日选好后，重置结束日的最小日期
                        end.start = datas //将结束日的初始值设定为开始日
                    }
                };

                var end = {
                    elem: '#end'
                    , format: 'YYYY-MM-DD'
                    , min: laydate.now()
                    , max: '2099-06-16'
                    , istime: true
                    , istoday: false
                    , choose: function (datas) {
                        start.max = datas; //结束日选好后，充值开始日的最大日期
                    }
                };
                laydate(start);
                laydate(end);

                //自定义日期格式
                laydate({
                    elem: '#test1'
                    , format: 'YYYY年MM月DD日'
                    , festival: true, //显示节日
                    choose: function (datas) { //选择日期完毕的回调
                        alert('得到：' + datas);
                    }
                });

                //日期范围限定在昨天到明天
                laydate({
                    elem: '#hello3'
                    , min: laydate.now(-1), //-1代表昨天，-2代表前天，以此类推
                    max: laydate.now(+1) //+1代表明天，+2代表后天，以此类推
                });
            </script>
            <!--detail-->

            <div class="w1200 order_nav">
                <p class="login_position">当前位置:<a href="index.php">首页</a>&nbsp;>&nbsp;个人资料</p>

                <div class="w1200 yuding_con">


                    <div id="liuyanbox" class="oloading"></div>
                    <input type="hidden" id="info_type" value="hotel" />
                </div>
            </div>
            <form method="post" name="infopost" id="infopost">
                <div class="cen_bom">
                    <div class="cen_fl">
                        <div class="cen_bt">基本信息</div>
                        <div class="cen_nr">
                            <div class="cen_name">
                                <div class="cen_name_le">
                                    <div class="cen_name_le_1">用户名：</div>
                                    <div class="cen_name_le_3"> <strong id="user_id">qqid18573883</strong>
                                    </div>
                                </div>
                                <div class="cen_name_le">
                                    <div class="cen_name_le_1">
                                        <em>*</em> 昵 称：
                                    </div>
                                    <div class="cen_name_le_3">
                                        <span>
                                                <input name="niname" type="text" class="inp" id="niname" style="width:200px;" value="nuller" size="12" maxlength="12"/>
                                            </span>
                                        <span id="ninameTip"></span>
                                    </div>
                                </div>
                                <div class="cen_name_le">
                                    <div class="cen_name_le_1">性 别：</div>
                                    <div class="cen_name_le_3">
                                        <span>
                                                <label>
                                                    <input name="sex" type="radio" value="1" class="cen_dx"  checked="checked" id="user_gender_male"/>
                                                    男
                                                </label>
                                                <label>
                                                    <input name="sex" type="radio" value="2" class="cen_dx" id="user_gender_female"/>
                                                    女
                                                </label>
                                            </span>
                                        <span id="sexTip"></span>
                                    </div>
                                </div>
                                <div class="cen_name_le">
                                    <div class="cen_name_le_1" >姓 名：</div>
                                    <div class="cen_name_le_3">
                                        <span>
                                                <input name="name" type="text" class="inp" id="name" size="10" maxlength="16"  style="width:200px;" value="级就就"/>
                                            </span>
                                        <span id="nameTip"></span>
                                    </div>
                                </div>
                                <div class="cen_name_le">
                                    <div class="cen_name_le_1">身份证：</div>
                                    <div class="cen_name_le_3">
                                        <span>
                                                <input name="idcard" type="text" class="inp" id="idcard" size="10" maxlength="18"  style="width:200px;" value="142603166404301045"/>
                                            </span>
                                        <span id="idcardTip"></span>
                                    </div>
                                </div>
                                <div class="cen_name_le">
                                    <div class="cen_name_le_1">年 龄：</div>
                                    <div class="cen_name_le_3">
                                        <span>
                                                <input name="bir" type="text" class="inp" id="bir" style="width:120px;" size="20" maxlength="20" onfocus="WdatePicker({maxDate:'%y-%M-%d'})" value="1900/1/1"/>
                                            </span>
                                        <span id="birTip"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="cen_img">
                                <div class="img_t">
                                    <img src="http://qzapp.qlogo.cn/qzapp/204708/3DF42BD751CFA7322B5483691BC9E3EA/100?3" alt="" width="100" height="100" id="niimg" />
                                </div>
                                <div class="img_m">我的头像</div>
                                <div class="img_m">
                                    <a href="javascript:void(0);" class="black" id="txset">设置头像</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="cen_fl">
                        <div class="cen_bt">联系方式</div>
                        <div class="cen_nr">
                            <div class="cen_name_le">
                                <div class="cen_name_le_1">
                                    <em>*</em> 手 机：
                                </div>
                                <div class="cen_name_le_2">
                                    <span>
                                            <input name="phone" type="text" class="inp" id="phone" size="11" maxlength="11" style="width:200px;" value="15708444257" />
                                        </span>
                                    <span class="tel" title="此手机还未通过认证，认证后可以直接使用它登录本站"></span>
                                    <span id="phoneTip"></span>
                                </div>
                            </div>
                            <!--
                        <div class="cen_name_le">
                            <div class="cen_name_le_1">固定电话：</div>
                            <div class="cen_name_le_2">
                                <span>
                                            <input name="tel" type="text" class="inp" id="tel" size="20" maxlength="20" style="width:200px;" value="0357-5627119" />
                                        </span>
                                <span id="telTip"></span>
                            </div>
                        </div>
                        <div class="cen_name_le">
                            <div class="cen_name_le_1">在线QQ：</div>
                            <div class="cen_name_le_2">
                                <span>
                                            <input name="qq" type="text" class="inp" id="qq" size="20" maxlength="20" style="width:200px;" value="" />
                                        </span>
                                <span id="qqTip"></span>
                            </div>
                        </div>
-->
                            <div class="cen_name_le">
                                <div class="cen_name_le_1">
                                    <em>*</em> Email：
                                </div>
                                <div class="cen_name_le_2">
                                    <span>
                                            <input name="email" type="text" class="inp" id="email" size="30" maxlength="50" style="width:200px;" value="vitress@qq.com"  />
                                        </span>
                                    <span class="e_mail" title="此邮箱还未通过认证，认证后可以直接使用它登录本站"></span>
                                    <span id="emailTip"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cen_fl">
                        <div class="cen_annu">
                            <input type="submit" class="annu_a" id="sub" value="提交修改">
                        </div>
                    </div>
                </div>
            </form>
            <!--footer-->
            <div class="footer">
                <p>最终解释权归本公司所有©3.3.2.1102</p>
            </div>
            <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
<script>
    $(function () {
        
        $("#user_id").text('user'+'<?php echo $_SESSION['user']['user_id'];?>');
        if(<?php echo $_SESSION['user']['user_id'];?>===2){
            $("#user_gender_male").removeAttr('checked');
            $("#user_gender_female").attr('checked');
        }
        
         //user name
        if (<?php if(isset($_SESSION['user'])) echo 'true'; else echo 'false'; ?> === true) {
            try {
                var nick = '<?php if(isset($_SESSION['user'])) echo $_SESSION['user']['user_nick'] ?>'.trim();
                $("div.header_right").html('<a href="user.php">' + nick + '</a>|<a href="#">注销</a>');
//                $("a:contains(nick)").click(function () {
//                    window.location.href = "user.php";
//                });
            } catch (e) {
                alert(e.message);
            }
            $("a:contains('注销')").click(function () {
                $.post("../hotel/user/login.php", {
                    action: 'logout'
                }, function (data, status) {
                    var obj = $.parseJSON(data);
                    if (obj.status == "200") {
                        alert("logout success");

                        window.location.reload();
                    } else {
                        alert("logout fail!");
                    }

                });
            });
        } else {
            $("div.header_right").html('<a href=\"register.php\">注册</a>|<a href=\"login.php\">登录</a>');
        }

        $("#find").click(function () {
            $in = $("#input_in").val();
            $out = $("#input_out").val();
            $num = $("#select_num").val().substr(0, 1);
            //		alert($in+$out+$num);
            window.location.href = "yuding.php?in=" + $in + "&out=" + $out + "&num=" + $num;
        });

        $("#txset").click(function () {
            layer.open({
                type: 2
                , area: ['662px', '405px']
                , fix: false //不固定
                , maxmin: true
                , content: 'txset.html'
            });

        });
        
        $("#sub").click(function(){
            
        })
        
        

    });
</script>