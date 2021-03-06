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
                <p class="login_position">当前位置:<a href="index.php">首页</a>&nbsp;>&nbsp;<a href="yuding.php">房间预订</a>&nbsp;>&nbsp;房间详情</p>

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

                        <div class="jqzoom" id="pdtok"><img src="http://pccoo.cn/store/20130531/20130531173247331.jpg" width="300" height="225" jqimg="http://pccoo.cn/store/20130531/20130531173247331.jpg" alt="房间图片" title="房间图片" /></div>
                        <div id="listsmall">
                            <ul id=mycarousel>
                                <li><img name="http://pccoo.cn/store/20130531/20130531173247331.jpg" src="http://pccoo.cn/store/20130531/20130531173247331.jpg" alt="房间图片" title="房间图片" /></li>
                                <li><img name="http://pccoo.cn/es_product/20130531/201353117564355.jpg" src="http://pccoo.cn/es_product/20130531/201353117564355.jpg" alt="房间图片" title="房间图片" /></li>
                                <li><img name="http://pccoo.cn/es_product/20130531/201353117571223.jpg" src="http://pccoo.cn/es_product/20130531/201353117571223.jpg" alt="房间图片" title="房间图片" /></li>
                                <li><img name="http://pccoo.cn/es_product/20130531/201353117574226.jpg" src="http://pccoo.cn/es_product/20130531/201353117574226.jpg" alt="房间图片" title="房间图片" /></li>
                            </ul>
                        </div>

                    </div>
                    <div class="proo">
                        <h1>成都顾家酒店标准二人间</h1>
                        <ul>
                            <li class="prxxo"></li>
                            <li id="area">房型面积：30</li>
                            <li>房间类型：<em class="double">标准间</em></li>
                            <li id="floor">所在楼层：2</li>
                            <li>上网服务：免费宽带</li>
                            <li>早 餐：有</li>
                            <li>卫浴类型：独立卫浴</li>
                            <li>市场价：<span class="pscjia">150.00元</span></li>
                            <li>本站价：<span class="pjia">130.00元</span></li>
                            <li>门牌号：<span class="star">101</span></li>
                            <li></li>

                            <li>
                                <a class="yuding">点击选择在线预订</a>
                            </li>
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
            <p id="p_room_desc">
                <!--
                <br/> 该酒店可以使用如家钱包充值和消费
                <br/> 酒店不接受员工卡预订
                <br/> 2016.04.04-2016.04.29凡新办金卡的上门客人入住首日享受8折优惠 并可获赠两份/间夜
                <br/> 2016.04.04-2016.04.29商务日房：非会员140元/4小时，会员120元/4小时
                <br/> 2016.04.04-2016.04.29会员入住（精选高级商务房与精选高级双床房）赠早餐2份/间夜
