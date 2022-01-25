<?php
	include_once('./_common.php');
$g5['title'] = 'Europe Product Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');
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
    th,td{border: 1px solid #444444;margin-left:0.6%;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:0.6%;}
    td {font-size:96%;padding-left:0.6%;}
</style>


<?php
	/*
		CSS파일 로드(25~26라인)
		(주)아이지씨인증원에 사용하신다면 적용하지 않아도 됩니다.
		(주)아이지씨인증원가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<?php
	/*
		주의사항 
		관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
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

     /*CE MDD  시작*/
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
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#000; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 20%; }
    
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
	.business_type4 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#000; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 20%; }
 
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
	.business_type5 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#000; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 20%; }

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
	.business_type6 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#000; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 20%; }

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
	.business_type7 .business_info .backImg .txt_area ul li{text-align:left; font-size:1rem; line-height:1.4em; color:#000; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }
    
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
	.business_type8 .business_info .backImg .txt_area ul li{text-align:left; font-size:1rem; line-height:1rem; color:#000; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 10%; }

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
	.business_type9 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#000; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }

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
	.business_type10 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#000; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }

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
	.business_type11 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#000; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }

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
	.business_type12 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#000; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }

    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:none; width:100%; list-style:none; margin:10px 0; }
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


<!-- /* 내용관리 등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
   
    <!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">CE MDD</a></li>
			<li><a href="javascript:;">CE MDR</a></li>
			<li><a href="javascript:;">Clinical Evaluation </a></li>
			<li><a href="javascript:;">CE IVD/IVDR</a></li>
			<li><a href="javascript:;">CE LVD/EMC</a></li>
			<li><a href="javascript:;">CE Machinery</a></li>
			<li><a href="javascript:;">CE PED</a></li>
			<li><a href="javascript:;">CE SPVD</a></li>
			<li><a href="javascript:;">Hot-water boiler</a></li>
			<li><a href="javascript:;">Gas Appliance</a></li>
<!--			<li class="on"><a href="javascript:;">E-MARK</a></li>-->
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:5px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	<div class="tab_con">

		<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
		<article>	

	       <div class="page_title">
	       	<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE MDD | Medical Device </span> <br> European Product Certification Introduction</h1>
	       	<h2 class="sub_txt"></h2>
                 <span style="margin:0 auto;display:inline-block;text-align:justify;">
                 The medical Device Directive is intended to harmonize the legislation on medical devices within the European Union. Legally, in order to sell Medical devices to the European Market, manufacturers must comply with the requirements of the Medical Device Directive. The applicant’s product and quality system must be evaluated, and the manufacturer must affix the CE mark before selling the products.
                 </span>
	       </div>

	       <div class="business_type3">
	       	<div class="business_info">
	       	    <!-----// 1st------->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">Applicable Items</p>
	       				<ul>
	       					<li style="margin:0 auto;text-align:justify;">
	       					The Medical Device Directive is applicable to devices according to the definition of ‘medical device’. A medical device is a machine, device, equipment, material, or other article used alone or in combination that contains software intended for human use as intended by the manufacturer.</li> <br>
	       					
	       					<li style="margin:0 auto;text-align:justify;"> 
	       					Is applicable to diagnosis, prevention, monitoring, treatment or alleviation, diagnosis, monitoring, treatment of disease or alleviation or compensation for injury or disability, investigation, replacement or modification of anatomical or physiological processes, control or concepts. It also refers to something that does not achieve its intended primary action in or on the human body by pharmacological, immunological or metabolic means, but can help its function by such means.</li>
	       				</ul>
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	
	       		 <!-----// 2nd------->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">Qualification Assessment Process</p>
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;">&#10048; classification</span>
	       				    <span style="display:block;text-align:justify;font-weight:300; padding:0 0 0 15px;">
	       					<li style="text-align:justify;">Annex IX of the Medical Device Directive(93/42/EEC) provides 18 rules for classifying medical devices. Under these rules, medical devices are classified according to their intended purpose.</li>
                              <span style="display:block;text-align:left;font-weight:200;">
	       					     &nbsp; &nbsp; &#10023; Rule 1 ~ 4 : Non-invasive device <br>
                                 &nbsp; &nbsp; &#10023; Rule 5 ~ 8 : Invasive device<br>
                                 &nbsp; &nbsp; &#10023; Rule 9 ~ 12 : Active device<br>
                                 &nbsp; &nbsp; &#10023; Rule 13 ~ 18 : Special Law<br><br>
                              </span>

	       					<li style="text-align:justify;">Medical device risk assessment to patients and users are identified and classified according to the above 18 rules. The eligibility assessment process is based on the identified risk values. If the risk value is higher, the eligibility requirements get more stringent.</li>
	       					<br>
	       					<li>Class I medical devices follow the evaluation procedures in Annex VII.</li>
	       				  </span>
	       				</ul>
	       				<br>
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Procedure of Class I Including measurement function)</span>
	       				    <br>
	       				    <span style="display:block;text-align:left;">Manufacturer’s option :  </span>
                              <span style="display:block;text-align:justify;font-weight:300; padding:0 0 0 35px;">
	       					    <li style="margin:0 3px 0 -24px;text-align:justify;">	Qualification and technological documentation of competence to meet metrological requirements for each or statistically selected ample in accordance with Annex VII section 3 and Annex IV </li><br>
                                <li style="margin:0 3px 0 -24px;text-align:justify;">	Evaluation and technical documentation of product quality system in accordance with Annex VII section 3 and Annex V which is related to statistical requirements. </li><br>
                                <li style="margin:0 3px 0 -24px;text-align:justify;">	Quality assessment and technical documentation of medical devices in accordance with Annex VII section 3 and Annex VI associated with statistical requirements.</li><br>
                              </span>
	       				</ul>
	       				<br>
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Procedure of Class I (including sterilization) </span>
	       				    <br>
	       				    <span style="display:block;text-align:left;">Manufacturer’s option : </span>
                              <span style="display:block;text-align:left;font-weight:300; padding:0 0 0 35px;">
	       					    <li style="margin:0 3px 0 -24px;text-align:justify;">Evaluation and technical documentation of product quality systems in accordance with Annex VII section 3 and annex V associated with sterile conditions. </li><br>
                              </span>
	       				</ul>
                        <br>
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Procedure of Class IIa Medical device </span>
	       				    <br>
	       				    <span style="display:block;text-align:left;">Manufacturer’s option  : </span>
                              <span style="display:block;text-align:justify;font-weight:300;padding:0 0 0 35px;">
	       					     <li style="margin:0 3px 0 -24px;text-align:justify;"> Qualification and technical documentation of each or statistically selected sample according to Annex VII Section 3 and Annex IV Section 8. </li><br>
                                 <li style="margin:0 3px 0 -24px;text-align:justify;"> Evaluation and technical documentation of the product quality system in accordance with Annex VII section 3 and Annex V section 6(examined at the manufacturer’s site).</li> <br>
                                 <li style="margin:0 3px 0 -24px;text-align:justify;"> Evaluation and technical documentation of medical device quality in accordance with Annex VII Section 3 and Annex VI Section 6(examined at on-site audit). </li> <br>
                                 <li style="margin:0 3px 0 -24px;text-align:justify;"> Evaluation and technical documentation where the overall quality system has been audited at the manufacturer’s site in accordance with Annex VII section3 and Annex II (Development evaluation excluded according to section 4)</li><br>
                              </span>
	       				</ul>
	       				<br>
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Procedure of Class IIb Medical Device </span>
	       				    <br>
	       				    <span style="display:block;text-align:left;">Manufacturer’s option  : </span>
                              <span style="display:block;text-align:justify;font-weight:300;padding:0 0 0 35px;">
                                  <li style="margin:0 3px 0 -24px;text-align:justify;">Qualification, type examination and technical documentation for each manufactured product in accordance to Annex III Section 3: Samples selected statistically(randomly) according to Annex IV or validated by Section 5. </li><br>
                                  <li style="margin:0 3px 0 -24px;text-align:justify;">Evaluation, type examination and technical documentation of manufacturing quality systemin accordance with Annex III Section 3 and Annex V(examined at onsite audit)  </li><br>
                                  <li style="margin:0 3px 0 -24px;text-align:justify;">Technical documentation of evaluation and type examination of medical device in accordance with Annex III Section 3 and Annex VI(examined at manufacturer’s onsite audit)  </li><br>
                                  <li style="margin:0 3px 0 -24px;text-align:justify;">Technical documentation of the evaluation of all quality systems that have been audited on site of the manufacturer in accordance with Annex II Section 3.2 and Annex II (excluding development evaluation by Section 4) </li><br>
                              </span>
	       				</ul>
	       				<br>
	       				
	       				<img src="images/product_ce-mdd_03_01.jpg" alt="#"><br>
	       				<span>Conformity assessment procedure</span>
	       				<br>
	       				<ul>
	       				    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Procedure of Class III Medical device </span>
	       				    <br>
	       				    <span style="display:block;text-align:left;">Manufacturer’s option  : </span>
                              <span style="display:block;text-align:justify;font-weight:300;padding:0 0 0 35px;">
                                  <li style="margin:0 3px 0 -24px;text-align:justify;">Evaluation of all quality systems according to Annex II Section 3.2 and Annex II(examined at the manufacturer’s on site audit) and technical documentation of the description of the development according to Section 4.2. </li><br>
                                  <li style="margin:0 3px 0 -24px;text-align:justify;">Annex III Section 3 and Qualification, Type examination and technical documentation for each manufactured device: Verification shall be made by Section 5 for statistically (randomly) selected samples in accordance with Annex IV Section 6. </li><br>
                                  <li style="margin:0 3px 0 -24px;text-align:justify;">Technical documentation of Evaluation, type examination of the product quality system(examined at the manufacturer’s onsite audit) in accordance with Annex III Section 3 and Annex V Section 3.2  </li><br>
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
	       				<p class="tit" style="text-align:left;">End of the MDD</p>
	       				<ul>
	       				  <span style="display:block;text-align:justify;font-weight:300;padding:0 0 0 35px;">
	       					<li style="margin:0 3px 0 -24px;text-align:justify;">The European Medical Device Directive MDD(93/42/EEC) will be completely replaced by MDR from 26 May 2020. After that, it is not possible to apply for CE certification to MDD, and the new medical device must meet the MDR (2017/745/EU) requirements.</li><br>
	       					<li style="margin:0 3px 0 -24px;text-align:justify;">However, if the MDD conformity assessment has been completed and the certificate has been issued before the time of compulsory application, the product can be shipped(exported) to European jurisdiction with the validity of the certificate recognized up to May 27, 2024.</li><br>
	       					<li style="margin:0 3px 0 -24px;text-align:justify;">You may check the above materials officially issued by the European Authority.</li><br>
                          </span>
	       				</ul>
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;"> 
	       			</div>
	       		</div>
	       		
	       		 <!-----// 4th------->
	       		<div class="backImg">
	       			<div class="txt_area"> <br><br>
	       				<p class="tit" style="text-align:left;">CE / MDD Service</p>
	       				<ul>
	       				  <span style="display:block;text-align:justify;font-weight:300;padding:0 0 0 35px;">
	       					<li style="margin:0 3px 0 -24px;text-align:justify;"> IGC is currently working on a CE/MDD project in cooperation with 3 Notified Body (referred to as NB) organizations.</li><br>
	       					<li style="margin:0 3px 0 -24px;text-align:justify;"> Because of this, you can apply without exception of almost all scopes from Class I to Class III. </li><br>
	       					<li style="margin:0 3px 0 -24px;text-align:justify;"> We will not spare any support to obtain your CE/MDD certification based on the experience accumulated through numerous projects.</li><br>
                          </span>
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
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
       </article>
       <!--+++++ /컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->

      <!--+++++ /컨텐츠 02 CE MDR 컨텐츠 시작 +++++-->
      <article>
           <div class="page_title">
		     <h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE MDR | Medical Device  </span> <br> European product certification introduction</h1>
		     <h2 class="sub_txt">
               <span style="display:block;font-weight:bold;text-align:left;">What is CE Marking ?</span></h2>
               <span style="margin:0 auto;display:inline-block;text-align:justify;">
              The medical Device Regulation is intended to harmonize the legislation on medical devices within the European Union. Legally, in order to sell Medical devices to the European Market, manufacturers must comply with the requirements of the Medical Device Regulation(MDR) after enforcement in 2020. The applicant’s product and quality system must be evaluated, and the manufacturer must affix the CE mark before selling the products.
               </span>
	        </div>

	        <div class="business_type4">
	        	
	        	<div class="business_info">
	        	
	        	    
	        		<div class="backImg">
	        			<div class="txt_area">
	        				<p class="tit" style="text-align:left;">MDR overview</p>
	        				<ul>
                                <span style="display:block;text-align:justify;font-weight:300;padding:0 0 0 35px;">
                                    <li style="margin:0 3px 13px -24px;text-align:justify;">Applicable standards : Regulation (EU) 2017/745 of the European Parliament and of the Council of 5 Ap</li>
                                    <li style="margin:0 3px 13px -24px;text-align:justify;">Legal content : Council Directive 93/42/EEC (MDD) + Council Directive 90/385/EEC (AIMD)</li>
                                    <li style="margin:0 3px 13px -24px;text-align:justify;">Effective Date : May 25, 2017</li>
                                    <li style="margin:0 3px 13px -24px;text-align:justify;">Compulsory application date : May 26, 2020, after the MDR takes effect a grace period of 3 years</li>
                                    <li style="margin:0 3px 13px -24px;text-align:justify;">Purpose : To create a safer, more effective and innovative medical device market in Europe.</li>
                                    <li style="margin:0 3px 13px -24px;text-align:justify;">MDD certificate final validity date: May 26, 2024 (sale until May 27, 2025)</li>
                                    <li style="margin:0 3px 13px -24px;text-align:justify;">Changed from Directive to Regulation. Regulation change more frequently than Directives and are more enforceable.</li>
                                   <br>
	        					 </span>
	        				</ul>
	        				
	        				
	        				<p class="tit" style="text-align:left;">Major Revision Contents</p>
	        				<ul>
                                <span style="display:block;text-align:justify;font-weight:300;padding:0 0 0 35px;">

                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Strong control of health authorities over the Notified Body(NB): Reinforcement of sub-contractor management
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Introduction and application Common Specification for each product in addition to the harmonized standard.
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Strengthening the responsibility of economic operators [Manufacturer, Importer, Distributor, Authorized Representative]
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Strengthening the responsibility of economic operators [Manufacturer, Importer, Distributor, Authorized Representative)
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">NB’s strong control over manufacturers
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Expansion of clinical evaluation of Pre/Post Market and management of all clinical investigations, and reinforcement of market surveillance (Vigilance & PMS) after marketing by manufacturers
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Establishment of computer system based on EUDAMED(European database on medical devices): product registration, UDI, economic operator registration, NB and certificate, clinical research, Vigilance & PMS, market research (health authorities)
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Improvement and introduction of UDI System : sequential introduction from Class III. Currently it’s compatible with FDD, subject to change.
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">MDCG(Medical Device Coordination Group) : A medical device coordination group composed of independent expert within the health authority. Evaluate NB, Manage Class III, Consult clinical evaluation and investigate conformity assessment in detail for Class III implantable& Class IIb active device product.
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Class I reusable surgical instrument : Like Class I sterilization/measuring devices, subject to NB review → only for reprocessing processes such as washing/cleaning process
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Implant Card : Doctor, manufacturer, patient, serial number, etc.
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Person Responsible for Regulatory Compliance) : A person who has more than one year of quality & RA work experience, and four-year college degree or higher, responsible for the release of technical documents and products.
                                 <li style="margin:0 3px 13px -24px;text-align:justify;">Application of MDR to products that do not belong to the definition of medical devices → Fillers, ties, and laser surgery devices(hair removal, cosmetic purposes)
                                 <br>
	        					 </span>
	        				</ul>
	        				
	        				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	        				                                    &#10057; &#10057; &#10057;
	        				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	        			</div>
	        		</div>
	        		
	        
	        		
	        		<div class="backImg">
	        			<div class="txt_area">
	        				<p class="tit" style="text-align:left;">Content to be included in the TCF(Technical Document)</p>
	        				<ul>
	    
                                 <span style="display:block;text-align:left;font-weight:200;padding:0 0 0 35px;">
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Completion of GSPR(General Safety and Performance Requirements) Check List of MDR Annex 1</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Biological Safety Assessment Report (ISO10993-1:2018)</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Risk Management Plan (ISO14971:2019)</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Risk Management Report</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Usability Validation Plan (IEC62366-1:2015)</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Usability Validation Report</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Clinical Evaluation Plan (MEDDEV 2.7/1 :2016</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Clinical Literature Search Protocol</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Clinical Literature Search Report</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Adverse Event Search Report</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Clinical Evaluation Report</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Prepare Process (Sterilization, Cleaning, Packaging, Clean Room) Validation Report</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Software Validation Plan</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Software Validation Report</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Product drawing and schematic drawing</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Manufacturing flow chart</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">User Manual (Instructions for use)</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">List of used materials(important components), etc.</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Product Label</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Annual upload of SSCP(Summary of safety and clinical performance) : Implantable and Class III Article 32</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">Regularly update PSUR(Periodic Safety Update Report) : Class IIa, IIb, III product Article 86</li>
                                     <li style="margin:0 3px 13px -24px;text-align:justify;">DOC (Declaration of Conformity)</li>
                                    <br>
                                 </span>
	        				</ul>
	        				
	        			    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	        				                                    &#10057; &#10057; &#10057;
	        				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	        			</div>
	        		</div>
	        		
	        		<div class="backImg">
	        			<div class="txt_area">
	        				<p class="tit" style="text-align:left;">IGC’s Competency</p>
	        				<ul style="display:block;margin-left:5px;text-align:justify;">
	        					<li>IGC is contributing to the continuous development of customers by accurately evaluating the suitability of product certifications through the technology and expertise accumulated over the years.</li>
	        					<li>IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world and provides the knowledge and services to support your entire global operation.</li>
	        					<li>In addition, IGC provides various certification related services in the medical device field.</li><br>
	        					
	        					&#10022; 93/42/EEC<br><br>
	        					&#10022; ISO 13485<br><br>
	        				</ul>
	        				
	        				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	        				                                    &#10057; &#10057; &#10057;
	        				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:20px;margin-top:2px;width:100%;">
	        			</div>
	        		</div>
	        	</div>  <!--------//  div class="business_info" 종료  --------------->
	        	
	        </div> <!-------- class="business_type3" 종료------------->

	        <!----(주)아이지씨인증원 사업영역 시작-------->
	       <section class="partner_type2">
             <h2 class="con_arrow">
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
       </article>
       <!--+++++ /컨텐츠 02 CE MDR 컨텐츠 종료 +++++-->
  
       <!--+++++ /컨텐츠 03 임상평가 컨텐츠 시작 +++++-->
       <article>
          <div class="page_title">
	       	<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">Clinical Evaluation</span> <br> European Product Certification Introduction</h1>
              <h2 class="sub_txt"></h2>
                   <span style="margin:0 auto;display:inline-block;text-align:justify;">Clinical evaluation is the process of collecting and evaluating clinical data related to medical devices to verify safety, effectiveness and performance, and to demonstrate conformity to relevant regulatory requirements.<br><br>
                    
                     Clinical evaluation is a process conducted throughout the life cycle of a medical device, it should be conducted in the process of developing a medical device to approve data for manufacturers to study and obtaining new information about the device’s safety, effectiveness and performance.<br><br>
                     
                     Medical device manufacturers shall meet the requirements of ISO 14155 standard when conducting clinical trials in order to prove the safety and effectiveness of the product according to the purpose of use.<br>
                   </span>
	       </div>
       
	       <div class="business_type5">
	       	<div class="business_info">
	       	<!----// 1st ----->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">MDR and Clinical</p>
	       				<ul>
	       					<li style="margin:0 auto;text-align:justify;">Medical Device Regulation(MDR) refers to a new medical device regulation that all medical device manufacturers planning to enter the European market must comply with. MDR requires a process that enhances clinical data and evaluation processes, and manufacturers must provide clinical evaluation reports to demonstrate the safety and performance of medical devices.</li> <br>
	       					
	       					<li style="margin:0 auto;text-align:justify;"> For Class III and Class IIb products, clinical evaluation is mandatory, and the clinical evaluation instruction manual and PMCF plan are included.</li><br>
	       					
	       					<li style="margin:0 auto;text-align:justify;"> Clinical data can be acquired by collecting data on the clinical experience of equivalent medical devices, deriving clinical results through clinical evaluation reports, and clinical evaluation using similar devices.</li>
	       				</ul>
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
 
	       		<!----// 2nd ----->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">Stages of Clinical Evaluation</p>
	       				<ul>
                            <span style="display:block;text-align:left;font-weight:300;">
                              1. Establish a clinical evaluation plan<br><br>
                              2. Creation and identification of clinical data (Literature search, clinical experience, clinical research)<br><br>
                              3. Evaluation of the suitability of clinical data<br><br>
                              4. Analyzing the entire data and drawing conclusion<br><br>
                              5. Preparation of clinical evaluation report<br><br>
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
	       				<p class="tit" style="text-align:left;">Prerequisite of Clinical Trial Data</p>
	       				<ul>
	       					<li>
	       					Clinical trial evaluation data should include.<br>
	       					&#10020; Risk assessment, justification of the designed clinical trial, clinical trial stage, clinical trial brochure, clinical trial <br>
	       					</li>
	       					<li>
	       					Clinical progress report, monitoring plan, reasons for selection of clinical trial region, clinical participant consent, and clinical participant identification method, etc. should be included.<br>
                               &#10020; Information about the initial clinical trial region is required.<br>
                               &#10020; Periodic monitoring for clinical trial region is required.<br>
                               &#10020; Data on side effects or device defects is required.<br>
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
	       				<p class="tit" style="text-align:left;">What is PMS?</p>
	       				<ul>
	       					<li style="display:block;text-align:justify;font-weight:400;">‘PMS’ is also referred to as a post-market surveillance system and an any activity carried out by manufacturers including pre-gather and review experience gained from medical devices placed on the EU market, and to keep the collected data up to date.</li>
	       					
	       					<li style="display:block;text-align:justify;font-weight:400;">Manufacturers must plan, establish, document, implement, maintain and update post-market surveillance systems for each device in a manner proportional to the risk class and appropriate for the device type. Post-market surveillance systems must be suitable for actively and systemically collecting, recording and analyzing data on the quality, performance and stability of devices over their entire life span, drawing necessary conclusions, and determining, implementing and monitoring preventive and corrective actions.</li>
	       					
	       					<li style="display:block;text-align:justify;font-weight:400;">In MDR, there is an increased obligation to proactively collect post market requirements and data for manufacturers and to document and report the analysis of these post market activities and data..</li>
	       				</ul>
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>
	       		
	       		<!----// 6th ----->
	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">PMS Report Creation</p>
	       				<ul style="display:block;text-align:left;font-weight:300;">
	       					<li style="font-weight:bold;">Post-Market Surveillance Report (PMSR)</li>
	       					Manufacturers of Class I devices are required to prepare a post-market surveillance report summarizing and analysis results and conclusions of the post-market surveillance data collected as a result of the post-market surveillance plan to prepare a rationale and explanation for prevention and correction. If necessary, the report must be updated and provided to the competent authority upon request.<br><br>
	       					
	       					<li style="font-weight:bold;">Periodic Safety Update Report (PSUR)</li>
	       					Manufacturers of Class IIa, Class IIb and Class III devices are required to summarize the results and conclusions of the post-analysis for each category or group of devices, as well as results of periodic safety update report (PSUR) for each device. Market surveillance data is collected as a rationale and explanation for preventive and corrective actions taken as a result of post market surveillance plans.
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
	       					<li style="display:block;text-align:justify;font-weight:300;">PMCF(Post-Market Clinical Follow-up), a type of PMS, is the process of collecting and updating data on clinical evaluation, which is an essential requirement of MDR. It is designed to collect and validate long-term data on the performance, safety and residual risk of medical devices. Manufacturers are required to submit clinical data obtained through PMCF and data such as PMS reports, clinical assessment reports, and risk assessment reports.</li>
	       					
	       					<li style="display:block;text-align:justify;font-weight:300;">The purpose of PMCF is to verify the safety and clinical performance of medical devices, to continuously manage identified risks, and to detect risks based on factual evidence. PMCF can be achieved through new clinical studies, review of data derived from medical device registries, follow-up by customers who have conducted premarket clinical trials, or through follow-up by patients who have previously used medical devices.
                               </li>
	       					
	       					<li style="display:block;text-align:justify;font-weight:300;">The PSUR(Periodic Safety Update Report) is a document intended to provide an evaluation of the safety and performance of approved medical devices. It is the purpose of PSUR to present a comprehensive and critical analysis by identifying new risks to stability and performance.</li>
	       					
	       					<li style="display:block;text-align:justify;font-weight:300;">Manufacturers of Class IIb, Class III medical devices must submit a PSUR annually, and manufacturers of Class IIa medical devices must submit a PSUR at least once every two years.</li>
	       					
	       					<li style="display:block;text-align:justify;font-weight:300;">The company must submit a report on PMS data analysis to the certification body, and after reviewing the report, the certification body must register the result in EUDAMED.</li>
	       				</ul>
                           <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>

	       		<div class="backImg">
	       			<div class="txt_area">
	       				<p class="tit" style="text-align:left;">IGC’s Competency</p>
	       				<ul>
	       					<li style="display:block;text-align:justify;font-weight:300;">
	       				IGC provides services for conducting clinical trials in partnership with DNA Technologies Pacific, headquartered in Croatia, Europe.
	       					</li>
	       					
	       					<li style="display:block;text-align:justify;font-weight:300;">
                              DNA Technologies Pacific performs CRO as a clinical trial consignee, and supports the creation of clinical evaluation reports, and regular safety update reports according to evaluation by incorporating the results of research from investigation which will help you effectively acquire and maintain certification.
                               </li>
	       					
	       				</ul>
                           <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	       				                                    &#10057; &#10057; &#10057;
	       				<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:30px;margin-top:2px;width:100%;">
	       			</div>
	       		</div>  		
	       	</div>  <!--------//  div class="business_info" 종료  --------------->
	       </div>

	       <!----(주)아이지씨인증원 사업영역 시작-------->
	       <section class="partner_type2">
             <h2 class="con_arrow">
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
       </article>
       <!--+++++ /컨텐츠 03 임상시험 종료 +++++-->
 
       <!--+++++ /컨텐츠 04 CE IVD/IVDR 컨텐츠 시작 +++++-->
       <article>
           	<div class="page_title">
		      <h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE IVD/IVDR | In-vitro diagnostic medical device  </span> <br> European product certification introduction</h1>
                <h2 class="sub_txt"></h2>
                  <span style="margin:0 auto;display:inline-block;text-align:justify;">
                     The In-vitro diagnostic medical devices Directive 98/79/EC, IVD was enacted on December 7, 1998 and has been applied to all in vitro diagnostic medical devices sold in the European market from December 7, 2003. Devices that comply with this directive are marked with the CE mark, and the EU mandates to attach the CE mark to in vitro diagnostic medical devices.<br><br>
            
                     The European Union enacted the ‘regulation for medical devices in 2017 and revised the legal system on medical devices. Unlike the existing form of ‘Directive’, ‘Regulation’ has legal effect applied directly to member states and is applied directly, not through implementing legislation of member states.<br><br>
          
                     In vitro diagnostic medical device regulation(EU Regulation 2017/746, IVDR) entered into force on May 26, 2018, and the invitro diagnostic medical device regulation was enforced from May 26, 2022 after a transition period of 5 years.<br><br>
                  </span>
	           </div>

	<div class="business_type6">
		<div class="business_info">
		   
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Understanding of in-vitro diagnostic medical devices</p>
					<ul>
						<p style="margin:0 auto;text-align:justify;">	
						  In vitro diagnostic medical device regulations are applied to devices that comply with IVDR Article 2 ‘Definition of in vitro diagnostic medical devices’. In vitro diagnostic medical devices, either alone or in combination, mean reagents, reagent products, measuring instruments, kits, instruments, equipment, software and system medical devices intended by the manufacturer to be used in vitro for specimen testing, including donation of blood and tissues derived from human body for the purpose of providing information on one or more of the following:
						</p> <br>
                            <span style="display:block;text-align:left;font-weight:200;padding:0 0 0 35px;">
                             <p style="display:inline-block;margin:0 3px 13px -24px;text-align:justify;"> (a) Relating to physiological or pathological process or condition;</p>
                             <p style="display:inline-block;margin:0 3px 13px -24px;text-align:justify;"> (b) Relating to a congenital physical or mental disorder;</p>
                             <p style="display:inline-block;margin:0 3px 13px -24px;text-align:justify;"> (c) Relating to a medical condition or predisposition to disease;</p>
                             <p style="display:inline-block;margin:0 3px 13px -24px;text-align:justify;"> (d) To determine safety and compatibility with potential subjects;</p>
                             <p style="display:inline-block;margin:0 3px 13px -24px;text-align:justify;"> (e) To predict treatment response or action;</p>
                             <p style="display:inline-block;margin:0 3px 13px -24px;text-align:justify;"> (f) To establish or monitor treatment measures;</p>
                            </span>
<br>
                    
                           &nbsp; &nbsp;Sample containers are also considered in-vitro diagnostic medical devices.<br><br>						
                          
						<li style="margin:0 auto;text-align:justify;"> 
						If the intended use of the product to be certified meets the definition of in vitro diagnostic medical devices stipulated by laws and meets the IVDR requirements, CE marking can be affixed, and medical devices can be sold in the European Economic Area.
						</li>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Major changes in IVD/IVDR</p>
					<ul>
                        <li style="margin:0 auto;text-align:justify;">	
						  IVD consists of 24 groups and 10 annexes, and IVDR consists of 10 chapters, 113 groups and 15 annexes. As IVD was replaced by IVDR, requirements were added and the management of the product was strengthened.
						</li> <br>
                       
                        <li style="margin:0 auto;text-align:justify;">	
						  The major changes are as followings:
						</li> 
                         <br>
					    <table cellspacing="0" cellpadding="0">
                          <col width="72" span="6">
                          <tr>
                            <td width="72" align="center" bgcolor="#BDF345"><strong>Major changes</strong></td>
                            <td width="360" colspan="5" align="center" bgcolor="#BDF345"><strong>Details</strong></td>
                          </tr>
                          <tr>
                            <td rowspan="9" width="72">Medical device classificaiton    system change</td>
                            <td colspan="5" width="360">In IVD, the grades were classified into General, Self-testing,    List B, List A, but in IVDR, the grade classification system    was changed to A, B, C, D.</td>
                          </tr>
                          <tr>
                            <td colspan="5" width="360">　</td>
                          </tr>
                          <tr>
                            <td rowspan="5" width="72">　　　　　</td>
                            <td width="72" align="center">IVD classification</td>
                            <td width="72" align="center">IVDR classification</td>
                            <td width="72" align="center">Risk</td>
                            <td rowspan="5" width="72">　　　　　</td>
                          </tr>
                          <tr>
                            <td width="72" align="center">General</td>
                            <td width="72" align="center">A</td>
                            <td width="72" align="center">Low</td>
                          </tr>
                          <tr>
                            <td width="72" align="center">Self-testing</td>
                            <td width="72" align="center">B</td>
                            <td width="72" align="center">↓</td>
                          </tr>
                          <tr>
                            <td width="72" align="center">List B</td>
                            <td width="72" align="center">C</td>
                            <td width="72" align="center">High</td>
                          </tr>
                          <tr>
                            <td width="72" align="center">List A</td>
                            <td width="72" align="center">D</td>
                            <td width="72" align="center">　</td>
                          </tr>
                          <tr>
                            <td colspan="5" width="360">　</td>
                          </tr>
                          <tr>
                            <td width="72">Changes in conformity    assessment procedure</td>
                            <td colspan="4" width="288">In the case of Class A, there is no need to undergo conformity    assessment through a Certification Body. However, devices that are sterilized    among Class A(Class As) or higher must go through a certification body, and a    quality management system is also required.</td>
                          </tr>
                          <tr>
                            <td width="72">Changes in the obligation of economic operators</td>
                            <td colspan="5" width="360">The obligation of operators(manufacturer, delegated agent,    importer, distributor) have been strengthened and added.</td>
                          </tr>
                          <tr>
                            <td rowspan="2" width="72">Changes in performance evaluation</td>
                            <td colspan="5" width="360">IVDR requires the preparation of accurate and additional data on    performance and should include scientific validity, analytical performance,    and clinical performance.</td>
                          </tr>
                          <tr>
                            <td colspan="5" width="360">For Class D, testing by an EU standard    laboratory is required.</td>
                          </tr>
                          <tr>
                            <td width="72">Introduction of UDI</td>
                            <td colspan="5" width="360">A unique identification code(UDI) must be introduced to secure    identification and traceability and to secure post-marketing safety.</td>
                          </tr>
                          <tr>
                            <td width="72">Requirements for the software</td>
                            <td colspan="5" width="360">Regulations related to software that were not included in IVD have    been strengthened.</td>
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
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article>
   <!--+++++ /컨텐츠 02 CE MDR 컨텐츠 종료 +++++-->

    <!--+++++ /컨텐츠 05 CE LVD/EMC(유럽 저전압기기 지침) 컨텐츠 시작 +++++-->
    <article>
         <div class="page_title">
		    <h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE LVD/EMC | Low Voltage/Electromagnetic Compatibility  </span> <br> European product certification introduction</h1>
		    <h2 class="sub_txt">
            <p class="tit" style="font-size:1.3em;text-align:left;font-weight:500;">What is CE LVD/EMC?</p></h2>
            <span style="margin:0 auto;display:inline-block;text-align:justify;font-weight:300;">
            The European Low Voltage Directive(LVD) is a directive to protect electrical equipment against electric shock and other electrical hazards within a specific voltage range. These guidelines apply to electrical equipment designed and used with voltage specification for direct current between 70 ~ 1500 V and alternating current between 50 ~ 1000 V. Also, the voltage specifications that apply to these directives are for the electrical input/output voltage, not the voltage inside the equipment.<br><br>
            
            The Low Voltage Directive also defines the human body’s effects of electromagnetic field radiation from electrical equipment. The Low Voltage Directive is one of the oldest single directives established prior to the introduction of the “New” or “Global” concepts. In a broad sense, it provides a pre-market conformity assessment procedure for a device and the Essential Health and Safety Requirements(HSR) that the device must meet either directly or by harmonized standards, which ensure that equipment is used safely.
            <br><br>
            
            This is to prevent personal and property injury or loss from the following hazards that may occur under predicated or unforeseen circumstances.
            </span>
            <br><br>
            
              <h1 style="display:block;position:relative;text-align:center;">
                   <img src="images/product_celvdemc_01.jpg" alt="적용 가능한 위해요소(Hazard)">
              </h1>
              <br>
              
              <!----------span style="font-weight:bold;">&#10051; 적용 가능한 위해요소(Hazard)</span---------->
             <p class="tit" style="font-size:1.4em;text-align:left;font-weight:500;">Applicable Hazard</p><br>
             <span style="margin:0 auto;display:inline-block;text-align:justify;font-weight:300;">
               <p>&nbsp; &nbsp;  1) Electrical Hazard : When exposed to danger during use such as electronic shock</p>
               <p>&nbsp; &nbsp;  2) Fire Hazard : In case of fire due to overload, short circuit, etc.</p>
               <p>&nbsp; &nbsp;  3) Mechanical Hazard : Risk factors due to mechanical malfunction</p>
               <p>&nbsp; &nbsp;  4) Physical Hazard : Structural risk factors such as falling, external shock, and collapse</p>
               <p>&nbsp; &nbsp;  5) Chemical Hazard : Possible hazards caused by the paint used on the product</p>
             </span>
	      </div>
   
          <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
				<span style="display:block;text-align:center;font-size:1.6em;">   </span>
		  <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
		  
		  <p class="tit" style="font-size:1.4em;text-align:left;font-weight:500;">CE LVD / EMC Certification Procedure</p><br>
		  
		  <span style="font-weight:bold;">&#8280; LVD Certification scope</span>
          <p style="margin:0 auto;display:inline-block;text-align:justify;font-weight:300;">According to 2014/35/EU, it is applied to electrical appliances with a rated voltage of AC50~1000V or DC75~1500V. (However, products listed in Annex II are excluded(Explosion-proof equipment, radiation and medical equipment, electric parts of elevators, electric meters, indoor plugs and socket outlets, electric barbed wire controllers, jamming equipment, special electricity used for ships, aircraft, and railroads complying with safety regulations prepared by international organization device))</p><br><br>

	<div class="business_type7">
		
		<div class="business_info">		
			<div><!----class="backImg" ------->
				<div class="txt_area">
				
					<!--------------p class="tit" style="text-align:left;">상세 절차</p-------------->
					<p class="tit" style="font-size:1.4em;text-align:left;font-weight:500;">Detailed Procedure</p><br>
					
					<ul>
                      <span style="font-weight:bold;">[Step 1]</span><br><br>
                       <li style="margin:0 auto;text-align:justify;font-weight:300;">  
                        1. In order to carry out CE marking, the manufacturer must understand the EMC Directive that defines the product to be marked.<br>
                           &nbsp; EMC Directive: 2014/30/EU Electromagnetic compatibility (EMC) Directive<br><br>
                        2. For the suitability of the product, the essential requirements stipulated in the Directive shall be organized by item<br>
                           &nbsp; The manufacturer must prove that the requirements stipulated in the relevant Directive are met. For this purpose, technical details of the response for safety and risk prevention in product must be described or results of product test and related data must be presented.<br><br>
                        3. The manufacturer determines the conformity assessment method(applied module) to prove and declare that the product meets the requirements of the relevant guidelines related to CE marking, and conducts conformity assessment accordingly. CE marking conformity assessment stipulates in each Directive to use one or a combination of two modules according to the characteristics of the product among the 8 modules.<br><br>
                          4. Once the guidelines to be applied to the product have been determined, the European test standards to be tested for each of those guidelines should be determined.<br><br><br> </li>
                        
                       
                      <span style="font-weight:bold;">[Step 2]</span><br><br>
                       <li style="margin:0 auto;text-align:justify;font-weight:300;"> 
                        1. If the EN standard related to the product has been determined, conduct the test in an accredited institution according to the standard.<br><br>
                          2. Product tests are used as data to prove the safety and risk response skills of products required by the guidelines.<br><br><br> </li>
                        
                      
                      <span style="font-weight:bold;">[Step 3]</span><br><br>
                       <li style="margin:0 auto;text-align:justify;font-weight:300;">  
                        1. For the declaration of conformity, a technical document (Technical Construction Files; T.C.F) that deals with the technical contents for the safety and risk prevention of the product shall be prepared.<br><br>
                          2. The technical contents to be dealt with in the technical document must be prepared by referring to the relevant guidelines as the required data differs according to the relevant directive.<br><br><br> </li>
                        
                         
                      <span style="font-weight:bold;">[Step 4]</span><br><br>
                         <li style="margin:0 auto;text-align:justify;font-weight:300;">  
                          In this step, in order to declare the conformity of the Directive, the manufacturer prepares a declaration of conformity based on the quality system certification required for each module and various technical documents, and signs and approves it as a confirmation.<br><br><br> </li>
                        
                        
                       <span style="font-weight:bold;">[Step 5]</span><br><br>
                       <li style="margin:0 auto;text-align:justify;font-weight:300;">   
                        1. After completing and approving the declaration of conformity, the manufacturer attaches the labeling information of the product when the product is shipped. The label includes the manufacturer’s name, product related matters and CE marking.<br><br>
                        2. In general, the details of the technical document are as follows:<br><br>
                           &nbsp; &nbsp; o General information about the product and explanation necessary for understanding the operating system of the product<br>
                           &nbsp; &nbsp; o Installation drawings, design drawings, circuit diagrams, circuit distribution diagram, etc.<br>
                           &nbsp; &nbsp; o Parts List, test report, design calculation, standard checklist<br>
                           &nbsp; &nbsp; o Clinical trial data(for MDD), risk factor analysis<br>
                           &nbsp; &nbsp; o Catalogs, technical data, etc. of important parts or parts exchanged during maintenance<br><br> 
                           </li>

                    
						
						<li style="margin:0 auto;text-align:justify;font-weight:300;"> 
						The purpose of this guideline is to ensure safety from electricity by preventing the sale of electrical products that threaten human and animal safety in the European Union. Related products include computers, information technology equipment, household appliances, power tools, laboratory equipment, test and measurement equipment and power supplies. In other words, it is essential for manufacturers planning to sell electrical products to Europe.<br><br>
						</li>
					</ul>
				</div>
			</div>
	
			<div class="backImg">
				<div class="txt_area">
					<!-----------p class="tit">Post management of CE LVD/EMC certification</p----------->
					<p class="tit" style="font-size:1.4em;text-align:left;font-weight:500;">Post management of CE LVD/EMC certification</p>
					<ul>
                         <span style="display:block;text-align:justify;font-weight:300;">
						    &#8280; CE marked products are cleared through 17 EEA countries’ custom without any restriction. Cleared products can be distributed in the European market without any discrimination.<br><br>
                            &#8280; CE Customs checks the CE marking and accepts the declaration of conformity.<br><br>
                            &#8280; Even for the customs clearance product, if necessary, follow-up management such as sample inspection, along with a request for submission of technical documents, is subject to objections from relevant stakeholders (customers, competitors, and domestic inspection agencies).<br><br>
                            &#8280; CE marking is a system that receives post-management, not a pre-inspection system that can be marketed after receiving pre-inspection and approval of CE marking authority of the member country’s government or mandatory standard. The CE marking authority will voluntarily, or when a stakeholder reports or a problem occurs, collects the products distributed on the market and conducts a document inspection related to conformity of standards and, if necessary, conducts a safety inspection of the product.<br><br>
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
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
 </article>
 <!--+++++ /컨텐츠 05 CE LVD/EMC 컨텐츠 종료 +++++-->
     
<!--+++++ /컨텐츠 06번째 CE Machinery 컨텐츠/business_type8 시작 +++++-->
<article>
           
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;"> CE Machinery | Machinery  </span> <br>  Introduction to European Product Certification </h1>
        <h2 class="sub_txt"></h2>
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            A manufacturer that intends to distribute or sell a product within Europe shall affix a CE mark to the product through declaration or certification of conformity that the product conforms to the applicable EU guidelines. In Europe, the guidelines applicable to the safety of machinery are Machinery Directive 2006/42/EC and apply to all machinery, including transport machines, mechanism, lifts and transport equipment and safety components.
            </span>
	</div>

	<div class="business_type8">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;"> CE Machinery(Machinery Safety) European Product Certification Overview</p>
					<ul>
						<div style="display:block;text-align:justify;">
						The definition of machinery is defined in MD as "at least one part of the operation, with multiple interrelated parts and proper actuator, controller and power circuitry." The European Machinery Directive (Machinery Directive:2006/42/EC) is designed to ensure the health and safety of workers in the use of a wide range of machinery and other products, including accessories, chains, ropes and webbing, replacement equipment, mobile mechanical transmitters and safety components. 
						</div> <br>	
						<div style="display:block;text-align:justify;"> 
						The following products can be attach CE marks:<br>
                        1. General industrial machinery: semiconductor equipment, excavator accessories and partial machinery, press, CNC lathe, machine tool, industrial compressor, industrial hoist, industrial printer, packaging equipment, etc.<br>
                        2. Hazardous machinery: similar machinery, such as circular saws, products for underground work, such as presses, plastics, rubber ejectors, mines, car lifts for work, lifts for passenger transport, safety relays, etc.<br>
						</div>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
	
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;"> CE Machinery Directive(2006/42/EC)</p>
					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;">&#10048; Composition of CE Machinery Directive(2006/42/EC) </span><br>
						<span style="margin:0 auto;text-align:justify;">
                           Introduction : Guidelines and general explanations and cautions for preparation<br>
                           Main subject : A provision for the application of guidelines, legal obligations or authority to the member countries<br><br>
                           </span>
                         <span style="display:block;text-align:justify;font-weight:300;">
						    &nbsp; &nbsp; &#10023; Annex I : Essential requirements for health and safety regarding design and manufacturing<br>
                            &nbsp; &nbsp; &#10023; Annex II : Matters concerning the Declaration of Conformity<br>
                            &nbsp; &nbsp; &#10023; Annex III : CE – Marking<br>
                            &nbsp; &nbsp; &#10023; Annex IV : List of machinery that must be tested in the EU format by the Notified Body<br>
                            &nbsp; &nbsp; &#10023; Annex V : Declaration of Conformity and Technical Files<br>
                            &nbsp; &nbsp; &#10023; Annex VI : EU Type Test<br>
                            &nbsp; &nbsp; &#10023; Annex VII : Notified Body Criteria<br><br>
                         </span>         
					</ul>
					
					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Standard classification</span>
					    <br>
					    <span style="display:block;text-align:left;">
					        European Standard for machine safety can be divided into A, B, and C standard. The product must meet all 3 applicable standards.<br><br>
					    </span>
                         <span style="display:block;text-align:justify;font-weight:300;">
						    &nbsp; &nbsp; &#10052; standard A (EN 414, EN 12100) <br>
                            &nbsp; &nbsp; Standard that define basic concepts, design principles, and general aspects as basic safety standard<br><br>
                            &nbsp; &nbsp; &#10052; Standard B (EN 13850, EN 13849-1, EN 60204-1 and etc.)<br> 
                            &nbsp; &nbsp; Safety-related standard applicable to machines that are widely classified according to their basic use and purpose.<br>
                              &nbsp; &nbsp; &nbsp; 1) Standard B1 for specific safety aspects (Electricity, Safety Distance, Surface Temperature, Noise and etc.)<br>
                              &nbsp; &nbsp; &nbsp; 2) Standard B2 for safety-related devices and mechanical components (emergency switches, pressure sensing devices and etc.)<br><br>
                            &nbsp; &nbsp; &#10052; Standard C <br>
                            &nbsp; &nbsp; Standard that specify detailed safety requirements for a particular machine or group of machines.<br><br>
                         </span>
					</ul>

					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; Applied Devices </span>
					    <br>
                         <span style="display:block;text-align:justify;font-weight:300;">
                            &nbsp; &nbsp; 1. Products with at least one operating part, with electricity, air pressure, hydraulic pressure, weight and etc. as the source of energy<br>
                            &nbsp; &nbsp; 2. Parts of machinery that are involved in health or safety; equipment that is shipped on separateness
                         </span>
					</ul>
					
					<!----CSS 적용 없는 이미지 삽입------>
					<br>
					<h1 style="display:block;text-align:center;width:100%;">
					<img src="images/product_cemachinery_08.jpg" alt="CE Machinery Directive(2006/42/EEC) 핵심 요구사항">
					</h1>
                    <br>
                    
                    <ul>
					    <span style="display:block;text-align:justify;font-weight:bold;"> &#10048; CE Machinery Directive(2006/42/EC) core requirement </span>
					    <br>
					    <span style="display:block;text-align:justify;font-weight:300;">
                         The documentation requirements that the manufacturer must comply with are in the essential health and safety requirements of Annex I of the MD, documenting whether the machine is being used safely and properly alerting the user if any remaining risks are present<br><br>
                        </span>
                        <span style="display:block;text-align:left;font-weight:300;">
                          Required requirements as below;
                        </span><br>
                        
                         <span style="display:block;text-align:justify;font-weight:300;">
                            1. the principle of safety, design that facilitates handling, Ergonomics, Control system, Protects against mechanical hazards, electrical and other energy temperatures, other hazards, such as fire and explosion, common to all types of machinery, such as noise emission, Vibration, Radiation and hazardous materials, maintenance and maintenance, Cleaning, Display and Warning of Information<br><br>
                            2. Requirements applicable to certain classes of machinery, such as food, cosmetics, and medicines<br><br>
                            3. Requirements for offsetting the risk of machine mobility<br><br>
                            4. Requirements to offset the risk of lift operations<br><br>
                            5. Requirements for underground work machines<br><br>
                            6. Requirements for mechanical lift personnel<br><br>
                         </span>
					</ul>
 
					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; The certification procedure  </span><br>
					    <span style="display:block;text-align:left;font-weight:300;">There are four methods as follows;</span><br>
                       
                        <span style="display:block;text-align:left;font-weight:300;">   
                            A) High-risk machinery described in Annex 4<br>
                               &nbsp; &nbsp; Accreditation through the notified Body (NB)<br><br>
                            B) General machinery other than Annex 4 (Anex II A)<br>
                               &nbsp; &nbsp; Acquired by Declaration of self-conformity (with a CE mark as proof of conformity with the finished product)<br><br>
                            C) Declaration of self-conformity with respect to Machine Parts (Annes II B)<br>
                               &nbsp; &nbsp; Acquired by self-compliance declaration (with a CE mark as proof of conformity with the finished product)<br><br>
                            D) Declaration of self-conformity with safety components (Annes II C)<br>
                               &nbsp; &nbsp; Acquired by self-compliance declaration (with a CE mark as proof of conformity with the finished product)<br><br>
                         </span>
                         <span style="display:block;text-align:justify;font-weight:300;">
                         Note: In the case of B) and C), a Declaration of self-conformity can be made and the relevant technical documents stored to declare compliance with the specification, but CE marks cannot be affixed to the product or packaging.
                         </span>             
					</ul>
		
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Related document</p>
					<ul>
					
					  <p style="display:block;font-weight:bold;">TCF: Technical Construction Files</p>
                     <span style="display:block;text-align:justify;font-weight:300;">
                      Technical Construction Files requirements contained in 2006/42/EC Annex VII.<br>
                      The TCF should verify that the machine is suitable for the requirements of the Machinery Directive. The language used must be written as the official community language.<br><br>
				    </span>	
				    	
<!--						<li>TCF should include the following documents:</li>-->
                          <span style="display:block;text-align:left;">TCF should include the following documents:</span><br>
                          
                          <span style="display:block;text-align:left;font-weight:300;padding:0 0 0 35px;">
                              <li style="margin:0 3px 13px -24px;text-align:justify;"> General description of the machine</li>
                              <li style="margin:0 3px 13px -24px;text-align:justify;"> Technical drawings necessary to check the overall drawings of the machine and the suitability of the machinery</li>
                              <li style="margin:0 3px 13px -24px;text-align:justify;"> List of essential health and safety requirements applicable to machinery</li>
                              <li style="margin:0 3px 13px -24px;text-align:justify;"> Explanation of protective measures taken to reduce identified risks, instructions on residual risks associated with machinery</li>
                              <li style="margin:0 3px 13px -24px;text-align:justify;"> Standards that present the essential health and safety requirements contained in this standard</li>
                              <li style="margin:0 3px 13px -24px;text-align:justify;"> A report showing the results of a test performed by a manufacturer or by an agency recognized by the manufacturer</li>
                              <li style="margin:0 3px 13px -24px;text-align:justify;"> Copy of EC Declaration of Conformity for Machinery and Other Products</li>
                            
                          </span>
						<span>Technical documents shall be available for at least 10 years from the date of manufacture of the machine.</span><br>
					</ul>
					<br><br>

					<ul>
					
					  <p style="display:block;font-weight:bold;">EC -Declarative of Conformity</p>
                       <span style="display:block;text-align:justify;font-weight:300;">
                        To attach a CE mark, the manufacturer must issue a declaration of conformity indicating that the product conforms to the applicable guidelines and standard regulations. Most machine manufacturers can declare their own suitability. Several product categories, including high-risk machines such as electrical saws, require third-party certification.<br><br>
                        Forced safety certification is carried out to ensure the safety of workers by using the machine properly and safely designing and properly installing products and maintaining the machine, due to numerous accidents caused by the use of the machine.<br><br>
                        The manufacturer shall prepare and sign the EU Declaration of Conformity, and the DOC shall include the applied Harmonized Organization and the information of the manufacturer, European representative and certification authority, and, if necessary, additional information such as harmonized specifications, products and technical specifications.<br><br>
                        Like the technical documentation, DOC should be stored for 10 years from the time the product is released. DOC's storage obligations are to the manufacturer or to the European representative, and in the case of imported products, the importer is responsible.<br><br>
				      </span>	
				    	
						<span style="display:block;text-align:left;">DOC should include the following:</span><br>

                            <span style="display:block;text-align:left;font-weight:300;padding:0 0 0 35px;">
                             <li style="margin:0 3px 13px -24px;text-align:justify;">
                              The name and full address of the manufacturer and, if applicable, the representative's information which recognized by the manufacture
                              </li>
                              
                              <li style="margin:0 3px 13px -24px;text-align:justify;">
                                  Names and addresses of persons authorized to edit technical documents</li>
                              
                              <li style="margin:0 3px 13px -24px;text-align:justify;">
                                  Description of machinery including general information including functions, models, serial numbers, and trade name</li>
                              
                              <li style="margin:0 3px 13px -24px;text-align:justify;">
                                  Statement by which the machinery clearly declares that these guidelines have carried out all relevant regulations</li>
                              
                              <li style="margin:0 3px 13px -24px;text-align:justify;">
                                  Similar statements declaring other guidelines and/or related regulations appropriate for machinery, if applicable</li>
                              
                              <li style="margin:0 3px 13px -24px;text-align:justify;">
                                  Name, address and identification number of Notified body and number of certificates</li>
                              
                              <li style="margin:0 3px 13px -24px;text-align:justify;">
                                  Criteria for harmonized standard</li>
                              
                              <li style="margin:0 3px 13px -24px;text-align:justify;">
                                  Criteria for other technical standards and specification</li>
                              
                              <li style="margin:0 3px 13px -24px;text-align:justify;">
                                  Site and date of certification</li>
                              
                              <li style="margin:0 3px 13px -24px;text-align:justify;">
                                  The status and signature of a manufacturer or a person entrusted to prepare a declaration on behalf of a manufacturer's recognized representative</li>
                              
                             </span>
					</ul>

					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:justify;">IGC’s Competency</p>
					<ul>
                        <li>IGC works with European  Notified Body (NB) to provide product certification services such as CE Machinery, CE MDD, CE IVD and CE LVD.</li>
                        <li>IGC have years of technical skills and expertise, as well as up-to-date knowledge of a range of specific legal requirements in major markets around the world.</li>
                        <li>Provide knowledge and services to support your overall global operations.</li>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:30px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>

	<!----(주)아이지씨인증원 사업영역 시작-------->
	       <section class="partner_type2">
             <h2 class="con_arrow">
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
</article>
<!--+++++ /컨텐츠 06번째 CE Machinery 컨텐츠/business_type8 종료 +++++-->
  
 
<!--+++++ /컨텐츠 07번째  PED 컨텐츠 시작 +++++-->
<article>

	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE PED | Pressure equipment </span> <br>Introduction to European Product Certification </h1>
        <h2 class="sub_txt"></h2>
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            PED is abbreviation of Pressure Equipment Directive (2014/68/EU), which is a pressure equipment instruction that applies to design, manufacture and conformity assessment of pressure equipment and components with a maximum permissible pressure of 0.5 bar or more. Manufacturers wishing to export their products to EU countries must be certified in accordance with the Pressure Equipment Directive, which was amended from 97/23/EC to 2014/68/EU as of July 19, 2016.
            </span>
	</div>

	<div class="business_type9">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Scope</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">
						This guidance applies to the design, manufacture and conformity assessment of pressure equipment and assemblies with a maximum permissible pressure of 0.5 bar or more. Includes all vessels, piping, safety accessories and pressure accessories.<br><br></li>
                         <span style="display:block;text-align:justify;font-weight:300;">	
                         <p style="font-weight:bold;">Applied pressure equipment</p><br>
                            ☑ Water pipe boiler<br>
                            ☑ Heat Exchanger<br>
                            ☑ Pressure vessel<br>
                            ☑ Pipe<br>
                            ☑ Electric heater<br>
                            ☑ Valve (Isolated, Controlled)<br>
                            ☑ Meter<br>
                            ☑ Release valve<br>
                            ☑ Safety valve<br>
                            ☑ Controlled safety pressure release system<br>
                            ☑ Pressure switch<br>
                            ☑ Temperature change<br>
                            ☑ Fluid level switch<br><br>
                         </span>

                         <span style="display:block;text-align:justify;font-weight:300;">	
                         <p style="font-weight:bold;">Excluded scope</p><br>
                            ☑ Items applicable to SPVD(Simple Pressure Vessels Directive) and TPED(Transportable Pressure Equipment Directive)<br>
                            ☑ Products with relatively low pressurization: Mechanical Directive<br>
                            ☑ Pressure vessel<br>
                            ☑ Equipment for vehicles, etc.<br>
                         </span>
					</ul>
					
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Proof of pressure equipment (CE marking)</p>
					<ul>
						<span style="margin:0 auto;text-align:justify;">
                        Pressure instruments are classified into four stages of Category I, II, III, and IV according to the maximum allowable pressure (PS), fluid use, volume, and external diameter (DN), and are subject to the module requirements applicable to that category as shown in the table below. For detailed technical requirements for conformity assessment, European technical specifications such as EN 1345, AD2000, and ASME codes are applied.<br><br>
                        </span>
						<span style="display:block;text-align:left;margin:0 0 7px; 0;">Annex II, Conformity assessment table</span>
                          <table border="1" cellspacing="0" cellpadding="0" width="66%">
                              <tr>
                                <td width="13%" valign="top" bgcolor="#F1BABB"><p align="center"><strong>Category</strong></p></td>
                                <td width="87%" valign="top" bgcolor="#F1BABB"><p align="center"><strong>Modules</strong></p></td>
                              </tr>
                              <tr>
                                <td width="13%" valign="top"><p align="center">I</p></td>
                                <td width="87%" valign="top"><p align="left">Module A</p></td>
                              </tr>
                              <tr>
                                <td width="13%" valign="top"><p align="center">II</p></td>
                                <td width="87%" valign="top"><p align="left">Modules A2, D1, E1</p></td>
                              </tr>
                              <tr>
                                <td width="13%" valign="top"><p align="center">III</p></td>
                                <td width="87%" valign="top"><p align="left">Modules B(Design type)+D, B(Design type)+F,    B(Production type)+E, B(Production type)+C2, H</p></td>
                              </tr>
                              <tr>
                                <td width="13%" valign="top"><p align="center">IV</p></td>
                                <td width="87%" valign="top"><p align="left">Modules B(Production type)+D, B(Production    type)+F, G, H1</p></td>
                              </tr>
                            </table>

						<br>
						
						
						<span style="display:block;text-align:left;margin:0 0 7px; 0;">Annex III, Conformity assessment table</span>
						<table border="1" cellspacing="0" cellpadding="0" width="100%">
                              <tr>
                                <td width="12%" valign="top"><p align="center">Module A</p></td>
                                <td width="88%" valign="top"><p align="left">Internal production management</p></td>
                              </tr>
                              <tr>
                                <td width="12%" valign="top"><p align="center">Module A2</p></td>
                                <td width="88%" valign="top"><p align="left">Internal production management + Product    inspection under supervision at random cycles</p></td>
                              </tr>
                              <tr>
                                <td width="12%" valign="top"><p align="center">Module B</p></td>
                                <td width="88%" valign="top"><p align="left">EU-Type inspection (Production type)<br>
                                  EU-Type inspection (Design type)</p></td>
                              </tr>
                              <tr>
                                <td width="12%" valign="top"><p align="center">Module C2</p></td>
                                <td width="88%" valign="top"><p align="left">Formal conformity based on internal production    management + Product inspection under supervision at random cycles</p></td>
                              </tr>
                              <tr>
                                <td width="12%" valign="top"><p align="center">Module D/D1</p></td>
                                <td width="88%" valign="top"><p align="left">D: Formal suitability based on quality assurance    of production process<br>
                                  D1: Quality Assurance of Production Process</p></td>
                              </tr>
                              <tr>
                                <td width="12%" valign="top"><p align="center">Module E/E1</p></td>
                                <td width="88%" valign="top"><p align="left">E: Formal suitability based on product quality    assurance<br>
                                  E1: Quality Assurance of Inspection and Testing of Final Products</p></td>
                              </tr>
                              <tr>
                                <td width="12%" valign="top"><p align="center">Module F</p></td>
                                <td width="88%" valign="top"><p align="left">Formal suitability based on product verification</p></td>
                              </tr>
                              <tr>
                                <td width="12%" valign="top"><p align="center">Module G</p></td>
                                <td width="88%" valign="top"><p align="left">Conformity based on unit verification</p></td>
                              </tr>
                              <tr>
                                <td width="12%" valign="top"><p align="center">Module H/H1</p></td>
                                <td width="88%" valign="top"><p align="left">H: Conformity based on full quality assurance<br>
                                  H1: Conformity based on complete quality assurance + Design inspection</p></td>
                              </tr>
                            </table>
                        
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:20px;margin-top:2px;width:100%;">	
					</ul>
                </div> <!------// class="txt_area" 종료-------------->  
            </div>	<!--------// class="backImg" 종료 ------------>				
	
            <div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">IGC’s Competency</p>
					<ul>
						<span style="display:block;text-align:left;font-weight:300;">
						   &#9813; IGC provides product certification services to companies that want to export their products to Europe based on years of experience.
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						   &#9813; We provide the most competitive product certification service through cooperation with leading overseas product certification institutions.
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						   &#9813; ISO 9000, Companies that already comply quality management systems can make the most of their current quality systems and meet the essential safety requirements of PEDs.
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						   &#9813; If the manufacturer has not been formally certified as a Quality Management System, IGC will provide certification authority services in accordance with the PED QA approach.
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
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
</article>
<!--+++++ /컨텐츠 06번째 PED 컨텐츠 종료 +++++-->
     
<!--+++++ /컨텐츠 08번째 SPVD 시작 +++++-->
<article>
   
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE SPVD | Simple pressure container  </span>Introduction to European Product Certification
        </h1>
        <h2 class="sub_txt"></h2>
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            SPVD is a Simple Pressure Vessel Directive that is a weld container with an internal pressure of 0.5 or higher, applies to pressure vessels that contain air or nitrogen and target all non-flammable fluids, and is manufactured continuously. 
            <br><br>
            Manufacturers who wish to export their products to EU countries shall be certified according to the simple pressure container guidelines, and the simple pressure container guidelines have been revised to 2014/29/EU as of April 20, 2016
            </span>
	</div>

	<div class="business_type10">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Applied scope/ Excluded scope</p>
					<ul style="display:block;text-align:left;">
                        <span style="font-weight:bold;">1. Applied scope<br></span>
                        <span style="margin:0 auto;display:inline-block;text-align:justify;">
						All pressure vessels containing air or nitrogen and non-flammable as a welding vessel with an internal pressure of 0.5 bar or higher. <br><br>
                        ⚜ Areas and assemblies that affect the strength of the vessel under pressure must be made of non-alloyed steel, non-alloyed aluminum, or sturdy aluminum alloy that does not undergo aging.<br><br>
                        ⚜ The container consists of a cylindrical part or cylindrical part of a circular cross-sectional area closed by a stool on the outside, and a plate rotating coaxially or a stool rotating coaxially.<br><br>
                        ⚜ The maximum operating pressure of the container must not exceed 30 bar, and the product of the inner volume and pressure of the container must not exceed 10,000 bar/liter.<br><br>
                        ⚜ The minimum operating temperature of the container should not be lower than -50℃ and the maximum operating temperature should not be higher than 300℃ for steel and 100℃ for aluminum and aluminum alloy containers.<br><br>
						
                        <span style="font-weight:bold;">2. Excluded scope<br></span>
						⚜ Container designed to prevent radioactive leakage for use in nuclear power<br><br>
                        ⚜ Container used for propulsion devices or equipment of ships or aircraft<br><br>
                        ⚜ Fire extinguisher<br><br>
                      </span>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Essential requirements</p>
					<ul style="display:block;text-align:justify;">
						The prerequisites for SPVD are below: <br>
						1) Vessels with a maximum permissible pressure (PS) x capacity (V) exceeding 50 bar.L must meet the essential safety requirements of Annex I<br><br>
                        2) Vessels with a maximum permissible pressure (PS) x capacity (V) of 50 bar.L or less must be designed and manufactured according to the engineering practice of one of the member states.
					</ul>
                
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">The importance of SPVD</p>
					<ul style="display:block;text-align:justify;">
						Dangers are created if pressure vessels are handled and evaluated incorrectly. Therefore, European Directive 2014/29/EU (SPVD) stipulates that all pressure vessels must be certified by notified body.<br><br>

                        <p>This standard helps below:</p><br>
                        ⚚ Meets conformity assessment procedures including safety<br><br>
                        ⚚ Satisfying prerequisites for product export<br><br>
                        ⚚ Compliance with European usage standards and directive requirements<br><br>
                        ⚚ Enhance product competitiveness<br><br>
                        ⚚ Strengthen internal production management<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Conformity assessment procedure</p>
					<ul style="display:block;text-align:justify;">
						For simple pressure vessels, the module is determined according to the maximum allowable pressure (PS) x capacity (V).<br><br>
						
						<table border="1" cellspacing="0" cellpadding="0" width="94%">
                          <tr>
                            <td width="7%" rowspan="3"><p align="left">Module B +</p></td>
                            <td width="10%"><p align="left">Module C1</p></td>
                            <td width="83%"><p align="left">EU- Type inspection    + Product testing under formal conformity and supervision based on internal    production management</p></td>
                          </tr>
                          <tr>
                            <td width="10%"><p align="left">Module C2</p></td>
                            <td width="83%"><p align="left">EU- Type inspection    + Product testing under formal conformity and supervision based on internal    production management at random cycles</p></td>
                          </tr>
                          <tr>
                            <td width="10%"><p align="left">Module C3</p></td>
                            <td width="83%"><p align="left">EU- Type inspection +    Formal compatibility based on internal production management</p></td>
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
					<p class="tit" style="text-align:left;">IGC’s Competency</p>
					<ul style="display:block;text-align:justify;">
                    ♔ IGC provides certification services for simple pressure vessels in agreement with FQC (First Quality Certification, NB2674), a European accreditation body.<br><br>
                    ♔ The auditors of IGC contribute to the continuous development of customers by accurately evaluating the suitability of the management system through the technology and expertise accumulated over the years.<br><br>
                    ♔ As a reliable global leader in product certification, IGC provides certifications for ISO SPVD as well as PED and hot-water boilers.<br><br>
                    ♔ IGC has up-to-date knowledge of a wide range of specific scopes and legal requirements in major markets around the world.<br><br>
                    ♔ IGC provides knowledge and services to support your entire global operations.<br><br>
					</ul>
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>

	<!----(주)아이지씨인증원 사업영역 시작-------->
	       <section class="partner_type2">
             <h2 class="con_arrow">
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
</article>
<!--+++++ /컨텐츠 07번째 SPVD 컨텐츠 종료 +++++-->
       
 
<!--+++++ /컨텐츠 09번째, Hot-water boiler, 컨텐츠 시작 +++++-->
<article>
    <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">Hot-water boiler </span> <br> Introduction to European Product Certification</h1>
        <h2 class="sub_txt"></h2>
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            92/42/EEC is a directive on the efficiency requirements for new hot water boilers burning on liquid or gaseous fuels rated at 4 kW ~ 400 kW and is part of the European Union's SAVE program on promoting energy efficiency.<br><br>
            The purpose of this directive is to improve energy efficiency by setting efficiency requirements for hot water boilers that burn as liquid or gas.
            </span>
	</div>

	<div class="business_type11">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Scope</p>
					<ul style="display:block;text-align:left;">
						Hot water boilers that use liquid or gaseous fuel with a rated output of 4 Kw ~ 400 Kw (standard boiler, low temperature boiler, gas condensing boiler)
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Excluded Scope</p>
					<ul style="display:block;text-align:justify;">
                        ⚙ Hot water boiler that can be burned by various fuels including solid fuel<br><br>
                        ⚙ Hot water preparation equipment<br><br>
                        ⚙ Boiler designed to be burned by fuels(Industrial waste gas, biogas, etc.) with properties different from those of liquid and gaseous fuels on the market.<br><br>
                        ⚙ Cooking utensils and appliances installed in the building to provide central heating and sanitary hot water with the main purpose of heating<br><br>
                        ⚙ Equipment designed for the production of stored sanitary hot water with a rated output of less than 6kW using gravity circulation<br><br>
                        ⚙ Single use Boiler<br><br>
					</ul>
                
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Efficiency requirements</p>
					<ul style="display:block;text-align:justify;">
						⛭ Rated power: Operates at an average boiler water temperature of 70 °C at rated power (Pn) expressed in kW<br><br>
                        ⛭ Partial load: Operates with a load of 30% at the average water temperature of the boiler depending on the type of boiler<br><br>

                        
                        <table border="1" cellspacing="0" cellpadding="0" width="100%">
                              <tr>
                                <td width="17%" bgcolor="#FCCBCB"><p align="center"><strong>Type of boiler</strong></p></td>
                                <td width="17%" bgcolor="#FCCBCB"><p align="center"><strong>Output range</strong></p></td>
                                <td width="32%" colspan="2" bgcolor="#FCCBCB"><p align="center"><strong>Efficiency at rated power</strong></p></td>
                                <td width="32%" colspan="2" bgcolor="#FCCBCB"><p align="center"><strong>Efficiency at partial load</strong></p></td>
                              </tr>
                              <tr>
                                <td width="17%"><p align="center">　 </p></td>
                                <td width="17%"><p align="center">Kw</p></td>
                                <td width="11%"><p align="center">Average boiler water temperature (in&nbsp; ℃)</p></td>
                                <td width="20%"><p align="center">Efficiency requirement (in %)</p></td>
                                <td width="11%"><p align="center">Average boiler water temperature (in&nbsp; ℃)</p></td>
                                <td width="20%"><p align="center">Efficiency requirement (in %)</p></td>
                              </tr>
                              <tr>
                                <td width="17%"><p align="center">Standard boiler</p></td>
                                <td width="17%"><p align="center">4 - 400</p></td>
                                <td width="11%"><p align="center">70</p></td>
                                <td width="20%"><p align="center">≥ 84 + 2<br>
                                  logPn</p></td>
                                <td width="11%"><p align="center">≥ 50</p></td>
                                <td width="20%"><p align="center">≥ 80 + 3</p></td>
                              </tr>
                              <tr>
                                <td width="17%"><p align="center">Low temperature boiler +</p></td>
                                <td width="17%"><p align="center">4 - 400</p></td>
                                <td width="11%"><p align="center">70</p></td>
                                <td width="20%"><p align="center">≥ 87.5 + 1.5<br>
                                  logPn</p></td>
                                <td width="11%"><p align="center">40</p></td>
                                <td width="20%"><p align="center">≥ 87.5 + 1.5</p></td>
                              </tr>
                              <tr>
                                <td width="17%"><p align="center">Gas condensing boiler</p></td>
                                <td width="17%"><p align="center">4 - 400</p></td>
                                <td width="11%"><p align="center">70</p></td>
                                <td width="20%"><p align="center">≥91 + 1<br>
                                  logPn</p></td>
                                <td width="11%"><p align="center">30(**)</p></td>
                                <td width="20%"><p align="center">≥ 97 + 1<br>
                                  logPn</p></td>
                              </tr>
                            </table> <br>
                         (*) Condensing boilers using liquid fuel included <br>
                         (**) Water temperature of Boiler <br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Conformity assessment procedure</p>
					<ul>
                        <table border="1" cellspacing="0" cellpadding="0" width="101%">
                          <tr>
                            <td width="12%" rowspan="3"><p align="center">Module B +</p></td>
                            <td width="22%"><p align="center">Module C</p></td>
                            <td width="66%"><p align="left">EU- Type Inspection + Type suitability</p></td>
                          </tr>
                          <tr>
                            <td width="22%"><p align="center">Module D</p></td>
                            <td width="66%"><p align="left">EU- Type Inspection + Production quality    assurance</p></td>
                          </tr>
                          <tr>
                            <td width="22%"><p align="center">Module E</p></td>
                            <td width="66%"><p align="left">EU- Type Inspection + Production quality    assurance</p></td>
                          </tr>
                        </table>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					    <span style="display:block;text-align:center;"> &#10057; &#10057; &#10057;</span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">IGC’s Competency</p>
					<ul style="display:block;text-align:justify;">
                        ⛯ IGC has been accredited by IAS, an accreditation body in the United States, and provides certification services for management systems.<br><br>
                        ⛯ The auditors of IGC contribute to the continuous development of client by accurately evaluating the suitability of the management system through the technology and expertise accumulated over the years.<br><br>
                        ⛯  IGC is a trusted global leader in management system certification, providing certification for quality, environment and other management systems.<br><br>
                        ⛯  IGC has up-to-date knowledge of a wide range of specific scope and legal requirements in major markets around the world.<br><br>
                        ⛯ IGC provides knowledge and services to support your entire global operation.
					</ul>
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					  <span style="display:block;text-align:center;"> &#10057; &#10057; &#10057;</span>
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:20px;margin-top:2px;width:100%;">
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	       <section class="partner_type2">
             <h2 class="con_arrow">
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>

</article>
<!--+++++ /컨텐츠 08번째, Hot-water boiler, 컨텐츠 종료 +++++-->
       
     
<!--+++++ /컨텐츠 09번째 Gas Applicance 컨텐츠 시작 +++++-->
  <article>
    <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">Gas Appliance | Gas fuel combustion equipment </span> <br> Introduction to European Product Certification</h1>
		<h2 class="sub_txt">
            <span style="display:block;text-align:justify;font-weight:bold;">
              Appliances burning gaseous fuels (EU 2016/426) introduction<br>
            </span></h2>
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            EU 2016/426 is a European gas appliance regulation that applies to gas appliances and accessories designed for hot water production, refrigeration, lighting, heating, washing and cooking purposes.<br><br>
            The European Gas Appliances Directive (GAD 2009/142/EC) issued in March 2017 was replaced by the Gas Appliances Regulation (GAR 2016/426) has been updated and applied from April 2018.
            </span>
	</div>

	<div class="business_type12">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Scope</p>
					<ul style="display:block;text-align:justify;">
						Gas-fired cooking, heating, hot water, refrigeration, and laundry equipment are included, and generally used household and commercial products excluding industrial products.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Excluded scope</p>
					<ul style="display:block;text-align:justify;">
                    ⁘ Products used in industrial processes carried out in industrial sites<br><br>
                    ⁘ Products used in aircraft and railroads<br><br>
                    ⁘ Research purpose products for temporary use in the laboratory<br><br>
					</ul>
                
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">Conformity assessment procedure</p>
					<ul style="display:block;text-align:justify;">
						연In the case of products that are continuously produced, the manufacturer must evaluate the suitability by combining one of Modules C2, D, E, and F according to Module B-Production Type.
                        <br><br>
						
						<table border="1" cellspacing="0" cellpadding="0" width="100%">
                          <tr>
                            <td width="21%" rowspan="4"><p align="center">Module B<br>
                              (Production Type)<br>
                              +</p></td>
                            <td width="15%"><p align="center">Module C2</p></td>
                            <td width="62%"><p align="left">EU-Type Inspection + Formal conformity based on    internal production management and product inspection under supervision at    random cycles</p></td>
                          </tr>
                          <tr>
                            <td width="15%"><p align="center">Module D</p></td>
                            <td width="62%"><p align="left">EU-Type Inspection + Form conformity based on    quality assurance of the production process</p></td>
                          </tr>
                          <tr>
                            <td width="15%"><p align="center">Module E</p></td>
                            <td width="62%"><p align="left">EU-Type Inspection + Form conformity based on    product quality assurance</p></td>
                          </tr>
                          <tr>
                            <td width="15%"><p align="center">Module F</p></td>
                            <td width="62%"><p align="left">EU-Type Inspection + Form conformity based on    product verification</p></td>
                          </tr>
                        </table>
						<br>
						In the case of products produced in single units or in small quantities, the manufacturer can also be evaluated for conformity with Module G (Unit Verification).
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
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article>
  <!--+++++ /컨텐츠 09번째 Gas Applicance 컨텐츠 종료 +++++-->
      
      
       
 <article style="display:block;"><!--+++++ 컨텐츠 11 E-MARK (처음 활성화 컨텐츠에만 style="display:block") +++++-->	
  <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">E-MARK Certification </span> <br> Introduction of European Product Certification</h1>
		<h2 class="sub_txt">
            <span style="display:block;text-align:justify;color:dodgerblue;font-weight:blue;font-size:1.5rem">
              <p class="tit" style="text-align:left;color:dodgerblue;">E-Mark Certification Overview</p>
            </span></h2>
            <span style="margin:0 auto;display:inline-block;text-align:justify;font-size:1rem;">
                EU vehicle certification is a comprehensive conformity regulation of automobiles, including automobiles, related parts and electronic equipment, of the Economic Commission for Europe (ECE) and the     European Union (EU).<br>
                Companies wishing to sell automobiles and auto parts to the European Union market must obtain the E-mark certification, an approval scheme for the EU automotive sector, from the Ministry of Transport of the EU. Only automobiles or auto parts with E-mark certification can be exported and traded freely within the European Union.
            </span>
	</div>

	<div class="business_type13">
		<div class="business_info">
		    <div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;color:dodgerblue;">Applicable Items</p>
					<ul style="display:block;text-align:justify;">
                       In general, cars, trucks, buses, trailers and other road-driving vehicles (including vehicle-mounted ESA/parts) are now required to comply with UNECE Regulation 10 for electromagnetic compatibility. Accordingly, UNECE Regulation 10 for system EMC certified for type approval is marked with a capital “E” E-Mark.
					</ul>
					<br>
					<ul style="display:block;text-align:justify;">
						<span style="font-weight:bold;">Items subject to e-Mark:</span><br>
                        Vehicles and parts complying with EU directives: steering system, brakes, various lamps, heating systems, speedometers, helmets, child seats, exhaust pipes, anti-theft devices, tires, seat belts, connecting devices, automotive glass, cooling systems, storage protection, interior material of bus, horn, seat and headdress, etc. <br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					     <span style="display:block;text-align:center;">&#10057; &#10057; &#10057;</span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area"><br>
					<p class="tit" style="text-align:left;color:dodgerblue;">Applied Standard</p>
					<ul style="display:block;text-align:justify;">
                        UN-ECE Regulation 10 that replaced the ‘Automotive Electromagnetic Compatibility Directive’ 2004/104/EC (AEMCD) in November 2014. 
					</ul>
					
					<ul style="display:block;text-align:justify;">
						<span style="font-weight:bold;">Items subject to e-Mark:</span><br>
                       2007/46/EC: approval of motor vehicles and their trailers, and of systems, components and separate technical units intended for such vehicles <br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					     <span style="display:block;text-align:center;">&#10057; &#10057; &#10057;</span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		
			<div class="backImg">
				<div class="txt_area"><br>
					<p class="tit" style="text-align:left;color:dodgerblue;">Difference between E-Mark and e-Mark</p><br>
					<ul style="display:block;text-align:justify;">
						<span style="font-weight:bold;">E-Mark</span><br>
                        E-Mark is the UN mark for approved vehicles and vehicle parts sold to the EU, and is a certification for type approval of parts or systems of automobiles. <br>
                        The E-Mark means conformity to the world standard ECE Regulation.
					</ul>
					<br><br>
					<ul style="display:block;text-align:justify;">
						<span style="font-weight:bold;">e-Mark</span><br>
                        The e-Mark is an EU mark for approved vehicles and vehicle parts sold to the EU, and is a certification that includes type approval for all vehicles as well as parts and systems of automobiles. <br>
                        The e-Mark means compliance with the European Automotive EMC Directive, which is a mandatory European directive.
                        <br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					      <span style="display:block;text-align:center;">&#10057; &#10057; &#10057;</span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area"><br>
					<p class="tit" style="text-align:left;color:dodgerblue;">Certification Mark</p>
					<ul style="display:block;text-align:justify;">
						<span style="font-weight:bold;">E-Mark European Economic Commission (ECE, UN ministry) Certification, E-Mark</span><br><br>
                           <div class="container01"><!---e-mark 인증마크 로고 삽입--->
                        <img src="./images/E-Mark_logo.png" alt="E-Mark Certification Mark, E-Mark">
                        <span class="e-mark01">E-Mark Certification Mark</span>
                        </div>
                            ❖ The E-Mark is a regulation issued by the European Economic Commission.<br><br>
                            ❖ The E-Mark logo is a circular frame.<br><br>
                            ❖ The number is the EU country or state number that has been granted approval. If approved by one country/state, it is considered sufficient for all other member states.<br><br>
                            ❖ The country/state codes are as follows:<br><br>
                            <table border="1" cellspacing="0" cellpadding="0" width="842">
                              <tr>
                                <td width="119"><p align="left">E1—Germany</p></td>
                                <td width="83"><p align="left">E16—Norway</p></td>
                                <td width="140"><p align="left">E32—Latvia</p></td>
                                <td width="108"><p align="left">E46—Ukraine</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E2—France</p></td>
                                <td width="83"><p align="left">E17—Finland</p></td>
                                <td width="140"><p align="left">E33—</p></td>
                                <td width="108"><p align="left">E47—South Africa</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E3—Italy</p></td>
                                <td width="83"><p align="left">E18—Denmark</p></td>
                                <td width="140"><p align="left">E34—Bulgaria</p></td>
                                <td width="108"><p align="left">E48—New Zealand</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E4—Netherlands</p></td>
                                <td width="83"><p align="left">E19—Romania</p></td>
                                <td width="140"><p align="left">E35—</p></td>
                                <td width="108"><p align="left">E49—Cyprus</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E5—Sweden</p></td>
                                <td width="83"><p align="left">E20—Poland</p></td>
                                <td width="140"><p align="left">E36—Lithuania</p></td>
                                <td width="108"><p align="left">E50—Malta</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E6—Belgium</p></td>
                                <td width="83"><p align="left">E21—Portugal</p></td>
                                <td width="140"><p align="left">E37—Turkey</p></td>
                                <td width="108"><p align="left">E51—Korea</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E7—Hungary</p></td>
                                <td width="83"><p align="left">E22—Russia</p></td>
                                <td width="140"><p align="left">E38—</p></td>
                                <td width="108"><p align="left">E52—Malaysia</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E8—Czech Republic</p></td>
                                <td width="83"><p align="left">E23—Greece</p></td>
                                <td width="140"><p align="left">E39—Azerbaijan</p></td>
                                <td width="108"><p align="left">E53—Thailand</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E9—Spain</p></td>
                                <td width="83"><p align="left">E25—Croatia</p></td>
                                <td width="140"><p align="left">E40—Macedonia</p></td>
                                <td width="108"><p align="left">E54—</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E10—Yugoslavia</p></td>
                                <td width="83"><p align="left">E26—Slovenia</p></td>
                                <td width="140"><p align="left">E41—</p></td>
                                <td width="108"><p align="left">E55—</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E11—United Kingdom</p></td>
                                <td width="83"><p align="left">E27—Slovakia</p></td>
                                <td width="140"><p align="left">E42—European Community</p></td>
                                <td width="108"><p align="left">E56—Montenegro</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E12—Austria</p></td>
                                <td width="83"><p align="left">E28—Belarus</p></td>
                                <td width="140"><p align="left">E43—Japan</p></td>
                                <td width="108"><p align="left">E56—Tunisia</p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E13—Luxembourg</p></td>
                                <td width="83"><p align="left">E29—Estonia</p></td>
                                <td width="140"><p align="left">E44—</p></td>
                                <td width="108"><p align="left">　 </p></td>
                              </tr>
                              <tr>
                                <td width="119"><p align="left">E14—Switzerland</p></td>
                                <td width="83"><p align="left">E31—Bosnia</p></td>
                                <td width="140"><p align="left">E45—Australia</p></td>
                                <td width="108"><p align="left">　 </p></td>
                              </tr>
                            </table>
					</ul>
					
					<br><br>
					
					<ul style="display:block;text-align:justify;">
						<span style="font-weight:bold;">EU Certification (EC), e-Mark</span><br><br>
                        
                        <div class="container01"><!---e-mark 인증마크 로고 삽입--->
                           <img src="./images/e-Mark_logo2.png" alt="인증마크 이미지-EU 인증 (EC), e-Mark">
                           <span class="e-mark01" style="margin-top:-15%;width:100%;">EU(EC), e-Mark</span>
                        </div>
                            ❖ The e-Mark is a safety certification mark based on EU directives.<br><br>
                            ❖ The EU Commission requires Member States to apply it to automobiles, parts and systems.<br><br>
                            ❖ The e-Mark logo is a rectangular frame.<br><br>
                            ❖ The number is the EU country or state number that has been granted approval. If approved by one country/state, it is considered sufficient for all other member states.<br><br>
                            ❖ The country/state codes are as follows:<br><br>
                                <table border="1" cellspacing="0" cellpadding="0" width="842">
                                  <tr>
                                    <td width="113"><p align="left">e1 – Germany</p></td>
                                    <td width="162"><p align="left">e11 – United Kingdom</p></td>
                                    <td width="134"><p align="left">e24 – Ireland</p></td>
                                  </tr>
                                  <tr>
                                    <td width="113"><p align="left">e2 – France</p></td>
                                    <td width="162"><p align="left">e12 – Austria</p></td>
                                    <td width="134"><p align="left">e26 – Slovenia</p></td>
                                  </tr>
                                  <tr>
                                    <td width="113"><p align="left">e3 – Italy</p></td>
                                    <td width="162"><p align="left">e13 – Luxembourg</p></td>
                                    <td width="134"><p align="left">e27 – Slovakia</p></td>
                                  </tr>
                                  <tr>
                                    <td width="113"><p align="left">e4 – Netherlands</p></td>
                                    <td width="162"><p align="left">e17 – Finland</p></td>
                                    <td width="134"><p align="left">e29 – Estonia</p></td>
                                  </tr>
                                  <tr>
                                    <td width="113"><p align="left">e5 – Sweden</p></td>
                                    <td width="162"><p align="left">e18 – Denmark</p></td>
                                    <td width="134"><p align="left">e32 – Latvia</p></td>
                                  </tr>
                                  <tr>
                                    <td width="113"><p align="left">e6 – Belgium</p></td>
                                    <td width="162"><p align="left">e19 – Romania</p></td>
                                    <td width="134"><p align="left">e34 – Bulgaria</p></td>
                                  </tr>
                                  <tr>
                                    <td width="113"><p align="left">e7 – Hungary</p></td>
                                    <td width="162"><p align="left">e20 – Poland</p></td>
                                    <td width="134"><p align="left">e36 – Lithuania</p></td>
                                  </tr>
                                  <tr>
                                    <td width="113"><p align="left">e8 – Czech Republic</p></td>
                                    <td width="162"><p align="left">e21 – Portugal</p></td>
                                    <td width="134"><p align="left">e49 – South Cyprus</p></td>
                                  </tr>
                                  <tr>
                                    <td width="113"><p align="left">e9 – Spain</p></td>
                                    <td width="162"><p align="left">e23 – Greece</p></td>
                                    <td width="134"><p align="left">e50 – Malta</p></td>
                                  </tr>
                                </table>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					         <span style="display:block;text-align:center;">&#10057; &#10057; &#10057;</span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
	        <div class="backImg">
				<div class="txt_area"><br>
					<p class="tit" style="text-align:left;color:dodgerblue;">Test Standard</p>
					<ul style="display:block;text-align:justify;">
                    <!--<span style="font-weight:bold;">E-Mark</span><br>-->
                        Regulation 10 Concerning the approval of vehicles with regard to electromagnetic compatibility<br>
                         <table cellspacing="0" cellpadding="0">
                           <col width="176">
                           <col width="204">
                           <col width="206">
                           <tr>
                             <td width="176" align="center" bgcolor="#76EFE1"><strong>Testing Equipment</strong></td>
                             <td width="204" align="center" bgcolor="#76EFE1"><strong>Test Items </strong></td>
                             <td width="206" align="center" bgcolor="#76EFE1"><strong>Test Standard</strong></td>
                           </tr>
                           <tr>
                             <td rowspan="3" width="176">EMI Measurement    System </td>
                             <td width="204">Radiated    Emission</td>
                             <td rowspan="3" width="206">Regulation No.10, CISPR 25</td>
                           </tr>
                           <tr>
                             <td width="204">Conducted    Emission (Current)</td>
                           </tr>
                           <tr>
                             <td width="204">Conducted    Emission (Voltage)</td>
                           </tr>
                           <tr>
                             <td rowspan="2" width="176">EMS Test    System </td>
                             <td width="204">RI Test (ALSE)</td>
                             <td width="206">Regulation    No.10,ISO 11452-2</td>
                           </tr>
                           <tr>
                             <td width="204">BCI Test</td>
                             <td width="206">Regulation No.10,ISO 11452-4</td>
                           </tr>
                           <tr>
                             <td rowspan="2" width="176">Transient </td>
                             <td width="204">Transient    Emission</td>
                             <td width="206">Regulation    No.10, ISO 7637-2</td>
                           </tr>
                           <tr>
                             <td width="204">Transient    Immunity</td>
                             <td width="206">Regulation No.10, ISO 7637-2</td>
                           </tr>
                         </table>
                        
					</ul>

					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					    <span style="display:block;text-align:center;">&#10057; &#10057; &#10057;</span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
	
	
		
			<div class=backImg>
				<div class="txt_area">
					<p class="tit" style="text-align:left;color:dodgerblue;">Certification Process</p><br>
					<ul style="display:block;text-align:justify;">
					<span style="display:block;text-align:left;font-weight:200;padding:0 0 0 35px;">
					
                    <span style="font-weight:bold;">1. Application</span><br>
                        <li style="margin:0 3px 13px 20px;text-align:justify;"> Fill out and submit the application<br><br></li>
                    
                    <span style="font-weight:bold;">2. Documents & Samples</span><br>
                        <li style="margin:0 3px 13px 20px;text-align:justify;"> Preparation of technical documents and samples<br><br></li>
                    
                    <span style="font-weight:bold;">3. Conduct the Test</span><br>
                        <li style="margin:0 3px 13px 20px;text-align:justify;"> Conduct the sample test <br><br></li>
                    
                    <span style="font-weight:bold;">4. Conformity of Production</span><br>
                    <li style="margin:0 3px 13px 20px;text-align:justify;"> Conduct on-site inspection to evaluate the ability to produce the product according to the technical standards of the production plant<br>
                        *Manufacturers who have obtained ISO9000 and other quality system certificates issued by EU national certification bodies may be exempt from factory inspection.<br><br></li>
                    
                    <span style="font-weight:bold;">5. Test Report</span><br>
                        <li style="margin:0 3px 13px 20px;text-align:justify;"> Issuance of test report, submitting with other technical documents to the Ministry of Transport of European countries<br><br></li>
                    
                    <span style="font-weight:bold;">6. Certificate Issuance</span><br>
                        <li style="margin:0 3px 13px 20px;text-align:justify;"> Comprehensive review of the document review and the test results for the relevant guidelines and the on-site audit results for the manufacturing plant, and if passed, a certificate is issued by the European Ministry of Transport.<br><br></li>
                    
                    <span style="font-weight:bold;">7. Regular Factory Inspection</span><br>
                        <li style="margin:0 3px 13px 20px;text-align:justify;"> The issuing authority may track and inspect factory inspections of certified product manufacturers on a regular or irregular basis.<br><br></li>
                    *For factories that have obtained ISO9001, the factory inspection period may be shortened or exempted in some cases.<br>
                        </span>
 

					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					       <span style="display:block;text-align:center;">&#10057; &#10057; &#10057;</span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class=backImg>
				<div class="txt_area">
					<p class="tit" style="text-align:left;color:dodgerblue;">Preparation Item</p><br>
					<ul style="display:block;text-align:justify;">
                      Submitted documents must be written and submitted in English.<br><br>
                      <span style="display:block;text-align:left;font-weight:200;padding:0 0 0 35px;">
                          <span style="font-weight:bold;">1. Manufacturer-related information</span>
                          <li style="margin:0 3px 13px 20px;text-align:justify;"> - Manufacturer’s name</li>
                          <li style="margin:0 3px 13px 20px;text-align:justify;"> - Manufacturer's address</li>
                          <li style="margin:0 3px 13px 20px;text-align:justify;"> - Copy of Business Registration Certificate</li>

                          <span style="font-weight:bold;">2. Product-related information</span>
                          <li style="margin:0 3px 13px 20px;text-align:justify;"> - Product Manual/User Manual</li>
                          <li style="margin:0 3px 13px 20px;text-align:justify;"> - Product Technical Drawing</li>
                          <li style="margin:0 3px 13px 20px;text-align:justify;"> - Parts list</li>
                          <li style="margin:0 3px 13px 20px;text-align:justify;"> - Parts Layout Drawing</li>
                          <li style="margin:0 3px 13px 20px;text-align:justify;"> - Electric block diagram </li>   
                          <li style="margin:0 3px 13px 20px;text-align:justify;"> - Product photo</li>
                          <li style="margin:0 3px 13px 20px;text-align:justify;"> - Circuit Diagram</li>

                          <span style="font-weight:bold;">3. Manufacturing plant ISO 9001 or IATF 16949 certificate</span>

                        </span>         
                      
                      
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					         <span style="display:block;text-align:center;">&#10057; &#10057; &#10057;</span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class=backImg>
				<div class="txt_area">
					<p class="tit" style="text-align:left;color:dodgerblue;">IGC’s Competency</p>
					<ul style="display:block;text-align:justify;">
                        ⁙ IGC has up-to-date knowledge of a wide range of specific scope and legal requirements in major markets around the world, and provides the knowledge and services to support your entire global operation.<br><br>
                        ⁙ IGC provides professional and competitive services to customers in the automotive sector.<br><br>
                        ⁙ IGC provides E-Mark certification services in cooperation with Croatian transport ministry in Europe.<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					     <span style="display:block;text-align:center;">&#10057; &#10057; &#10057;</span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div><!-------/// class="business_type12" 종료----------->
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	       <section class="partner_type2">
             <h2 class="con_arrow">
	       		<p>Related Services from IGC</p>
	       	</h2>
	       	<div class="con_box">
	       		<ul>
	       			<li><p><em><strong>01</strong></em><span>System certification (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       			<li><p><em><strong>02</strong></em><span>Product certification (European CE certification, clinical evaluation, medical device registration [Eurasia, China, USA, Thailand, Taiwan])</span></p></li>
	       			<li><p><em><strong>03</strong></em><span>Certification of Auditor Qualifications</span></p></li>
	       			<li><p><em><strong>04</strong></em><span>Professional manpower training and education</span></p></li>
	       		</ul>
	       	</div>
         </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article><!--+++++ /컨텐츠 11번째 E-MARK 종료 +++++-->     
       
        
</div><!--+++ /20.05.07 탭컨텐츠 영역 +++-->
	
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>