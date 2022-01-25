<div id="snb" class="left_snb">
<?php
	################################################################################################
	##### 관리자 메뉴설정을 아래와 같이 한다고 가정하에 왼쪽 메뉴 설정  (bo_table 기준으로 작업)
	################################################################################################
	##### 게시판이 아닐때 : /theme/a01/sub01/sub01.php
	##### 게시판 일때 : /bbs/board.php?bo_table=product01
	################################################################################################

	// 게시판이 아니고 co_id 값이 없을 때
	if($bo_table == "" && $co_id == "") {
		$url = preg_replace('/(qawrite\.php|qaview\.php)/i', 'qalist.php', $_SERVER['SCRIPT_NAME']); // 일대일상대 적용
	// 게시판일때
	}else{
		$base_url = preg_replace('/write\.php/i', 'board.php', $_SERVER['SCRIPT_NAME']);
		// 인터넷 주소창에 "&" 없는 경우 - 글목록/글등록/글수정
		if(strpos($_SERVER['QUERY_STRING'], "&") === false) {
    		$url = $base_url."?".$_SERVER['QUERY_STRING'];
		// 인터넷 주소창에 "&" 있는 경우 - 글보기, 글검색
		}else{
			$query_string = preg_replace('/(w=u&)/i', '', $_SERVER['QUERY_STRING']);
			$url = $base_url."?".substr($query_string, 0, strpos($query_string, "&"));
		}
	}

    $sql = " select * from {$g5['menu_table']} where length(me_code) = '4' and me_link like '%".$url."%' and me_use = '1' order by me_order, me_id ";
	$query = sql_query($sql, false) ;
	$total  = sql_num_rows($query) ;
	$list = array() ;
	if($total > 0) {
		$row = sql_fetch_array($query);
		$keyword =  $row['me_code'] ;
		if(strlen($keyword) >= 2) {
			$filter_keyword = substr($keyword, 0, 2);
			$sql = " select * from {$g5['menu_table']} where me_code like '{$filter_keyword}%' and me_use = '1' order by me_order, me_code ";
			$query = sql_query($sql, false);
			$num = sql_num_rows($query);
			for($i=0; $i < $num;$i++) {
				$list[$i] = sql_fetch_array($query);
			}
		}
	}	
	
	// 메뉴 자체가 있을 경우
    if (count($list) > 0) {		
?>
    <?php for($i=0;$i<count($list);$i++) { $class = ""; if(strpos($list[$i]['me_link'], $url) !== false) $class = " class=\"on\"";
        if ($i == 0) { ?>
    <h2><?php echo $list[$i]['me_name']?></h2>
	<ul>
    <?php } else { ?>
    	<li <?php echo $class?>><a href="<?php echo $list[$i]['me_link']?>" target="_<?php echo $list[$i]['me_target']?>"><?php echo $list[$i]['me_name']?></a></li>
    <?php } } ?>
	</ul>
<? 
	} else { 
		/////////////////////////////////////////////////////////////////////////////
		// 사용자 메뉴 및 페이지 생성 20.05.06 islro
		/////////////////////////////////////////////////////////////////////////////
		$page_block_arr = array("manage","medical","edu1","product","aduits","global");		// 페이지 폴더 블럭 설정
		for($b=0; $b < count($page_block_arr); $b++) {
			$page_key = $page_block_arr[$b] ;
			if(preg_match("/".$page_key."\/(igc_)/i", $_SERVER["PHP_SELF"])) { // 페이지 경로로 페이지 블럭 설정
				// 페이지 블럭별 왼쪽 메뉴 세팅
				$pages = array();
				if($page_key == "manage"){
					$page_folder = "/igc_eng/theme/rt_igcert/manage/" ; // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("System Certification"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("Quality", $page_folder."igc_006_ISO9001.php", "_self"); // 왼쪽 메뉴 1
					$pages[2][$page_key] = array("Environment", $page_folder."igc_007_ISO14001.php", "_self"); // 왼쪽 메뉴 2
					$pages[3][$page_key] = array("Health & Safety", $page_folder."igc_008_OHSAS18001.php", "_self"); // 왼쪽 메뉴 3
					$pages[4][$page_key] = array("Medical device", $page_folder."igc_010_ISO13485.php", "_self"); 	// 왼쪽 메뉴 4
					$pages[5][$page_key] = array("Food", $page_folder."igc_014_ISO22000.php", "_self"); // 왼쪽 메뉴 5
					$pages[6][$page_key] = array("Energy", $page_folder."igc_018_ISO50001.php", "_self"); // 왼쪽 메뉴 6
					$pages[7][$page_key] = array("Information Security", $page_folder."igc_019_ISO27001.php", "_self"); // 왼쪽 메뉴 7
					$pages[8][$page_key] = array("Anti-Bribery", $page_folder."igc_021ISO37001.php", "_self"); // 왼쪽 메뉴 8
					$pages[9][$page_key] = array("Education", $page_folder."igc_022_ISO21001.php", "_self"); // 왼쪽 메뉴 9
					$pages[10][$page_key] = array("Business Continuity", $page_folder."igc_023_ISO22301.php", "_self"); // 왼쪽 메뉴 10
					$pages[11][$page_key] = array("Cosmetic", $page_folder."igc_024_ISO22716.php", "_self"); // 왼쪽 메뉴 11
					$pages[12][$page_key] = array("Customer Satisfaction", $page_folder."igc_025_ISO10002.php", "_self"); // 왼쪽 메뉴 12
					$pages[13][$page_key] = array("Social Accountability", $page_folder."igc_026_SA8000.php", "_self"); // 왼쪽 메뉴 13
				}
				if($page_key == "medical"){
					$page_folder = "/igc_eng/theme/rt_igcert/medical/" ; // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("Testing"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("Electric electron", $page_folder."igc_026-1.php", "_self");	 // 왼쪽 메뉴 1
					$pages[2][$page_key] = array("Machinary", $page_folder."igc_027-2.php", "_self"); // 왼쪽 메뉴 2
					$pages[3][$page_key] = array("Medical Device", $page_folder."igc_028-3.php", "_self");	 // 왼쪽 메뉴 3
					$pages[4][$page_key] = array("Chemical Analysis", $page_folder."igc_029.php", "_self"); // 왼쪽 메뉴 4
					$pages[5][$page_key] = array("Biological Test", $page_folder."igc_030-4.php", "_self");	// 왼쪽 메뉴 5
					$pages[6][$page_key] = array("Construction Material", $page_folder."igc_036.php", "_self"); // 왼쪽 메뉴 6
				}
				if($page_key == "edu1"){
					$page_folder = "/igc_eng/theme/rt_igcert/edu1/" ; // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("Education"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("Quality", $page_folder."igc_033_ISO9001.php", "_self"); // 왼쪽 메뉴 1
                    $pages[2][$page_key] = array("Environment", $page_folder."igc_034_ISO14001.php", "_self"); // 왼쪽 메뉴 2
                    $pages[3][$page_key] = array("Health & Safety", $page_folder."igc_040-14_OHSAS18001.php", "_self");  // 왼쪽 메뉴 3
                    $pages[4][$page_key] = array("Medical device", $page_folder."igc_035_ISO13485.php", "_self"); // 왼쪽 메뉴 4
                    $pages[5][$page_key] = array("Food", $page_folder."igc_036_ISO22000.php", "_self");	// 왼쪽 메뉴 5
                    $pages[6][$page_key] = array("Information Security", $page_folder."igc_067_ISO-ICE20000.php", "_self"); // 왼쪽 메뉴 6
                    $pages[7][$page_key] = array("Risk Management", $page_folder."igc_052_ISO31000.php", "_self"); // 왼쪽 메뉴 7
                    $pages[8][$page_key] = array("Transportation, Communication and Energy", $page_folder."igc_056_ISO-TS29001.php", "_self");	 // 왼쪽 메뉴 8
                    $pages[9][$page_key] = array("Continuity & Resilience ", $page_folder."igc_059_ISO28000.php", "_self"); // 왼쪽 메뉴 9
                    $pages[10][$page_key] = array("Business Management", $page_folder."igc_048_ISO13053.php", "_self"); // 왼쪽 메뉴 10
                    $pages[11][$page_key] = array("Social Accountability & Anti-Bribery", $page_folder."igc_046_ISO26000.php", "_self"); // 왼쪽 메뉴 11
                    $pages[12][$page_key] = array("Test and Calibration", $page_folder."igc_049_ISO-IEC17025.php", "_self"); // 왼쪽 메뉴 12
					//$pages[14][$page_key] = array("광고/홍보", $page_folder."#", "_self"); // 왼쪽 메뉴 14
				}
				if($page_key == "product"){
					$page_folder = "/igc_eng/theme/rt_igcert/product/" ; // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("Product Certification"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("Europe Product Certification", $page_folder."igc_069_CEMDD.php", "_self"); // 왼쪽 메뉴 1
					$pages[2][$page_key] = array("Eurasia Product Certification", $page_folder."igc_079_EAC-Certification.php", "_self"); // 왼쪽 메뉴 2
					$pages[3][$page_key] = array("Russia Product Certification", $page_folder."igc_084_GOST-R.php", "_self"); // 왼쪽 메뉴 3
					$pages[4][$page_key] = array("America Product Certification", $page_folder."igc_086_FDA.php", "_self"); // 왼쪽 메뉴 4
					$pages[5][$page_key] = array("China  Product  Certification", $page_folder."igc_093_CFDA.php", "_self");	 // 왼쪽 메뉴 5
					$pages[6][$page_key] = array("Southeast Product Certification", $page_folder."igc_095_01.php", "_self"); 	// 왼쪽 메뉴 6
					$pages[7][$page_key] = array("Vegan Certification", $page_folder."igc_097_VeganSociety.php", "_self");	 // 왼쪽 메뉴 7
					$pages[8][$page_key] = array("HALAL Certification", $page_folder."igc_101_HALAL.php", "_self"); // 왼쪽 메뉴 8
					$pages[9][$page_key] = array("Cosmetic Certification", $page_folder."igc_102_EWG.php", "_self");	 // 왼쪽 메뉴 9
					$pages[10][$page_key] = array("KC Certification", $page_folder."igc_078_kc.php", "_self");	 // 왼쪽 메뉴 9
				}
				if($page_key == "aduits"){
					$page_folder = "/igc_eng/theme/rt_igcert/aduits/" ;	 // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("Auditor Certification"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("Part 1", $page_folder."igc_104_ISO9001.php", "_self"); // 왼쪽 메뉴 1
					$pages[2][$page_key] = array("Part 2", $page_folder."igc_108_ISOIEC22000-1.php", "_self"); // 왼쪽 메뉴 2
					$pages[3][$page_key] = array("Part 3", $page_folder."igc_112_ISO22000.php", "_self"); // 왼쪽 메뉴 3
				}
				if($page_key == "global"){
					$page_folder = "/igc_eng/theme/rt_igcert/global/" ;	 // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("Training Institution"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("Overview", $page_folder."igc_116_012.php", "_self"); // 왼쪽 메뉴 1
					$pages[2][$page_key] = array("Procedure of Training Institute Designation", $page_folder."igc_117_01.php", "_self"); // 왼쪽 메뉴 2
					$pages[3][$page_key] = array("Training Institute Test Supervisor", $page_folder."igc_118_01.php", "_self"); // 왼쪽 메뉴 3
				}
				for($i=0; $i<count($pages); $i++) { 				
					$menu_name = $pages[$i][$page_key][0] ;
					$menu_link = $pages[$i][$page_key][1] ;
					$menu_target = $pages[$i][$page_key][2] ;
					$class = ""; 
					if(strpos($menu_link, basename($_SERVER["PHP_SELF"])) !== false) $class = " class=\"on\"";
					if ($i == 0) {
						echo "<h2>".$menu_name."</h2>";
						echo "<ul>" ;
					} else {
						echo "<li ".$class."><a href='".$menu_link."' target='".$menu_target."'>".$menu_name."</a></li>";
					} 
				}
				echo "</ul>" ;
			}
		}
		/////////////////////////////////////////////////////////////////////////////
	}
?>
</div>

<!----------서브페이지 좌측 CS 시작------->

<div class="left_cs">
    
	<h2>Contact Us</h2>
	<p class="tel">Tel. +82 2 6749 0701</p>
	<p class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> AM 9:00 ~ PM 6:00</p>
	<p class="info">Saturday,Sunday,Holiday :<br>Days Off</p>
    
	<dl>
		<dt><i class="fa fa-fax" aria-hidden="true"></i></dt>
		<dd>02.6749.0711</dd>
		<dt><i class="fa fa-envelope-o" aria-hidden="true"></i></dt>
		<dd style="margin-bottom:40px;">info@igcert.org</dd>
	</dl>
	
<!----------------
	<ul class="banner">
		<li><a href="/bbs/board.php?bo_table=qa"><i class="fa fa-comments-o" aria-hidden="true"></i> 묻고답하기</a></li>
		<li><a href="/bbs/qalist.php"><i class="fa fa-user-o" aria-hidden="true"></i> 1:1상담</a></li>
	</ul>
--------------->

</div>