<?
## �������� ���α׷��Դϴ�. 07.09.20 ��â�� chang0301@nate.com ##
## ���� �������翡�� �� ���׺��� ������ �����Ͽ� ������������ �������� ���� �Ͽ����ϴ�. ##
include "./config.php";

if(!$member[mb_id]){
	alert("�׽�Ʈ�� �����ϽǷ��� ���� ȸ���α����� �ϼž� �˴ϴ�.","./list.php");
	exit;
}

$sql="select Num from $bbscodeAnswer where Q_num=$Num and MemberID='$member[mb_id]'";
$result1=sql_query($sql);
$row1=sql_fetch_array($result1);
if($row1[Num]){
	alert("�̹� �׽�Ʈ�� ���� �ϼ̽��ϴ�","./list.php");
	exit;
}

$query="select * from $bbscode where Num=$Num";
$result=sql_query($query);
$row=sql_fetch_array($result);

$Title=stripslashes($row['Title']);				// �׽�Ʈ ����
$Question=explode("|",$row['Question']);	// �׽�Ʈ ����
$exam=explode("|",$row['Example']);				// �������׺��� ������ ���⸦ ����
?>

<script language="javascript">
<!--
function check(){
	if(confirm("�ۼ��� �������� �����Ͻðڽ��ϱ�?")){
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
					<td>�׽�Ʈ ���� : <b><font color='#0000CC'><?=$Title?></font></b> (<?=$row['Q_Sdate']?> ~ <?=$row['Q_Edate']?>)</td>
				</tr>
				<tr height='20'><td></td></tr>

<?
					// �������� ������ŭ �������鼭 ���
					for($i=0; $i<$row[Q_Cnt]; $i++){
						$bunho_q=$i+1;
?>
				<tr>
					<td>
						<table border='0' width='100%' cellpadding='0' cellspacing='0'>
							<tr><td><b><?=$bunho_q?>) &nbsp;<?=$Question[$i]?></b></td></tr>
<?							
						// �� �������� �����׸�� ��ŭ �������鼭 ���
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
			<input type="button" value="�ۼ��Ϸ�" onClick="check()">&nbsp;&nbsp;
			<input type="button" value="��Ϻ���" onClick="location.href='./list.php'">
		</td>
	</tr>
	<tr height='30'><td></td></tr>
</form>
</table>

<?
	include_once("../tail.php");
?>