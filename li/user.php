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

    <title></title>
</head>

<body>
    <!--header-->
    <div class="header">
        <div class="w1200">

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
                    <li><a href="index.php">首   页</a></li>
                    <li class="on"><a href="yuding.php">酒店预定</a></li>
                    <li><a href="discount.php">优惠活动</a></li>
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
                    <a target="_blank" href="#"></a>
                </li>
                <li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;">
                    <a target="_blank" href="#"></a>
                </li>
                <li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;">
                    <a target="_blank" href="#"></a>
                </li>
                <li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;">
                    <a target="_blank" href="#"></a>
                </li>
                <li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;">
                    <a target="_blank" href="#"></a>
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
            
    <!--footer-->
    <div class="footer">
        <p>最终解释权归本公司所有©3.3.2.1102</p>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
<script>
    $(function () {
        var vars = []
            , hash;

        var q = document.URL.split('?')[1];

        if (q != undefined) {

            q = q.split('&');

            for (var i = 0; i < q.length; i++) {

                hash = q[i].split('=');

                vars.push(hash[1]);

                vars[hash[0]] = hash[1];

            }

        }
        $.post("http://42.96.148.66/hotel/indent/query.php", {
                time_begin: ""
                , time_end: ""
                , cost_max: ""
                , cost_min: ""
                , indent_time_begin: ""
                , indent_time_end: ""
                , room_num: ""
                , indent_id: ""
                , indent_status: "2"
                , user_id: ""
                , indent_type: "1"
                , page: "0"
                , num_page: "999"
            }
            , function (data, status) {
                var obj = $.parseJSON(data);
                var i = 0;
                var no_rooms = new Array();
                while (obj.data[i]) {
                    if (istimeconfict(obj.data[i].time_begin, obj.data[i].time_end, vars["in"], vars["out"])) {
                        no_rooms.push(obj.data[i].room_num);
                    };
                    i++;
                }
                $.post("http://42.96.148.66/hotel/room/query.php", {
                    room_type: vars["num"]
                    , room_num: ""
                    , page: "0"
                    , num_page: "999"
                }, function (data, status) {
                    var obj1 = $.parseJSON(data);
                    var j = 0;
                    var content = "";
                    while (obj1.data[j]) {
                        for (var room_num in no_rooms) {
                            if (ojb1.data[j].room_num == room_num)
                                continue;
                        }
                        content += "<tr><td><span class=\"yu_color\">精选商务房</span>（标准价）</td><td>￥" + obj1.data[j].room_cost + "</td><td>带早餐</td><td>￥<span class=\"yu_span\">" + obj1.data[j].room_cost + "</span>起</td><td>紧张</td><td><input type=\"button\" class=\"btn_yu\" value=\"预订\"/></td></tr>";
                        j++;
                    }
                    $("tbody#tbody").html(content);
                });
            });

        $("#find").click(function () {
            $in = $("#input_in").val();
            $out = $("#input_out").val();
            $num = $("#select_num").val().substr(0, 1);
            //		alert($in+$out+$num);
            window.location.href = "yuding.php?in=" + $in + "&out=" + $out + "&num=" + $num;
        });

        function mycarousel_initCallback(carousel) {
            $("#mycarousel li").mouseover(function () {
                $("#pdtok img")[0].src = this.getElementsByTagName("img")[0].name;
                $("#pdtok img")[0].jqimg = this.getElementsByTagName("img")[0].name;
                $(this).siblings().each(function () {
                    this.getElementsByTagName("img")[0].className = "";
                })
                this.getElementsByTagName("img")[0].className = "curr";

            })
        };
        jQuery("#mycarousel").jcarousel({
            initCallback: mycarousel_initCallback
        });
        jQuery("#Fi_pro").jcarousel();
        $(".jqzoom").jqueryzoom({
            xzoom: 403
            , yzoom: 260
            , offset: 10
            , position: "right"
            , preload: 1
            , lens: 1
        });
        
         $('.jin').barIndicator({
                        counterStep: 1
                        , milestones: false
                        , horBarHeight: 15
                        , animTime: 1000
                        ,numType:'absolute'
                        ,numMin:0.0
                        ,numMax:5.0
                        ,horTitle:'综合评分:' 
        });
        $('a.yuding').click(function(){
            alert('预订成功！');
        });

    });
</script>