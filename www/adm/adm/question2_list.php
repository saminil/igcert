<?
## �������� ���α׷��Դϴ�. 07.09.20 ��â�� chang0301@nate.com ##
## ���� �������翡�� �� ���׺��� ������ �����Ͽ� ������������ �������� ���� �Ͽ����ϴ�. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "�������� ����(v2.0)";
include_once("./admin.head.php");

$bbscode="Research2";
$ndate=date("Y-m-d");

$sql="select num from $bbscode";
$row=sql_query($sql);
$total_count=mysql_num_rows($row);

$list_rows=15;		// ����Ʈ�� ����� ��ϼ�
$total_page  = ceil($total_count / $list_rows);  // ��ü ������ ���
if (!$page) { $page = 1; } // �������� ������ ù ������ (1 ������)
$from_record = ($page - 1) * $list_rows; // ���� ���� ����
?>

<script language="javascript">
<!--
function q_del(no){
	if(confirm("�������� �����ͱ��� ��� �����˴ϴ�.\n\n���� �����Ͻðڽ��ϱ�?")){
		document.location.href="./question2_update.php?type=delete&num=" + no;
	}
}
//-->
</script>

<table border='0' width='100%' cellpadding='0' cellspacing='0'>
	<tr height='10'><td></td></tr>
	<tr><td><b>�������� ����Ʈ</b> &nbsp;(��������� ���÷��� ������ ��������) - v2.0 (������ �������� �� ���׿� ������ �����ϰ� ������ üũ�ϰ� �˴ϴ�.)</td></tr>
	<tr height='10'><td></td></tr>

	<tr>
		<td align="center">
			<table width='98%' cellpadding='0' cellspacing='0' border='0'>
				<tr height='25'>
					<td align="center" width="5%" bgcolor='#E7EFF1'>����</td>
					<td align="center" width="26%" bgcolor='#E7EFF1'>��������</td>
					<td align="center" width="8%" bgcolor='#E7EFF1'>������</td>
					<td align="center" width="12%" bgcolor='#E7EFF1'>����������</td>
					<td align="center" width="12%" bgcolor='#E7EFF1'>����������</td>
					<td align="center" width="8%" bgcolor='#E7EFF1'>�����</td>
					<td align="center" width="11%" bgcolor='#E7EFF1'>�����</td>
					<td align="center" width="8%" bgcolor='#E7EFF1'>�� ��</td>
					<td align="center" width="10%" bgcolor='#E7EFF1'>����/����</td>
				</tr>
				<tr height='2'><td colspan='9' bgcolor='#333300'></td></tr>
				<tr height='3'><td colspan='9'></td></tr>
<?
	$query="select Num, Title, Q_Cnt, Q_Sdate, Q_Edate, AnswerCnt, RegDate, State from $bbscode order by Num desc limit $from_record, $list_rows";
	$result=sql_query($query);

	if(!$result){
		echo "<tr height='35'><td align='center' colspan='9'>��ϵ� �����Ͱ� �����ϴ�</td></tr>";
	}else{
		for($i=1; $list=sql_fetch_array($result); $i++){
			$bunho=$total_count - ($from_record + $i - 1);	// ��� ��ȣ
			$Title=stripslashes($list[Title]);
			$Title=cut_str($Title, 60);

			if($list[State]=='1' && $list[Q_Edate]>=$ndate)
				$state="<font color='blue'>������</font>";
			else if($list[State]=='1' && $list[Q_Edate]<$ndate)
				$state="<font color='red'>��������</font>";
			else
				$state="<font color='red'>�̻��</font>";
			$RegDate=explode(" ",$list[RegDate]);
			
			if($i%2==0)
				$bg="bgcolor='#F1F1F1'";
			else
				$bg="bgcolor='#FFFFFF'";

			echo "
				<tr height='25' $bg>
					<td align='center'>$bunho</td>
					<td align='center'><a href='question2_result.php?bbscode=$bbscode&Num=$list[Num]' onFocus='blur()'>$Title</a></td>
					<td align='center'>$list[Q_Cnt]</td>
					<td align='center'>$list[Q_Sdate]</td>
					<td align='center'>$list[Q_Edate]</td>
					<td align='center'>$list[AnswerCnt]</td>
					<td align='center'>$RegDate[0]</td>
					<td align='center'>$state</td>
					<td align='center'>
						<a href='question2_modify1.php?bbscode=$bbscode&Qno=$list[Num]' onFocus='blur()'><img src='./img/icon_modify.gif' border='0'></a>
						&nbsp;&nbsp;
						<a href=\"javascript:q_del('$list[Num]')\" onFocus='blur()'><img src='./img/icon_delete.gif' border='0'></a>
					</td>
				</tr>
				";
		}
	}
?>

			</table>
		</td>
	</tr>
</table>

<?
include_once("./admin.tail.php");
?>
