<?php
	include_once('./_common.php');
$g5['title'] = '유럽 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다. 
	*/ 
?>
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:20px;}
    td {font-size:96%;padding-left:20px;}
</style>


<?php
	/*
		CSS파일 로드(25~26라인)
		구매하신 (주)아이지씨인증원에 사용하신다면 적용하지 않아도 됩니다.
		(주)아이지씨인증원가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<?php
	/*
		주의사항 
		그누보드 관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
		이럴 경우 공통 css 파일에 아래 style을 별도 추가하고, 내용관리 에디터의 HTML 모드로 태그를 넣으시면 됩니다.(에디터마다 HTML 모드 버튼이 있으니 HTML 모드로 넣어주세요.)
		javascript 를 사용한다면 공통하단 파일 </body> 위에 코드를 복사하여 추가 합니다.	
	
	*/
?>
<style>
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }


	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_ce-mdd_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_ce-mdd_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_ce-mdd_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_ce-mdd_04.jpg') no-repeat center top; }


	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 20%; }

    /*CE MDR  시작*/
	.business_type4{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type4:after{content:""; display:block; clear:both;}
	.business_type4 .business_info{ width:100%; }
	.business_type4 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type4 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type4 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    .business_type4 .business_info .backImg:nth-child(1){background:url('images/prodeuct_ce-mdr_01.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(2){background:url('images/prodeuct_ce-mdr_02.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(3){background:url('images/prodeuct_ce-mdr_03.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type4 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type4 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type4 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 20%; }

    /*임상평가  시작*/
	.business_type5{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type5:after{content:""; display:block; clear:both;}
	.business_type5 .business_info{ width:100%; }
	.business_type5 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type5 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type5 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    .business_type5 .business_info .backImg:nth-child(1){background:url('images/product_evalu_01.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg:nth-child(2){background:url('images/product_evalu_02.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg:nth-child(3){background:url('images/product_evalu_03.jpg') no-repeat center top; }
    .business_type5 .business_info .backImg:nth-child(4){background:url('images/product_evalu_04.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg:nth-child(5){background:url('images/product_evalu_05.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg:nth-child(6){background:url('images/product_evalu_06.jpg') no-repeat center top; }
    .business_type5 .business_info .backImg:nth-child(7){background:url('images/product_evalu_07.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type5 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type5 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type5 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 20%; }

    /*CE/IVDIVDR  시작*/
	.business_type6{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type6:after{content:""; display:block; clear:both;}
	.business_type6 .business_info{ width:100%; }
	.business_type6 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type6 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type6 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    .business_type6 .business_info .backImg:nth-child(1){background:url('images/product_ceivdivdr_01.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(2){background:url('images/product_ceivdivdr_02.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(3){background:url('images/product_ceivdivdr_03.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type6 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type6 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type6 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 20%; }

    /* CE LVD/EMC(유럽 저전압기기 제품 인증)  시작*/
	.business_type7{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type7:after{content:""; display:block; clear:both;}
	.business_type7 .business_info{ width:100%; }
	.business_type7 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type7 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type7 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    .business_type7 .business_info .backImg:nth-child(1){background:url('images/product_celvdemc_01_2.jpg') no-repeat center top; }
	.business_type7 .business_info .backImg:nth-child(2){background:url('images/product_celvdemc_02.jpg') no-repeat center top; }
	.business_type7 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type7 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type7 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type7 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }
    

     /* CE Machinery(기계류 안전 유럽제품인증)  시작*/
	.business_type8{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type8:after{content:""; display:block; clear:both;}
	.business_type8 .business_info{ width:100%; }
	.business_type8 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type8 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type8 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    .business_type8 .business_info .backImg:nth-child(1){background:url('images/product_cemachinery_01.jpg') no-repeat center top; }
	.business_type8 .business_info .backImg:nth-child(2){background:url('images/product_cemachinery_02.jpg') no-repeat center top; }
	.business_type8 .business_info .backImg:nth-child(3){background:url('images/product_cemachinery_03.jpg') no-repeat center top; }
	.business_type8 .business_info .backImg:nth-child(4){background:url('images/product_cemachinery_05.jpg') no-repeat center top; }
	.business_type8 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type8 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type8 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type8 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }

     /* PED(압력용기) 시작*/
	.business_type9{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type9:after{content:""; display:block; clear:both;}
	.business_type9 .business_info{ width:100%; }
	.business_type9 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type9 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type9 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    .business_type9 .business_info .backImg:nth-child(1){background:url('images/product_PressureEquipmentDirective_01.jpg') no-repeat center top; }
	.business_type9 .business_info .backImg:nth-child(2){background:url('images/product_PressureEquipmentDirective_02.jpg') no-repeat center top; }
	.business_type9 .business_info .backImg:nth-child(3){background:url('images/product_PressureEquipmentDirective_03.jpg') no-repeat center top; }
	.business_type9 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type9 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type9 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type9 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }

	 /* SPVD(압력용기) 시작*/
	.business_type10{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type10:after{content:""; display:block; clear:both;}
	.business_type10 .business_info{ width:100%; }
	.business_type10 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type10 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type10 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    .business_type10 .business_info .backImg:nth-child(1){background:url('images/product_spvd_01.jpg') no-repeat center top; }
	.business_type10 .business_info .backImg:nth-child(2){background:url('images/product_spvd_02.jpg') no-repeat center top; }
	.business_type10 .business_info .backImg:nth-child(3){background:url('images/product_spvd_03.jpg') no-repeat center top; }
    .business_type10 .business_info .backImg:nth-child(4){background:url('images/product_spvd_04.jpg') no-repeat center top; }
	.business_type10 .business_info .backImg:nth-child(5){background:url('images/product_spvd_05.jpg') no-repeat center top; }
	.business_type10 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type10 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type10 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type10 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }

    /* Hot-water boiler 유럽 제품 인증 시작*/
	.business_type11{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type11:after{content:""; display:block; clear:both;}
	.business_type11 .business_info{ width:100%; }
	.business_type11 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type11 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type11 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    .business_type11 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type11 .business_info .backImg:nth-child(1){background:url('images/product_hotwaterBoiler_01.jpg') no-repeat center top; }
	.business_type11 .business_info .backImg:nth-child(2){background:url('images/product_hotwaterBoiler_02.jpg') no-repeat center top; }
	.business_type11 .business_info .backImg:nth-child(3){background:url('images/product_hotwaterBoiler_03.jpg') no-repeat center top; }
	.business_type11 .business_info .backImg:nth-child(4){background:url('images/product_hotwaterBoiler_05.jpg') no-repeat center top; }
    .business_type11 .business_info .backImg:nth-child(5){background:url('images/product_hotwaterBoiler_04.jpg') no-repeat center top; }
	.business_type11 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type11 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type11 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type11 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }

    /* Hot-water boiler 유럽 제품 인증 시작*/
	.business_type12{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type12:after{content:""; display:block; clear:both;}
	.business_type12 .business_info{ width:100%; }
	.business_type12 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type12 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type12 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    .business_type12 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type12 .business_info .backImg:nth-child(1){background:url('images/product_gasAppliance_01.jpg') no-repeat center top; }
	.business_type12 .business_info .backImg:nth-child(2){background:url('images/product_gasAppliance_02.jpg') no-repeat center top; }
	.business_type12 .business_info .backImg:nth-child(3){background:url('images/product_gasAppliance_03.jpg') no-repeat center top; }
	.business_type12 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type12 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type12 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type12 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }

    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}
	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p{display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em{ width:30px; }
	.partner_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.partner_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    /* (주)아이지씨인증원 사업영역 종료  */
    
	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.business_type3 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type3 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}

        .business_type4 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type4 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type5 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type5 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type6 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type6 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type7 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type7 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}

		.business_type8 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type8 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}

		.business_type9 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type9 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type10 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type10 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type11 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type11 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
	}
    

	@media screen and (max-width:480px){

		.business_type3 .business_info .backImg {width:100%;}
		.business_type3 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type3 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type4 .business_info .backImg {width:100%;}
		.business_type4 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type4 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type5 .business_info .backImg {width:100%;}
		.business_type5 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type5 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type6 .business_info .backImg {width:100%;}
		.business_type6 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type6 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type7 .business_info .backImg {width:100%;}
		.business_type7 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type7 .business_info .backImg .txt_area{ height:auto; padding:15px;}

		.business_type8 .business_info .backImg {width:100%;}
		.business_type8 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type8 .business_info .backImg .txt_area{ height:auto; padding:15px;}

		.business_type9 .business_info .backImg {width:100%;}
		.business_type9 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type9 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type10 .business_info .backImg {width:100%;}
		.business_type10 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type10 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type11 .business_info .backImg {width:100%;}
		.business_type11 .business_info .backImg .txt_area .tit{font-size:1.2em;}
        .business_type11 .business_info .backImg .txt_area{ height:auto; padding:15px;1}

        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->

<div class="content_wrap">
   
    <!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">CE MDD</a></li>
			<li><a href="javascript:;">CE MDR</a></li>
			<li><a href="javascript:;">임상평가</a></li>
			<li><a href="javascript:;">CE IVD/IVDR</a></li>
			<li class="on"><a href="javascript:;">CE LVD/EMC</a></li>
			<li><a href="javascript:;">CE Machinery</a></li>
			<li><a href="javascript:;">CE PED</a></li>
			<li><a href="javascript:;">CE SPVD</a></li>
			<li><a href="javascript:;">Hot-water boiler</a></li>
			<li><a href="javascript:;">Gas Appliance</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:5px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	<div class="tab_con">
		<article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->	
	       <div class="page_title">
	       	<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE | MDD 의료기기</span> / 유럽 제품인증 소개</h1>
	       	<h2 class="sub_txt">
                 <span style="margin:0 auto;display:inline-block;text-align:justify;">의료기기 지침은 유럽 연합 내에서 의료기기에 관한 법률을 조화하기 위한 것입니다. 법적으로 유럽 시장에 의료기기들을 판매하기 위해서는 제조자들은 MD지침(Medical Device Directive)의 요구 사항을 준수해야 합니다. 신청자의 제품 및 품질 시스템을 평가해야 하며 제조자는 제품들을 판매 하기전에 CE 마크를 부착해야 합니다.</span></h2>
	       </div>

	       <div class="business_type3">
	       	<div class="business_info">
	       	    <!-----// 1st------->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">적용 품목</p>
	       				<ul>
	       					<li style="margin:0 auto;text-align:justify;">의료기기 지침은 '의료기기'의 정의에 따르는 장치에 적용 가능합니다. 의료기기란 제조자의 의도대로 인간에게 사용되는 목적을 가진 소프트웨어를 포함하는 단독 또는 조합으로 사용되는 기계, 장치, 기기, 재료 또는 기타 물품입니다.</li> <br>
	       					<li style="margin:0 auto;text-align:justify;"> 진단, 예방, 감시, 치료 또는 질병의 경감, 진단, 감시, 치료, 상해 또는 장애에 대한 완화 또는 보상, 조사, 교체 또는 해부학적 또는 생리학적 과정의 수정, 개념의 제어, 약리적, 면역적 또는 신진대사적 수단에 의해 인체 내에 또는 인체상에 의도한 주요 작용을 달성하지는 않지만 그런 수단에 의해 그 기능을 도와줄 수 있는 것을 말합니다.</li>
	       				</ul>
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       		
	       		 <!-----// 2nd------->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">적격성 평가 절차</p>
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;">&#10048; 분류법</span>
	       					<li style="margin:0 auto;text-align:justify;">의료기기 지침서(93/42/EEC)의 부속서 IX는 의료기기를 분류할 수 있는 18개의 규칙을 제공합니다. 이 규칙들에 따라 의료기기는 의료기기의 의도된 목적에 따라 분류됩니다.</li>
                              <span style="display:block;text-align:left;font-weight:200;">
	       					    &nbsp; &nbsp; &#10023; Rule 1 ~ 4 : Non-invasive 기기<br>
                                 &nbsp; &nbsp; &#10023; Rule 5 ~ 8 : Invasive 기기<br>
                                 &nbsp; &nbsp; &#10023; Rule 9 ~ 12 : 능동형 기기<br>
                                 &nbsp; &nbsp; &#10023; Rule 13 ~ 18 : 특별법<br><br>
                              </span>

	       					<li style="margin:0 auto;text-align:justify;">환자 및 사용자에 대한 의료기기의 위험 평가는 위의 18개의 규칙에 따라 식별되고 분류됩니다. 식별된 위험 값을 바탕으로 적격성 평가 절차가 결정됩니다. 위험 값이 높을수록 적격성 평가 요구 사항이 엄격 해집니다.</li>
	       					<br>
	       					<li>Class I 의료기기는 부속서 VII의 평가 절차를 따릅니다.</li>
	       				</ul>
	       				
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Class I의 절차 (측정 기능 포함)</span>
	       				    <br>
	       				    <span style="display:block;text-align:left;">제조사의 선택 가능 사항 :</span>
                              <span style="display:block;text-align:left;font-weight:300;">
	       					    &nbsp; &nbsp; •	부속서 VII 섹션 3 및 부속서 IV에 따른 각각 또는 통계적으로 선택된 샘플에 대한 도량형에 관한 요구사항을 만족하는 적격성의 검증 및 기술 문서화 <br>
                                 &nbsp; &nbsp; •	부속서 VII 섹션 3 및 통계학적 요구 사항과 연관된 부속서 V에 의한 제품 품질 시스템의 평가 및 기술 문서화 <br>
                                 &nbsp; &nbsp; •	부속서 VII 섹션 3 및 통계학적 요구 사항과 연관된 부속서 VI에 의한 의료기기의 품질 평가 및 기술 문서화<br>
                              </span>
	       				</ul>
	       				
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Class I의 절차 (멸균 포함) </span>
	       				    <br>
	       				    <span style="display:block;text-align:left;">제조사의 선택 가능 사항 : </span>
                              <span style="display:block;text-align:left;font-weight:300;">
	       					    &nbsp; &nbsp; •	부속서 VII 섹션 3 및 멸균 상태와 연관된 부속서 V에 의한 제품 품질 시스템의 평가 및 기술 문서화 <br>
                              </span>
	       				</ul>
	       				
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Class IIa 의료기기 절차 </span>
	       				    <br>
	       				    <span style="display:block;text-align:left;">제조사의 선택 가능 사항 : </span>
                              <span style="display:block;text-align:left;font-weight:300;">
	       					    &nbsp; &nbsp; •	부속서 VII 섹션 3 및 부속서 IV의 섹션 8에 의한 각각 또는 통계학적으로 선택된 샘플에 대한 적격성 검증 및 기술 문서화  <br>
                                 &nbsp; &nbsp; •	부속서 VII 섹션 3 및 부속서 V의 섹션 6(제조사의 현장에서 심사 된)에 의한 제품 품질 시스템의 평가 및 기술 문서화  <br>
                                 &nbsp; &nbsp; •	부속서 VII 섹션 3 및 부속서 VI의 섹션 6(제조사의 현장에서 심사 된)에 의한 의료기기 품질의 평가 및 기술 문서화  <br>
                                 &nbsp; &nbsp; •	부속서 VII 섹션 3 및 부속서 II(섹션 4에 따라 개발 평가가 제외 된)에 의한 전체적인 품질 시스템이 제조자의 현장에서 심사 된 평가 및 기술 문서화 <br>
                              </span>
	       				</ul>
	       				
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Class IIb 의료기기 절차 </span>
	       				    <br>
	       				    <span style="display:block;text-align:left;">제조사의 선택 가능 사항 : </span>
                              <span style="display:block;text-align:left;font-weight:300;">
	       					    &nbsp; &nbsp; • 부속서 III 섹션 3 및 제조된 각각에 대한 적격성 검증 및 유형 검사 와 기술 문서화 : 부속서 IV에 의해 통계학적으로(무작위로) 선택 된 샘플이나 섹션 5에 의해 검증 되어야 합니다.  <br>
                                 &nbsp; &nbsp; • 부속서 III 섹션 3 및 부속서 V(제조사의 현장에서 심사 된)에 의해 제조 품질 시스템의 평가 및 유형 검사와 기술 문서화   <br>
                                 &nbsp; &nbsp; • 부속서 III 섹션 3 및 부속서 VI(제조사의 현장에서 심사 된) 섹션 6에 의해 의료기기 품질의 평가 및 유형 검사의 기술 문서화   <br>
                                 &nbsp; &nbsp; • 부속서 II 섹션 3.2 및 부속서 II(섹션 4에 의해 개발 평가가 제외된)에 의해 제조사의 현장에서 심사가 이루어진 모든 품질 시스템의 평가에 대한 기술 문서화 <br>
                              </span>
	       				</ul>
	       				<br>
	       				       <img src="images/product_ce-mdd_03_01.jpg" alt="#"><br>
	       				       <span>적합성 평가 절차</span>
	       				<br>
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Class III 의료기기 절차  </span>
	       				    <br>
	       				    <span style="display:block;text-align:left;">제조사의 선택 가능 사항 : </span>
                              <span style="display:block;text-align:left;font-weight:300;">
	       					    &nbsp; &nbsp; •	부속서 II 섹션 3.2 및 부속서 II(제조사의 현장에서 심사된)에 의한 모든 품질 시스템의 평가 및 섹션 4.2에 의해 개발의 설명에 대한 기술 문서화  <br>
                                 &nbsp; &nbsp; •	부속서 III 섹션 3 및 제조된 각각에 대한 적격성 검증 및 유형 검사의 기술문서화 : 부속서 IV 섹션 6에 의해 통계학적으로(무작위) 선택된 샘플에 대한 섹션5에 의해 검증이 이루어져야 합니다.  <br>
                                 &nbsp; &nbsp; •	부속서 III 섹션 3 및 부속서 V 섹션 3.2에 의해 제품 품질 시스템(제조사의 현장에서 심사된)의 평가 및 유형 검사의 기술 문서화  <br>
                              </span>
	       				</ul>
	       			    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       		
	       		 <!-----// 3rd------->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">MDD 종료 시점</p>
	       				<ul>
	       					<li>유럽의 의료기기 지침인 MDD (93/42/EEC)는 2020년 5월 26일부터 MDR로 완전히 대체됩니다. 이후에는 MDD로의 CE인증 신청이 불가능하며, 새로운 의료기기는 MDR (2017/745/EU) 요구사항을 충족시켜야만 합니다.</li>
	       					<li>하지만 강제적용 시점 전에 MDD의 적합성 평가를 마무리하여 인증서를 발급받은 경우, 최대 2024년 05월 27일까지 인증서의 효력을 인정받아 제품을 유럽 관할구역내에 출하할 수 있습니다.</li>
	       					<li>유럽의 Competent Authority에서 공식적으로 발행한 상기의 자료를 확인해 보실 수 있습니다.</li>
	       				</ul>
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       		
	       		 <!-----// 4th------->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">CE / MDD 제공 서비스</p>
	       				<ul>
	       					<li>IGC는 현재 3개의 Notified Body(이하 NB)기관과 협력하여 CE/MDD 프로젝트를 진행하고 있습니다. </li>
	       					<li>이로 인해, Class l 부터 Class lll까지 거의 모든 스콥에 관하여 예외 없이 신청을 진행할 수 있습니다. </li>
	       					<li>수 많은 프로젝트를 진행하며 쌓은 경험을 토대로 귀사의 CE/MDD 인증 획득을 위하여 지원을 아끼지 않겠습니다.</li>
	       				</ul>
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       	</div>  <!--------//  div class="business_info" 종료  --------------->
	       </div>
	
	
	       <!----(주)아이지씨인증원 사업영역 시작-------->
	       <section class="partner_type2">
             <h2 class="con_arrow">
	       		<p>우리가 제공하는 관련 서비스</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
	       			<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
	       		</ul>
	       	</div>
         </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
      </article><!--+++++ /컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
 
      <article><!--+++++ /컨텐츠 02 CE MDR 컨텐츠 시작 +++++-->
           <div class="page_title">
		     <h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE MDR | 의료기기 </span> / 유럽 제품인증 소개</h1>
		     <h2 class="sub_txt">
               <span style="display:block;font-weight:bold;text-align:left;">CE Marking 이란 ?</span>
               <span style="margin:0 auto;display:inline-block;text-align:justify;">의료기기 규제는 유럽 연합 내에서 의료기기에 관한 법률을 조화하기 위한 것입니다. 법적으로 유럽 시장에 의료기기들을 판매하기 위해서는 제조자들은 MDR(Medical Device Regulation)의 요구 사항을 2020년 강제적용 이후 준수해야 합니다. 신청자의 제품 및 품질 시스템을 평가해야 하며 제조자는 제품들을 판매 하기전에 CE 마크를 부착해야 합니다.</span></h2>
	        </div>

	        <div class="business_type4">
	        	<div class="business_info">
	        		<div class="backImg">
	        			<div class="txt_area">
	        				<p class="tit" style="text-align:left;">MDR 개요</p>
	        				<ul>
                                <span style="display:block;margin-left:5px;text-align:justify;">
                                 <li> 적용규격 : Regulation (EU) 2017/745 of the European Parliament and of the Council of 5 Ap</li>
                                 <li> 법규내용 : Council Directive 93/42/EEC (MDD) + Council Directive 90/385/EEC (AIMD)</li>
                                 <li> 발효일자 : 2017년 05월 25일</li>
                                 <li> 강제적용일자 : 2020년 05월 26일, MDR 발효 후, 3년의 유예기간</li>
                                 <li> 목적 : 유럽 내 좀 더 안전하고, 효과적이고, 혁신적인 의료기기 시장을 만드는 것</li>
                                 <li> MDD 인증서 최종 유효일자 : 2024년 05월 26일 (판매는 2025년 05월 27일까지)</li>
                                 <li> 지침(Directive)에서 규제(Regulation)로 바뀜. Directive보다 Regulation 은 변경이 더 자주 일어나며, 강제성이 강화됨.</li> <br>
	        					 </span>
	        				</ul>

	        				<p class="tit" style="text-align:left;">주요 개정 내용</p>
	        				<ul>
                                <span style="display:block;margin-left:5px;text-align:justify;">
                                 <li> 심사기관 (NB)에 대한 보건당국의 강력한 통제 : Sub-contractor 관리강화</li>
                                 <li> Harmonized Standard 외에 제품별 공통기술사양(Common Specification) 도입 및 적용</li>
                                 <li> 경제운영자 [Manufacturer, Importer, Distributor, Authorized Representative]의 책임 강화 </li>
                                 <li> EUDAMED 시스템에 등록 의무화(제조자와 경제운영자간의 표준계약서 필요)</li>
                                 <li> 제조업체에 대한 NB의 강력한 통제</li>
                                 <li> Pre/Post Market 임상평가의 확장과 모든 임상 조사에 대한 관리, 제조자의 시판 후 시장감시(Vigilance & PMS) 강화</li>
                                 <li> EUDAMED(European database on medical devices) 기반의 전산시스템 정착 : 제품등록, UDI, 경제운영자등록, NB 및 인증서, 임상조사, Vigilance & PMS, 시장조사(보건당국)</li>
                                 <li> UDI System의 개선 및 도입 : ClassⅢ부터 순차 도입. 현재 FDA와 호환가능하나, 변경가능성 있음.</li>
                                 <li> MDCG(Medical Device Coordination Group) : 보건당국 내 독립적인 전문가들로 구성된 의료기기조정그룹으로 Class III Implantable & Class IIb 능동기기 제품에 대한 임상평가 자문 및 적합성평가 정밀조사, NB평가, Class III 관리</li>
                                 <li> Class I 재사용수술기구 : Class I 멸균/측정기기처럼 NB 심사대상 → 세척 등의 재가공(Reprocessing) 공정에 대해서만 실시</li>
                                 <li> 임플란트카드 : 의사, 제조자, 환자, 제조번호, etc.</li>
                                 <li> 규제 적합성 책임자 (Person Responsible for Regulatory Compliance) : 제조자와 유럽대리인 공통사항으로 1년 이상 품질 & RA 업문 경력, 4년제 대졸이상의 학력을 소지한자로서 기술문서와 제품출시에 책임. </li>
                                 <li> 의료기기 정의에 속하지 않는 제품들에 대한 MDR 적용 → 필러, 매선, 레이저수술기(제모, 미용목적)</li>
	        					 </span>
	        				</ul>
	        				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	        				                                    &#10057; &#10057; &#10057;
	        				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	        			</div>
	        		</div>

	        		<div class="backImg">
	        			<div class="txt_area">
	        				<p class="tit" style="text-align:left;">TCF(Technical Document)에 포함될 내용</p>
	        				<ul>
                                 <span style="display:block;text-align:left;font-weight:200;">
	        					    1.	 MDR Annex1의 GSPR(General Safety and Performance Requirements) Check List 작성<br>
                                    2.	 Biological Safety Assessment Report (ISO10993-1:2018)<br>
                                    3.	 Risk Management Plan (ISO14971:2019)<br>
                                    4.	 Risk Management Report<br>
                                    5.	 Usability Validation Plan (IEC62366-1:2015)<br>
                                    6.	 Usability Validation Report<br>
                                    7.	 Clinical Evaluation Plan (MEDDEV 2.7/1 :2016<br>
                                    8.	 Clinical Literature Search Protocol<br>
                                    9.	 Clinical Literature Search Report<br>
                                    10.	 Adverse Event Search Report<br>
                                    11.	 Clinical Evaluation Report<br>
                                    12.	 공정 (멸균, 세척, 포장, Clean Room) Validation Report 준비<br>
                                    13.	 Software Validation Plan<br> 
                                    14.	 Software Validation Report<br> 
                                    15.	 제품도면 및 개략도<br>
                                    16.	 제조공정도<br>
                                    17.	 User Manual (Instructions for use)<br>
                                    18.	 사용원자재 List(중요부품) 등<br>
                                    19.	 Product Label<br>
                                    20.	 SSCP(Summary of safety and clinical perpormance)매년 up load : Implantable 및 Class III Article 32<br>
                                    21.	 PSUR(Periodic Safety Update Report) 정기적으로 update : IIa, IIb, III 제품 Article 86<br>
                                    22.	 DOC (Declaration of Conformity)<br>
                                 </span>
	        				</ul>
	        			    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	        				                                    &#10057; &#10057; &#10057;
	        				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	        			</div>
	        		</div>
	        		
	        		<div class="backImg">
	        			<div class="txt_area">
	        				<p class="tit" style="text-align:left;">IGC의 역량 및 관련 제공 서비스</p>
	        				<ul style="display:block;margin-left:5px;text-align:justify;">
	        					<li>IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다. </li>
	        					<li>IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
	        					<li>또한, IGC는 의료기기 분야에서의 다양한 인증 관련 서비스를 제공하고 있습니다.</li><br>
	        					&#10022; 93/42/EEC<br><br>
	        					&#10022; ISO 13485<br><br>
	        				</ul>
	        				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	        				                                    &#10057; &#10057; &#10057;
	        				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	        			</div>
	        		</div>
	        	</div>  <!--------//  div class="business_info" 종료  --------------->
	        </div> <!-------- class="business_type3" 종료------------->
	
	
	        <!----(주)아이지씨인증원 사업영역 시작-------->
	        <section class="partner_type2">
                <h2 class="con_arrow">
	        		<p>우리가 제공하는 관련 서비스</p>
	        	</h2>
	        	<div class="con_box">
	        		<ul>
	        			<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
	        			<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
	        			<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
	        			<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
	        			<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
	        		</ul>
		        </div>
            </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
       </article><!--+++++ /컨텐츠 02 CE MDR 컨텐츠 종료 +++++-->

      
       <!--+++++ /컨텐츠 03 임상평가 컨텐츠 시작 +++++-->
       <article>
          <div class="page_title">
	       	<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">임상평가</span> / 유럽 제품인증 소개</h1>
	       	<h2 class="sub_txt">
                   <span style="margin:0 auto;display:inline-block;text-align:justify;">임상평가는 의료기기와 관련된 임상 데이터를 수집하고 평가하여 안전성, 효과 및 성능을 검증하고 관련 규제 요건에 대한 적합성을 입증하는 과정입니다.<br>
                     임상평가는 의료기기의 수명 주기 전체에 걸쳐 실시하는 과정으로, 제조 업체가 연구해야 할 데이터를 승인하기 위해 의료기기를 개발하는 과정 및 기기의 안전성, 효과 및 성능에 관한 새로운 정보를 얻기 위한 과정에서 임상평가를 실시하여야 합니다.<br>
                     의료기기 생산 기업은 제품의 안전성 및 사용 목적에 따른 효과성을 입증하기 위하여 임상시험을 진행할 때 ISO 14155 규격의 요구사항을 충족하여야 합니다.<br>
                   </span></h2>
	       </div>
	       <div class="business_type5">
	       	<div class="business_info">
	       	<!----// 1st ----->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">MDR과 임상</p>
	       				<ul>
	       					<li style="margin:0 auto;text-align:justify;">MDR(Medical Device Regulation, 유럽 의료기기 규정)이란 유럽시장에 진출하고자 하는 모든 의료기기 제조업체가 준수해야 되는 새로운 의료기기 규정을 말합니다. MDR은 임상과 관련한 데이터 및 평가 과정을 강화하는 프로세스를 요구하며 제조업체는 의료기기의 안전성 및 성능을 입증하기 위해 임상 평가 보고서를 제공하여야 합니다.</li> <br>
	       					
	       					<li style="margin:0 auto;text-align:justify;"> Class III, Class IIb 제품은 임상평가를 필수로 진행하여야 하며, 임상평가 사용 설명서, PMCF 계획을 포함하는 대상이 됩니다.</li><br>
	       					
	       					<li style="margin:0 auto;text-align:justify;"> 동등한 의료기기의 임상 경험에 대한 데이터 수집, 임상 평가 보고서를 통한 임상 결과 도출, 유사한 기기를 사용한 임상평가를 통해 임상 데이터를 습득할 수 있습니다.</li>
	       				</ul>
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       		
	       		<!----// 2nd ----->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">임상평가 수행 단계</p>
	       				<ul>
                                <span style="display:block;text-align:left;font-weight:300;">
                                  1. 임상 평가 계획의 수립<br><br>
                                  2. 임상 데이터 생성 및 식별 (문헌 검색, 임상 경험, 임상 조사)<br><br>
                                  3. 임상 데이터의 적합성 평가<br><br>
                                  4. 전체 데이터 분석 및 결론 도출<br><br>
                                  5. 임상평가 보고서 작성<br><br>
                                </span>
	       				</ul>
	       			    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       		
	       		<!----// 3rd ----->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">임상시험 자료 필수 사항</p>
	       				<ul>
	       					<li>
	       					임상 시험 평가 자료는 다음을 포함하여야 합니다.<br>
	       					&#10020; 위험평가, 설계된 임상시험에 대한 정당성 평가, 임상 시험단계, 임상시험 브로셔, 임상시험 <br>
	       					</li>
	       					<li>
	       					진행보고서, 모니터링 계획, 임상시험 장소 선정 이유, 임상 참가자 동의서, 임상 참가자 식별 방법 등에 대한 항목을 포함하여야 합니다.<br>
                               &#10020; 초기 임상 시험 장소에 대한 정보가 있어야 합니다.<br>
                               &#10020; 임상 시험 장소에 대한 주기적인 모니터링이 필요합니다.<br>
                               &#10020; 부작용이나 기기의 결함 등에 대한 자료를 포함하여야 합니다.<br>
	       					</li>
	       				</ul>
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       		
	       		<!----// 4th ----->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">PMS란?</p>
	       				<ul>
	       					<li style="display:block;text-align:justify;font-weight:400;">‘PMS’란 시판 후 감시 시스템이라고도 하며, 제조업체가 EU 시장에 출시한 의료기기에서 얻은 경험을 사전에 수집하고 검토하기 위해 체계적인 절차를 수립하고, 수집된 자료를 최신 상태로 유지하기 위해 제조업체가 수행하는 모든 활동을 의미합니다.</li>
	       					<li style="display:block;text-align:justify;font-weight:400;">제조업체는 각 기기에 대해 위험 등급에 비례하고 기기 유형에 적합한 방식으로 시판 후 감시 시스템을 계획, 수립, 문서화, 구현, 유지 및 업데이트하여야 합니다. 시판 후 감시 시스템은 전체 수명 동안 기기의 품질, 성능 및 안정성에 관한 데이터를 능동적이고 체계적으로 수집, 기록 및 분석하고 필요한 결론을 도출하고 예방 및 시정조치의 결정, 실행 및 모니터링에 적합하여야 합니다.</li>
	       					<li style="display:block;text-align:justify;font-weight:400;">MDR에서는 제조업체에 대한 시판 후 요구 사항과 데이터를 사전에 수집하고 이러한 시판 후 활동 및 데이터의 분석을 문서화하고 보고 할 의무가 강화되었습니다.</li>
	       				</ul>
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       		
	       		<!----// 6th ----->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">PMS 보고서 작성</p>
	       				<ul style="display:block;text-align:left;font-weight:300;">
	       					<li style="font-weight:bold;">시판 후 감시 보고서 (Post-Market Surveillance Report, PMSR)</li>
	       					Class I 기기의 제조업체는 시판 후 감시 계획의 결과로 수집된 시판 후 감시 데이터의 분석 결과 및 결론을 요약 한 시판 후 감시 보고서를 준비하여 예방 및 시정에 대한 이론적 근거 및 설명을 작성해야 합니다. 필요한 경우 보고서를 업데이트하고 요청 시 관할 기관에 제공해야합니다.<br><br>
	       					<li style="font-weight:bold;">주기적 안전 업데이트 보고서 (Periodic Safety Update Report, PSUR)</li>
	       					Class IIa, Class IIb 및 Class III 기기의 제조업체는 각 기기에 대한 주기적인 안전 관리에 따른 결과 보고서 (PSUR) 및 각 범주 또는 기기 그룹과 관련하여 사후 분석 결과 및 결론을 요약해야 합니다. 시장 감시 데이터는 시판 후 감시 계획의 결과로 취해진 예방 및 시정 조치에 대한 이론적 근거와 설명으로 수집됩니다.
                          	</ul>
                           <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
       
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">PMCF & PSUR</p>
	       				<ul>
	       					<li style="display:block;text-align:justify;font-weight:300;">PMCF(Post-Market Clinical Follow-up)이란, PMS의 한 종류로 임상 평가에 대한 자료를 수집하고 업데이트 하는 프로세스로 MDR의 필수 요구사항입니다. 의료기기의 성능과 안전, 잔류위험에 대한 장기적인 데이터를 수집하고 입증하기 위해 고안되었습니다. 제조업체는 PMCF를 통해 얻은 임상 데이터와 PMS 보고서, 임상 평가 보고서, 리스크 평가 보고서 등의 데이터를 제출하여야 합니다.</li>
	       					<li style="display:block;text-align:justify;font-weight:300;">의료기기의 안전 및 임상 성능을 확인하고, 식별된 위험을 지속적으로 관리하며, 사실적인 증거에 입각한 위험을 감지하는 것이 PMCF의 목적입니다.
                               PMCF는 새로운 임상 연구, 의료기기 레지스트리에서 파생된 데이터 검토, 시판 전 임상시험을 진행한 고객의 후속조치 또는 이전에 의료기기를 사용했던 환자의 후속조치 등을 통해 이루어질 수 있습니다.
                               </li>
	       					<li style="display:block;text-align:justify;font-weight:300;">PSUR(Periodic Safety Update Report)이란, 승인된 의료기기에 대한 안전성 및 성능에 대한 평가를 제공하기 위한 문서입니다. 안정성 및 성능에 대한 새로운 위험 등을 식별하여 포괄적이고 비판적인 분석을 제시하는 것이 PSUR의 목적입니다.</li>
	       					<li style="display:block;text-align:justify;font-weight:300;">Class IIb, Class III 등급의 의료기기를 제조하는 업체는 매년 PSUR을 제출해야 하며, Class IIa 등급의 의료기기를 제조하는 업체는 최소 2년에 한번 PSUR을 제출해야 합니다.</li>
	       					<li style="display:block;text-align:justify;font-weight:300;">업체는 PMS 데이터 분석에 대한 보고서를 인증기관에 제출해야 하며, 인증기관은 보고서를 검토한 이후 그 결과를 EUDAMED에 등재하여야 합니다.</li>
	       				</ul>
                           <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       		
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">IGC인증원의 역량</p>
	       				<ul>
	       					<li style="display:block;text-align:justify;font-weight:300;">
	       					    IGC는 유럽의 크로아티아에 본사를 두고 있는 DNA Technologies Pacific과의 협력을 바탕으로 임상시험 실시에 대한 서비스를 제공합니다.
	       					</li>
	       					<li style="display:block;text-align:justify;font-weight:300;">
                               DNA Technologies Pacific은 임상시험 수탁기관으로서 CRO 업무를 수행하며, 조사에 따른 연구의 결과를 접목시켜 평가에 따른 임상 평가 보고서, PMCF 계획, PMCF 보고서 및 정기 안전 업데이트 보고서 작성을 지원하여 인증 획득 및 인증 유지를 효과적으로 수행할 수 있도록 돕고 있습니다.
                               </li>
	       				</ul>
                           <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       	</div>  <!--------//  div class="business_info" 종료  --------------->
	       </div>

	       <!----(주)아이지씨인증원 사업영역 시작-------->
	       <section class="partner_type2">
               <h2 class="con_arrow">
	       		<p>우리가 제공하는 관련 서비스</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       		IGC는 임상시험 진행과 시스템 인증 및 CE인증 취득까지 의료기기 전반에 대한 다양한 서비스를 제공합니다.<br>
	       			<li><p><em><strong>01</strong></em><span>의료기기 CE 인증을 위한 임상시험 지원</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>PMS 및 PMCF 진행을 위한 기술 지원</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>임상시험 데이터 관리 지원</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>의료기기 ISO 13485 시스템 인증</span></p></li>
	       			<li><p><em><strong>05</strong></em><span>의료기기 CE 인증</span></p></li>
	       		</ul>
	       	</div>
          </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
       </article><!--+++++ /컨텐츠 03 임상시험 종료 +++++-->

      
       <article><!--+++++ /컨텐츠 04 CE IVD/IVDR 컨텐츠 시작 +++++-->
           	<div class="page_title">
		      <h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE IVD/IVDR | 체외진단용 의료기기 </span> / 유럽 제품인증 소개</h1>
		      <h2 class="sub_txt">
                  <span style="margin:0 auto;display:inline-block;text-align:justify;">
                     체외진단용 의료기기 지침 (In-vitro diagnostic medical devices Directive 98/79/EC, IVD)은 1998년 12월 7일 제정되어 2003년 12월 7일부터 유럽시장에서 판매되는 모든 체외 진단용 의료기기에 적용되었습니다. 이 지침에 적합한 기기에 대해서는 CE 마크가 부착되며, EU는 체외진단 의료기기에 CE 마크 부착을 의무화하고 있습니다.<br><br>
                     유럽연합은 2017년 의료기기 ‘규정 (regulation)’을 제정하여 의료기기에 관한 법제를 전면 개정하였습니다. 기존 ‘지침 (directive)’의 형식과 달리 ‘규정 (regulation)’은 직접 회원국에 적용되는 법적 효력을 가지며 회원국의 이행입법을 통하지 않고 직접 적용됩니다.<br><br>
                     체외진단 의료기기 규정 (EU Regulation 2017/746, IVDR)은 2017년 5월 26일 발효되었으며, 5년의 경과기간 (transition period)을 거쳐 2022년 5월 26일부터 체외진단 의료기기 규정이 강제 적용됩니다.<br><br>
                  </span></h2>
	           </div>

	<div class="business_type6">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">체외진단의료기기의 이해</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">	
						  체외진단 의료기기 규정은 IVDR Article 2 ‘체외진단 의료기기 정의’에 부합하는 기기에 적용됩니다. 체외진단 의료기기란 단독 또는 조합으로 다음 중 하나 이상에 대한 정보를 제공할 목적으로 인체에서 유래한 혈액 및 조직 기증을 포함한 표본 검사를 위해 체외에서 사용하도록 제조자가 의도한 시약, 시약제품, 측정기, 제어 물질, 키트, 기기, 기구, 장비, 소프트웨어 및 시스템인 의료기기를 의미합니다.
						</li> <br>
                         <span style="font-weight:200;display:block;text-align:left;">
                          &nbsp; &nbsp; &nbsp; (a) 생리적 또는 병리학적 과정 또는 상태에 관한 것;<br>
                          &nbsp; &nbsp; &nbsp; (b) 선천적 신체적 또는 정신적 장애에 관한 것;<br> 
                          &nbsp; &nbsp; &nbsp; (c) 의학적 상태 또는 질병의 소인에 관한 것;<br> 
                          &nbsp; &nbsp; &nbsp; (d) 잠재적 대상자와의 안전성 및 호환성을 결정하기 위해;<br> 
                          &nbsp; &nbsp; &nbsp; (e) 치료 반응 또는 작용을 예측하기 위해;<br> 
                          &nbsp; &nbsp; &nbsp; (f) 치료 조치를 정하거나 또는 모니터링하기 위해;<br> <br>
                           &nbsp; &nbsp;표본 용기도 체외진단 의료기기로 간주됩니다.<br><br>						
                          </span>
						<li style="margin:0 auto;text-align:justify;"> 
						인증받고자 하는 제품의 의도된 사용 목적이 법령에서 규정하는 체외진단 의료기기 정의에 부합하고 IVDR 요구사항을 충족할 경우 CE Marking을 부착할 수 있으며, 유럽경제지역에 의료기기를 판매할 수 있습니다.
						</li>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">IVD/IVDR 주요 변경 사항</p>
					<ul>
                        <li style="margin:0 auto;text-align:justify;">	
						  IVD는 24개 조, 10개 부속서로 구성되어 있으며, IVDR은 10개 장, 113개 조, 15개 부속서로 구성되어 있습니다. IVD가 IVDR로 대체되면서 요구사항이 추가되었으며 제품에 대한 관리가 강화되었습니다.
						</li> <br>
                        <li style="margin:0 auto;text-align:justify;">	
						  주요 변경 사항은 아래와 같습니다.
						</li> 
					    <table cellspacing="0" cellpadding="0" style="width:100%;border: 1px solid #444444;">
                            <col width="196">
                            <col width="141" span="5">
                            <tr>
                              <td width="196" align="center" bgcolor="#96F384">주요 변경    사항</td>
                              <td width="705" colspan="5" align="center" bgcolor="#96F384">세부 내용</td>
                            </tr>
                            <tr>
                              <td width="196" rowspan="9" align="center">의료기기 등급 분류 체계 변동</td>
                              <td colspan="5" width="705">IVD에서는 General, Self-testing, List B, List A로 등급을 분류하였지만,    IVDR에서는 A, B, C, D로 등급 분류체계가 변경되었습니다.</td>
                            </tr>       
                            <tr>
                              <td colspan="5" width="70%">　</td>
                            </tr>
                            <tr>
                              <td width="141" rowspan="5">　　　　　</td>
                              <td width="141" align="center">IVD 분류</td>
                              <td width="141" align="center">IVDR 분류</td>
                              <td width="141" align="center">위험도</td>
                              <td width="141" rowspan="5">　　　　　</td>
                            </tr>
                            <tr>
                              <td width="141" align="center">General</td>
                              <td width="141" align="center">A</td>
                              <td width="141" align="center">저</td>
                            </tr>
                            <tr>
                              <td width="141" align="center">Self-testing</td>
                              <td width="141" align="center">B</td>
                              <td width="141" align="center">↓</td>
                            </tr>
                            <tr>
                              <td width="141" align="center">List B</td>
                              <td width="141" align="center">C</td>
                              <td width="141" align="center">고</td>
                            </tr>
                            <tr>
                              <td width="141" align="center">List A</td>
                              <td width="141" align="center">D</td>
                              <td width="141" align="center">　</td>
                            </tr>
                            <tr>
                              <td colspan="5" width="70%">　</td>
                            </tr>
                            <tr>
                              <td width="196" align="center">적합성 평가 절차의 변동</td>
                              <td colspan="5" width="705">Class A의 경우 인증기관을 통한 적합성 평가를 거치지 않아도 됩니다. 단,    Class A 이상의 기기 혹은 Class A 기기 중 멸균되는 기기 (Class As)는 인증기관을 거쳐야 하며 이와 더불어 품질관리    시스템도 요구됩니다.</td>
                            </tr>
                            <tr>
                              <td width="196" align="center">경제운영자들의 의무사항 변동</td>
                              <td colspan="5" width="705">경제운영자들 (제조업자, 위임대리인, 수입업자, 유통업자)의 의무가 강화 및    추가되었습니다.</td>
                            </tr>
                            <tr>
                              <td width="196" rowspan="2" align="center">성능 평가에 관한 변동</td>
                              <td colspan="5" width="705">IVDR에서는 성능에 대한 정확하고 추가적인 자료 작성이 요구되며 과학적 유효성,    분석 성능, 임상 성능에 대한 내용이 포함되어야 합니다.</td>
                            </tr>
                            <tr>
                              <td colspan="5" width="705">Class D의 경우, EU 기준 시험소에 의한 시험이    요구됩니다.</td>
                            </tr>
                            <tr>
                              <td width="196" align="center">고유식별코드 (UDI) 도입</td>
                              <td colspan="5" width="705">식별 및 추적성 확보와 시판 후 안전 확보를 위하여 고유식별코드 (UDI)를    도입하여야 합니다.</td>
                            </tr>
                            <tr>
                              <td width="196" align="center">소프트웨어에 관한 요구사항</td>
                              <td colspan="5" width="705">IVD에는 포함되지 않았던 소프트웨어 관련 규정이 강화되었습니다.</td>
                            </tr>
                        </table>
					</ul>
            		<br>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
			IGC는 고객의 해외시장 진출 및 경쟁력 제고를 위한 여러 분야의 인증서비스 및 시험서비스를 제공합니다.<br>
				<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
				<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article><!--+++++ /컨텐츠 02 CE MDR 컨텐츠 종료 +++++-->
       
    
    <article style="display:block;"><!--+++++ /컨텐츠 05 CE LVD/EMC(유럽 저전압기기 지침) 컨텐츠 시작 +++++-->
         <div class="page_title">
		    <h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE LVD/EMC | 저전압기기/전자파적합성 </span> 유럽 제품인증 소개</h1>
		    <h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            <p class="tit" style="font-size:1.3em;text-align:left;font-weight:500;">CE LVD/EMC란?</p>
            유럽의 저 전압 지침 (Low Voltage Directive: LVD)은 특정 전압 범위 내에서 전기 장비의 감전 및 기타 전기 위험에 대한 보호 지침입니다. 이 지침은 75 ~ 1500 V 사이의 직류 전류와 50 ~ 1000 V 사이의 교류 전류의 전압 규격으로 설계, 사용되는 전기 장비를 대상으로 적용됩니다. 또한 해당 지침에 적용되는 전압 규격은 장비 내부의 전압이 아닌 전기 입출력 전압에 관한 것입니다.<br><br>
            저 전압 지침은 전기 장비의 전자기장(Electromagnetic Fields) 방사가 인체에 미치는 영향에 대해서도 정의합니다. 저 전압 지침은 "New" 또는 "Global" 개념이 도입되기 전에 제정된 가장 오래된 단일 지침 중의 하나로 넓은 의미에서 장비에 대한 시장 출시 전 적합성 평가 절차와 장비가 직접 또는 조화 표준 (Harmonized Standards)에 의해 충족해야 하는 필수 보건 및 안전 요구 사항 (Essential Health and Safety Requirements: HSR)을 제공한다고 할 수 있으며 이를 통해 해당 전기 장비가 안전하게 사용될 수 있도록 합니다.
            <br><br>
            이것은 예측 또는 예측하지 못한 상황에서 발생할 수 있는 다음과 같은 위험요소(Hazard)로부터 인체 및 재산상의 상해나 손실을 방지하기 위한 것입니다.
            </span></h2>
            <br><br>
              <h1 style="display:block;position:relative;text-align:center;">
                   <img src="images/product_celvdemc_01.jpg" alt="적용 가능한 위해요소(Hazard)">
              </h1>
              <br>
              
              <!----------span style="font-weight:bold;">&#10051; 적용 가능한 위해요소(Hazard)</span---------->
              <p class="tit" style="font-size:1.4em;text-align:left;font-weight:500;">적용 가능한 위해요소(Hazard)</p><br>
              <p>&nbsp; &nbsp; 1) 전기적 위험요소(Electrical Hazard) : 감전 등의 사용중 위험에 노출될 경우</p>
              <p>&nbsp; &nbsp; 2) 화재적 위험요소(Fire Hazard) : 과부하, 단락 등으로 인한 화재 발생 가능의 경우</p>
              <p>&nbsp; &nbsp; 3) 기계적 위험요소(Mechnical Hazard) : 기계적 오작동에 의한 위험요소</p>
              <p>&nbsp; &nbsp; 4) 물리적 위험요소(Physical Hazard) : 낙하, 외부충격, 쓰러짐 등의 구조상의 위험요소</p>
              <p>&nbsp; &nbsp; 5) 화학적 위험요소(Chemical Hazard) : 제품에 사용한 페인트에 의한 발생 가능 위해요소</p>
	      </div>
          <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
				<span style="display:block;text-align:center;font-size:1.6em;">   </span>
		  <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

		  <p class="tit" style="font-size:1.4em;text-align:left;font-weight:500;">CE LVD / EMC 인증절차</p><br>
		  <span style="font-weight:bold;">&#8280; LVD 인증범위</span>
          <p>2014/35/EU에 따르면 AC50~1000V 또는 DC75~1500V의 정격전압을 가진 전기제품에 적용합니다. (단, Annex II에 열거된 제품은 제외(방폭기기, 방사선 및 의료기기, 승강기의 전기부품, 전기계량기, 옥내용 플러그 및 소켓 outlet, 전기 철조망 제어기, 전파 방해 기기, 국제기구에서 작성한 안전규정에 부합한 선박,항공기,철도에 사용되는 특수전기기기))</p><br><br>

	<div class="business_type7">
		<div class="business_info">		
			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:750px;">
				<div class="txt_area">
					<p class="tit" style="font-size:1.4em;text-align:left;font-weight:500;">상세 절차</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">
						<span style="font-weight:bold;">[제1단계]</span><br>
                          1.	제조자는 CE marking을 진행하기 위해서는 marking하고자 하는 제품을 규정하고 있는 EMC 지침을 파악해야 한다.<br>
                              &nbsp; &nbsp; EMC 지침: 2014/30/EU Electromagnetic compatibility (EMC) Directive<br>
                          2.	제품의 적합성을 위해 관련지침(Directive)내에서 규정하고 있는 필수 요건 사항을 항목별로 정리<br>
                              &nbsp; &nbsp; 관련 지침(Directive)에서 규정하는 요구사항의 적합함을 제조자는 증명해야 하며 이를 위해 제품 사용상 안전성 및 위험방지를 위해 대응한 기술적인 내용을 기술하거나 제품시험을 실시한 결과 및 관련 자료를 제시해야 한다.<br>
                          3.	제조자는 CE Marking 관련 제품 해당지침의 요구사항을 만족하는 사실을 증명, 선언하기 위한 적합성 평가방식(적용 모듈)을 결정하고 그에 따라 적합성 평가를 실시한다.
                              &nbsp; &nbsp; CE marking 적합성 평가는 8가지 모듈 중 제품의 특성에 따라 하나 또는 두가지 모듈을 결합시킨 형태를 사용하도록 각 지침(Directive)에 규정하고 있다.<br>
                          4.	제품에 적용할 지침이 결정되었다면 해당지침별로 시험할 유럽 시험규격들을 결정해야 한다.<br>
						</li> <br>
						<li style="margin:0 auto;text-align:justify;"> 
						<span style="font-weight:bold;">[제2단계]</span><br>
                          1.	제품에 관련된 유럽규격(EN Standard)이 결정되었다면 규격에 따라 공인된 기관에서의 시험을 실시한다.<br>
                          2.	제품시험은 지침에서 요구하는 제품의 안전성 및 위험에 대한 대응 기술을 증명하기 위한 자료로 사용된다.<br>
						</li><br>
						<li style="margin:0 auto;text-align:justify;">
						<span style="font-weight:bold;">[제3단계]</span><br>
                          1. 적합성 선언을 위하여 제품에 대한 안전성 및 위험 방지를 위한 기술적인 내용을 다루는 기술문서(Technical Construction Files; T.C.F)를 작성한다.<br>
                          2. 기술문서에서 다루어야 할 기술적인 내용들은 해당지침(Directive)에 따라 요구되는 자료가 다르므로 해당지침을 참조하여 준비해야 한다.<br>
						</li> <br>
						<li style="margin:0 auto;text-align:justify;"> 
						<span style="font-weight:bold;">[제4단계]</span><br>
                          이 단계에서는 지침(Directive)의 적합함을 선언하기위해 기술문서 등 여러 기술자료 및 모듈 별로 필요한 품질시스템 인증을 근거로 제조자는 적합성 선언서를 작성하고 그에 대한 확증으로 서명하여 승인한다.
						</li><br>
						<li style="margin:0 auto;text-align:justify;">
						<span style="font-weight:bold;">[제5단계]</span><br>
                          1. 적합성 선언서를 작성하고 승인한 후 제조자는 제품 출하 시 제품의 표시사항을 부착하게 되며 라벨에는 생산자 성명 및 제품 관련 사항과 CE marking을 포함한다.<br>
                          2. 일반적으로 기술문서를 구성하는 내역은 다음과 같다.<br>
                          &nbsp; &nbsp; o	제품에 대한 일반사항 및 제품의 작동 체제의 이해에 필요한 내용 및 설명<br>
                          &nbsp; &nbsp; o	설치도면, 설계도면, 회로도, 회로 계통도 등<br>
                          &nbsp; &nbsp; o	부품List, 시험성적서, 설계계산, 규격 checklist<br>
                          &nbsp; &nbsp; o	임상시험 data(MDD 경우), 위험요소 분석<br>
                          &nbsp; &nbsp; o	중요부품이나 유지보수 시 교환되는 부품 등의 카탈로그, 기술자료 등<br>
						</li> <br>
						<li style="margin:0 auto;text-align:justify;"> 
						유럽연합국내에서 인체 및 동물의 안전성을 위협하는 전기 제품이 판매되지 못하도록 하여 전기로부터의 안전성 확보가 이 지침의 목적이며 관련 제품에는 컴퓨터, 정보기술 기기, 가전제품, 동력공구, 시험실 기기, 시험 및 측정 기기와 전원 공급기기가 포함됩니다. 즉, 유럽으로 전기 제품을 판매하고자 하는 제조사에게는 필수적입니다.
						</li>
					</ul>
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="font-size:1.4em;text-align:left;font-weight:500;">CE LVD/EMC 인증의 사후관리</p>
					<ul>
                         <span style="display:block;text-align:justify;font-weight:300;">
						    &#8280; CE마킹을 한 제품은 일단 EEA 17개국으로 아무런 제약 없이 통관되며 통관된 제품은 유럽 시장에서 아무런 차별 없이 유통될 수 있습니다.<br><br>
                            &#8280; 세관에서는 CE마킹에 대한 확인과 적합성 선언서를 접수하여 통관시킵니다.<br><br>
                            &#8280; 단, 통관된 제품인 경우에도 필요한 경우 관련 이해 관계자 (소비자, 경쟁업체 및 자국내 검사기관 등)의 이의신청에 따라 기술문서의 제출요구와 더불어 샘플검사 등 사후관리를 받게 됩니다.<br><br>
                            &#8280; CE마킹은 강제규격이나 회원국 정부의 CE마킹 주관기관의 사전 검사와 승인을 받아야만 시판할 수 있는 사전 검사제도가 아니라 사후 관리를 받는 제도로써 주관기관은 자발적으로 또는 이해관계자의 신고 또는 문제 발생시 시중 유통제품을 수거하여 규격 적합성 관련 서류검사와 필요시 제품의 안전 검사를 실시하게 됩니다.<br><br>
                         </span>
					</ul>
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
		<h1 style="display:block;position:relative;text-align:center;">
          <img src="images/product_celvdemc_03.jpg" alt="우리가 제공하는 서비스">
        </h1>
        <br><br>
              
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 유라시아 인증)</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험 (전기 안전, 기계 안전)</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
 </article><!--+++++ /컨텐츠 05 CE LVD/EMC 컨텐츠 종료 +++++-->


<article><!--+++++ /컨텐츠 06번째 CE Machinery 컨텐츠/business_type8 시작 +++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE Machinery | 기계류 </span> / 유럽 제품인증 소개 </h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            유럽 내에서 제품을 유통 또는 판매하고자 하는 제조업체는 그 제품이 해당하는 EU 지침에 적합하다는 것을 적합성 선언 또는 적합성 인증을 통해 CE 마크를 제품에 부착하여야 합니다. 유럽에서 기계류의 안전에 적용되는 지침은 Machinery Directive 2006/42/EC이며, 운반 기계, 기계 장치, 승강기 및 운송장비와 안전 부품을 포함한 모든 기계류에 적용됩니다.
            </span></h2>
	</div>

	<div class="business_type8">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">CE Machinery(기계류 안전) 유럽 제품인증 개요</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">
						기계류의 정의는 “적어도 하나의 부분이 가동부분으로서 구비되어 있으며, 복수의 서로 관계 있는 부품, 부분품이 다 갖추고 적절한 가동기, 제어기 및 동력회로가 있는 것”이라고 MD에 규정되어 있습니다. 유럽의 기계류 지침 (Machinery Directive:2006/42/EC)은 다양한 기계류 및 부분적인 기계류, 부속품, 체인, 로프 및 웨빙, 교체 장비, 이동식 기계 전송장치 및 안전 부품을 포함한 다양한 제품의 사용에 작업자의 건강 및 안전을 보장하기 위해 제정되었습니다. 
						</li> <br>
						<li style="margin:0 auto;text-align:justify;"> 
						CE 마크를 부착할 수 있는 제품은 다음과 같습니다.<br>
                        1. 일반 산업용 기계: 반도체 장비, 굴삭기 장착 부속품류 및 부분 기계, 프레스, CNC 선반, 공작기계, 산업용 콤프레셔, 산업용 호이스트, 산업용 프린터, 포장 기기 등<br>
                        2. 위험 기계류: 원형 톱 등 유사 기계류, 프레스, 플라스틱, 고무 사출기, 광산 등 지하 작업용 제품, 작업용 카 리프트, 승객 운반용 리프트, 안전 릴레이류 등<br>
						</li>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">CE Machinery Directive(2006/42/EC)</p>
					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;">&#10048; CE Machinery Directive(2006/42/EEC)의 구성</span><br>
						<li style="margin:0 auto;text-align:justify;">
                           서 론 : 작성에 해당되는 지침과 전반적인 해설 및 유의사항<br>
                           본 문 : 지침을 적용하기 위한 조문, 가맹국에 대한 법적 의무나 권한<br><br>
                           </li>
                         <span style="display:block;text-align:left;font-weight:300;">
						    &nbsp; &nbsp; &#10023; Annex I : 설계 및 제조에 관한 건강과 안전의 필수 요구사항<br>
                            &nbsp; &nbsp; &#10023; Annex II : 적합성 선언서에 관한 사항<br>
                            &nbsp; &nbsp; &#10023; Annex III : CE – Marking에 관한 사항<br>
                            &nbsp; &nbsp; &#10023; Annex IV : Notified Body로부터 EU 형식시험을 받아야 하는 기계류 목록<br>
                            &nbsp; &nbsp; &#10023; Annex V : 적합성 선언 및 기술파일<br>
                            &nbsp; &nbsp; &#10023; Annex VI : EU 형식시험<br>
                            &nbsp; &nbsp; &#10023; Annex VII : Notified Body 기준<br><br>
                         </span>   
					</ul>
					
					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; 규격 구분</span>
					    <br>
					    <span style="display:block;text-align:left;">
					        기계 안전에 관한 유럽 규격은 A규격, B 규격, C 규격으로 나눌 수 있습니다. 제품은 해당되는 모든 3종류의 규격을 충족해야 합니다.<br><br>
					    </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						    &nbsp; &nbsp; &#10052; 규격 A (EN 414, EN 12100) <br>
                            &nbsp; &nbsp; 기본 안전규격으로 기본 개념, 설계 원칙 및 일반적 측면을 규정하는 규격<br><br>
                            
                            &nbsp; &nbsp; &#10052; 규격 B (EN 13850, EN 13849-1, EN 60204-1 등)<br> 
                            &nbsp; &nbsp; 일반적인 기계의 용도 및 목적에 따라 광범위하게 구분된 기계에 적용되는 안전에 관계되는 규격<br>
                            &nbsp; &nbsp; &nbsp; 1) B1규격은 특정 안전 측면에 관한 규격(전기, 안전거리, 표면온도, 소음 등)<br> 
                            &nbsp; &nbsp; &nbsp; 2) B2규격은 안전관련 장치 와 기계부품 등에 관한 규격(비상스위치, 압력감지장치 등)<br><br>
                            
                            &nbsp; &nbsp; &#10052; 규격 C <br>
                            &nbsp; &nbsp; 특정 기계 또는 기계 그룹에 관한 상세한 안전 요구사항을 규정하는 규격<br><br>
                         </span>
					</ul>

					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; 적용 대상 기기 </span>
					    <br>
                         <span style="display:block;text-align:left;font-weight:300;">
						    &nbsp; &nbsp; 1. 전기, 공기압 및 유압, 무게 등을 에너지원으로 하여 적어도 1개 이상의 작동부분이 있는 제품<br>
                            &nbsp; &nbsp; 2. 건강이나 안전에 관여하는 기계류의 부품으로, 단독으로 출하되는 기기
                         </span>
					</ul>
					
					<!----CSS 적용 없는 이미지 삽입------>
					<br>
					<h1 style="display:block;text-align:center;width:100%;">
					<img src="images/product_cemachinery_08.jpg" alt="CE Machinery Directive(2006/42/EEC) 핵심 요구사항">
					</h1>
                    <br>
                    
                    <ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; CE Machinery Directive(2006/42/EC) 핵심 요구사항 </span>
					    <br>
					    <span style="display:block;text-align:left;font-weight:300;">
                          제조자가 준수하여야 하는 문서화 요구사항은 MD의 부속서 I의 필수 보건 및 안전 요구 사항에 있으며, 기계가 안전하게 사용되고 있는지, 잔여 위험이 남아있는 경우 사용자에게 올바르게 경고하고 있는지에 대한 내용을 문서화한 것입니다.<br><br>
                        </span>
                        <span style="display:block;text-align:left;font-weight:300;">
                          필수 요구사항은 다음과 같습니다.
                        </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						    &nbsp; &nbsp; 1. 안전에 대한 원칙, 취급을 용이하게 하는 설계, 인체 공학, 제어 시스템, 기계적 위험으로 보호, 전기 및 기타 에너지 온도, 화재 및 폭발 등의 기타 위험, 소음 방출 등 모든 유형의 기계에 공통적인 일반사항, 진동, 방사선 및 유해물질, 유지보수, 청소, 정보의 표시 및 경고  <br>
                            &nbsp; &nbsp; 2. 식품, 화장품 및 의약품 등과 같은 특정 등급의 기계류에 적용되는 요구사항  <br>
                            &nbsp; &nbsp; 3. 기계의 이동성으로 인한 위험을 상쇄하기 위한 요구사항  <br>
                            &nbsp; &nbsp; 4. 리프트 작업의 위험을 상쇄하기 위한 요구사항 <br>
                            &nbsp; &nbsp; 5. 지하작업용 기계에 대한 요구사항  <br>
                            &nbsp; &nbsp; 6. 기계 리프트 인력에 대한 요구사항 <br>
                         </span>
					</ul>

					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; 인증절차 </span>
					    <span style="display:block;text-align:left;font-weight:300;">다음과 같이 4가지의 방식이 있습니다. </span><br>
                       
                        <span style="display:block;text-align:left;font-weight:300;">   
						    &nbsp; &nbsp; A) Annex 4에 기술된 고 위험군 기계류<br>
                            &nbsp; &nbsp;  승인기관 (Notified Body : NB)을 통한 인증취득<br><br>
                           
                            &nbsp; &nbsp; B) Annex 4가 아닌 일반 기계류 (Annex Ⅱ A)<br>
                            &nbsp; &nbsp;  자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득<br><br>
                            
                            &nbsp; &nbsp; C) 기계 부품류에 관한 자기 적합성 선언(Annex Ⅱ B)<br>
                            &nbsp; &nbsp;  자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득<br><br>
                            
                            &nbsp; &nbsp; D) 안전 부품류에 관한 자기 적합성 선언 (Annex Ⅱ C)<br>
                            &nbsp; &nbsp;  자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득<br><br>
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
                         참고: B)와 C)의 경우, 자기 적합성 선언서를 작성하고 관련 기술문서를 보관함으로써 규격에 적합함을 선언할 수 있지만 해당제품이나 포장 등에 CE 마크를 부착할 수 없습니다.
                         </span>             
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">관련 문서</p>
					<ul>
					<span style="display:block;text-align:left;font-weight:300;">
					  <p style="display:block;font-weight:bold;">기술문서 (TCF: Technical Construction Files)</p>
					  기술문서는 2006/42/EC Annex VII에 요구사항이 기재되어 있습니다. <br>
                      기술문서에서는 기계가 Machinery Directive의 요구사항에 적합하다는 입증을 하여야 합니다. 사용되는 언어는 공식적인 공동체 언어로 작성되어야 합니다.<br><br>
				    </span>	
						<li>기술문서에는 다음 서류를 포함하여야 합니다.</li>
                          <span style="display:block;text-align:left;font-weight:300;">
                            &nbsp; &nbsp; &#10051; 기계에 관한 일반적인 설명<br>
                            &nbsp; &nbsp; &#10051; 기계의 전체 도면과 기계류의 적합성을 점검하기 위해 필요한 세부적인 도면<br>
                            &nbsp; &nbsp; &#10051; 기계류에 적용되는 필수적인 건강 및 안전 요구 사항의 목록<br>
                            &nbsp; &nbsp; &#10051; 식별된 위험을 감소시키기 위해 실행된 보호 조치에 관한 설명, 기계류와 연관된 잔류위험의 지시<br>
                            &nbsp; &nbsp; &#10051; 이 표준에 포함된 필수적인 건강 및 안전 요구사항을 제시하는 표준<br>
                            &nbsp; &nbsp; &#10051; 제조업자에 의해 또는 제조자가 인정한 대리인이 선택한 기관에 의해 수행된 테스트 결과를 제시하는 보고서<br>
                            &nbsp; &nbsp; &#10051; 기계류 및 기타 제품에 대한 EC 적합성 선언서 사본<br><br>
                          </span>
						<li>기술문서는 기계 제조일자로부터 최소 10년동안 이용이 가능하여야 합니다.</li><br>
					</ul>
					
					<ul>
					<span style="display:block;text-align:justify;font-weight:300;">
					  <p style="display:block;font-weight:bold;">EC 적합성 선언-Declarative of Conformity</p>
					  CE마크를 부착하기 위해서 제조업체는 제품이 적용 지침과 표준 규정에 적합함을 나타내는 적합성 선언서를 발행하여야 합니다. 대부분의 기계 제조 업체는 자가 적합성 선언이 가능합니다. 전기 톱과 같은 고위험 기계를 포함하는 몇 가지 제품 범주는 제 3자 인증이 필수적으로 요구됩니다..<br><br>
                      강제안전인증은 기계류 사용으로 인한 수많은 사고로 인해 사회적 비용 손실과 제품을 안전하게 설계하고 적합하게 설치하며 유지관리를 잘하고 기계를 사용하는 작업자가 적절하게 사용하여 작업자의 안전을 확보하기 위해서 실시합니다.<br><br>
                      제조업체는 EU 적합성 선언서를 작성, 서명하여 하며 DoC에는 적용한 harmonized legislation과 제조업체, 유럽 대리인, 인증기관의 정보를 반드시 기입하여야 하며 필요한 경우, 조화 규격, 제품, 기술 사양과 같은 정보를 추가 기재하여야 합니다.<br><br>
                      기술문서와 동일하게 DoC는 제품이 출시된 시점으로부터 10년간 보관되어야 합니다. DoC의 보관 의무는 제조업체 또는 유럽대리인에게 있으며, 수입 제품의 경우에는 수입업자에게 책임이 있습니다.<br><br>
				    </span>	
						<li>DoC에는 다음과 같은 사항이 포함되어야 합니다.</li>
                          <span style="display:block;text-align:justify;font-weight:300;">
                            &nbsp; &nbsp; &#10051; 제조업자와 해당하는 경우 제조업자가 인정한 대리인의 상호 및 전체 주소<br>
                            &nbsp; &nbsp; &#10051; 기술 서류를 편집할 권한이 있는 사람의 이름 및 주소<br>
                            &nbsp; &nbsp; &#10051; 일반적인 증명, 기능, 모형, 일련번호 및 상호를 포함한 기계류에 대한 설명 및 증명<br>
                            &nbsp; &nbsp; &#10051; 기계류가 본 지침이 모든 관련 규정을 수행했다고 분명히 선언하는 문장<br>
                            &nbsp; &nbsp; &#10051; 해당하는 경우 기계류에 적합한 기타 지침 및/혹은 관련 규정을 선언하는 유사 문장<br>
                            &nbsp; &nbsp; &#10051; 인증기관의 이름, 주소 및 식별 번호, 인증서의 수<br>
                            &nbsp; &nbsp; &#10051; 사용된 조화 표준에 대한 기준<br>
                            &nbsp; &nbsp; &#10051; 사용된 기타 기술 표준과 시방서에 대한 기준<br>
                            &nbsp; &nbsp; &#10051; 인증장소 및 날짜<br>
                            &nbsp; &nbsp; &#10051; 제조업자 혹은 제조업자가 인정한 대표자 대신에 선언서를 작성하도록 위임한 사람의 신분 및 서명<br><br>
                          </span>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">IGC인증원의 역량</p>
					<ul>
						<li>IGC는 유럽의 인증기관(NB: Notified Body)와 협력을 통해 제품인증을 진행하고 있으며, CE Machinery, CE MDD, CE IVD, CE LVD 등의 제품인증 서비스를 제공하고 있습니다. </li>
						<li>IGC 인증원은 다년간 쌓아온 기술력 및 전문성과 더불어 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구사항에 대한 최신 지식을 보유하고 있습니다.</li>
						<li>고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 유라시아 인증)</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험 (전기 안전, 기계 안전)</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
