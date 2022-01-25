$(function(){ // 탭메뉴
	var tab = $('.tab01 ul');
	var tabMenu = tab.find('> li');
	var contents = $('.tab_con > article');
	
	tabMenu.on('click', function(){
		tabMenu.removeClass('on');
		$(this).addClass('on');
		contents.css('display', 'none');
		var i = $(this).index();
		contents.eq(i).css('display', 'block');
	});
});


/* ------ 서브페이지 왼쪽 snb 영역 스크롤 시 컨텐츠 길이가 짧을 경우 푸터와 겹침 이슈 해결 20210813 전산: 이혜정 ------ */
var hd_height = $("#header").height();

$(document).scroll(function(){
    curSc = $(document).scrollTop() + $(window).height();
    body_height = $("#contents").height();
    footer_height = $("#footer").height();
    bottom_top = body_height - footer_height;
    if(curSc > bottom_top + 15){
        $("#left_area").css('top', 'auto');
        $("#left_area").css('bottom', curSc - bottom_top + 240);
    }else{
        $("#left_area").css('top', hd_height);
    }
});