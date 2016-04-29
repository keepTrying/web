<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/home.css">
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
		<div class="w1200 login">
			<p class="login_position">当前位置:<a href="index.html">首页</a>&nbsp; >> &nbsp;会员注册</p>
			<img src="img/login_banner.jpg" /> 
		</div>
		<!--form-->
		<div class="w1200 ">
			<p class="reg_title">嘉宾E会员免费注册</p>
			<div class="reg_detail">注册立享会员折扣、预订保留、延时退房等优惠权益 <a href="">>>更多会员政策</a>  </div>
			<div class="reg_list">
				<table>
					<tr>
						<td class="w_135 tr vr"><span>*</span>姓名:</td>
						<td class="w_195"><input type="text" id="name" class="text ml_10 mr_10"/></td>
						<td class="w_370 color_999">请填写您的真实姓名</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>昵称:</td>
						<td class="w_195"><input type="text" class="text ml_10 mr_10" id="nick"/></td>
						<td class="w_370 color_999">请填写您的昵称</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>年龄:</td>
						<td class="w_195"><input type="text" class="text ml_10 mr_10" id="years"/></td>
						<td class="w_370 color_999">请填写您的年龄</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>性别:</td>
						<td class="w_radio"><input type="radio" name="gender" class="ml_10" value="男" checked="checked" id="male"/>男<input type="radio" name="gender" class="ml_10" value="女"/>女</td>
						<td class="w_370 color_999">请选择您的性别</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>手机号码:</td>
						<td class="w_195"><input type="text" class="text ml_10 mr_10" id="phone"/></td>
						<td class="w_370 color_999">可作为登录名使用</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>Email:</td>
						<td class="w_195"><input type="text" class="text ml_10 mr_10" id="email"/></td>
						<td class="w_370 color_999">请输入您的Email</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>身份证号码:</td>
						<td class="w_195"><input type="text" class="text ml_10 mr_10" id="id_num"/></td>
						<td class="w_370 color_999">请输入您的身份证号码</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>密码:</td>
						<td class="w_195"><input type="password" class="text ml_10 mr_10" id="pw"/></td>
						<td class="w_370 color_999">6-20位字符，可使用字母、数字、符号的组合，不能含空格</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>确认密码:</td>
						<td class="w_195"><input type="password" class="text ml_10 mr_10" id="cpw"/></td>
						<td class="w_370 color_999">&nbsp;</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>安全问题:</td>
						<td class="w_195"><input type="text" class="text ml_10 mr_10" id="safe_que"/></td>
						<td class="w_370 color_999">请输入您的安全问题</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>安全答案:</td>
						<td class="w_195"><input type="text" class="text ml_10 mr_10" id="safe_ans"/></td>
						<td class="w_370 color_999">请输入您的安全答案</td>
					</tr>
					<tr>
						<td class="w_135 tr vr"><span>*</span>验证码:</td>
						<td class="w_195"><input type="text" class="text mr_10 ml_10 code_num " maxlength="4" name="code_num"/></td>
						<td class="w_370 color_999"><img src="../hotel/code_num.php" id="getcode_num" title="看不清，换一张"/>请输入图片中的数字</td>
					</tr>
<!--
					<tr>
						<td class="w_135 tr vr"><span>*</span>手机验证码:</td>
						<td class="w_195"><input type="text" class="text ml_10 mr_10"/></td>
						<td class="w_370 color_999"><input type="button" value="点击获取手机验证码" class="btn_get"/></td>
					</tr>
-->
<!--
					<tr>
						<td class="w_135 tr vr"><input type="button" value="全部信息填写" class="btn_all"/></td>
						<td colspan="2" class="color_999">(完善的信息有助于今后找回密码和享受更多会员权益。)</td>
					</tr>
-->
					<tr>
						<td class="w_135">&nbsp;</td>
						<td colspan="2" class="color_999"><input type="checkbox" id="check"/>同意<a href="javascript:void(0)"  class="forget">《网络会员注册服务条款》</a></td>
					</tr>
					<tr>
						<td class="w_135">&nbsp;</td>
						<td colspan="2" class="color_999"><input type="button" value="立即注册" class="btn_register ml_10" id="btn_register"/>&nbsp;&nbsp;&nbsp;</td>
					</tr>
				</table>
			</div>
			
				
			</div>
	
	
		<!--footer-->
		<div class="footer">
			<p>最终解释权归本公司所有©3.3.2.1102</p>
		</div>
		<script type="text/javascript" src="jq/jquery-1.7.1.min.js" ></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/layer/layer.js"></script>
	</body>
</html>
<script>
$(function(){
       $("#btn_register").click(function(){
           if(!$("#check").prop("checked")){
               alert("您尚未同意我们的会员条款！");
               return;
           }
           if($("#pw").val()!=$("#cpw").val()){
               alert("两次输入的密码不一致！");
               return;
           }
            $.post("../hotel/chk_code.php?act=num",{code:$(".code_num").val()},function(msg){  
                if(msg==1){  //验证码正确！ 
                    $.post("../hotel/user/register.php",{
                        user_phone:$("#phone").val(),
                        user_password:$("#pw").val(),
                        user_nick:$("#nick").val(),
                        user_gender:$("#male").prop("checked")?"1":"2",
                        user_years:$("#years").val(),
                        user_email:$("#email").val(),
                        user_id_num:$("#id_num").val(),
                        user_name:$("#name").val(),
                        user_que:$("#safe_que").val(),
                        user_ans:$("#safe_ans").val(),
                        user_type:'1'
                        
                    },function(data,status){
                        var obj = $.parseJSON(data);
                        if(obj.status=="200"){
                            alert("register success");
                            window.history.back();
                        }else{
                            alert("register fail! code:"+obj.status);
                        }
                    });
                }else{  
                    alert("验证码错误！");  
                }  
        }); 
   });

    });
})
</script>
