var sw;
var sh;
$(document).ready(function(e){
	var duration = 0.4;
	var es_step = "Expo.ease";
	$(window).on("load",function(e){
		$(this).on("resize",function(e){
			sw=$(this).width();
			sh=$(this).height();
			$("#main_visual").width(sw-5);
			$("#main").height(sh);
			$(".right_btn, #main_visual, .right_content").height(sh-136);
		})
		$(this).trigger("resize");
	})
	$(".all_btn").on("click",function(e){
		$(this).toggleClass("on");
		if($(this).hasClass("on")==false){
			$(".site_map").stop().hide();
			alert('hi');
			TweenMax.to($("#header1"),0.3,{height:136,ease:es_step});
			TweenMax.to($(".dimmed"),0.2,{display:"none",opacity:0,ease:es_step});
		} else {
			TweenMax.to($("#header1"),0.3,{height:553,ease:es_step});
			$(".gnb_2dp > li").stop().hide();
			$(".site_map").stop().show();
			TweenMax.to($(".dimmed"),0.2,{display:"block",opacity:1,ease:es_step});
		}
		return false;
	});

	$(".header_util .language > li a").on("mouseenter",function(e){
		$(this).parent().find("ul").slideDown(200);
	});
	$(".header_util .language").on("mouseleave",function(e){
		$(this).find("ul").slideUp(200);
	});
	$("body").on('mousewheel',function(e){
		var wheelDelta = e.originalEvent.wheelDelta;
		if(wheelDelta < 0){
			TweenMax.to($("#main"),0.3,{"margin-top":-209,ease:es_step});
		} else {
			TweenMax.to($("#main"),0.3,{"margin-top":0,ease:es_step});
		}
	})
	var gnb_h = [0,340,572,572,640,572,640]
	$("#gnb > li").each(function(index){
		$(this).on("mouseenter focusin",function(e){
			var index = $(this).index();
			TweenMax.to($("#header1"),0.3,{height:gnb_h[index],ease:es_step});
			$(".gnb_2dp > li").stop().hide().eq(index).stop().show();
			$(".site_map").stop().hide();
			TweenMax.to($(".dimmed"),0.2,{display:"block",opacity:1,ease:es_step});
		});
	});
	$("#header1").on("mouseleave",function(e){
		$(".all_btn").removeClass("on");
		TweenMax.to($("#header1"),0.3,{height:0,ease:es_step});
		TweenMax.to($(".dimmed"),0.2,{display:"none",opacity:0,ease:es_step});
		$(this).find(".gnb_2dp").slideUp(200);
	});
		$("#header1").on("mouseenter focusin",function(e){
		$(this).find(".gnb_2dp").slideDown(400);
	});
	

});