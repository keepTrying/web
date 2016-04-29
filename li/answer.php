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
			<p class="login_position">当前位置:<a href="index.php">首页</a>&nbsp;>> &nbsp;会员登录</p>
			<img src="img/login_banner.jpg" /> 
		</div>
		<!--form-->
		<div class="w1200 form">
			<div class="form_left"><img src="img/login_img.jpg" /></div>
			<div class="form_right">
				<div class="form_right01">
					<p>安全验证</p>
					<table>
						<tr>
							<td width="15%" class="tr">安全问题:</td>p
                                        <td width="40%" class="tl question"></td>
							
						</tr>
						
						<tr>
							<td width="15%" class="tr" >答 案:</td>
							<td width="40%" class="tl"><input type="text" class="text ml_10" id="ans"/></td>
							<td width="45%" class="tl color_999" >请输入您的安全答案</td>
						</tr>
						<tr>
							<td width="15%" class="tr">验证码:</td>
							<td width="40%" class="tl"><input type="text" class="txt_yan ml_10 code_num" maxlength="4" name="code_num"/><img src="../hotel/code_num.php" id="getcode_num" title="看不清，换一张"/></td>
							<td width="45%" class="tl color_999">请输入图片中的数字</td>
						</tr>
						
						<tr>
							<td width="15%">&nbsp;</td>
							<td colspan="2" class="tl"><input type="button" value="提交" class="btn_register ml_10" id="chk_num"/></td>
						</tr>
					</table>
				</div>
				
			</div>
			<div class="clear"></div>
		</div>
	
	
		<!--footer-->
		<div class="footer">
			<p>最终解释权归本公司所有©3.3.2.1102</p>
		</div>
            <script type="text/javascript" src="jq/jquery-1.7.1.min.js" ></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="jq/jquery.cookie-1.4.1.min.js"></script>
	</body>
</html>
<script>
$(function(){
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
//    $(".question").text(vars['question']);

   $("#chk_num").click(function(){  
        $.post("../hotel/chk_code.php?act=num",{code:$(".code_num").val()},function(msg){  
            if(msg==1){  //验证码正确！ 
                $.post("../hotel/security/get_question.php",{
                    user_id:vars['user_id'],
                    user_ans:$("#ans").val(),
                },function(data,status){
                    var obj = $.parseJSON(data);
                    if(obj.status=="200"){
                        alert("请重置密码！");

                        window.location.href='restorepw.php?user_id='+vars['user_id'];
                        
                    }else{
                        alert("答案错误！请重新输入。");
                    }
                });
            }else{  
                alert("验证码错误！");  
            }  
        }); 
   }); 
});
</script>
