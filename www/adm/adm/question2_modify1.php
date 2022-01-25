<?
## 설문조사 프로그램입니다. 07.09.20 이창협 chang0301@nate.com ##
## 기존 설문조사에서 각 문항별로 정답을 저장하여 시험지형식의 설문으로 변경 하였습니다. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "설문조사 수정";
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
		alert("설문조사 제목을 입력해주세요");
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
					<td>설문조사 기본 정보수정</td>
					<td align='right'>
					<?
						if($mod=='type2'){
							echo "<input type='button' value='상세내용 수정하기' onClick=\"location.href='./question2_modify2.php?bbscode=$bbscode&num=$Qno'\">";
						}
					?>
				</tr>
				<tr height='10'><td colspan="2"></td></tr>
				<tr height="30">
					<td align='center'>설 문&nbsp; 제 목 : </td><td><input type="text" name="Title" size="50" class="ed" value="<?=$Title?>"></td>
				</tr>

				<tr height="30">
					<td align='center'>설문 시작일 : </td>
					<td>
						<input type="text" name="s_year" value="<?=$sdate[0]?>" size="4" class="ed" maxlength="4"> 년&nbsp;

						<select name="s_month">
							<option value="01" <?if($sdate[1]=='01'){?>selected<?}?>>1월</option>
							<option value="02" <?if($sdate[1]=='02'){?>selected<?}?>>2월</option>
							<option value="03" <?if($sdate[1]=='03'){?>selected<?}?>>3월</option>
							<option value="04" <?if($sdate[1]=='04'){?>selected<?}?>>4월</option>
							<option value="05" <?if($sdate[1]=='05'){?>selected<?}?>>5월</option>
							<option value="06" <?if($sdate[1]=='06'){?>selected<?}?>>6월</option>
							<option value="07" <?if($sdate[1]=='07'){?>selected<?}?>>7월</option>
							<option value="08" <?if($sdate[1]=='08'){?>selected<?}?>>8월</option>
							<option value="09" <?if($sdate[1]=='09'){?>selected<?}?>>9월</option>
							<option value="10" <?if($sdate[1]=='10'){?>selected<?}?>>10월</option>
							<option value="11" <?if($sdate[1]=='11'){?>selected<?}?>>11월</option>
							<option value="12" <?if($sdate[1]=='12'){?>selected<?}?>>12월</option>
						</select> &nbsp;

						<select name="s_day">
							<option value="01" <?if($sdate[2]=='01'){?>selected<?}?>>1일</option>
							<option value="02" <?if($sdate[2]=='02'){?>selected<?}?>>2일</option>
							<option value="03" <?if($sdate[2]=='03'){?>selected<?}?>>3일</option>
							<option value="04" <?if($sdate[2]=='04'){?>selected<?}?>>4일</option>
							<option value="05" <?if($sdate[2]=='05'){?>selected<?}?>>5일</option>
							<option value="06" <?if($sdate[2]=='06'){?>selected<?}?>>6일</option>
							<option value="07" <?if($sdate[2]=='07'){?>selected<?}?>>7일</option>
							<option value="08" <?if($sdate[2]=='08'){?>selected<?}?>>8일</option>
							<option value="09" <?if($sdate[2]=='09'){?>selected<?}?>>9일</option>
							<option value="10" <?if($sdate[2]=='10'){?>selected<?}?>>10일</option>
							<option value="11" <?if($sdate[2]=='11'){?>selected<?}?>>11일</option>
							<option value="12" <?if($sdate[2]=='12'){?>selected<?}?>>12일</option>
							<option value="13" <?if($sdate[2]=='13'){?>selected<?}?>>13일</option>
							<option value="14" <?if($sdate[2]=='14'){?>selected<?}?>>14일</option>
							<option value="15" <?if($sdate[2]=='15'){?>selected<?}?>>15일</option>
							<option value="16" <?if($sdate[2]=='16'){?>selected<?}?>>16일</option>
							<option value="17" <?if($sdate[2]=='17'){?>selected<?}?>>17일</option>
							<option value="18" <?if($sdate[2]=='18'){?>selected<?}?>>18일</option>
							<option value="19" <?if($sdate[2]=='19'){?>selected<?}?>>19일</option>
							<option value="20" <?if($sdate[2]=='20'){?>selected<?}?>>20일</option>
							<option value="21" <?if($sdate[2]=='21'){?>selected<?}?>>21일</option>
							<option value="22" <?if($sdate[2]=='22'){?>selected<?}?>>22일</option>
							<option value="23" <?if($sdate[2]=='23'){?>selected<?}?>>23일</option>
							<option value="24" <?if($sdate[2]=='24'){?>selected<?}?>>24일</option>
							<option value="25" <?if($sdate[2]=='25'){?>selected<?}?>>25일</option>
							<option value="26" <?if($sdate[2]=='26'){?>selected<?}?>>26일</option>
							<option value="27" <?if($sdate[2]=='27'){?>selected<?}?>>27일</option>
							<option value="28" <?if($sdate[2]=='28'){?>selected<?}?>>28일</option>
							<option value="29" <?if($sdate[2]=='29'){?>selected<?}?>>29일</option>
							<option value="30" <?if($sdate[2]=='30'){?>selected<?}?>>30일</option>
							<option value="31" <?if($sdate[2]=='31'){?>selected<?}?>>31일</option>
						</select>
					</td>
				</tr>
				<tr height="30">
					<td align='center'>설문 종료일 : </td>
					<td>
						<input type="text" name="e_year" value="<?=$edate[0]?>" size="4" class="ed" maxlength="4"> 년&nbsp;

						<select name="e_month">
							<option value="01" <?if($edate[1]=='01'){?>selected<?}?>>1월</option>
							<option value="02" <?if($edate[1]=='02'){?>selected<?}?>>2월</option>
							<option value="03" <?if($edate[1]=='03'){?>selected<?}?>>3월</option>
							<option value="04" <?if($edate[1]=='04'){?>selected<?}?>>4월</option>
							<option value="05" <?if($edate[1]=='05'){?>selected<?}?>>5월</option>
							<option value="06" <?if($edate[1]=='06'){?>selected<?}?>>6월</option>
							<option value="07" <?if($edate[1]=='07'){?>selected<?}?>>7월</option>
							<option value="08" <?if($edate[1]=='08'){?>selected<?}?>>8월</option>
							<option value="09" <?if($edate[1]=='09'){?>selected<?}?>>9월</option>
							<option value="10" <?if($edate[1]=='10'){?>selected<?}?>>10월</option>
							<option value="11" <?if($edate[1]=='11'){?>selected<?}?>>11월</option>
							<option value="12" <?if($edate[1]=='12'){?>selected<?}?>>12월</option>
						</select> &nbsp;

						<select name="e_day">
							<option value="01" <?if($edate[2]=='01'){?>selected<?}?>>1일</option>
							<option value="02" <?if($edate[2]=='02'){?>selected<?}?>>2일</option>
							<option value="03" <?if($edate[2]=='03'){?>selected<?}?>>3일</option>
							<option value="04" <?if($edate[2]=='04'){?>selected<?}?>>4일</option>
							<option value="05" <?if($edate[2]=='05'){?>selected<?}?>>5일</option>
							<option value="06" <?if($edate[2]=='06'){?>selected<?}?>>6일</option>
							<option value="07" <?if($edate[2]=='07'){?>selected<?}?>>7일</option>
							<option value="08" <?if($edate[2]=='08'){?>selected<?}?>>8일</option>
							<option value="09" <?if($edate[2]=='09'){?>selected<?}?>>9일</option>
							<option value="10" <?if($edate[2]=='10'){?>selected<?}?>>10일</option>
							<option value="11" <?if($edate[2]=='11'){?>selected<?}?>>11일</option>
							<option value="12" <?if($edate[2]=='12'){?>selected<?}?>>12일</option>
							<option value="13" <?if($edate[2]=='13'){?>selected<?}?>>13일</option>
							<option value="14" <?if($edate[2]=='14'){?>selected<?}?>>14일</option>
							<option value="15" <?if($edate[2]=='15'){?>selected<?}?>>15일</option>
							<option value="16" <?if($edate[2]=='16'){?>selected<?}?>>16일</option>
							<option value="17" <?if($edate[2]=='17'){?>selected<?}?>>17일</option>
							<option value="18" <?if($edate[2]=='18'){?>selected<?}?>>18일</option>
							<option value="19" <?if($edate[2]=='19'){?>selected<?}?>>19일</option>
							<option value="20" <?if($edate[2]=='20'){?>selected<?}?>>20일</option>
							<option value="21" <?if($edate[2]=='21'){?>selected<?}?>>21일</option>
							<option value="22" <?if($edate[2]=='22'){?>selected<?}?>>22일</option>
							<option value="23" <?if($edate[2]=='23'){?>selected<?}?>>23일</option>
							<option value="24" <?if($edate[2]=='24'){?>selected<?}?>>24일</option>
							<option value="25" <?if($edate[2]=='25'){?>selected<?}?>>25일</option>
							<option value="26" <?if($edate[2]=='26'){?>selected<?}?>>26일</option>
							<option value="27" <?if($edate[2]=='27'){?>selected<?}?>>27일</option>
							<option value="28" <?if($edate[2]=='28'){?>selected<?}?>>28일</option>
							<option value="29" <?if($edate[2]=='29'){?>selected<?}?>>29일</option>
							<option value="30" <?if($edate[2]=='30'){?>selected<?}?>>30일</option>
							<option value="31" <?if($edate[2]=='31'){?>selected<?}?>>31일</option>
						</select>
					</td>
				</tr>

				<tr height="30">
					<td align='center'>상 태 : </td>
					<td>
						<select name="State">
							<option value="1" <?if($row['State']=='1'){?>selected<?}?>>설문실행</option>
							<option value="2" <?if($row['State']=='2'){?>selected<?}?>>설문중단</option>
						</select>
					</td>
			</table>
		</td>
	</tr>

	<tr height='20'><td></td></tr>
	<tr>
		<td style="padding-left:200">
			<input type='button' value='기본정보저장' onClick='check()'>&nbsp;
			<input type="button" value="목록보기" onClick="location.href='./question2_list.php'">
		</td>
	</tr>

	<tr height='15'><td></td></tr>
	<tr><td style="padding-left:100"><font color='#CC0000'>(응답수가 1회 이상인 설문은 기본정보만 수정이 가능합니다)</font></td></tr>
	<tr height='20'><td></td></tr>
</form>
</table>

<?
include_once("./admin.tail.php");
?>
