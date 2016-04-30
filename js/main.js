;$(function(){
    
    //数字验证  
    $("#getcode_num").click(function(){  
        $(this).attr("src",'../hotel/code_num.php?' + Math.random());  
    });
    
 
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