<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" href="css/bi-style.css" />
		<script type="text/javascript" src="jq/jquery-1.7.1.min.js" ></script>
		<script type="text/javascript" src="jq/jquery.SuperSlide.2.1.1.js" ></script>
		<script type="text/javascript" src="js/laydate.js" ></script>
		<script type="text/javascript" src="jq/jquery.easing.1.3.js" ></script>
		<script type="text/javascript" src="jq/jquery-barIndicator.js" ></script>
		<title></title>
	</head>
	<body>
		<!--header-->
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
		<div class="hd"><ul></ul></div>
		<div class="banner_date"></div>
		<div class="banner_date2">
			<div class="w1200">	<input placeholder="入住日期" class="laydate-icon opc" id="input_in" onClick="laydate({istime: true, format: 'YYYY-MM-DD'})">
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
		jQuery(".fullSlide").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.5) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
		/* 调用SuperSlide */
		jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click",
			startFun:function(i){
				var curLi = jQuery(".fullSlide .bd li").eq(i); /* 当前大图的li */
				if( !!curLi.attr("_src") ){
					curLi.css("background-image",curLi.attr("_src")).removeAttr("_src") /* 将_src地址赋予li背景，然后删除_src */
				}
			}
		});
	</script>
	<script type="text/javascript">
		!function(){
			laydate.skin('dahong');//切换皮肤，请查看skins下面皮肤库
			laydate({elem: '#demo'});//绑定元素
		}();
		
		//日期范围限制
		var start = {
		    elem: '#start',
		    format: 'YYYY-MM-DD',
		    min: laydate.now(), //设定最小日期为当前日期
		    max: '2099-06-16', //最大日期
		    istime: true,
		    istoday: false,
		    choose: function(datas){
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
		    choose: function(datas){
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
		    choose: function(datas){ //选择日期完毕的回调
		        alert('得到：'+datas);
		    }
		});
		
		//日期范围限定在昨天到明天
		laydate({
		    elem: '#hello3',
		    min: laydate.now(-1), //-1代表昨天，-2代表前天，以此类推
		    max: laydate.now(+1) //+1代表明天，+2代表后天，以此类推
		});
		</script>
		<!--yuding_con-->
	
		<div class="w1200 order_nav">
			<p class="login_position">当前位置:<a href="index.php">首页</a>&nbsp;>&nbsp;房间预订</p>
		</div>
		<div class="w1200 yuding_con">
			
			<table class="yuding_con_list" cellpadding="0" cellspacing="0" id="order_list_a"  >
				<thead>
					<td width="300">房型</td>
					<td width="100">门市价</td>
					<td width="200">早餐</td>
					<td width="200">会员价</td>
					<td width="200">房态</td>
					<td width="200">预订</td>
					
				</thead>
				<tbody id="tbody">       
<!--
					<tr>
						<td><span class="yu_color">精选商务房</span>（标准价）</td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td><input type="button" class="btn_yu" value="预订"/></td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">会员促销价</span><span class="yu_radius">惠</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td><input type="button" class="btn_yu" value="预订"/></td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">提前一天预享受优惠</span><span class="yu_radius">惠</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td>需要提前一天预订</td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">提前一天预付8折会...</span><span class="yu_backcolor">预</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td>需要提前一天预订</td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">会员促销价</span><span class="yu_radius">惠</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td><input type="button" class="btn_yu" value="预订"/></td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">提前一天预享受优惠</span><span class="yu_radius">惠</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td>需要提前一天预订</td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">提前一天预付8折会...</span><span class="yu_backcolor">预</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td>需要提前一天预订</td>
					</tr>
					<tr>
						<td><span class="yu_color">精选商务房</span>（标准价）</td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td><input type="button" class="btn_yu" value="预订"/></td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">会员促销价</span><span class="yu_radius">惠</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td><input type="button" class="btn_yu" value="预订"/></td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">提前一天预享受优惠</span><span class="yu_radius">惠</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td>需要提前一天预订</td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">提前一天预付8折会...</span><span class="yu_backcolor">预</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td>需要提前一天预订</td>
					</tr>
					<tr>
						<td><span class="yu_color">精选商务房</span>（标准价）</td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td><input type="button" class="btn_yu" value="预订"/></td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">会员促销价</span><span class="yu_radius">惠</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td><input type="button" class="btn_yu" value="预订"/></td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">提前一天预享受优惠</span><span class="yu_radius">惠</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td>需要提前一天预订</td>
					</tr>
					<tr>
						<td id="yu_left"><span class="yu_left01">提前一天预付8折会...</span><span class="yu_backcolor">预</span></td>
						<td>￥299</td>
						<td>带早餐</td>
						<td>￥<span class="yu_span">259</span>起</td>
						<td>紧张</td>
						<td>需要提前一天预订</td>
					</tr>
-->
				</tbody>
			</table>
			<div class="detail_title">
				<div class="detail_title01"><span>酒店详情</span></div>
				<p>成都顾家酒店创新性地以视觉、听觉、味觉、嗅觉、触觉等“五感”作为元素，融合现代英伦风格，时尚简约且别树一帜。设施完善的公共商务区域设有大堂休息区和商务洽谈区，100兆WIFI全覆盖、宽敞明亮的环境、现磨咖啡的浓香、优质专业的服务是您品质商旅的首选。酒店临近春熙路步行街、天府广场和盐市口商圈；距武侯祠、锦里商业街10分钟车程，步行至四川大学、华西医院十余分钟，距双流机场17 公里，火车北站8公里，交通十分便利。</p>
			</div>
			<div class="detail_title">
				<div class="detail_title01"><span>温馨提示</span></div>
				<p>酒店覆盖wifi<br/>
					该酒店可以使用信用卡充值和消费<br/>
					酒店不接受员工卡预订<br/>
					
				</p>
			</div>
			<div class="detail_title">
				<div class="detail_title01 detail_title02">
					<ul>
						<li class="curr">温馨提示</li>
					</ul>
				</div>
				<table class="yu_car">
					<tr>
						<td width="180"><strong>火车站/机场</strong></td>
						<td width="160">成都火车北站</td>
						<td width="160">距酒店8公里</td>
						<td width="640">乘出租车约15分钟，约20元；地铁：坐地铁1号线至华西坝下车，C
口出站，小天竺东街转乘28/21路公交车在新南门站下车。</td>
					</tr>

				</table>
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
$(function(){
    var vars = [], hash;

    var q = document.URL.split('?')[1];

    if(q != undefined){

       q = q.split('&');

       for(var i = 0; i < q.length; i++){

           hash = q[i].split('=');

           vars.push(hash[1]);

           vars[hash[0]] = hash[1];

       }
       
    }   
    $.post("http://42.96.148.66/hotel/indent/query.php",
      {
        time_begin:"",
        time_end:"",
        cost_max:"",
        cost_min:"",
        indent_time_begin:"",
        indent_time_end:"",
        room_num:"",
        indent_id:"",
        indent_status:"2",
        user_id:"",
        indent_type:"1",
        page:"0",
        num_page:"999"
      },
      function(data,status){
        var obj = $.parseJSON(data);
        var i=0;
        var no_rooms=new Array();
        while(obj.data[i]){
            if(istimeconfict(obj.data[i].time_begin,obj.data[i].time_end,vars["in"],vars["out"])){
               no_rooms.push(obj.data[i].room_num);
               };
            i++;
        }
         $.post("http://42.96.148.66/hotel/room/query.php",{
                room_type:vars["num"],
                room_num:"",
                page:"0",
                num_page:"999"
            },function(data,status){
                var obj1=$.parseJSON(data);
                var j=0;
                var content ="";
                var res=new Array();
                while(obj1.data[j]){
                    for(var room_num in no_rooms){
                        if(ojb1.data[j].room_num===room_num)
                            continue;
                    }
                    res.push(obj1.data[j].room_num);
                    content+="<tr><td><span class=\"yu_color\">精选商务房</span>（标准价）</td><td>￥"+obj1.data[j].room_cost+"</td><td>带早餐</td><td>￥<span class=\"yu_span\">"+obj1.data[j].room_cost+"</span>起</td><td>紧张</td><td><input type=\"button\" class=\"btn_yu\" id=\"btn_"+j+"\" value=\"详情\"/></td></tr>";
                    
                    j++;
                }
                $("tbody#tbody").html(content);

                    $(".btn_yu").each(function(index,element){
                        $(this).click(function(){
//                            alert(index);
                            window.location.href="room_detail.php?room_num="+res[index];
                        });
                    });

            });
      });
    
     $("#find").click(function(){
		 $in = $("#input_in").val();
		 $out = $("#input_out").val();
		 $num = $("#select_num").val().substr(0,1);
//		alert($in+$out+$num);
            window.location.href="yuding.php?in="+$in+"&out="+$out+"&num="+$num;
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