-->
            </p>
        </div>

        <div class="detail_title">
            <div class="detail_title01"><span>房间点评</span></div>
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
            <div class="yu_pingscore">
                <ul>
                    <li>大姐夫</li>
                    <li>
                        <div class="bars"><span id="bar" class="jin">4.0</span></div>
                    </li>
                    <li class="yu_pingscorem">点评时间：2016-04-07 20:34:00</li>
                </ul>
                <ul>
                    <li>
                        <img src="http://pccoo.cn/es_product/20130531/201353117574226.jpg">
                    </li>
                    <li>
                        <p>酒店干净卫生，带儿子出来旅游，感觉不错。位置也很好，到哪儿都方便，周边吃的东西也不少。早餐也不错。房间每天都有赠送小饼干，儿子很开心。不过第一天进房间门口就有名片，感觉不是很好</p>
                    </li>
                </ul>

            </div>
            <!--            <div class="yu_pingscore">
                <ul>
                    <li>综合评分：5.0分</li>
                    <li>来自183...4324</li>
                    <li class="yu_pingscorem">点评时间：2016-04-07</li>
                </ul>
                <p>一如既往的好，安静，卫生，安全，方便，周到。</p>
            </div>
            <div class="yu_pingscore">
                <ul>
                    <li>综合评分：5.0分</li>
                    <li>来自183...4324</li>
                    <li class="yu_pingscorem">点评时间：2016-04-07</li>
                </ul>
                <p>一如既往的好，安静，卫生，安全，方便，周到。</p>
            </div>
            <div class="yu_pingscore yu_pingscorel">
                <ul>
                    <li>综合评分：5.0分</li>
                    <li>来自183...4324</li>
                    <li class="yu_pingscorem">点评时间：2016-04-07</li>
                </ul>
                <p>好喜欢，好高大上。。。自助洗衣超给力，房间特舒服。下次还要住，精选就是不一样。。各方面态度也好。。。</p>
            </div>
            <div class="yu_look"><a href="">>>查看全部点评</a></div>
        </div>
        <!--<div class="graph"> 
				<strong id="bar" style="width:1%;"></strong> 
			</div>-->
            <!--<script type="text/javascript"> 
				function $(obj){ 
				return document.getElementById(obj); 
				} 
				function go(){ 
				$("bar").style.width = parseInt($("bar").style.width) + 1 + "%"; 
				$("bar").innerHTML = $("bar").style.width; 
				if($("bar").style.width == "100%"){ 
				window.clearInterval(bar); 
				} 
				
				} 
				var bar = window.setInterval("go()",50); 
				window.onload = function(){ 
				bar; 
				} 
			</script> -->
        </div>
        <!--advantage-->
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
        $.post("http://42.96.148.66/hotel/room/query.php", {
            room_num: vars['room_num'],
            room_type: '',
            room_area_min: '',
            room_area_max: '',
            room_cost_min: '',
            room_cost_max: '',
            page: "0",
            num_page: "999"
        }, function(data, status) {
            var obj = $.parseJSON(data).data[0];
            var type = '';
            switch (obj.room_type) {
                case "1":
                    type += '单人间';
                    break;
                case "2":
                    type += '双人间';
                    break;
                case "3":
                    type += '三人间';
                    break;
                default:
                    break;

            }
            $(".double").text(type);
            $(".proo h1").text('成都顾家酒店标准' + type);
            $("#area").text('房型面积：' + obj.room_area + '平米');
            $("#floor").text('所在楼层：' + obj.room_num.slice(0, -3));
            var pscjia = Number(obj.room_cost) + 50;
            $(".pscjia").text(pscjia + '元');
            $(".pjia").text(obj.room_cost + '元');
            $(".star").text(obj.room_num.substr(-3));
            $("#p_room_desc").text(obj.room_facility);
            $("#pdtok img").attr('src', obj.room_img);
            $("#mycarousel img")[0].src = obj.room_img;
            $("#mycarousel img")[1].src = obj.room_img1;
            $("#mycarousel img")[2].src = obj.room_img2;
            $("#mycarousel img")[3].src = obj.room_img3;

        });
        var content = '';
        $.post("http://42.96.148.66/hotel/comment/query.php", {
            room_num: vars['room_num'],
            user_id: '',
            comment_text: '',
            comment_star: '',
            comment_time_begin: '',
            comment_time_end: '',
            user_name: '',
            comment_id: '',
            page: "0",
            num_page: "999"
        }, function(data, status) {
            var obj = $.parseJSON(data);
            if (obj.status == '200') {

                var i=0;
                var img_url='';
                var data=new Array();
                while(obj.data[i]) {
                    i=i%obj.data.length;
                    var comment=obj.data[i];
                    
                        img_url='img/n'+comment.user_img+'.png';
                        content += '<div class="yu_pingscore"><ul><li>' + comment.user_name + '</li><li><div class="bars"><span id="bar" class="jin" index="'+i+'">' + comment.comment_star + '</span></div></li><li class="yu_pingscorem">点评时间：' + comment.comment_time + '</li></ul><ul><li><img src="' + img_url + '"></li><li><p>' + comment.comment_text + '</p></li></ul></div>';
                        data.push(parseInt(comment.comment_star));
                        i++;
                       
                    }
                    
                $(".yu_ping").after(content);
                for(var j=0;j<i;j++){
                $(".jin[index=j]").barIndicator('loadNewData',[data[j]]);
                }
                }
                
            }


        );


        $("#find").click(function() {
            $in = $("#input_in").val();
            $out = $("#input_out").val();
            $num = $("#select_num").val().substr(0, 1);
            //		alert($in+$out+$num);
            window.location.href = "yuding.php?in=" + $in + "&out=" + $out + "&num=" + $num;
        });

        function mycarousel_initCallback(carousel) {
            $("#mycarousel li").mouseover(function() {
                $("#pdtok img")[0].src = this.getElementsByTagName("img")[0].src;
                $("#pdtok img")[0].jqimg = this.getElementsByTagName("img")[0].src;
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
        $('.jin').barIndicator({
                    counterStep: 1,
                    milestones: false,
                    horBarHeight: 15,
                    animTime: 1000,
                    numType: 'absolute',
                    numMin: 0.0,
                    numMax: 5.0,
                    horTitle: '综合评分:'
        });

       
        $('a.yuding').click(function() {
            alert('预订成功！');
        });
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


    });
</script>