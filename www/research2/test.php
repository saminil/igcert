<?
## 설문조사 프로그램입니다. 07.09.20 이창협 chang0301@nate.com ##
## 기존 설문조사에서 각 문항별로 정답을 저장하여 시험지형식의 설문으로 변경 하였습니다. ##
include "./config.php";

if(!$member[mb_id]){
	alert("테스트에 참여하실려면 먼저 회원로그인을 하셔야 됩니다.","./list.php");
	exit;
}

$sql="select Num from $bbscodeAnswer where Q_num=$Num and MemberID='$member[mb_id]'";
$result1=sql_query($sql);
$row1=sql_fetch_array($result1);
if($row1[Num]){
	alert("이미 테스트에 참여 하셨습니다","./list.php");
	exit;
}

$query="select * from $bbscode where Num=$Num";
$result=sql_query($query);
$row=sql_fetch_array($result);

$Title=stripslashes($row['Title']);				// 테스트 제목
$Question=explode("|",$row['Question']);	// 테스트 문항
$exam=explode("|",$row['Example']);				// 질문문항별로 각각의 보기를 나눔
?>

<script language="javascript">
<!--
function check(){
	if(confirm("작성된 시험지를 저장하시겠습니까?")){
		document.q_form.submit();
	}
}
//-->
</script>

<table border='0' width='700' cellpadding='0' cellspacing='0' align='right'>
<form name="q_form" method="post" action="test_ok.php">
<input type="hidden" name="QNum" value="<?=$row[Num]?>">
<input type="hidden" name="Q_Cnt" value="<?=$row[Q_Cnt]?>">
<input type="hidden" name="E_Cnt" value="<?=$row[E_Cnt]?>">
	<tr height='20'><td></td></tr>
	<tr>
		<td align='center'>
			<table width='650' cellpadding='0' cellspacing='0' border='0'>
				<tr>
					<td>테스트 제목 : <b><font color='#0000CC'><?=$Title?></font></b> (<?=$row['Q_Sdate']?> ~ <?=$row['Q_Edate']?>)</td>
				</tr>
				<tr height='20'><td></td></tr>

<?
					// 설문문항 갯수만큼 루프돌면서 출력
					for($i=0; $i<$row[Q_Cnt]; $i++){
						$bunho_q=$i+1;
?>
				<tr>
					<td>
						<table border='0' width='100%' cellpadding='0' cellspacing='0'>
							<tr><td><b><?=$bunho_q?>) &nbsp;<?=$Question[$i]?></b></td></tr>
<?							
						// 각 질문별로 보기항목수 만큼 루프돌면서 출력
						$example=explode("_",$exam[$i]);
						for($j=0; $j<$row[E_Cnt]; $j++){
							$bunho_e=$j+1;

							if($example[$j]){
?>
								<tr><td style='padding-left:15'><?=$bunho_e?>. <input type='checkbox' name='A[<?=$i?>][<?=$j?>]' value='Y'>&nbsp;<?=$example[$j]?></td></tr>
<?
							}
						}
?>
							</table>
						</td>
					</tr>
					<tr height='8'><td colspan='2'></td></tr>
					<tr height='1'><td colspan='2' bgcolor='#FF9900'></td></tr>
					<tr height='8'><td colspan='2'></td></tr>
<?
					}
?>
			</table>
		</td>
	</tr>

	<tr height='20'><td></td></tr>
	<tr>
		<td align='center'>
			<input type="button" value="작성완료" onClick="check()">&nbsp;&nbsp;
			<input type="button" value="목록보기" onClick="location.href='./list.php'">
		</td>
	</tr>
	<tr height='30'><td></td></tr>
</form>
</table>

<?
	include_once("../tail.php");
?>