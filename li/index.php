<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<script type="text/javascript" src="jq/jquery-1.7.1.min.js" ></script>
		<script type="text/javascript" src="jq/jquery.SuperSlide.2.1.1.js" ></script>
		<script type="text/javascript" src="js/laydate.js" ></script>
		<title></title>
	</head>
	<body>
		<!--header-->
		<div class="header">
			<div class="w1200" >
				<div class="header_left">
					<ul>
						<li class="con"></li>
						<li><a href="#" class="con1"></a></li>
						<li><a href="#" class="con2"></a></li>
						<li><a href="#" class="con3"></a></li>
						<li><a href="#" class="con4"></a></li>
						<li><a href="#" class="con5"></a></li>
						<li><a href="#" class="con6"></a></li>
						<li><a href="#" class="con7"></a></li>
						<li><a href="#" class="con8"></a></li>
						<li><a href="#" class="con9"></a></li>
						<li><a href="#" class="con10"></a></li>
					</ul>
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
					<img src="img/logo.png"/>
					<img src="img/logo2.png"/>
				</div>
				<div class="nav_right">
					<ul>
						<li class="on"><a href="index.php">首   页</a></li>
						<li ><a href="yuding.php">酒店预定</a></li>
						<li ><a href="discount.php">优惠活动</a></li>
						<li ><a href="mall.php">积分商城</a></li>	
					</ul>					
				</div>
			</div>
		</div>



		<div class="fullSlide">
			<div class="bd">
				<ul>
					<li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;"><a target="_blank" href="#"></a></li>
					<li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;"><a target="_blank" href="#"></a></li>
					<li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;"><a target="_blank" href="#"></a></li>
					<li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;"><a target="_blank" href="#"></a></li>
					<li _src="url(img/home_banner.jpg)" style="background:center 0 no-repeat;"><a target="_blank" href="#"></a></li>
				</ul>
			</div>
		<div class="hd"><ul></ul></div>
		<div class="banner_date"></div>
		<div class="banner_date2">
			<div class="w1200">	<input id="input_in" placeholder="入住日期" class="laydate-icon opc" onClick="laydate({istime: true, format: 'YYYY-MM-DD'})">
					<span>至<span><input id="input_out" placeholder="退房日期" class="laydate-icon opc" onClick="laydate({istime: true, format: 'YYYY-MM-DD'})">
					<select id="select_num">
							<option>1位房客</option><option>2位房客</option><option>3位房客</option><option>4位房客</option>
					</select>
 					<button id="find">搜索</button>
 			</div>
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
		<!--room-->
		<div class="room">
			<p class="font">房间推荐</p>
			<div class="room_con">
				<div class="room_con_1"><a href="#">
					<img src="img/home_con_img1.jpg"/>
					<p>精选商务房</p>
					<span>床型：1张1.8m双人床</span>
					<span>平均面积：25平方米左右</span>
				</a></div>
				<div class="room_con_1"><a href="#">
					<img src="img/home_con_img2.jpg"/>
					<p>精选商务房</p>
					<span>床型：1张1.8m双人床</span>
					<span>平均面积：25平方米左右</span>
				</a></div>
				<div class="room_con_1"><a href="#">
					<img src="img/home_con_img3.jpg"/>
					<p>精选商务房</p>
					<span>床型：1张1.8m双人床</span>
					<span>平均面积：25平方米左右</span>
				</a></div>
				<div class="room_con_1"><a href="#">
					<img src="img/home_con_img4.jpg"/>
					<p>精选商务房</p>
					<span>床型：1张1.8m双人床</span>
					<span>平均面积：25平方米左右</span>
				</a></div>
				<div class="room_con_1"><a href="#">
					<img src="img/home_con_img5.jpg"/>
					<p>精选商务房</p>
					<span>床型：1张1.8m双人床</span>
					<span>平均面积：25平方米左右</span>
				</a></div>
			</div>	
			<p class="more"><a href="#">查看更多</a></p>
		</div>
		<!--hot-->
		<div class="hot">
			<p class="font">热门优惠促销</p>
			<a href="#"><img src="img/home_hot_img1.jpg"></a>
			<a href="#"><img src="img/home_hot_img2.jpg"></a>
			<a href="#"><img src="img/home_hot_img3.jpg"></a>
			<a href="#"><img src="img/home_hot_img4.jpg"></a>
			<a href="#"><img src="img/home_hot_img5.jpg"></a>
			<p class="more"><a href="#">查看更多</a></p>
		</div>
		<!--advantage-->
		<div class="advantage">
			<div class="w1200">
				<div class="advantage_con">
					<img src="img/icon_1.png"/>
					<h3>3000家酒店</h3>
					<p>覆盖全国32个省，330余座城市</p>
				</div>
				<div class="advantage_con">
					<img src="img/icon_2.png"/>
					<h3>送积分翻倍</h3>
					<p>会员在线预定赠送多倍积分</p>
					<p>专享超值礼品和免费房兑换</p>
				</div>
				<div class="advantage_con">
					<img src="img/icon_3.png"/>
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
		
		<script type="text/javascript" src="js/main.js" ></script>
	</body>
</html>
<script>
    $(function(){
        $("#find").click(function(){
		 $in = $("#input_in").val();
		 $out = $("#input_out").val();
		 $num = $("#select_num").val().substr(0,1);
//		alert($in+$out+$num);
            window.location.href="yuding.php?in="+$in+"&out="+$out+"&num="+$num;
	});

    if(<?php if(isset($_SESSION['user'])) echo 'true'; else echo 'false'; ?>===true){
        try{
            $("div.header_right").html('<a href="#">'+'<?php echo $_SESSION['user']['user_nick'] ?>'+'</a>|<a href="#">注销</a>');
            $("a:contains('<?php echo $_SESSION['user']['user_nick'] ?>')").click(function(){
                window.location.href="http://www.baidu.com";
            });
        }catch(e){
            
        }
        $("a:contains('注销')").click(function(){
            $.post("../hotel/user/login.php",{
                    action:'logout'
                },function(data,status){
                    var obj = $.parseJSON(data);
                    if(obj.status=="200"){
                        alert("logout success");

                        window.location.reload();
                    }else{
                        alert("logout fail!");
                    }
                    
                });
        });
    }else{
        alert("good");
        $("div.header_right").html('<a href=\"register.php\">注册</a>|<a href=\"login.php\">登录</a>');
    }
    });
</script>