</article><!--+++++ /컨텐츠 06번째 CE Machinery 컨텐츠/business_type8 종료 +++++-->
  
<article><!--+++++ /컨텐츠 07번째  PED 컨텐츠 시작 +++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE PED | 압력장비 </span> / 유럽 제품인증 소개 </h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            PED란 Pressure Equipment Directive(2014/68/EU)의 약어로써, 압력장비 지침으로 최대 허용 압력이 0.5bar 이상인 압력장비 및 부품의 설계, 제조 및 적합성 평가에 적용됩니다. EU 국가에 해당 제품의 수출을 원하는 제조자는 압력장비 지침에 따라 인증을 받아야 하며, 압력장비 지침은 2016년 7월 19일자로 97/23/EC에서 2014/68/EU로 개정되었습니다.
            </span></h2>
	</div>

	<div class="business_type9">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">인증범위</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">
						이 지침은 최대 허용 압력이 0.5bar 이상인 압력 장비 및 조립품의 설계, 제조 및 적합성 평가에 적용됩니다. 선박, 배관, 안전 부속품 및 압력 부속품이 모두 포함됩니다.<br><br></li>
                         <span style="display:block;text-align:justify;font-weight:300;">	
                         <p style="font-weight:bold;">적용 압력 장비</p>
                         &#9745; 수관 보일러<br>
                         &#9745; 열교환기<br>
                         &#9745; 압력용기<br>
                         &#9745; 파이프<br>
                         &#9745; 전기 난방기<br>
                         &#9745; 밸브(절연, 제어)<br>
                         &#9745; 미터<br>
                         &#9745; 방출 밸브<br>
                         &#9745; 안전 밸브<br>
                         &#9745; 제어된 안전 압력 방출 시스템<br>
                         &#9745; 압력 스위치<br>
                         &#9745; 온도 전환<br>
                         &#9745; 유체 레벨 스위치<br><br>
                         </span>
                         <span style="display:block;text-align:justify;font-weight:300;">	
                         <p style="font-weight:bold;">적용 제외 품목</p>
                         &#9745; 단순 압력용기 지침(Simple Pressure Vessels Directive, SPVD)과    이동용 압력용기 지침(Transportable Pressure Equipment Directive, TPED)에 적용되는 품목<br>
                         &#9745; 상대적으로 가압이 낮은 제품: 기계지침(Machinery Directive)<br>
                         &#9745; 압력용기<br>
                         &#9745; 차량용 장비 등<br>
                         </span>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">압력 기기의 입증 (CE marking)</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">
                        최대 허용 압력(PS), 사용 유체(fluid), 내용적(Volume) 및 외경(DN)에 따라 압력 기기는 Category I, II, III, IV의 4단계로 분류되어, 아래의 표와 같이 해당 category에서 적용 가능한 Module 요구 사항에 따라 인증 절차를 진행합니다. 적합성 평가 시 세부 기술 요구 사항에 대해서는 EN 13445, AD2000 등의 유럽 기술 규격과 ASME code 등을 적용합니다.<br><br>
                        </li>
 						<li style="margin:0 auto;text-align:justify;">
						Annex II, 적합성 평가 테이블
						</li>
                          <table border="1" cellspacing="0" cellpadding="5">
                            <tr>
                              <td width="156" align="center" valign="top"><p>Category</p></td>
                              <td width="446" align="center" valign="top"><p>Modules</p></td>
                            </tr>
                            <tr>
                              <td width="156" align="center" valign="top"><p>I</p></td>
                              <td width="446" align="left" valign="top"><p>Module A</p></td>
                            </tr>
                            <tr>
                              <td width="156" align="center" valign="top"><p>II</p></td>
                              <td width="446" align="left" valign="top"><p>Modules A2, D1, E1</p></td>
                            </tr>
                            <tr>
                              <td width="156" align="center" valign="top"><p>III</p></td>
                              <td width="446" align="left" valign="top"><p>Modules B(Design type)+D, B(Design type)+F,    B(Production type)+E, B(Production type)+C2, H</p></td>
                            </tr>
                            <tr>
                              <td width="156" align="center" valign="top"><p>IV</p></td>
                              <td width="446" align="left" valign="top"><p>Modules B(Production type)+D, B(Production type)+F,    G, H1</p></td>
                            </tr>
                          </table>
						<br>
						<li>Annex III, 적합성 평가 절차</li>
						<table border="1" cellspacing="0" cellpadding="5">
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module A</p></td>
                              <td width="442" align="left" valign="top"><p>내부생산관리 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module A2</p></td>
                              <td width="442" align="left" valign="top"><p>내부생산관리+무작위 주기로 감독 하에 제품 검사 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module B</p></td>
                              <td width="442" align="left" valign="top"><p>EU-형식검사(Production type)<br>
                              EU-형식검사(Design type)</p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module C2</p></td>
                              <td width="442" align="left" valign="top"><p>내부생산관리에 기반한 형식적합성+무작위 주기로 감독 하에 제품 검사 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module D/D1</p></td>
                              <td width="442" align="left" valign="top"><p>D: 생산공정의 품질보증에 기반한 형식적합성 <br>
                              D1: 생산공정의 품질보증 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module E/E1<strong></strong></p></td>
                              <td width="442" align="left" valign="top"><p>E: 제품 품질보증에 기반한 형식적합성 <br>
                              E1: 최종 제품의 검사 및 시험의 품질보증 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module F<strong></strong></p></td>
                              <td width="442" align="left" valign="top"><p>제품검증에 기반한 형식적합성 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module G</p></td>
                              <td width="442" align="left" valign="top"><p>단위검증에 기반한 적합성 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module H/H1<strong></strong></p></td>
                              <td width="442" align="left" valign="top"><p>H: 완전품질보증에 기반한 적합성 <br>
                              H1: 완전품질보증에 기반한 적합성+설계검사 </p></td>
                            </tr>
                        </table>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">	
					</ul>
                </div> <!------// class="txt_area" 종료-------------->  
            </div>	<!--------// class="backImg" 종료 ------------>				
			
            <div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">IGC인증원의 역량</p>
					<ul>
						<span style="display:block;text-align:left;font-weight:300;">
						   &#9813; IGC는 다년간의 축적된 경험을 바탕으로 유럽에 제품을 수출하고자 하는 기업을 대상으로 다양한 분야에 대한 제품인증 서비스를 제공하고 있습니다.
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						   &#9813; 해외 유수의 제품인증 기관과 협력관계 구축을 통하여 가장 경쟁력 있는 제품인증 서비스를 제공하고 있습니다.
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						   &#9813; ISO 9000, 품질경영시스템을 이미 준수하는 기업은 현재의 품질 시스템을 최대한 활용할 수 있고 이를 기반으로 PED의 필수 안전 요구사항을 만족시킬 수 있습니다. 
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						   &#9813; 제조업체가 정식으로 품질 경영 시스템 인증을 받지 않았다면 PED QA 접근 방식에 따라 IGC가 인증 기관 서비스를 제공해 드립니다. 
                         </span>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div> <!-----// class="backImg" 종료----------->
		 </div>  <!--------//  div class="business_info" 종료  --------------->
	   </div> <!------------// class="business_type3" 종료--------------->

	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 유라시아 인증)</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험 (전기 안전, 기계 안전)</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
