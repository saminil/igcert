<?
## 설문조사 프로그램입니다. 07.09.20 이창협 chang0301@nate.com ##
## 기존 설문조사에서 각 문항별로 정답을 저장하여 시험지형식의 설문으로 변경 하였습니다. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "설문조사 등록";
include_once("./admin.head.php");

$sdate="$s_year-$s_month-$s_day";
$edate="$e_year-$e_month-$e_day";

?>

<script language="javascript">
<!--
// 숫자만 입력
function onlynumber(){
	if((event.keyCode<48)||(event.keyCode>57)){
		event.returnValue=false;
	}
}

// 포인트 일괄처리(첫번째 입력)
function inputAll(point){
	var qlen=document.q_form.Q_Cnt.value;
	if(point){
		for(var i=1; i<=qlen; i++){
			document.q_form['Q_Point['+i+']'].value=point;
		}
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

	objTbl = document.getElementById("Qaddition");

	objRow = objTbl.insertRow(objTbl.rows.length);
	objCell = objRow.insertCell(0);


	AddHTML ="<tr><td><table border='0' width='100%' cellpadding='0' cellspacing='0'><tr><td>질문"+q+".&nbsp;<input type='text' name='Q["+q+"]' size='80' class='ed'> &nbsp; 점수 <input type='text' name='Q_Point["+q+"]' size='3' class='ed' onKeypress='onlynumber()'></td></tr>";

	for(i=1; i<=e_count; i++){
		addCheck="&nbsp;&nbsp; <input type='checkbox' name='Canswer["+q+"]["+i+"]' value='Y'>";

		if(i>2){
			addCheck2="&nbsp;&nbsp;사용안함 <input type='checkbox' name='Use["+q+"]["+i+"]' value='Y'>";
		}else{
			addCheck2="";
		}

		AddHTML += "<tr><td style='padding-left:15'>보기"+i+". &nbsp;<input type='text' name='A["+q+"]["+i+"]' size='50' class='ed'>"+
						addCheck + addCheck2+"</td></tr>";
	}

	AddHTML += "<tr height='8'><td></td></tr><tr height='1'><td bgcolor='#FF9900'></td></tr><tr height='8'><td></td></tr></table></td></tr>";

	objCell.innerHTML=	AddHTML;
	frm.Q_Cnt.value++;
}


function Del_question(){
	// question_write1.php에서 입력한 질문문항 수 이하로는 필드가 삭제되지 않아야 합니다.
	var frm=document.q_form;
	var q_cnt = <?=(int)$Q_Cnt?>;
	var q_cnt_ADD=frm.Q_Cnt.value;	// 추가된 질문 문항수
	var objTbl = document.getElementById("Qaddition");

	if (q_cnt_ADD > q_cnt){
		objTbl.deleteRow(objTbl.rows.length - 1);
		frm.Q_Cnt.value--;
	}
}

function check(){
	var frm=document.q_form;
	var qcnt=frm.Q_Cnt.value;

	for(i=1; i<=qcnt; i++){
		if(frm['Q['+i+']'].value==''){
			alert(i+"번 질문의 내용을 입력해주세요");
			frm['Q['+i+']'].focus();
			return;
			break;
		}
	}
	frm.submit();
}
//-->
</script>

<table border='0' width='100%' cellpadding='0' cellspacing='0'>
<form name="q_form" method="post" action="question2_update.php">
<input type="hidden" name="type" value="write">
<input type="hidden" name="Title" value="<?=$Title?>">
<input type="hidden" name="Q_Cnt" value="<?=$Q_Cnt?>">
<input type="hidden" name="E_Cnt" value="<?=$E_Cnt?>">
<input type="hidden" name="Q_Sdate" value="<?=$sdate?>">
<input type="hidden" name="Q_Edate" value="<?=$edate?>">
<input type="hidden" name="questionCnt" value="<?=$questionCnt?>">

	<tr height='40'><td colspan='3'></td></tr>
	<tr>
		<td style="padding-left:100" colspan='3'>
			<table width='600' cellpadding='0' cellspacing='0' border='0'>
				<tr height="30">
					<td>신규설문조사 설문내용 입력</td>
				</tr>
				<tr height='10'><td></td></tr>

				<tr>
					<td>설문조사 제목 : <font color='#0033CC' size='2'><b><?=$Title?></b></font></td>
				</tr>
				<tr height='10'><td colspan="2"></td></tr>
				<tr>
					<td>
						<font color='#FF3300'>※ 질문, 보기항목 작성시에는 '_', '|' 는 구분자로 사용되기 때문에 사용하실 수 없습니다.</font><br>
						<font color='#3333FF'>&nbsp; &nbsp; 각 질문의 정답에 해당하는 보기에 체크하세요.</font> 
					</td>
				</tr>
				<tr height='5'><td colspan="2"></td></tr>

				<tr>
					<td>
						<table id='Qaddition' border='0' width='100%' cellpadding='0' cellspacing='0'>
<?
					// 설문문항 갯수만큼 루프돌면서 입력
					for($i=1; $i<=$Q_Cnt; $i++){
						if($i==1){
							$inputPointAll = "onBlur='inputAll(this.value)'";
						}else{
							$inputPointAll = "";
						}
?>
							<tr>
								<td>
									<table border='0' width='100%' cellpadding='0' cellspacing='0'>
										<tr>
											<td>질문<?=$i?>. &nbsp;<input type='text' name='Q[<?=$i?>]' size='80' class='ed'>
												&nbsp; 점수 <input type='text' name='Q_Point[<?=$i?>]' size='3' class='ed' <?=$inputPointAll?> onKeypress='onlynumber()'>
											</td>
										</tr>
<?

						// 보기항목수 만큼 루프돌면서 입력
						for($j=1; $j<=$E_Cnt; $j++){
							// 정답 체크박스
							if($i==1){
								$addCheck = "&nbsp;&nbsp;정답 <input type='checkbox' name='Canswer[$i][$j]' value='Y'>";
							}else{
								$addCheck = "&nbsp;&nbsp; <input type='checkbox' name='Canswer[$i][$j]' value='Y'>";
							}
							
							// 문항 사용여부 체크박스
							if($j>2){
								$addCheck2="&nbsp;&nbsp;사용안함 <input type='checkbox' name='Use[$i][$j]' value='Y'>";
							}else{
								$addCheck2="";
							}
?>
										<tr>
											<td style='padding-left:15'>
												보기<?=$j?>. &nbsp;<input type='text' name='A[<?=$i?>][<?=$j?>]' size='50' class='ed'>
												<?=$addCheck?>
												<?=$addCheck2?>
											</td>
										</tr>
<?
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
			<input type="button" value="질문문항 삭제" onClick="Del_question()">&nbsp;&nbsp;&nbsp;			
		</td>
		<td width="43%"><input type="button" value="설문지 저장하기" onClick="check()"></td>
	</tr>
	<tr height='30'><td colspan='3'></td></tr>
</form>
</table>

<?
include_once("./admin.tail.php");
?>
