<?
## �������� ���α׷��Դϴ�. 07.09.20 ��â�� chang0301@nate.com ##
## ���� �������翡�� �� ���׺��� ������ �����Ͽ� ������������ �������� ���� �Ͽ����ϴ�. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "�������� ���";
include_once("./admin.head.php");

$wyear=date("Y");
$wmonth=date("m");
$wday=date("d");

$questionCnt = 100;
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
<form name="q_form" method="post" action="question2_write2.php">
	<input type='hidden' name='questionCnt' value='<?=$questionCnt?>'>
	<tr height='40'><td></td></tr>
	<tr>
		<td style="padding-left:100">
			<table width='400' cellpadding='0' cellspacing='0' border='0'>
				<tr height="30">
					<td colspan="2">�űԼ������� �⺻���� �Է�</td>
				</tr>
				<tr height='10'><td colspan="2"></td></tr>
				<tr height="30">
					<td align='center'>�� ��&nbsp; �� �� : </td><td><input type="text" name="Title" size="50" class="ed"></td>
				</tr>
				<tr height="30">
					<td align='center'>���� ���׼� : </td>
					<td>
						<select name="Q_Cnt">
							<? for($i=1; $i<=$questionCnt; $i++){
									echo "<option value=$i>$i</option>";
								}
							?>
						</select> ��
					</td>
				</tr>
				<tr height="30">
					<td align='center'>���� �׸�� : </td>
					<td>
						<select name="E_Cnt">
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4" selected>4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select> &nbsp;��� ���׿� �ϰ����� �˴ϴ�.
					</td>
				</tr>
				<tr height="30">
					<td align='center'>���� ������ : </td>
					<td>
						<input type="text" name="s_year" value="<?=$wyear?>" size="4" class="ed" maxlength="4"> ��&nbsp;

						<select name="s_month">
							<option value="01" <?if($wmonth=='01'){?>selected<?}?>>1��</option>
							<option value="02" <?if($wmonth=='02'){?>selected<?}?>>2��</option>
							<option value="03" <?if($wmonth=='03'){?>selected<?}?>>3��</option>
							<option value="04" <?if($wmonth=='04'){?>selected<?}?>>4��</option>
							<option value="05" <?if($wmonth=='05'){?>selected<?}?>>5��</option>
							<option value="06" <?if($wmonth=='06'){?>selected<?}?>>6��</option>
							<option value="07" <?if($wmonth=='07'){?>selected<?}?>>7��</option>
							<option value="08" <?if($wmonth=='08'){?>selected<?}?>>8��</option>
							<option value="09" <?if($wmonth=='09'){?>selected<?}?>>9��</option>
							<option value="10" <?if($wmonth=='10'){?>selected<?}?>>10��</option>
							<option value="11" <?if($wmonth=='11'){?>selected<?}?>>11��</option>
							<option value="12" <?if($wmonth=='12'){?>selected<?}?>>12��</option>
						</select> &nbsp;

						<select name="s_day">
							<option value="01" <?if($wday=='01'){?>selected<?}?>>1��</option>
							<option value="02" <?if($wday=='02'){?>selected<?}?>>2��</option>
							<option value="03" <?if($wday=='03'){?>selected<?}?>>3��</option>
							<option value="04" <?if($wday=='04'){?>selected<?}?>>4��</option>
							<option value="05" <?if($wday=='05'){?>selected<?}?>>5��</option>
							<option value="06" <?if($wday=='06'){?>selected<?}?>>6��</option>
							<option value="07" <?if($wday=='07'){?>selected<?}?>>7��</option>
							<option value="08" <?if($wday=='08'){?>selected<?}?>>8��</option>
							<option value="09" <?if($wday=='09'){?>selected<?}?>>9��</option>
							<option value="10" <?if($wday=='10'){?>selected<?}?>>10��</option>
							<option value="11" <?if($wday=='11'){?>selected<?}?>>11��</option>
							<option value="12" <?if($wday=='12'){?>selected<?}?>>12��</option>
							<option value="13" <?if($wday=='13'){?>selected<?}?>>13��</option>
							<option value="14" <?if($wday=='14'){?>selected<?}?>>14��</option>
							<option value="15" <?if($wday=='15'){?>selected<?}?>>15��</option>
							<option value="16" <?if($wday=='16'){?>selected<?}?>>16��</option>
							<option value="17" <?if($wday=='17'){?>selected<?}?>>17��</option>
							<option value="18" <?if($wday=='18'){?>selected<?}?>>18��</option>
							<option value="19" <?if($wday=='19'){?>selected<?}?>>19��</option>
							<option value="20" <?if($wday=='20'){?>selected<?}?>>20��</option>
							<option value="21" <?if($wday=='21'){?>selected<?}?>>21��</option>
							<option value="22" <?if($wday=='22'){?>selected<?}?>>22��</option>
							<option value="23" <?if($wday=='23'){?>selected<?}?>>23��</option>
							<option value="24" <?if($wday=='24'){?>selected<?}?>>24��</option>
							<option value="25" <?if($wday=='25'){?>selected<?}?>>25��</option>
							<option value="26" <?if($wday=='26'){?>selected<?}?>>26��</option>
							<option value="27" <?if($wday=='27'){?>selected<?}?>>27��</option>
							<option value="28" <?if($wday=='28'){?>selected<?}?>>28��</option>
							<option value="29" <?if($wday=='29'){?>selected<?}?>>29��</option>
							<option value="30" <?if($wday=='30'){?>selected<?}?>>30��</option>
							<option value="31" <?if($wday=='31'){?>selected<?}?>>31��</option>
						</select>
					</td>
				</tr>
				<tr height="30">
					<td align='center'>���� ������ : </td>
					<td>
						<input type="text" name="e_year" value="<?=$wyear?>" size="4" class="ed" maxlength="4"> ��&nbsp;

						<select name="e_month">
							<option value="01" <?if($wmonth=='01'){?>selected<?}?>>1��</option>
							<option value="02" <?if($wmonth=='02'){?>selected<?}?>>2��</option>
							<option value="03" <?if($wmonth=='03'){?>selected<?}?>>3��</option>
							<option value="04" <?if($wmonth=='04'){?>selected<?}?>>4��</option>
							<option value="05" <?if($wmonth=='05'){?>selected<?}?>>5��</option>
							<option value="06" <?if($wmonth=='06'){?>selected<?}?>>6��</option>
							<option value="07" <?if($wmonth=='07'){?>selected<?}?>>7��</option>
							<option value="08" <?if($wmonth=='08'){?>selected<?}?>>8��</option>
							<option value="09" <?if($wmonth=='09'){?>selected<?}?>>9��</option>
							<option value="10" <?if($wmonth=='10'){?>selected<?}?>>10��</option>
							<option value="11" <?if($wmonth=='11'){?>selected<?}?>>11��</option>
							<option value="12" <?if($wmonth=='12'){?>selected<?}?>>12��</option>
						</select> &nbsp;

						<select name="e_day">
							<option value="01" <?if($wday=='01'){?>selected<?}?>>1��</option>
							<option value="02" <?if($wday=='02'){?>selected<?}?>>2��</option>
							<option value="03" <?if($wday=='03'){?>selected<?}?>>3��</option>
							<option value="04" <?if($wday=='04'){?>selected<?}?>>4��</option>
							<option value="05" <?if($wday=='05'){?>selected<?}?>>5��</option>
							<option value="06" <?if($wday=='06'){?>selected<?}?>>6��</option>
							<option value="07" <?if($wday=='07'){?>selected<?}?>>7��</option>
							<option value="08" <?if($wday=='08'){?>selected<?}?>>8��</option>
							<option value="09" <?if($wday=='09'){?>selected<?}?>>9��</option>
							<option value="10" <?if($wday=='10'){?>selected<?}?>>10��</option>
							<option value="11" <?if($wday=='11'){?>selected<?}?>>11��</option>
							<option value="12" <?if($wday=='12'){?>selected<?}?>>12��</option>
							<option value="13" <?if($wday=='13'){?>selected<?}?>>13��</option>
							<option value="14" <?if($wday=='14'){?>selected<?}?>>14��</option>
							<option value="15" <?if($wday=='15'){?>selected<?}?>>15��</option>
							<option value="16" <?if($wday=='16'){?>selected<?}?>>16��</option>
							<option value="17" <?if($wday=='17'){?>selected<?}?>>17��</option>
							<option value="18" <?if($wday=='18'){?>selected<?}?>>18��</option>
							<option value="19" <?if($wday=='19'){?>selected<?}?>>19��</option>
							<option value="20" <?if($wday=='20'){?>selected<?}?>>20��</option>
							<option value="21" <?if($wday=='21'){?>selected<?}?>>21��</option>
							<option value="22" <?if($wday=='22'){?>selected<?}?>>22��</option>
							<option value="23" <?if($wday=='23'){?>selected<?}?>>23��</option>
							<option value="24" <?if($wday=='24'){?>selected<?}?>>24��</option>
							<option value="25" <?if($wday=='25'){?>selected<?}?>>25��</option>
							<option value="26" <?if($wday=='26'){?>selected<?}?>>26��</option>
							<option value="27" <?if($wday=='27'){?>selected<?}?>>27��</option>
							<option value="28" <?if($wday=='28'){?>selected<?}?>>28��</option>
							<option value="29" <?if($wday=='29'){?>selected<?}?>>29��</option>
							<option value="30" <?if($wday=='30'){?>selected<?}?>>30��</option>
							<option value="31" <?if($wday=='31'){?>selected<?}?>>31��</option>
						</select>
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr height='20'><td></td></tr>
	<tr><td align='center'><input type="button" value="�����ܰ��" onClick="check()"></td></tr>
	<tr height='30'><td></td></tr>
</form>
</table>

<?
include_once("./admin.tail.php");
?>