</article><!--+++++ /컨텐츠 06번째 PED 컨텐츠 종료 +++++-->
  

<article><!--+++++ /컨텐츠 08번째 SPVD 시작 +++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE SPVD | 단순압력용기 </span>유럽 제품인증 소개
        </h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            SPVD란 단순압력용기 지침(Simple Pressure Vessels Directive)으로 단순압력용기의 내부압력이 0.5이상인 용접 용기로 공기나 질소를 함유하고 있으며 비화성인 모든 유체를 대상으로 하는 압력용기에 적용되며, 연속적으로 제조되는 단순압력용기에 적용됩니다.<br>
            EU 국가에 해당 제품의 수출을 원하는 제조자는 단순압력용기 지침에 따라 인증을 받아야 하며, 단순압력용기 지침은 2016년 4월 20일자로 2014/29/EU로 개정되었습니다.
            </span></h2>
	</div>

	<div class="business_type10">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">적용품목/적용 제외 품목</p>
					<ul style="display:block;text-align:left;">
                        <span style="font-weight:bold;">1.적용품목<br></span>
						압력용기의 내부 압력이 0.5 bar 이상인 용접용기로 공기나 질소를 함유하며 비화성인 모든 압력용기 <br><br>
                           &#9884; 압력을 받는 용기의 강도에 영향을 미치는 부위와 조립부품들은 비합금 재질의 강재, 비합금 알루미늄 또는 노화가 일어나지 않는 견고한 알루미늄합금으로 만들어져야 합니다.<br>
                           &#9884; 용기는 바깥쪽으로는 경판으로 닫혀진 원형 단면적의 원통형 부분 또는 원통형 부분과 동일축으로 회전하는 평판 혹은 동일축으로 회전하는 경판으로 구성됩니다.<br>
                           &#9884; 용기의 최대운전압력은 30 bar 를 초과하지 않아야 하며, 용기의 내용적과 압력의 곱은 10,000 bar/liter를 초과하지 않아야 합니다.<br>
                           &#9884; 용기의 최저운전온도는 -50℃보다 낮아서는 안되며 최대운전온도는 강재의 경우 300℃, 알루미늄과 알루미늄합금 용기의 경우는 100℃보다 높지 않아야 합니다.<br><br><br>
                        <span style="font-weight:bold;">2. 적용 제외 품목<br></span>
						   &#9884; 원자력에 사용될 목적으로 방사능 누출이 일어나지 않게 제작된 용기<br>
                           &#9884; 선박이나 항공기의 추진장치 또는 설비에 사용되는 용기<br>
                           &#9884; 소화기<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">필수 요건</p>
					<ul style="display:block;text-align:left;">
						SPVD의 필수 요건은 다음과 같습니다: <br>
						1)	최대허용압력(PS) x 용량(V)이 50 bar.L를 초과하는 용기는 Annex I의 필수 안전 요구사항을 만족해야 합니다.<br>
                        2)	최대허용압력(PS) x 용량(V)이 50 bar.L 이하인 용기는 회원국 중 한 국가의 공학적 관행에 따라 설계되고 제조되어야 합니다.<br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">SPVD의 중요성</p>
					<ul style="display:block;text-align:left;">
						압력용기가 올바르지 않게 취급 및 평가되는 경우, 위험이 초래됩니다. 따라서 유럽지침 2014/29/EU(SPVD)은 모든 압력 용기가 인증기관에 의해 인증되어야 한다고 규정합니다.<br><br>

                        <p>이 규격은 다음 사항들에 도움을 줍니다.</p><br>
                        &#9882; 안전성을 포함한 적합성 평가 절차 충족<br>
                        &#9882; 제품 수출에 필요한 선결조건의 충족<br>
                        &#9882; 유럽 사용 규격 및 지침 요구사항 준수<br>
                        &#9882; 제품의 경쟁력 강화<br>
                        &#9882; 내부 생산관리 강화<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">적합성 평가 절차</p>
					<ul style="display:block;text-align:left;">
						단순 압력 용기는 최대허용압력(PS) x 용량(V)에 따라 module이 정해집니다.<br><br>
						
						<table cellspacing="0" cellpadding="0" border="1px">
                           <col width="116">
                           <col width="115">
                           <col width="454">
                           <tr>
                             <td rowspan="3" width="116">Module B +</td>
                             <td width="115">Module C1</td>
                             <td width="454">EU-형식 검사 + 내부    생산관리에 기반한 형식적합성 및 감독 하에 제품 테스트</td>
                           </tr>
                           <tr>
                             <td>Module C2</td>
                             <td width="454">EU-형식검사    + 내부 생산관리에 기반한 형식적합성 및 무작위 주기로 감도하에 제품 검사 </td>
                           </tr>
                           <tr>
                             <td>Module C3</td>
                             <td width="454">EU-형식검사    + 내부 생산관리에 기반한 형식접합성</td>
                           </tr>
                        </table>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">IGC인증원의 역량</p>
					<ul style="display:block;text-align:justify;">
						&#9812; IGC는 유럽의 인정기구인 FQC(First Quality Certification, NB2674)와 협약으로 단순 압력 용기에 대한 인증 서비스를 제공하고 있습니다. <br><br>
						&#9812; IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                        &#9812; IGC는 제품인증의 신뢰할 수 있는 글로벌 리더로서 ISO SPVD은 물론 PED, Hot-water boiler 등에 대한 인증을 제공하고 있습니다.<br><br> 
                        &#9812; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있습니다.<br><br> 
                        &#9812; IGC는 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
					</ul>
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 유라시아 인증)</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험 (전기 안전, 기계 안전)</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
</article><!--+++++ /컨텐츠 07번째 SPVD 컨텐츠 종료 +++++-->

