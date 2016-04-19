;$(function(){
	$("#find").click(function(){
		 $in = $("#input_in").val();
		 $out = $("#input_out").val();
		 $num = $("#select_num").val().substr(0,1);
		alert($in+$out+$num);
            window.location.href="yuding.html?in="+$in+"&out="+$out+"&num="+$num;
	});
});