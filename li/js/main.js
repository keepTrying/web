;$(function(){
    
    //数字验证  
    $("#getcode_num").click(function(){  
        $(this).attr("src",'../hotel/code_num.php?' + Math.random());  
    });
    
    if (<?php if(isset($_SESSION['user'])) echo 'true'; else echo 'false'; ?> === true) {
            try {
                var nick = '<?php if(isset($_SESSION['
                user '])) echo $_SESSION['
                user ']['
                user_nick '] ?>'.trim();
                $("div.header_right").html('<a href="user.php">' + nick + '</a>|<a href="#">注销</a>');
                $("a:contains(nick)").click(function () {
                    window.location.href = "http://www.baidu.com";
                });
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

 
})
;function strtodate(str){
    str=str.replace(/-/g,"/");
    return new Date(str);
}
;function istimeconfict(time1,time2,time3,time4){
    time1=strtodate(time1);
    time2=strtodate(time2);
    time3=strtodate(time3);
    time4=strtodate(time4);
    if((time1<=time3&&time2>=time3)||(time1>time3&&time1<time4))
        return true;
    else
        return false;
}
;function gotologin(islogin){
    if (islogin==false) {
        window.location.href='/login.html';
    }
}    