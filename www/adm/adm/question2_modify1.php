<?
## �������� ���α׷��Դϴ�. 07.09.20 ��â�� chang0301@nate.com ##
## ���� �������翡�� �� ���׺��� ������ �����Ͽ� ������������ �������� ���� �Ͽ����ϴ�. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "�������� ����";
include_once("./admin.head.php");

$query="select Title, Q_Sdate, Q_Edate, State from $bbscode where Num=$Qno";
$result=sql_query($query);
$row=sql_fetch_array($result);

$Title=stripslashes($row['Title']);
$sdate=explode("-",$row['Q_Sdate']);
$edate=explode("-",$row['Q_Edate']);
?>

<script language="javascript">
<!--
function check(){
	var frm=document.q_form;

	if(frm.Title.value==''){
		alert("�������� ������ �Է����ּ���");
		frm.Title.focus();
		return;
	}

	frm.submit();
}
//-->
</script>

<table border='0' width='100%' cellpadding='0' cellspacing='0'>
<form name="q_form" method="post" action="question2_update.php">
<input type="hidden" name="type" value="modify1">
<input type="hidden" name="bbscode" value="<?=$bbscode?>">
<input type="hidden" name="num" value="<?=$Qno?>">

	<tr height='40'><td></td></tr>
	<tr>
		<td style="padding-left:100">
			<table width='400' cellpadding='0' cellspacing='0' border='0'>
				<tr height="30">
					<td>�������� �⺻ ��������</td>
					<td align='right'>
					<?
						if($mod=='type2'){
							echo "<input type='button' value='�󼼳��� �����ϱ�' onClick=\"location.href='./question2_modify2.php?bbscode=$bbscode&num=$Qno'\">";
						}
					?>
				</tr>
				<tr height='10'><td colspan="2"></td></tr>
				<tr height="30">
					<td align='center'>�� ��&nbsp; �� �� : </td><td><input type="text" name="Title" size="50" class="ed" value="<?=$Title?>"></td>
				</tr>

				<tr height="30">
					<td align='center'>���� ������ : </td>
					<td>
						<input type="text" name="s_year" value="<?=$sdate[0]?>" size="4" class="ed" maxlength="4"> ��&nbsp;

						<select name="s_month">
							<option value="01" <?if($sdate[1]=='01'){?>selected<?}?>>1��</option>
							<option value="02" <?if($sdate[1]=='02'){?>selected<?}?>>2��</option>
							<option value="03" <?if($sdate[1]=='03'){?>selected<?}?>>3��</option>
							<option value="04" <?if($sdate[1]=='04'){?>selected<?}?>>4��</option>
							<option value="05" <?if($sdate[1]=='05'){?>selected<?}?>>5��</option>
							<option value="06" <?if($sdate[1]=='06'){?>selected<?}?>>6��</option>
							<option value="07" <?if($sdate[1]=='07'){?>selected<?}?>>7��</option>
							<option value="08" <?if($sdate[1]=='08'){?>selected<?}?>>8��</option>
							<option value="09" <?if($sdate[1]=='09'){?>selected<?}?>>9��</option>
							<option value="10" <?if($sdate[1]=='10'){?>selected<?}?>>10��</option>
							<option value="11" <?if($sdate[1]=='11'){?>selected<?}?>>11��</option>
							<option value="12" <?if($sdate[1]=='12'){?>selected<?}?>>12��</option>
						</select> &nbsp;

						<select name="s_day">
							<option value="01" <?if($sdate[2]=='01'){?>selected<?}?>>1��</option>
							<option value="02" <?if($sdate[2]=='02'){?>selected<?}?>>2��</option>
							<option value="03" <?if($sdate[2]=='03'){?>selected<?}?>>3��</option>
							<option value="04" <?if($sdate[2]=='04'){?>selected<?}?>>4��</option>
							<option value="05" <?if($sdate[2]=='05'){?>selected<?}?>>5��</option>
							<option value="06" <?if($sdate[2]=='06'){?>selected<?}?>>6��</option>
							<option value="07" <?if($sdate[2]=='07'){?>selected<?}?>>7��</option>
							<option value="08" <?if($sdate[2]=='08'){?>selected<?}?>>8��</option>
							<option value="09" <?if($sdate[2]=='09'){?>selected<?}?>>9��</option>
							<option value="10" <?if($sdate[2]=='10'){?>selected<?}?>>10��</option>
							<option value="11" <?if($sdate[2]=='11'){?>selected<?}?>>11��</option>
							<option value="12" <?if($sdate[2]=='12'){?>selected<?}?>>12��</option>
							<option value="13" <?if($sdate[2]=='13'){?>selected<?}?>>13��</option>
							<option value="14" <?if($sdate[2]=='14'){?>selected<?}?>>14��</option>
							<option value="15" <?if($sdate[2]=='15'){?>selected<?}?>>15��</option>
							<option value="16" <?if($sdate[2]=='16'){?>selected<?}?>>16��</option>
							<option value="17" <?if($sdate[2]=='17'){?>selected<?}?>>17��</option>
							<option value="18" <?if($sdate[2]=='18'){?>selected<?}?>>18��</option>
							<option value="19" <?if($sdate[2]=='19'){?>selected<?}?>>19��</option>
							<option value="20" <?if($sdate[2]=='20'){?>selected<?}?>>20��</option>
							<option value="21" <?if($sdate[2]=='21'){?>selected<?}?>>21��</option>
							<option value="22" <?if($sdate[2]=='22'){?>selected<?}?>>22��</option>
							<option value="23" <?if($sdate[2]=='23'){?>selected<?}?>>23��</option>
							<option value="24" <?if($sdate[2]=='24'){?>selected<?}?>>24��</option>
							<option value="25" <?if($sdate[2]=='25'){?>selected<?}?>>25��</option>
							<option value="26" <?if($sdate[2]=='26'){?>selected<?}?>>26��</option>
							<option value="27" <?if($sdate[2]=='27'){?>selected<?}?>>27��</option>
							<option value="28" <?if($sdate[2]=='28'){?>selected<?}?>>28��</option>
							<option value="29" <?if($sdate[2]=='29'){?>selected<?}?>>29��</option>
							<option value="30" <?if($sdate[2]=='30'){?>selected<?}?>>30��</option>
							<option value="31" <?if($sdate[2]=='31'){?>selected<?}?>>31��</option>
						</select>
					</td>
				</tr>
				<tr height="30">
					<td align='center'>���� ������ : </td>
					<td>
						<input type="text" name="e_year" value="<?=$edate[0]?>" size="4" class="ed" maxlength="4"> ��&nbsp;

						<select name="e_month">
							<option value="01" <?if($edate[1]=='01'){?>selected<?}?>>1��</option>
							<option value="02" <?if($edate[1]=='02'){?>selected<?}?>>2��</option>
							<option value="03" <?if($edate[1]=='03'){?>selected<?}?>>3��</option>
							<option value="04" <?if($edate[1]=='04'){?>selected<?}?>>4��</option>
							<option value="05" <?if($edate[1]=='05'){?>selected<?}?>>5��</option>
							<option value="06" <?if($edate[1]=='06'){?>selected<?}?>>6��</option>
							<option value="07" <?if($edate[1]=='07'){?>selected<?}?>>7��</option>
							<option value="08" <?if($edate[1]=='08'){?>selected<?}?>>8��</option>
							<option value="09" <?if($edate[1]=='09'){?>selected<?}?>>9��</option>
							<option value="10" <?if($edate[1]=='10'){?>selected<?}?>>10��</option>
							<option value="11" <?if($edate[1]=='11'){?>selected<?}?>>11��</option>
							<option value="12" <?if($edate[1]=='12'){?>selected<?}?>>12��</option>
						</select> &nbsp;

						<select name="e_day">
							<option value="01" <?if($edate[2]=='01'){?>selected<?}?>>1��</option>
							<option value="02" <?if($edate[2]=='02'){?>selected<?}?>>2��</option>
							<option value="03" <?if($edate[2]=='03'){?>selected<?}?>>3��</option>
							<option value="04" <?if($edate[2]=='04'){?>selected<?}?>>4��</option>
							<option value="05" <?if($edate[2]=='05'){?>selected<?}?>>5��</option>
							<option value="06" <?if($edate[2]=='06'){?>selected<?}?>>6��</option>
							<option value="07" <?if($edate[2]=='07'){?>selected<?}?>>7��</option>
							<option value="08" <?if($edate[2]=='08'){?>selected<?}?>>8��</option>
							<option value="09" <?if($edate[2]=='09'){?>selected<?}?>>9��</option>
							<option value="10" <?if($edate[2]=='10'){?>selected<?}?>>10��</option>
							<option value="11" <?if($edate[2]=='11'){?>selected<?}?>>11��</option>
							<option value="12" <?if($edate[2]=='12'){?>selected<?}?>>12��</option>
							<option value="13" <?if($edate[2]=='13'){?>selected<?}?>>13��</option>
							<option value="14" <?if($edate[2]=='14'){?>selected<?}?>>14��</option>
							<option value="15" <?if($edate[2]=='15'){?>selected<?}?>>15��</option>
							<option value="16" <?if($edate[2]=='16'){?>selected<?}?>>16��</option>
							<option value="17" <?if($edate[2]=='17'){?>selected<?}?>>17��</option>
							<option value="18" <?if($edate[2]=='18'){?>selected<?}?>>18��</option>
							<option value="19" <?if($edate[2]=='19'){?>selected<?}?>>19��</option>
							<option value="20" <?if($edate[2]=='20'){?>selected<?}?>>20��</option>
							<option value="21" <?if($edate[2]=='21'){?>selected<?}?>>21��</option>
							<option value="22" <?if($edate[2]=='22'){?>selected<?}?>>22��</option>
							<option value="23" <?if($edate[2]=='23'){?>selected<?}?>>23��</option>
							<option value="24" <?if($edate[2]=='24'){?>selected<?}?>>24��</option>
							<option value="25" <?if($edate[2]=='25'){?>selected<?}?>>25��</option>
							<option value="26" <?if($edate[2]=='26'){?>selected<?}?>>26��</option>
							<option value="27" <?if($edate[2]=='27'){?>selected<?}?>>27��</option>
							<option value="28" <?if($edate[2]=='28'){?>selected<?}?>>28��</option>
							<option value="29" <?if($edate[2]=='29'){?>selected<?}?>>29��</option>
							<option value="30" <?if($edate[2]=='30'){?>selected<?}?>>30��</option>
							<option value="31" <?if($edate[2]=='31'){?>selected<?}?>>31��</option>
						</select>
					</td>
				</tr>

				<tr height="30">
					<td align='center'>�� �� : </td>
					<td>
						<select name="State">
							<option value="1" <?if($row['State']=='1'){?>selected<?}?>>��������</option>
							<option value="2" <?if($row['State']=='2'){?>selected<?}?>>�����ߴ�</option>
						</select>
					</td>
			</table>
		</td>
	</tr>

	<tr height='20'><td></td></tr>
	<tr>
		<td style="padding-left:200">
			<input type='button' value='�⺻��������' onClick='check()'>&nbsp;
			<input type="button" value="��Ϻ���" onClick="location.href='./question2_list.php'">
		</td>
	</tr>

	<tr height='15'><td></td></tr>
	<tr><td style="padding-left:100"><font color='#CC0000'>(������� 1ȸ �̻��� ������ �⺻������ ������ �����մϴ�)</font></td></tr>
	<tr height='20'><td></td></tr>
</form>
</table>

<?
include_once("./admin.tail.php");
?>
