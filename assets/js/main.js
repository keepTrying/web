;$(function () {

	// Menu settings
	$('#menuToggle, .menu-close').on('click', function(){
		$('#menuToggle').toggleClass('active');
		$('body').toggleClass('body-push-toleft');
		$('#theMenu').toggleClass('menu-open');
	});
	
	//插件
	jQuery(".fancybox").fancybox();
	
	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 40
	});
  			
  	// 百度地图API功能
	var point = new BMap.Point(103.972929,30.734606);
	var map = new BMap.Map("allmap",{minZoom:13,maxZoom:19});    // 创建Map实例
	map.centerAndZoom(point, 15);  // 初始化地图,设置中心点坐标和地图级别
	map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.setCurrentCity("成都");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
	var bottom_right_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT});// 右下角，添加比例尺
	var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
	//添加控件和比例尺
	map.addControl(bottom_right_control);        
	map.addControl(top_left_navigation);        
	var marker = new BMap.Marker(point);  // 创建标注
	             

	var label = new BMap.Label("我们在这里哦！",{offset:new BMap.Size(-90,20)});
	marker.setLabel(label);

	 var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
                    '<img src="assets/img/hotel.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
                    '地址：成都市高新西区百叶路<br/>电话：349928888<br/>简介：hotel位于成都市高新西区，为五星级酒店。' +
                  '</div>';

    //创建检索信息窗口对象
    var searchInfoWindow = null;
	searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
			title  : "hotel",      //标题
			width  : 290,             //宽度
			height : 105,              //高度
			panel  : "panel",         //检索结果面板
			enableAutoPan : false,     //自动平移
			searchTypes   :[
				BMAPLIB_TAB_SEARCH,   //周边检索
				// BMAPLIB_TAB_TO_HERE,  //到这里去
				// BMAPLIB_TAB_FROM_HERE //从这里出发
			]
		});

	map.addOverlay(marker); // 将标注添加到地图中

	marker.addEventListener("click", function(e){
	    searchInfoWindow.open(marker);
    });

	

})
;function openInfoWindow() {
	searchInfoWindow.open(point);
	applyEmailNow(); 
}