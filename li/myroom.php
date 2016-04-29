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
                jQuery(".fullSlide").hover(function() {
                    jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
                }, function() {
                    jQuery(this).find(".prev,.next").fadeOut()
                });
                /* 调用SuperSlide */
                jQuery(".fullSlide").slide({
                    titCell: ".hd ul",
                    mainCell: ".bd ul",
                    effect: "fold",
                    autoPlay: true,
                    autoPage: true,
                    trigger: "click",
                    startFun: function(i) {
                        var curLi = jQuery(".fullSlide .bd li").eq(i); /* 当前大图的li */
                        if (!!curLi.attr("_src")) {
                            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src") /* 将_src地址赋予li背景，然后删除_src */
                        }
                    }
                });
            </script>
            <script type="text/javascript">
                ! function() {
                    laydate.skin('dahong'); //切换皮肤，请查看skins下面皮肤库
                    laydate({
                        elem: '#demo'
                    }); //绑定元素
                }();

                //日期范围限制
                var start = {
                    elem: '#start',
                    format: 'YYYY-MM-DD',
                    min: laydate.now(), //设定最小日期为当前日期
                    max: '2099-06-16', //最大日期
                    istime: true,
                    istoday: false,
                    choose: function(datas) {
                        end.min = datas; //开始日选好后，重置结束日的最小日期
                        end.start = datas //将结束日的初始值设定为开始日
                    }
                };

                var end = {
                    elem: '#end',
                    format: 'YYYY-MM-DD',
                    min: laydate.now(),
                    max: '2099-06-16',
                    istime: true,
                    istoday: false,
                    choose: function(datas) {
                        start.max = datas; //结束日选好后，充值开始日的最大日期
                    }
                };
                laydate(start);
                laydate(end);

                //自定义日期格式
                laydate({
                    elem: '#test1',
                    format: 'YYYY年MM月DD日',
                    festival: true, //显示节日
                    choose: function(datas) { //选择日期完毕的回调
                        alert('得到：' + datas);
                    }
                });

                //日期范围限定在昨天到明天
                laydate({
                    elem: '#hello3',
                    min: laydate.now(-1), //-1代表昨天，-2代表前天，以此类推
                    max: laydate.now(+1) //+1代表明天，+2代表后天，以此类推
                });
            </script>
            <!--detail-->

            <div class="w1200 order_nav">
                <p class="login_position">当前位置:<a href="index.php">首页</a>&nbsp;>&nbsp;我的房间</p>

                <div class="w1200 yuding_con">


                    <div id="liuyanbox" class="oloading"></div>
                    <input type="hidden" id="info_type" value="hotel" />
                </div>
            </div>
            <div class="detail_title">
                <div class="detail_title01"><span>房间详情</span></div>
            </div>
            <div class="news_show_rt">

                <div class="prbj02">
                    <div class="pdto">

                        <div class="jqzoom" id="pdtok"><img src="http://pccoo.cn/store/20130531/20130531173247331.jpg" width="300" height="225" jqimg="http://pccoo.cn/store/20130531/20130531173247331.jpg" alt="云品时尚酒店标准二人间" title="云品时尚酒店标准二人间" /></div>
                        <div id="listsmall">
                            <ul id=mycarousel>
                                <li><img name="http://pccoo.cn/store/20130531/20130531173247331.jpg" src="http://pccoo.cn/store/20130531/20130531173247331.jpg" alt="云品时尚酒店标准二人间" title="云品时尚酒店标准二人间" /></li>
                                <li><img name="http://pccoo.cn/es_product/20130531/201353117564355.jpg" src="http://pccoo.cn/es_product/20130531/201353117564355.jpg" alt="云品时尚酒店标准二人间" title="云品时尚酒店标准二人间" /></li>
                                <li><img name="http://pccoo.cn/es_product/20130531/201353117571223.jpg" src="http://pccoo.cn/es_product/20130531/201353117571223.jpg" alt="云品时尚酒店标准二人间" title="云品时尚酒店标准二人间" /></li>
                                <li><img name="http://pccoo.cn/es_product/20130531/201353117574226.jpg" src="http://pccoo.cn/es_product/20130531/201353117574226.jpg" alt="云品时尚酒店标准二人间" title="云品时尚酒店标准二人间" /></li>
                            </ul>
                        </div>

                    </div>
                    <div class="proo">
                        <h1>云品时尚酒店标准二人间</h1>
                        <ul class="myroom_ul">
                            <li class="prxxo"></li>
                            <li>房型面积：30</li>
                            <li>房间类型：<em class="double">标准间</em></li>
                            <li>房间号：100001</li>
                            <li>上网服务：免费宽带</li>
                            <li>卫浴类型：独立卫浴</li>
                            <li>费用：<span class="pscjia">150.00元/天</span></li>
                            <li>入住日期：<span class="pjia">2015-10-01</span></li>
                            <li>到期日期：<span class="star">2016-10-01</span></li>
                            <li></li>

                        </ul>
                    </div>
                </div>

            </div>
            <!--
                <div class="news_show_nr">
                    <div class="news_show_nr1">商品详情：</div>标准间的价格，豪华间的享受，祝您入住愉快！</div>
                <div class="news_show_sx">

                </div>
