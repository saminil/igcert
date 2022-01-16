<?
## 설문조사 프로그램입니다. 07.09.20 이창협 chang0301@nate.com ##
## 기존 설문조사에서 각 문항별로 정답을 저장하여 시험지형식의 설문으로 변경 하였습니다. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "설문조사 수정";
include_once("./admin.head.php");


$query="select * from $bbscode where Num=$num";
$result=sql_query($query);
$row=sql_fetch_array($result);

$Title=stripslashes($row['Title']);							// 설문 제목
$Q_Cnt=$row[Q_Cnt];											// 질문수
$E_Cnt=$row[E_Cnt];											// 보기문항수
$Question=explode("|",$row['Question']);				// 질문 문항
$exam=explode("|",$row['Example']);					// 질문문항별로 각각의 보기를 나눔
$CAnswer=explode('|',$row['CorrectAnswer']);	// 질문별 정답(중복가능)
$Q_Point=explode('|',$row['Q_Point']);					// 질문별 점수
?>

<script language="javascript">
<!--
// 숫자만 입력
function onlynumber(){
	if((event.keyCode<48)||(event.keyCode>57)){
		event.returnValue=false;
	}
}

function Add_question(){
	var frm=document.q_form;
	var qlen=frm.Q_Cnt.value;		// 질문문항수
	var e_count=frm.E_Cnt.value;	// 보기수
	var q=parseInt(qlen)+1;			// 추가한 질문 번호
	var q_count = frm.questionCnt.value;		// 설문문항의 최대 등록가능 수 (question_write1.php 에서 설정함)
	q_count = parseInt(q_count);

	if (q_count && qlen >= q_count)
	{
		alert("설문 문항은 최대 "+q_count+"개 까지만 등록이 가능합니다.");
		return;
	}

	var objTbl;
	var objRow;
	var objCell;
	var AddHTML;
	var addCheck;
	var addCheck2;
	var Ano=1;

	objTbl = document.getElementById("Qaddition");

	objRow = objTbl.insertRow(objTbl.rows.length);
	objCell = objRow.insertCell(0);


	AddHTML ="<tr><td><table border='0' width='100%' cellpadding='0' cellspacing='0'><tr><td>질문"+q+".&nbsp;<input type='text' name='Q["+qlen+"]' size='80' class='ed'> &nbsp; 점수 <input type='text' name='Q_Point["+qlen+"]' size='3' class='ed' onKeypress='onlynumber()'></td></tr>";

	for(i=0; i<e_count; i++){
		addCheck="&nbsp;&nbsp; <input type='checkbox' name='Canswer["+qlen+"]["+i+"]' value='Y'>";

		if(i>1){
			addCheck2="&nbsp;&nbsp;사용안함 <input type='checkbox' name='Use["+qlen+"]["+i+"]' value='Y'>";
		}else{
			addCheck2="";
		}

		AddHTML += "<tr><td style='padding-left:15'>보기"+Ano+". &nbsp;<input type='text' name='A["+qlen+"]["+i+"]' size='50' class='ed'>"+
						addCheck + addCheck2+"</td></tr>";
		Ano++;
	}

	AddHTML += "<tr height='8'><td></td></tr><tr height='1'><td bgcolor='#FF9900'></td></tr><tr height='8'><td></td></tr></table></td></tr>";

	objCell.innerHTML=	AddHTML;
	frm.Q_Cnt.value++;
}


function Del_question(){
	var frm=document.q_form;
	var Qcnt=frm.Q_Cnt.value;			// 변경된 질문수
	var objTbl = document.getElementById("Qaddition");

	// 최소 한개의 질문을 제외하고 삭제가능
	if (Qcnt >1){
		objTbl.deleteRow(objTbl.rows.length - 1);
		frm.Q_Cnt.value--;
	}else{
		alert("최소한 한개의 질문은 있어야합니다.");
		return;
	}
}

function check(){
	var frm=document.q_form;
	var qcnt=frm.Q_Cnt.value;
	var no=1;

	for(i=0; i<qcnt; i++){
		if(frm['Q['+i+']'].value==''){
			alert(no+"번 질문의 내용을 입력해주세요");
			frm['Q['+i+']'].focus();
			return;
			break;
		}
		no++;
	}
	frm.submit();
}
//-->
</script>

