<?
## �������� ���α׷��Դϴ�. 07.09.20 ��â�� chang0301@nate.com ##
## ���� �������翡�� �� ���׺��� ������ �����Ͽ� ������������ �������� ���� �Ͽ����ϴ�. ##
include "./config.php";

$sql="select Num from $bbscode where State='1'";
$row=sql_query($sql);
$total_count=mysql_num_rows($row);

$list_rows=10;		// ����Ʈ�� ����� ��ϼ�
$total_page  = ceil($total_count / $list_rows);  // ��ü ������ ���
if (!$page) { $page = 1; } // �������� ������ ù ������ (1 ������)
$from_record = ($page - 1) * $list_rows; // ���� ���� ����
?>

<script language="javascript">
<!--
function TestWrite(no){
	var memid=document.frm.memid.value;

	if(!memid){
		alert("�׽�Ʈ�� �����ϽǷ��� ���� ȸ���α����� �ϼž� �˴ϴ�.");
		return;
	}else{
		document.location.href='./test.php?Num='+no;
	}
}
//-->
</script>

<table border='0' width='700' cellpadding='0' cellspacing='0' align='right'>
<form name='frm' method='post'>
<input type='hidden' name='memid' value='<?=$member[mb_id]?>'>
	<tr height='15'><td></td></tr>
	<tr>
		<td>
			<table width='700' cellpadding='0' cellspacing='0' border='0'>
				<tr>
					<td colspan="5" height="1" bgcolor="#8CC1CC"></td>
				</tr>
				<tr height='27' bgcolor='#F6F6F6'> 
					<td align="center" width="50" style='font-weight:bold;color:#666666'>�� ȣ</td>
					<td align="center" width="290" style='font-weight:bold;color:#666666'>�� �� Ʈ �� ��</td>
					<td align="center" width="180" style='font-weight:bold;color:#666666'>�� �� Ʈ �Ⱓ</td>
					<td align="center" width="70" style='font-weight:bold;color:#666666'>�����ο�</td>
					<td align="center" width="110" style='font-weight:bold;color:#666666'>�� ��</td>
				</tr>
				<tr>
					<td colspan="5" height="1" bgcolor="#E4E4E4"></td>
				</tr>
<?
	$query="select Num, Title, Q_Sdate, Q_Edate, AnswerCnt from $bbscode where State='1' order by Num desc limit $from_record, $list_rows";
	$result=sql_query($query);

	if(!$result){
		echo "<tr height='35'><td align='center' colspan='9'>��ϵ� �����Ͱ� �����ϴ�</td></tr>";
	}else{
		$today=date("Y-m-d");

		for($i=1; $list=sql_fetch_array($result); $i++){
			$bunho=$total_count - ($from_record + $i - 1);	// ��� ��ȣ
			$Title=stripslashes($list[Title]);
			$Title=cut_str($Title, 60);

			$Aquery=sql_query("select Num from $bbscodeAnswer where Q_num='$list[Num]' and MemberID='$member[mb_id]'");
			$ARow=sql_fetch_array($Aquery);

			if($ARow[Num]){
				if($list[Q_Edate]>$today){
					$wbutton="<a href='#1' onClick=\"alert('����� �׽�Ʈ �����Ŀ� Ȯ�� �����մϴ�.');\"><font color='red'>(�׽�Ʈ�Ϸ�)</font></a>";
				}
				else{
					$wbutton="<a href=\"javascript:view_result('$ARow[Num]')\"><font color='red'>(�׽�Ʈ�Ϸ�)</font></a>";
				}
			}else{
				if($list[Q_Edate]<$today){
					$wbutton="<font color='#FF0000'>�׽�Ʈ����</font>";
				}
				else{
					$wbutton="<input type='button' value='�׽�Ʈ����' onClick=\"TestWrite('$list[Num]')\" class='button'>";
				}
			}
?>
				<tr height='25' onmouseout="this.style.backgroundColor='#FFFFFF'" onmouseover="this.style.backgroundColor='#F4EBE1'" bgcolor='#FFFFFF'>
					<td align='center'><?=$bunho?></td>
					<td style='padding-left:10'><?=$Title?></td>
					<td align='center'><?=$list[Q_Sdate]?> ~ <?=$list[Q_Edate]?></td>
					<td align='center'><?=$list[AnswerCnt]?></td>
					<td align='center'><?=$wbutton?></td>
				</tr>
				<tr height='1'><td colspan='5' background='../img/dot_line.gif' border='0'></td></tr>
<?
		}
	}
?>

			</table>
		</td>
	</tr>

	<tr height='20'><td></td></tr>

<!-- ������ -->
	<tr>
		<td width="100%" align="center" height="30" valign="bottom">
		<?
			$write_pages = get_paging(5, $page, $total_page, "./list.php?bbscode=$bscode&page=");

			$write_pages = str_replace("ó��", "<img src='./img/begin.gif' border='0' align='absmiddle' title='ó��'>", $write_pages);
			$write_pages = str_replace("����", "<img src='./img/prev.gif' border='0' align='absmiddle' title='����'>", $write_pages);
			$write_pages = str_replace("����", "<img src='./img/next.gif' border='0' align='absmiddle' title='����'>", $write_pages);
			$write_pages = str_replace("�ǳ�", "<img src='./img/end.gif' border='0' align='absmiddle' title='�ǳ�'>", $write_pages);
			$write_pages = preg_replace("/<span>([0-9]*)<\/span>/", "<b><font style=\"font-family:����; font-size:9pt; color:#797979\">$1</font></b>", $write_pages);
			$write_pages = preg_replace("/<b>([0-9]*)<\/b>/", "<b><font style=\"font-family:����; font-size:9pt; color:orange;\">$1</font></b>", $write_pages);

			echo $write_pages;
		?>
		</td>	
	</tr>
<!-- ������ -->
</form>
</table>

<script language='javascript'>
	function view_result(ano){
		window.open('../research2/test_result.php?Ano='+ano,'test_result','scrollbars=yes,resizable=yes,width=650,height=700,top=30,left=100');
	}		
</script>

<?
	include_once("../tail.php");
?>