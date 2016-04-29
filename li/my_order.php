<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/home.css">
		 <script type="text/javascript" src="jq/jquery-1.7.1.min.js"></script>
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
		<div class="w1200 order_nav">
			<p class="login_position">当前位置:<a href="index.php">首页</a>&nbsp;>&nbsp;我的订单</p>
		</div>
		<div class="w1200 order_Con">
		<div class="order_left">
			<ul class="border_top">
				<li class="order_left_title">我的订单
					<ul class="top_none">
						<li><a href="" class="curr"><span class="color_a">•</span>&nbsp;&nbsp;未支付订单</a></li>
						<li><a href=""><span>•</span>&nbsp;&nbsp;已支付订单</li>
						<li><a href=""><span>•</span>&nbsp;&nbsp;已完成订单</li>
						<li><a href=""><span>•</span>&nbsp;&nbsp;已取消订单</li>
						<li><a href=""><span>•</span>&nbsp;&nbsp;已过期订单</li>
<!--						<li class="padd_bottom"><a href=""><span>•</span>&nbsp;&nbsp;优选商品订单</a></li>-->
					</ul>
				</li>
				<li class="order_left_title">
					账户管理
					<ul class="top_none">
						<li><a href=""><span>•</span>&nbsp;&nbsp;我的积分</a></li>
<!--
						<li><a href=""><span>•</span>&nbsp;&nbsp;我的钱包</a></li>
						<li class="padd_bottom"><a href=""><span>•</span>&nbsp;&nbsp;我的优惠券</a></li>
-->
					</ul>
				</li>
				<li class="order_left_title">
					个人中心
					<ul class="top_none">
						<li><a href=""><span>•</span>&nbsp;&nbsp;我的信息</a></li>
						<li><a href=""><span>•</span>&nbsp;&nbsp;密码修改</a></li>
						<li><a href=""><span>•</span>&nbsp;&nbsp;我的房间</a></li>
<!--
						<li><a href=""><span>•</span>&nbsp;&nbsp;我的评论</a></li>
						<li class="padd_bottom"><a href=""><span>•</span>&nbsp;&nbsp;我的会员卡</a></li>
-->
					</ul>
				</li>
<!--
				<li class="order_left_title">
					我的社区
					<ul class="top_none">
						<li><a href=""><span>•</span>&nbsp;&nbsp;分享/建议</a></li>
						<li><a href=""><span>•</span>&nbsp;&nbsp;我的点子</a></li>
						<li class="padd_bottom"><a href=""><span>•</span>&nbsp;&nbsp;我的帖子</a></li>
					</ul>
				</li>
-->
			</ul>
		</div>
		<div class="order_right">
			<div class="order_rightnav">
				<ul>
					<li class="curr">未支付订单</li>
					<li>已支付订单</li>
					<li>已完成订单</li>
					<li>已取消订单</li>
                             <li>已过期订单</li>
				</ul>
			</div>
			<table class="order_list" cellpadding="0" cellspacing="0" id="order_list_a">
				<thead>
					<td width="120">订单编号</td>
					<td width="120">订单类型</td>
					<td width="200">下单时间</td>
					<td width="120">总金额</td>
					<td width="120">房间号</td>
					<td width="300">订单操作</td>
				</thead>
				<tbody>
					<tr>
						<td>12356789</td>
						<td>订房</td>
						<td>2015-02-04 19:00:00</td>
						<td>￥259</td>
						<td>100005</td>
						<td><button>付款</button><button>取消</button></td>
					</tr>
					<tr>
						<td>12356789</td>
						<td>标准间</td>
						<td>150614-150615</td>
						<td>￥259</td>
						<td>在线</td>
						<td>已支付</td>
						<td>已取消</td>
					</tr>
					<tr>
						<td>12356789</td>
						<td>标准间</td>
						<td>150614-150615</td>
						<td>￥259</td>
						<td>在线</td>
						<td>已支付</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>12356789</td>
						<td>标准间</td>
						<td>150614-150615</td>
						<td>￥259</td>
						<td>在线</td>
						<td>已支付</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>12356789</td>
						<td>标准间</td>
						<td>150614-150615</td>
						<td>￥259</td>
						<td>在线</td>
						<td>已支付</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>12356789</td>
						<td>标准间</td>
						<td>150614-150615</td>
						<td>￥259</td>
						<td>在线</td>
						<td>已支付</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</tbody>
			</table>
				
		</div>
		<div class="clear"></div>
		</div>
	
	
		<!--footer-->
		<div class="footer">
			<p>最终解释权归本公司所有©3.3.2.1102</p>
		</div>
		
        
	</body>
</html>
<script>
$(function(){
    if (<?php if(isset($_SESSION['user'])) echo 'true'; else echo 'false'; ?> === false){
        window.location.href="login.php";
    }else{
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
    }
})
</script>