<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
<link rel="stylesheet" href="/cl/standard.css?v=wj4.3">
<link rel="stylesheet" href="/cl/wj43.css?v=wj4.3">
<link rel="stylesheet" href="/cl/ads.css?v=wj4.3">
</head>
<body>
     <div class="clear" id="body-placeholder">
          <div id="mainBody">
<div id="page-header">
  <div id="header">
	   <div class="header-logo">
	   <div class="service-tel">在线电话客服：<span class="flag-img-se"></span>0063-90957 88888</div>
	   <div class="flashlogo" style="margin-top:38px;"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="280" height="68">
  <param name="movie" value="/logo.png" />
  <param name="quality" value="high" />
  <param name="wmode" value="transparent" />
  <embed src="/logo.png" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="270" height="68" wmode="transparent"></embed>
</object></div>
	   </div>
       <div class="png_fix" id="top-wrap">
       <div class="myair"><a href="/help/down.html" target="_blank" class="air1"></a></div>
    <div class="navbg">
	<div class="inav">
		<ul id="nav" class="nav">		
			<li class="nLi nlibg1 on"><a href="/">平台首页</a></li>
			<li class="nLi nlibg2"><a href="#" class="wjalert">时时彩</a>
					
            </li>
            <li class="nLi nlibg3"><a href="#" class="wjalert">乐透型</a>
					
			</li>
            <li class="nLi nlibg4"><a href="#" class="wjalert">数字型</a>
					
		  	</li>
			<li class="nLi nlibg5"><a href="#" class="wjalert">会员中心</a>
					
            </li>
			<li class="nLi nlibg6"><a href="#" class="wjalert">代理中心</a>
					
            </li>
			<li class="nLi nlibg7 on"><a href="/index.php/notice/huodong">优惠活动</a></li>
		</ul>
    </div>
</div>
                          
       </div>
  </div>
  <div id="banner-wrap">
        		<img width="980" height="118" src="/cl/ads/ads.jpg">
		  </div>
  </div>               <div id="page-container">
<div id="page-body">
        <!--    main   -->
                 
<div class="exclusive-event" id="direction">
     
    <div style="width:940px;" id="MemberExclusive_area">
<div data-type="PT1" class="MemberExclusive">
    <div style="background-image:url(/cl/ads/1.jpg);" class="memExclusive" id="memExclusive_1">
        <a style="background-image: url(/cl/ads/11.jpg); width: 940px; height: 80px; opacity: 0;" href="###"></a>
    </div>
	<div class="eventtext">
    	<img src="/cl/ads/111.jpg">
	</div>
</div><div data-type="PT1" class="MemberExclusive">
    <div style="background-image:url(/cl/ads/2.jpg);" class="memExclusive" id="memExclusive_2">
        <a style="background-image: url(/cl/ads/22.jpg); width: 940px; height: 80px; opacity: 0;" href="###"></a>
    </div>
	<div class="eventtext">
    	<img src="/cl/ads/222.jpg">
	</div>
</div><div data-type="PT1" class="MemberExclusive">
    <div style="background-image:url(/cl/ads/3.jpg);" class="memExclusive" id="memExclusive_3">
        <a style="background-image: url(/cl/ads/33.jpg); width: 940px; height: 80px; opacity: 0;" href="###"></a>
    </div>
	<div class="eventtext">
    	<img src="/cl/ads/333.jpg">
	</div>
</div>
</div>
    </div>

        <div class="clear"></div>
</div>     </div>
	 </div>
     <div class="png_fix" id="bg-foot">
          <div class="png_fix" id="page-footer">
	
	<div id="footer">
			  <div id="copy_info">
			       Copyright &copy; 帝豪娱乐 Reserved<br>
			  </div>
			  <div id="web_info">
			       （浏览本网主页，强烈建议将电脑显示屏的分辨率调为1440*900,使用IE8.0浏览器） 
			  </div>
		 </div>
	</div>
     </div>
<script type="text/javascript" src="/cl/jquery-1.7.2.min.js?v=4.3"></script>
<script type="text/javascript" src="/skin/js/jquery.SuperSlide.2.1.1.js"></script>

<script>
 var ary = location.href.split("&");
 jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:ary[1], delayTime:ary[2] , triggerTime:ary[3], defaultPlay:ary[4],returnDefault:ary[5],easing:ary[6] });

$(function() {
    $(".memExclusive").click(function(){
        $(this).next().slideToggle(100).parent().siblings().find('.eventtext').not(':hidden').css('display','none');
		$(this).find('a').css('opacity', 0);
	});
	$(".memExclusive a").mouseenter(function(){
		$(this).stop().animate({'opacity': 1}, 650);
	});
	$(".memExclusive a").mouseleave(function(){
		$(this).stop().animate({'opacity': 0}, 650);
	});
	
    $(".wjalert").live("click",function(){
		alert("对不起，请先登录");
		return false;
	})
});

window.onerror=function(){return true;}
</script>
<!-- Live800在线客服图标:帝豪娱乐客服[浮动图标] 开始-->
<script language="javascript" src="<?=$this->settings['kefuGG']?>"></script>
<!-- 在线客服图标:帝豪娱乐客服 结束-->
</body>
</html>