<article><!--+++++ /컨텐츠 09번째, Hot-water boiler, 컨텐츠 시작 +++++-->
    <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE SPVD | 단순압력용기 </span> / 유럽 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            92/42/EEC는 정격 출력이 4 kW 이상 400 kW 이하인 액체 또는 기체 연료로 연소되는 새로운 온수 보일러의 효율성 요건에 대한 지침으로, 유럽 연합의 에너지 효율 촉진에 관한 SAVE 프로그램의 일부에 의거합니다.<br><br>
            이 지침의 목적은 액체 또는 가스로 연소되는 온수 보일러에 효율 요건을 설정함으로써 에너지 효율을 개선하기 위해 만들어졌습니다.
            </span></h2>
	</div>
	
	<div class="business_type11">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">적용 품목</p>
					<ul style="display:block;text-align:left;">
						4 Kw이상 400 Kw 이하의 정격 출력을 가지며 액체 또는 기체 연료를 사용하는 온수 용 보일러 (표준 보일러, 저온 보일러, 가스 콘덴싱 보일러)
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">적용 제외 품목</p>
					<ul style="display:block;text-align:justify;">
                      &#9881; 고체연료를 포함한 다양한 연료에 의해 연소될 수 있는 온수 보일러<br><br>
                      &#9881; 온수 즉석 조제 장비<br><br>
                      &#9881; 일반적으로 판매되는 액체 및 가스 연료(산업 폐기물 가스, 바이오가스 등)의 특징과는 다른 특성을 가진 연료에 의해 연소되도록 설계된 보일러<br><br>
                      &#9881; 구내 난방이 주목적이며 중앙난방 및 위생온수를 공급하기 위해 건물에 설치된 조리기구 및 기기<br><br>
                      &#9881; 중력순환을 사용하여 6kW 미만인 정격 출력을 가지며 보관된 위생온수 생산을 위해 설계된 기기<br><br>
                      &#9881; 일회용으로 제조된 보일러<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">효율성 요구사항</p>
					<ul style="display:block;text-align:justify;">
						&#9965; 정격 출력: kW로 표시되는 정격 출력(Pn)에서 평균 70 °C의 보일러 수온으로 작동<br>
                        &#9965; 부분 하중: 보일러 유형에 따라 달라지는 보일러의 평균 수온에서 30%의 하중으로 작동<br><br>
                        <table cellspacing="0" cellpadding="0" border="1">
                           <col width="166" span="2">
                           <col width="184" span="4">
                           <tr>
                             <td width="166" align="center" bgcolor="#A4C9D0">보일러 종류</td>
                             <td width="166" align="center" bgcolor="#A4C9D0">출력 범위</td>
                             <td width="368" colspan="2" align="center" bgcolor="#A4C9D0">정격    출력에서의 효율성</td>
                             <td width="368" colspan="2" align="center" bgcolor="#A4C9D0">부분    하중에서의 효율성</td>
                           </tr>
                           <tr>
                             <td align="center" bgcolor="#A4C9D0">　</td>
                             <td align="center" bgcolor="#A4C9D0">Kw</td>
                             <td align="center" bgcolor="#A4C9D0">평균 보일러 수온(in  ℃)</td>
                             <td align="center" bgcolor="#A4C9D0">효율성 요구사항(in %)</td>
                             <td align="center" bgcolor="#A4C9D0">평균 보일러 수온(in  ℃)</td>
                             <td align="center" bgcolor="#A4C9D0">효율성 요구사항(in %)</td>
                           </tr>
                           <tr>
                             <td align="center">표준 보일러</td>
                             <td align="center">4 - 400</td>
                             <td align="center">70</td>
                             <td width="184" align="center">≥    84 + 2<br>
                             logPn</td>
                             <td align="center">≥ 50</td>
                             <td align="center">≥ 80 + 3</td>
                           </tr>
                           <tr>
                             <td align="center">저온 보일러 +</td>
                             <td align="center">4 - 400</td>
                             <td align="center">70</td>
                             <td width="184" align="center">≥    87.5 + 1.5<br>
                             logPn</td>
                             <td align="center">40</td>
                             <td align="center">≥ 87.5 + 1.5</td>
                           </tr>
                           <tr>
                             <td align="center">가스 콘덴싱 보일러</td>
                             <td align="center">4 - 400</td>
                             <td align="center">70</td>
                             <td width="184" align="center">≥91    + 1<br>
                             logPn</td>
                             <td align="center">30(**)</td>
                             <td width="184" align="center">≥    97 + 1<br>
                             logPn</td>
                           </tr>
                        </table>
                         (*) 액체 연료를 사용하는 콘덴싱 보일러를 포함<br>
                         (**) 보일러 급수 온도<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">적합성 평가 절차</p>
					<ul>
                        <table cellspacing="0" cellpadding="0" border="1">
                          <col width="116">
                          <col width="115">
                          <col width="454">
                          <tr>
                            <td width="116" rowspan="3" align="center" bgcolor="#A8C8D5">Module B +</td>
                            <td width="115" align="center" bgcolor="#A8C8D5">Module C</td>
                            <td width="454">EU-형식검사 + 유형    적합성</td>
                          </tr>
                          <tr>
                            <td align="center" bgcolor="#A8C8D5">Module D</td>
                            <td width="454">EU-형식검사    + 생산 품질 보증</td>
                          </tr>
                          <tr>
                            <td align="center" bgcolor="#A8C8D5">Module E</td>
                            <td width="454">EU-형식검사    + 제품 품질 보증</td>
                          </tr>
                        </table>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">IGC인증원의 역량</p>
					<ul style="display:block;text-align:justify;">
					&#9967; IGC는 미국의 인정기구인 IAS로부터 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>
					&#9967; IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                    &#9967; IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다. <br><br>
                    &#9967; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있습니다.<br><br>
                    &#9967; IGC는 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
					</ul>
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>

	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 유라시아 인증)</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험 (전기 안전, 기계 안전)</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
