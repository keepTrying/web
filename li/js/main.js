;$(function(){
	$("#find").click(function(){
		 $in = $("#input_in").val();
		 $out = $("#input_out").val();
		 $num = $("#select_num").val().substr(0,1);
		alert($in+$out+$num);
            window.location.href="yuding.html?in="+$in+"&out="+$out+"&num="+$num;
	});
    
    //数字验证  
    $("#getcode_num").click(function(){  
        $(this).attr("src",'../hotel/code_num.php?' + Math.random());  
    });  
    $("#chk_num").click(function(){  
        var code_num = $("#code_num").val();  
        $.post("../hotel/chk_code.php?act=num",{code:code_num},function(msg){  
            if(msg==1){  
                alert("验证码正确！");  
            }else{  
                alert("验证码错误！");  
            }  
        });  
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