<?
## �������� ���α׷��Դϴ�. 07.09.20 ��â�� chang0301@nate.com ##
## ���� �������翡�� �� ���׺��� ������ �����Ͽ� ������������ �������� ���� �Ͽ����ϴ�. ##
$g4_path="..";
include "$g4_path/common.php";

$bbscode="Research2";
$bbscodeAnswer="Answer2";

// �׽�Ʈ ���� ������
$Aquery="select * from $bbscodeAnswer where Num=".$Ano;
$Aresult=sql_query($Aquery);
$Arow=sql_fetch_array($Aresult);

// �׽�Ʈ ������
$Qquery="select * from $bbscode where Num=".$Arow[Q_num];
$Qresult=sql_query($Qquery);
$Qrow=sql_fetch_array($Qresult);

$Q_Point=explode('|',$Qrow[Q_Point]);
$TestPoint = 0;
for($i=0; $i<$Qrow[Q_Cnt]; $i++){
	$TestPoint = $TestPoint + $Q_Point[$i];		// �׽�Ʈ ����
}
$RegDate = explode(' ',$Arow[RegDate]);		// �׽�Ʈ ����
$MemberAnswer = explode('|',$Arow[Answer]);	// ȸ�� ��üũ ������
$Title=stripslashes($Qrow['Title']);				// ���� ����
$Question=explode("|",$Qrow['Question']);	// ���� ����
$Exam=explode("|",$Qrow['Example']);		// �������׺��� ������ ���⸦ ����
$CAnswer=explode('|',$Qrow['CorrectAnswer']);	// ������ ����
?>
<html>
<head>
<title>�׽�Ʈ ���</title>
<link rel="stylesheet" href="../style.css" type="text/css">
</head>

<body leftmargin='0' topmargin='10'>
<table border='0' width='630' cellpadding='0' cellspacing='0'>
	<tr>
		<td align='center'>
			<table width='620' cellpadding='0' cellspacing='0' border='0'>
				<tr>
					<td>�׽�Ʈ ��� : <b><?=$Arow[MemberName]?> (<?=$Arow[MemberID]?>) ��</b></td>
				</tr>
				<tr><td height='10'></td></tr>
				<tr>
					<td>
						<table width='620' cellpadding='2' cellspacing='1' border='0' bgcolor='#EEEEEE'>
							<tr height='25'>
								<td width='60' align='center'>�� ��</td>
								<td width='350' bgcolor='#FFFFFF' style='padding-left:10'><b><?=$Title?></b></td>
								<td width='100' align='center'>�׽�Ʈ����</td>
								<td width='110' bgcolor='#FFFFFF' style='padding-left:10'><?=$RegDate[0]?></td>
							</tr>
							<tr height='25'>
								<td width='60' align='center'>�� ��</td>
								<td width='560' bgcolor='#FFFFFF' style='padding-left:10' colspan='3'>
									<font color='#0000FF'><b><?=$Arow[Point]?>��</b></font> &nbsp;(���� : <?=$TestPoint?>��)
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr height='10'><td></td></tr>
				<tr><td align='right'>�� ������ üũ�Ͻ� ����� �Ķ������� ǥ�õ˴ϴ�.</td></tr>
				<tr height='10'><td></td></tr>

				<tr>
					<td>
						<table border='0' width='620' cellpadding='2' cellspacing='1'>
				<?
					// �������� ������ŭ �������鼭 �Է�
					for($i=0; $i<$Qrow[Q_Cnt]; $i++){
						$bunho_q=$i+1;
						
						$correctNo=1;
						$C_answer=explode("_",$CAnswer[$i]);	// ���׺� ���� ���
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
											<td><b><?=$bunho_q?>.</b> &nbsp;<?=$Question[$i]?> &nbsp; (<font color='red'>���� : <?=$CorrectAnswer[$i]?></font>)</td>
										</tr>
<?

						// �� �������� �����׸�� ��ŭ �������鼭 ���
						$Example=explode('_',$Exam[$i]);
						$Manswer = explode('_',$MemberAnswer[$i]);
						for($j=0; $j<$Qrow[E_Cnt]; $j++){
							$bunho_e=$j+1;

							if($Example[$j]){
								if($Manswer[$j]=='Y')								// ȸ�� ��üũ
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
			<input type="button" value="â �ݱ�" onClick="window.close();">
		</td>
	</tr>
	<tr height='30'><td></td></tr>
</form>
</table>
</body>
</html>