</article><!--+++++ /컨텐츠 08번째, Hot-water boiler, 컨텐츠 종료 +++++-->

<!--+++++ /컨텐츠 09번째 Gas Applicance 컨텐츠 시작 +++++-->
  <article>
    <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">Gas Appliance | 가스 연료 연소기기 </span> / 유럽 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="display:block;text-align:justify;font-weight:bold;">
              Appliances burning gaseous fuels (EU 2016/426) 개요<br>
            </span>
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            EU 2016/426은 유럽의 가스기기 규정으로 온수 생산, 냉장, 조명, 난방, 세탁, 조리의 목적으로 제작된 가스용품 및 부속품에 적용됩니다.<br>
            유럽의 ‘가스기기 지침(Gas Appliances Directive, GAD 2009/142/EC)’은 2017년 3월 발행된 ‘가스기기 규정(Gas Appliances Regulation, GAR 2016/426)’으로 대체되어 2018년 4월부터 적용되었습니다.
            </span></h2>
	</div>

	<div class="business_type12">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">적용 품목</p>
					<ul style="display:block;text-align:justify;">
						가스를 연료로 하는 조리, 난방, 온수, 냉장, 세탁부분의 기기가 해당되며, 공업용 제품을 제외한 일반적으로 사용되는 가정용 및 상업용 제품
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">적용 제외 품목</p>
					<ul style="display:block;text-align:justify;">
					    &#8280; 산업 현장에서 수행되는 산업 공정에서의 사용되는 제품<br><br>
                        &#8280; 항공기 및 철도에 사용되는 제품<br><br>
                        &#8280; 실험실에서의 일시적인 사용을 위한 연구 목적의 제품<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">적합성 평가 절차</p>
					<ul style="display:block;text-align:justify;">
						연속적으로 생산되는 제품의 경우, 제조자는 Module B - Production Type 에따라  Module C2, D, E, F 중 하나를 결합하여 적합성을 평가받아야 합니다.<br><br>
						<table cellspacing="0" cellpadding="0"  border="1px">
                          <col width="160">
                          <col width="115">
                          <col width="454">
                          <tr>
                            <td width="160" rowspan="4" align="center" bgcolor="#C2E4F0">Module B<br>
                              (Production Type)<br>
                              +</td>
                            <td width="115" align="center" bgcolor="#C2E4F0">Module C2</td>
                            <td width="454">EU-형식 검사 + 내부    생산관리에 기반한 형식적합성 및 무작위 주기로 감독하에 제품 검사</td>
                          </tr>
                          <tr>
                            <td align="center" bgcolor="#C2E4F0">Module D</td>
                            <td width="454">EU-형식검사    + 생산공정의 품질 보증에 기반한 형식 적합성</td>
                          </tr>
                          <tr>
                            <td align="center" bgcolor="#C2E4F0">Module E</td>
                            <td width="454">EU-형식검사    + 제품 품질 보증에 기반한 형식 적합성</td>
                          </tr>
                          <tr>
                            <td align="center" bgcolor="#C2E4F0">Module F</td>
                            <td width="454">EU-형식검사    + 제품 검증에 기반한 형식 적합성</td>
                          </tr>
                        </table>
						<br>
						단일 단위 또는 소량으로 생산되는 제품의 경우에 제조자는 Module G (Unit Verification)로도 적합성을 평가받을 수 있습니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div><!-------/// class="business_type12" 종료----------->
	
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 유라시아 인증)</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험 (전기 안전, 기계 안전)</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article><!--+++++ /컨텐츠 09번째 Gas Applicance 컨텐츠 종료 +++++-->
</div><!--+++ /20.05.07 탭컨텐츠 영역 +++-->
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>