-->
        </div>
        <div class="detail_title">
            <div class="detail_title01"><span>房屋设施</span></div>
            <p id="p_room_desc">酒店覆盖wifi
                <br/> 该酒店可以使用如家钱包充值和消费
                <br/> 酒店不接受员工卡预订
                <br/> 2016.04.04-2016.04.29凡新办金卡的上门客人入住首日享受8折优惠 并可获赠两份/间夜
                <br/> 2016.04.04-2016.04.29商务日房：非会员140元/4小时，会员120元/4小时
                <br/> 2016.04.04-2016.04.29会员入住（精选高级商务房与精选高级双床房）赠早餐2份/间夜
            </p>
        </div>
        <div class="detail_title">
            <div class="detail_title01"><span>申请服务</span></div>
            <ul id="service">
                <li>
                    <button>早餐</button>
                </li>
                <li>
                    <button>按摩</button>
                </li>
                <li>
                    <button>续租</button>
                </li>
                <li>
                    <button>退房</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="detail_title">
        <div class="detail_title01"><span>房间点评</span></div>
        <!--
            <div class="yu_ping">
                <table>
                    <tr>
                        <td rowspan="2" width="260">
                            好评率:<span class="yu_jindu">99%</span>
                        </td>
                        <td rowspan="2" width="300" class="tl">
                            <div class="bars"><span id="bar" class="jin">4.0</span></div>
                        </td>

                    </tr>

                </table>


            </div>
