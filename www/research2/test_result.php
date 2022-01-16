<?
## 설문조사 프로그램입니다. 07.09.20 이창협 chang0301@nate.com ##
## 기존 설문조사에서 각 문항별로 정답을 저장하여 시험지형식의 설문으로 변경 하였습니다. ##
$g4_path="..";
include "$g4_path/common.php";

$bbscode="Research2";
$bbscodeAnswer="Answer2";

// 테스트 응답 데이터
$Aquery="select * from $bbscodeAnswer where Num=".$Ano;
$Aresult=sql_query($Aquery);
$Arow=sql_fetch_array($Aresult);

// 테스트 데이터
$Qquery="select * from $bbscode where Num=".$Arow[Q_num];
$Qresult=sql_query($Qquery);
$Qrow=sql_fetch_array($Qresult);

$Q_Point=explode('|',$Qrow[Q_Point]);
$TestPoint = 0;
for($i=0; $i<$Qrow[Q_Cnt]; $i++){
	$TestPoint = $TestPoint + $Q_Point[$i];		// 테스트 총점
}
$RegDate = explode(' ',$Arow[RegDate]);		// 테스트 일자
$MemberAnswer = explode('|',$Arow[Answer]);	// 회원 답체크 데이터
$Title=stripslashes($Qrow['Title']);				// 설문 제목
$Question=explode("|",$Qrow['Question']);	// 질문 문항
$Exam=explode("|",$Qrow['Example']);		// 질문문항별로 각각의 보기를 나눔
$CAnswer=explode('|',$Qrow['CorrectAnswer']);	// 질문별 정답
?>
<html>
<head>
<title>테스트 결과</title>
<link rel="stylesheet" href="../style.css" type="text/css">
</head>

<body leftmargin='0' topmargin='10'>
<table border='0' width='630' cellpadding='0' cellspacing='0'>
	<tr>
		<td align='center'>
			<table width='620' cellpadding='0' cellspacing='0' border='0'>
				<tr>
					<td>테스트 결과 : <b><?=$Arow[MemberName]?> (<?=$Arow[MemberID]?>) 님</b></td>
				</tr>
				<tr><td height='10'></td></tr>
				<tr>
					<td>
						<table width='620' cellpadding='2' cellspacing='1' border='0' bgcolor='#EEEEEE'>
							<tr height='25'>
								<td width='60' align='center'>제 목</td>
								<td width='350' bgcolor='#FFFFFF' style='padding-left:10'><b><?=$Title?></b></td>
								<td width='100' align='center'>테스트일자</td>
								<td width='110' bgcolor='#FFFFFF' style='padding-left:10'><?=$RegDate[0]?></td>
							</tr>
							<tr height='25'>
								<td width='60' align='center'>점 수</td>
								<td width='560' bgcolor='#FFFFFF' style='padding-left:10' colspan='3'>
									<font color='#0000FF'><b><?=$Arow[Point]?>점</b></font> &nbsp;(만점 : <?=$TestPoint?>점)
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr height='10'><td></td></tr>
				<tr><td align='right'>※ 답으로 체크하신 보기는 파랑색으로 표시됩니다.</td></tr>
				<tr height='10'><td></td></tr>

				<tr>
					<td>
						<table border='0' width='620' cellpadding='2' cellspacing='1'>
				<?
					// 설문문항 갯수만큼 루프돌면서 입력
					for($i=0; $i<$Qrow[Q_Cnt]; $i++){
						$bunho_q=$i+1;
						
						$correctNo=1;
						$C_answer=explode("_",$CAnswer[$i]);	// 문항별 정답 출력
						for($c=0; $c<$Qrow[E_Cnt]; $c++){
							if($C_answer[$c]=='Y'){
								$CorrectAnswer[$i].=$correctNo.' ';
							}
							$correctNo++;
						}
?>
							<tr>
								<td>
									<table border='0' width='620' cellpadding='2' cellspacing='0'>
										<tr>
											<td><b><?=$bunho_q?>.</b> &nbsp;<?=$Question[$i]?> &nbsp; (<font color='red'>정답 : <?=$CorrectAnswer[$i]?></font>)</td>
										</tr>
<?

						// 각 질문별로 보기항목수 만큼 루프돌면서 출력
						$Example=explode('_',$Exam[$i]);
						$Manswer = explode('_',$MemberAnswer[$i]);
						for($j=0; $j<$Qrow[E_Cnt]; $j++){
							$bunho_e=$j+1;

							if($Example[$j]){
								if($Manswer[$j]=='Y')								// 회원 답체크
									$ExamList[$j]="<font color='#0000FF'><b>".$Example[$j]."</b></font>";
								else
									$ExamList[$j]=$Example[$j];
?>
										<tr>
											<td style='padding-left:15'>
												<?=$bunho_e?>) &nbsp;<?=$ExamList[$j]?>
											</td>
										</tr>
<?
							}
						}
?>
										<tr height='8'><td colspan='2'></td></tr>
										<tr height='1'><td colspan='2' bgcolor='#FF9900'></td></tr>
										<tr height='8'><td colspan='2'></td></tr>
									</table>
								</td>
							</tr>
<?
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
			<input type="button" value="창 닫기" onClick="window.close();">
		</td>
	</tr>
	<tr height='30'><td></td></tr>
</form>
</table>
</body>
</html>