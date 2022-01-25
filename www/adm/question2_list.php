<?
## 설문조사 프로그램입니다. 07.09.20 이창협 chang0301@nate.com ##
## 기존 설문조사에서 각 문항별로 정답을 저장하여 시험지형식의 설문으로 변경 하였습니다. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "설문조사 관리(v2.0)";
include_once("./admin.head.php");

$bbscode="Research2";
$ndate=date("Y-m-d");

$sql="select num from $bbscode";
$row=sql_query($sql);
$total_count=mysql_num_rows($row);

$list_rows=15;		// 리스트에 출력할 목록수
$total_page  = ceil($total_count / $list_rows);  // 전체 페이지 계산
if (!$page) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $list_rows; // 시작 열을 구함
?>

<script language="javascript">
<!--
function q_del(no){
	if(confirm("설문응답 데이터까지 모두 삭제됩니다.\n\n정말 삭제하시겠습니까?")){
		document.location.href="./question2_update.php?type=delete&num=" + no;
	}
}
//-->
</script>

<table border='0' width='100%' cellpadding='0' cellspacing='0'>
	<tr height='10'><td></td></tr>
	<tr><td><b>설문조사 리스트</b> &nbsp;(설문결과를 보시려면 제목을 누르세요) - v2.0 (시험지 형식으로 각 문항에 정답을 저장하고 점수를 체크하게 됩니다.)</td></tr>
	<tr height='10'><td></td></tr>

	<tr>
		<td align="center">
			<table width='98%' cellpadding='0' cellspacing='0' border='0'>
				<tr height='25'>
					<td align="center" width="5%" bgcolor='#E7EFF1'>순번</td>
					<td align="center" width="26%" bgcolor='#E7EFF1'>설문제목</td>
					<td align="center" width="8%" bgcolor='#E7EFF1'>질문수</td>
					<td align="center" width="12%" bgcolor='#E7EFF1'>설문시작일</td>
					<td align="center" width="12%" bgcolor='#E7EFF1'>설문종료일</td>
					<td align="center" width="8%" bgcolor='#E7EFF1'>응답수</td>
					<td align="center" width="11%" bgcolor='#E7EFF1'>등록일</td>
					<td align="center" width="8%" bgcolor='#E7EFF1'>상 태</td>
					<td align="center" width="10%" bgcolor='#E7EFF1'>수정/삭제</td>
				</tr>
				<tr height='2'><td colspan='9' bgcolor='#333300'></td></tr>
				<tr height='3'><td colspan='9'></td></tr>
<?
	$query="select Num, Title, Q_Cnt, Q_Sdate, Q_Edate, AnswerCnt, RegDate, State from $bbscode order by Num desc limit $from_record, $list_rows";
	$result=sql_query($query);

	if(!$result){
		echo "<tr height='35'><td align='center' colspan='9'>등록된 데이터가 없습니다</td></tr>";
	}else{
		for($i=1; $list=sql_fetch_array($result); $i++){
			$bunho=$total_count - ($from_record + $i - 1);	// 목록 번호
			$Title=stripslashes($list[Title]);
			$Title=cut_str($Title, 60);

			if($list[State]=='1' && $list[Q_Edate]>=$ndate)
				$state="<font color='blue'>진행중</font>";
			else if($list[State]=='1' && $list[Q_Edate]<$ndate)
				$state="<font color='red'>설문종료</font>";
			else
				$state="<font color='red'>미사용</font>";
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