-->

        <div class="message">
            <form id="message_form">
                <ul class="plcontent">
                    <li class="pli"><span class="l"><em class="red">*</em> 评&nbsp;&nbsp;&nbsp;&nbsp;分：</span>
                        <p><span class="pfenbar"><a id="pf1" sd="-1" class="hovli">很差</a><a id="pf2" sd="0" class="hovli">差</a><a id="pf3" sd="1" class="hovli">一般</a><a id="pf4" sd="2" class="hovli">好</a><a id="pf5" sd="3" class="hovli">很好</a></span><i>很好</i>
                            <input type="hidden" class="dfhid" name="ysdp" id="ysdp" value="3">
                        </p>
                    </li>
                    <li><span class="l"><em class="red">*</em> 内&nbsp;&nbsp;&nbsp;&nbsp;容：</span>
                        <div class="textaCont dconipt">
                            <div class="t"></div>
                            <div class="c">
                                <textarea id="content_txt" name="content_txt"></textarea>
                            </div>
                            <div class="b"></div>
                            <div id="zezlogin" class="red" style="display: none;">亲，难道您要此处省略1万字吗？</div>
                        </div>

                        <p>
                            <input type="button" value="" id="subok">
                        </p>
                    </li>
                </ul>
            </form>

        </div>

    </div>
      <div class="advantage">
                <div class="w1200">
                    <div class="advantage_con">
                        <img src="img/icon_1.png" />
                        <h3>家的感觉</h3>
                        <p>夏日里的清凉</p>
                        <p>冬日里的阳光</p>
                    </div>
                    <div class="advantage_con">
                        <img src="img/icon_2.png" />
                        <h3>积分乐趣</h3>
                        <p>会员在线预定赠送积分</p>
                        <p>专享超值礼品和免费房兑换</p>
                    </div>
                    <div class="advantage_con">
                        <img src="img/icon_3.png" />
                        <h3>到店有房保障</h3>
                        <p>订单一经确认</p>
                        <p>酒店预留客房保证会员安心入住</p>
                    </div>
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
    $(function() {
        var vars = [],
            hash;

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
            time_begin: "",
            time_end: "",
            cost_max: "",
            cost_min: "",
            indent_time_begin: "",
            indent_time_end: "",
            room_num: "",
            indent_id: "",
            indent_status: "2",
            user_id: "",
            indent_type: "1",
            page: "0",
            num_page: "999"
        }, function(data, status) {
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
                room_type: vars["num"],
                room_num: "",
                page: "0",
                num_page: "999"
            }, function(data, status) {
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

        $("#find").click(function() {
            $in = $("#input_in").val();
            $out = $("#input_out").val();
            $num = $("#select_num").val().substr(0, 1);
            //		alert($in+$out+$num);
            window.location.href = "yuding.php?in=" + $in + "&out=" + $out + "&num=" + $num;
        });

        function mycarousel_initCallback(carousel) {
            $("#mycarousel li").mouseover(function() {
                $("#pdtok img")[0].src = this.getElementsByTagName("img")[0].name;
                $("#pdtok img")[0].jqimg = this.getElementsByTagName("img")[0].name;
                $(this).siblings().each(function() {
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
            xzoom: 403,
            yzoom: 260,
            offset: 10,
            position: "right",
            preload: 1,
            lens: 1
        });

//        $('.jin').barIndicator({
//            counterStep: 1,
//            milestones: false,
//            horBarHeight: 15,
//            animTime: 1000,
//            numType: 'absolute',
//            numMin: 0.0,
//            numMax: 5.0,
//            horTitle: '综合评分:'
//        });
//        $('a.yuding').click(function() {
//            alert('预订成功！');
//        });

        $(".pfenbar a").live('mouseenter', function() {
            $(this).nextAll().removeClass("hovli")
            $(this).addClass("hovli")
            $(this).prevAll().addClass("hovli")
//            $(this).parents("p").find("i").removeClass("red")
            $(this).parents("p").find("i").html($(this).html())
        })
//            .live('mouseleave', function() {
//            var sidv = $(this).attr("sd"),
//                t_hid = $(this).parents("p").find("input").val();
//            if (t_hid == "") {
//                $(this).removeClass("hovli");
//                $(this).prevAll().removeClass("hovli")
//            } else if (t_hid < sidv) {
//                $(this).parent().children("a[sd=" + t_hid + "]").nextAll().removeClass("hovli")
//            } else {
//                $(this).parent().children("a[sd=" + t_hid + "]").addClass("hovli")
//                $(this).parent().children("a[sd=" + t_hid + "]").prevAll().addClass("hovli")
//            }
//            $(this).parents("p").find("i").html($(this).parent().children("a[sd=" + t_hid + "]").html())
//        })
        ;
//        $(".pfenbar a").live("click", function() {
//
//            var sidv = $(this).attr("sd");
//            $(this).addClass("hovli");
//            $(this).prevAll().addClass("hovli")
//            $(this).parents("p").find("input").val(sidv)
//            $(this).parents("p").find("i").html($(this).html())
//
//        });
        $("textarea").live("mouseover", function() {
            $(this).focus();
        });
    });
</script>