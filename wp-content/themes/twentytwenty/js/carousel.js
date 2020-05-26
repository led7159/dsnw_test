function carousel(slideContent, contentList,   contentWidth,   speed) {
	var listLen = contentList.length;
	var btnLen = $('#btnList').children('li').length;
	var slideTo = 0;
	var finalX = 0;
	
	slideContent.css("width",contentWidth*listLen+"px");
	slideContent.css("marginLeft",0);
	
	btnSet();
	
	window.a = 0;
	
	$('#btnList_0').addClass("on");
	
	function btnSet() {
	
		$('.btnList').each(function(){
			$(this).on(
				{'click keypress':function(){
					var id = $(this).attr("id").split("_");
					if(slideContent.is(':animated')){
						return false;
					}
					slideTo = -(contentWidth*parseInt(id[1]));
					slideGallery();
					
					$('.btnList').removeClass('active');
					$('#btnList_'+id[1]).addClass('active');
					window.a = id[1];
				}}
			);
		});
		
		$('#btnLeft').each(function(){
			$(this).on(
				{'click keypress':function(){
					
					var id = window.a;
					if(slideContent.is(':animated')){
						return false;
					}
					if(id == "0"){
						id = btnLen-1;
					}else{
						id = parseInt(id)-1;
					}
					slideTo = -(contentWidth*parseInt(id));
					slideGallery();
					
					$('.btnList').removeClass('active');
					$('#btnList_'+id).addClass('active');
					window.a = id;
				}}
			);
		});
		
		$('#btnRight').each(function(){
			$(this).on(
				{'click keypress':function(){
					
					var id = window.a;
					if(slideContent.is(':animated')){
						return false;
					}
					if(id == btnLen-1){
						id = 0;
					}else{
						id = parseInt(id)+1;
					}
					
					slideTo = -(contentWidth*parseInt(id));
					slideGallery();
					
					$('.btnList').removeClass('active');
					$('#btnList_'+id).addClass('active');
					window.a = id;
				}}
			);
		});
		
	};
	
	function slideGallery(){
		slideContent.animate({marginLeft:slideTo},speed,function(){
		
		})
	}
}

function carousel2(slideContent, contentList,   contentWidth,   speed, movement,interval) {
	var listLen = contentList.length;
	var slideTo = 0;
	var finalX = 0;
	
	
	// 자동 움직임 설정
	var timeId = setTimeout(
	function(){
		if(movement == true) {
			contentWidth = 160;
			slideTo -= contentWidth;
			slideGallery();
		}
	},interval);
	
	btnSet();
	
	function btnSet() {
	
		$('#btnPre').each(function(){
			$(this).on(
				{'click keypress':function(){
					clearTimeout(timeId);
					if(slideContent.is(':animated')){
						return false;
					}else{
						if(slideTo>=0){
							slideTo = -(contentWidth*(listLen-1)); 
						}else{
							slideTo += (contentWidth);
						}
						slideGallery();
					}
					return false;
				}}
			);
		});
		
		$('#btnNext').each(function(){
			$(this).on(
				{'click keypress':function(){
					clearTimeout(timeId);
					if(slideContent.is(':animated')){
						return false;
					}else{
						if(slideTo<=-(contentWidth*(listLen-1))){
							slideTo = 0; 
						}else{
							slideTo += -(contentWidth);
						}
						slideGallery();
					}
					return false;
				}}
			);
		});
		
		$('#btnSt').each(function(){
			$(this).on(
				{'click keypress':function(){
					clearTimeout(timeId);
					if(movement == true) {
						movement = false;
						$(this).removeClass("stop");
						$(this).addClass("play");
						$(this).html("재생");
					}else{
						movement = true;
						$(this).removeClass("play");
						$(this).addClass("stop");
						$(this).html("일시정지");
					}
					slideGallery();
				}}
			);
		});
		
	};
	
	function slideGallery(){
		if(slideTo > 0){
			slideTo = -(contentWidth*(listLen-1)); 
		}else if(slideTo<-(contentWidth*(listLen-1))){
			slideTo = 0;
		}
		slideContent.animate({marginTop:slideTo},speed,function(){
		});
		timeId = setTimeout(
		function(){
			if(movement == true) {
				contentWidth = 160;
				slideTo -= contentWidth;
				slideGallery();
			}
		},interval);
	}
}