<table border='0' width='100%' cellpadding='0' cellspacing='0'>
<form name="q_form" method="post" action="question2_update.php">
<input type="hidden" name="type" value="modify2">
<input type="hidden" name="bbscode" value="<?=$bbscode?>">
<input type="hidden" name="num" value="<?=$num?>">
<input type="hidden" name="Q_Cnt" value="<?=$Q_Cnt?>">
<input type="hidden" name="E_Cnt" value="<?=$E_Cnt?>">
<input type="hidden" name="questionCnt" value="100">

	<tr height='40'><td colspan='3'></td></tr>
	<tr>
		<td style="padding-left:100" colspan='3'>
			<table width='600' cellpadding='0' cellspacing='0' border='0'>
				<tr height="30">
					<td>설문조사 상세내용 수정</td>
				</tr>
				<tr height='10'><td></td></tr>

				<tr>
					<td>설문조사 제목 : <font color='#0033CC'><?=$Title?></font></td>
				</tr>
				<tr height='20'><td></td></tr>

				<tr>
					<td>
						<table id='Qaddition' border='0' width='100%' cellpadding='0' cellspacing='0'>
				<?
					// 설문문항 갯수만큼 루프돌면서 입력
					for($i=0; $i<$Q_Cnt; $i++){
						$bunho_q=$i+1;
?>
							<tr>
								<td>
									<table border='0' width='100%' cellpadding='0' cellspacing='0'>
										<tr>
											<td>질문<?=$bunho_q?>. &nbsp;<input type='text' name='Q[<?=$i?>]' size='80' class='ed' value='<?=$Question[$i]?>'> &nbsp; 점수 <input type='text' name='Q_Point[<?=$i?>]' size='3' class='ed' value='<?=$Q_Point[$i]?>' onKeypress='onlynumber()'>
											</td>
										</tr>
<?

						// 각 질문별로 보기항목수 만큼 루프돌면서 출력
						$example=explode("_",$exam[$i]);
						$C_answer=explode("_",$CAnswer[$i]);
						for($j=0; $j<$E_Cnt; $j++){
							$bunho_e=$j+1;

							// 정답 체크박스
							if($C_answer[$j]=='Y') $c_checked[$j]='checked';
							if($i==0){
								$addCheck = "&nbsp;&nbsp;정답 <input type='checkbox' name='Canswer[$i][$j]' value='Y' $c_checked[$j]>";
							}else{
								$addCheck = "&nbsp;&nbsp; <input type='checkbox' name='Canswer[$i][$j]' value='Y' $c_checked[$j]>";
							}

							if(!$example[$j]) $e_checked[$j]="checked";
							if($j>1){
								$addCheck2="&nbsp;&nbsp;사용안함 <input type='checkbox' name='Use[$i][$j]' value='Y' $e_checked[$j]>";
							}else{
								$addCheck2="";
							}
?>
										<tr>
											<td style='padding-left:15'>
												보기<?=$bunho_e?>. &nbsp;<input type='text' name='A[<?=$i?>][<?=$j?>]' size='50' class='ed' value='<?=$example[$j]?>'>
												<?=$addCheck?> <?=$addCheck2?>
											</td>
										</tr>
<?
							$e_checked[$j]='';
							$c_checked[$j]='';
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

	<tr height='20'><td colspan='3'></td></tr>
	<tr>
		<td width="7%"></td>
		<td align='center' width="50%">
			<input type="button" value="질문문항 추가" onClick="Add_question()">&nbsp;&nbsp;&nbsp;
			<input type="button" value="질문문항 삭제" onClick="Del_question()">
		</td>
		<td width="43%">
			<input type="button" value="수정완료" onClick="check()">&nbsp;&nbsp;
			<input type="button" value="목록보기" onClick="location.href='./question2_list.php'">
		</td>
	</tr>
	<tr height='30'><td colspan='3'></td></tr>
</form>
</table>

<?
include_once("./admin.tail.php");
?>
