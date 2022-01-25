<?
## 설문조사 프로그램입니다. 07.09.20 이창협 chang0301@nate.com ##
## 기존 설문조사에서 각 문항별로 정답을 저장하여 시험지형식의 설문으로 변경 하였습니다. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "설문조사 관리";
include_once("./admin.head.php");

$query="select Num, Title, Q_Cnt, Q_Sdate, Q_Edate, Q_Point from Research2 where Num=$Num";
$result=sql_query($query);
$row=sql_fetch_array($result);

$Title=stripslashes($row['Title']);				// 설문 제목
$Q_Point=explode('|',$row[Q_Point]);
$TestPoint = 0;

for($i=0; $i<$row[Q_Cnt]; $i++){
	$TestPoint = $TestPoint + $Q_Point[$i];
}

// 응답데이터 출력
if($orderItem && $orderType){
	$order = "order by $orderItem $orderType";
}
$query2="select Num,MemberID, MemberName, RegDate, Point from Answer2 where Q_num=$Num $order";
$result2=sql_query($query2);
$total=mysql_num_rows($result2);
?>

<table border='0' width='100%' cellpadding='0' cellspacing='0'>
	<tr>
		<td align='center'>
			<table width='95%' cellpadding='0' cellspacing='0' border='0'>
				<tr>
					<td align='center'>테스트 결과 : <b><font color='#0000CC' size='3pt'><?=$Title?></font></b> [만점 : <?=$TestPoint?>점]</td>
				</tr>
				<tr height='6'><td></td></tr>
				<tr>
					<td align='right'>
						기 간 : <?=$row['Q_Sdate']?> ~ <?=$row['Q_Edate']?>&nbsp;&nbsp;(전체설문참여자 : <?=$total?>명)
					</td>
				</tr>
				<tr height='20'><td></td></tr>

				<tr>
					<td align='center'>
						<table border='0' cellpadding='2' cellspacing='1' width='80%' bgcolor='#EEEEEE'>
							<tr height='25'>
								<td width='10%' class='title' align='center'>번 호</td>
								<td width='20%' class='title' align='center'>아이디</td>
								<td width='15%' class='title' align='center'>성 명</td>
								<td width='15%' class='title' align='center'>점 수
 <a href="javascript:Order('Point','desc')"><font color='#FF0000'>↑</font></a><a href="javascript:Order('Point','asc')"><font color='#3300FF'>↓</font></a>
								</td>
								<td width='25%' class='title' align='center'>테스트일자
 <a href="javascript:Order('RegDate','desc')"><font color='#FF0000'>↑</font></a><a href="javascript:Order('RegDate','asc')"><font color='#3300FF'>↓</font></a>
								</td>
								<td width='15%' class='title' align='center'>상세보기</td>
							</tr>
				<?
					$bunho=1;
					for($k=0; $AnswerRow=sql_fetch_array($result2); $k++){
?>
							<tr height='25'>
								<td align='center' bgcolor='#FFFFFF'><?=$bunho?> </td>
								<td align='center' bgcolor='#FFFFFF'><?=$AnswerRow[MemberID]?> </td>
								<td align='center' bgcolor='#FFFFFF'><?=$AnswerRow[MemberName]?> </td>
								<td align='center' bgcolor='#FFFFFF'><?=$AnswerRow[Point]?> 점 </td>
								<td align='center' bgcolor='#FFFFFF'><?=$AnswerRow[RegDate]?> </td>
								<td align='center' bgcolor='#FFFFFF'><a href="javascript:view_result('<?=$AnswerRow[Num]?>')">상세보기 </a></td>
							</tr>
<?
						$bunho++;
					}

?>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr height='20'><td></td></tr>
	<tr>
		<td align='center'>
			<input type="button" value="목록보기" onClick="location.href='./question2_list.php'">
		</td>
	</tr>
	<tr height='30'><td></td></tr>
</table>

<script language='javascript'>
	function view_result(ano){
		window.open('../research2/test_result.php?Ano='+ano,'test_result','scrollbars=yes,resizable=yes,width=650,height=700,top=30,left=100');
	}		

	function Order(val1,val2){
		location.href='./question2_result.php?Num=<?=$Num?>&orderItem='+val1+'&orderType='+val2;
	}
</script>

<?
include_once("./admin.tail.php");
?>
