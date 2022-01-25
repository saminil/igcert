<?
## 설문조사 프로그램입니다. 07.09.20 이창협 chang0301@nate.com ##
## 기존 설문조사에서 각 문항별로 정답을 저장하여 시험지형식의 설문으로 변경 하였습니다. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "설문조사 등록";
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
		alert("설문조사 제목을 입력해주세요");
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
					<td colspan="2">신규설문조사 기본정보 입력</td>
				</tr>
				<tr height='10'><td colspan="2"></td></tr>
				<tr height="30">
					<td align='center'>설 문&nbsp; 제 목 : </td><td><input type="text" name="Title" size="50" class="ed"></td>
				</tr>
				<tr height="30">
					<td align='center'>설문 문항수 : </td>
					<td>
						<select name="Q_Cnt">
							<? for($i=1; $i<=$questionCnt; $i++){
									echo "<option value=$i>$i</option>";
								}
							?>
						</select> 개
					</td>
				</tr>
				<tr height="30">
					<td align='center'>보기 항목수 : </td>
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
						</select> &nbsp;모든 문항에 일괄적용 됩니다.
					</td>
				</tr>
				<tr height="30">
					<td align='center'>설문 시작일 : </td>
					<td>
						<input type="text" name="s_year" value="<?=$wyear?>" size="4" class="ed" maxlength="4"> 년&nbsp;

						<select name="s_month">
							<option value="01" <?if($wmonth=='01'){?>selected<?}?>>1월</option>
							<option value="02" <?if($wmonth=='02'){?>selected<?}?>>2월</option>
							<option value="03" <?if($wmonth=='03'){?>selected<?}?>>3월</option>
							<option value="04" <?if($wmonth=='04'){?>selected<?}?>>4월</option>
							<option value="05" <?if($wmonth=='05'){?>selected<?}?>>5월</option>
							<option value="06" <?if($wmonth=='06'){?>selected<?}?>>6월</option>
							<option value="07" <?if($wmonth=='07'){?>selected<?}?>>7월</option>
							<option value="08" <?if($wmonth=='08'){?>selected<?}?>>8월</option>
							<option value="09" <?if($wmonth=='09'){?>selected<?}?>>9월</option>
							<option value="10" <?if($wmonth=='10'){?>selected<?}?>>10월</option>
							<option value="11" <?if($wmonth=='11'){?>selected<?}?>>11월</option>
							<option value="12" <?if($wmonth=='12'){?>selected<?}?>>12월</option>
						</select> &nbsp;

						<select name="s_day">
							<option value="01" <?if($wday=='01'){?>selected<?}?>>1일</option>
							<option value="02" <?if($wday=='02'){?>selected<?}?>>2일</option>
							<option value="03" <?if($wday=='03'){?>selected<?}?>>3일</option>
							<option value="04" <?if($wday=='04'){?>selected<?}?>>4일</option>
							<option value="05" <?if($wday=='05'){?>selected<?}?>>5일</option>
							<option value="06" <?if($wday=='06'){?>selected<?}?>>6일</option>
							<option value="07" <?if($wday=='07'){?>selected<?}?>>7일</option>
							<option value="08" <?if($wday=='08'){?>selected<?}?>>8일</option>
							<option value="09" <?if($wday=='09'){?>selected<?}?>>9일</option>
							<option value="10" <?if($wday=='10'){?>selected<?}?>>10일</option>
							<option value="11" <?if($wday=='11'){?>selected<?}?>>11일</option>
							<option value="12" <?if($wday=='12'){?>selected<?}?>>12일</option>
							<option value="13" <?if($wday=='13'){?>selected<?}?>>13일</option>
							<option value="14" <?if($wday=='14'){?>selected<?}?>>14일</option>
							<option value="15" <?if($wday=='15'){?>selected<?}?>>15일</option>
							<option value="16" <?if($wday=='16'){?>selected<?}?>>16일</option>
							<option value="17" <?if($wday=='17'){?>selected<?}?>>17일</option>
							<option value="18" <?if($wday=='18'){?>selected<?}?>>18일</option>
							<option value="19" <?if($wday=='19'){?>selected<?}?>>19일</option>
							<option value="20" <?if($wday=='20'){?>selected<?}?>>20일</option>
							<option value="21" <?if($wday=='21'){?>selected<?}?>>21일</option>
							<option value="22" <?if($wday=='22'){?>selected<?}?>>22일</option>
							<option value="23" <?if($wday=='23'){?>selected<?}?>>23일</option>
							<option value="24" <?if($wday=='24'){?>selected<?}?>>24일</option>
							<option value="25" <?if($wday=='25'){?>selected<?}?>>25일</option>
							<option value="26" <?if($wday=='26'){?>selected<?}?>>26일</option>
							<option value="27" <?if($wday=='27'){?>selected<?}?>>27일</option>
							<option value="28" <?if($wday=='28'){?>selected<?}?>>28일</option>
							<option value="29" <?if($wday=='29'){?>selected<?}?>>29일</option>
							<option value="30" <?if($wday=='30'){?>selected<?}?>>30일</option>
							<option value="31" <?if($wday=='31'){?>selected<?}?>>31일</option>
						</select>
					</td>
				</tr>
				<tr height="30">
					<td align='center'>설문 종료일 : </td>
					<td>
						<input type="text" name="e_year" value="<?=$wyear?>" size="4" class="ed" maxlength="4"> 년&nbsp;

						<select name="e_month">
							<option value="01" <?if($wmonth=='01'){?>selected<?}?>>1월</option>
							<option value="02" <?if($wmonth=='02'){?>selected<?}?>>2월</option>
							<option value="03" <?if($wmonth=='03'){?>selected<?}?>>3월</option>
							<option value="04" <?if($wmonth=='04'){?>selected<?}?>>4월</option>
							<option value="05" <?if($wmonth=='05'){?>selected<?}?>>5월</option>
							<option value="06" <?if($wmonth=='06'){?>selected<?}?>>6월</option>
							<option value="07" <?if($wmonth=='07'){?>selected<?}?>>7월</option>
							<option value="08" <?if($wmonth=='08'){?>selected<?}?>>8월</option>
							<option value="09" <?if($wmonth=='09'){?>selected<?}?>>9월</option>
							<option value="10" <?if($wmonth=='10'){?>selected<?}?>>10월</option>
							<option value="11" <?if($wmonth=='11'){?>selected<?}?>>11월</option>
							<option value="12" <?if($wmonth=='12'){?>selected<?}?>>12월</option>
						</select> &nbsp;

						<select name="e_day">
							<option value="01" <?if($wday=='01'){?>selected<?}?>>1일</option>
							<option value="02" <?if($wday=='02'){?>selected<?}?>>2일</option>
							<option value="03" <?if($wday=='03'){?>selected<?}?>>3일</option>
							<option value="04" <?if($wday=='04'){?>selected<?}?>>4일</option>
							<option value="05" <?if($wday=='05'){?>selected<?}?>>5일</option>
							<option value="06" <?if($wday=='06'){?>selected<?}?>>6일</option>
							<option value="07" <?if($wday=='07'){?>selected<?}?>>7일</option>
							<option value="08" <?if($wday=='08'){?>selected<?}?>>8일</option>
							<option value="09" <?if($wday=='09'){?>selected<?}?>>9일</option>
							<option value="10" <?if($wday=='10'){?>selected<?}?>>10일</option>
							<option value="11" <?if($wday=='11'){?>selected<?}?>>11일</option>
							<option value="12" <?if($wday=='12'){?>selected<?}?>>12일</option>
							<option value="13" <?if($wday=='13'){?>selected<?}?>>13일</option>
							<option value="14" <?if($wday=='14'){?>selected<?}?>>14일</option>
							<option value="15" <?if($wday=='15'){?>selected<?}?>>15일</option>
							<option value="16" <?if($wday=='16'){?>selected<?}?>>16일</option>
							<option value="17" <?if($wday=='17'){?>selected<?}?>>17일</option>
							<option value="18" <?if($wday=='18'){?>selected<?}?>>18일</option>
							<option value="19" <?if($wday=='19'){?>selected<?}?>>19일</option>
							<option value="20" <?if($wday=='20'){?>selected<?}?>>20일</option>
							<option value="21" <?if($wday=='21'){?>selected<?}?>>21일</option>
							<option value="22" <?if($wday=='22'){?>selected<?}?>>22일</option>
							<option value="23" <?if($wday=='23'){?>selected<?}?>>23일</option>
							<option value="24" <?if($wday=='24'){?>selected<?}?>>24일</option>
							<option value="25" <?if($wday=='25'){?>selected<?}?>>25일</option>
							<option value="26" <?if($wday=='26'){?>selected<?}?>>26일</option>
							<option value="27" <?if($wday=='27'){?>selected<?}?>>27일</option>
							<option value="28" <?if($wday=='28'){?>selected<?}?>>28일</option>
							<option value="29" <?if($wday=='29'){?>selected<?}?>>29일</option>
							<option value="30" <?if($wday=='30'){?>selected<?}?>>30일</option>
							<option value="31" <?if($wday=='31'){?>selected<?}?>>31일</option>
						</select>
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr height='20'><td></td></tr>
	<tr><td align='center'><input type="button" value="다음단계로" onClick="check()"></td></tr>
	<tr height='30'><td></td></tr>
</form>
</table>

<?
include_once("./admin.tail.php");
?>
