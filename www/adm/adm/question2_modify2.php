<?
## �������� ���α׷��Դϴ�. 07.09.20 ��â�� chang0301@nate.com ##
## ���� �������翡�� �� ���׺��� ������ �����Ͽ� ������������ �������� ���� �Ͽ����ϴ�. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "�������� ����";
include_once("./admin.head.php");


$query="select * from $bbscode where Num=$num";
$result=sql_query($query);
$row=sql_fetch_array($result);

$Title=stripslashes($row['Title']);							// ���� ����
$Q_Cnt=$row[Q_Cnt];											// ������
$E_Cnt=$row[E_Cnt];											// ���⹮�׼�
$Question=explode("|",$row['Question']);				// ���� ����
$exam=explode("|",$row['Example']);					// �������׺��� ������ ���⸦ ����
$CAnswer=explode('|',$row['CorrectAnswer']);	// ������ ����(�ߺ�����)
$Q_Point=explode('|',$row['Q_Point']);					// ������ ����
?>

<script language="javascript">
<!--
// ���ڸ� �Է�
function onlynumber(){
	if((event.keyCode<48)||(event.keyCode>57)){
		event.returnValue=false;
	}
}

function Add_question(){
	var frm=document.q_form;
	var qlen=frm.Q_Cnt.value;		// �������׼�
	var e_count=frm.E_Cnt.value;	// �����
	var q=parseInt(qlen)+1;			// �߰��� ���� ��ȣ
	var q_count = frm.questionCnt.value;		// ���������� �ִ� ��ϰ��� �� (question_write1.php ���� ������)
	q_count = parseInt(q_count);

	if (q_count && qlen >= q_count)
	{
		alert("���� ������ �ִ� "+q_count+"�� ������ ����� �����մϴ�.");
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


	AddHTML ="<tr><td><table border='0' width='100%' cellpadding='0' cellspacing='0'><tr><td>����"+q+".&nbsp;<input type='text' name='Q["+qlen+"]' size='80' class='ed'> &nbsp; ���� <input type='text' name='Q_Point["+qlen+"]' size='3' class='ed' onKeypress='onlynumber()'></td></tr>";

	for(i=0; i<e_count; i++){
		addCheck="&nbsp;&nbsp; <input type='checkbox' name='Canswer["+qlen+"]["+i+"]' value='Y'>";

		if(i>1){
			addCheck2="&nbsp;&nbsp;������ <input type='checkbox' name='Use["+qlen+"]["+i+"]' value='Y'>";
		}else{
			addCheck2="";
		}

		AddHTML += "<tr><td style='padding-left:15'>����"+Ano+". &nbsp;<input type='text' name='A["+qlen+"]["+i+"]' size='50' class='ed'>"+
						addCheck + addCheck2+"</td></tr>";
		Ano++;
	}

	AddHTML += "<tr height='8'><td></td></tr><tr height='1'><td bgcolor='#FF9900'></td></tr><tr height='8'><td></td></tr></table></td></tr>";

	objCell.innerHTML=	AddHTML;
	frm.Q_Cnt.value++;
}


function Del_question(){
	var frm=document.q_form;
	var Qcnt=frm.Q_Cnt.value;			// ����� ������
	var objTbl = document.getElementById("Qaddition");

	// �ּ� �Ѱ��� ������ �����ϰ� ��������
	if (Qcnt >1){
		objTbl.deleteRow(objTbl.rows.length - 1);
		frm.Q_Cnt.value--;
	}else{
		alert("�ּ��� �Ѱ��� ������ �־���մϴ�.");
		return;
	}
}

function check(){
	var frm=document.q_form;
	var qcnt=frm.Q_Cnt.value;
	var no=1;

	for(i=0; i<qcnt; i++){
		if(frm['Q['+i+']'].value==''){
			alert(no+"�� ������ ������ �Է����ּ���");
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
					<td>�������� �󼼳��� ����</td>
				</tr>
				<tr height='10'><td></td></tr>

				<tr>
					<td>�������� ���� : <font color='#0033CC'><?=$Title?></font></td>
				</tr>
				<tr height='20'><td></td></tr>

				<tr>
					<td>
						<table id='Qaddition' border='0' width='100%' cellpadding='0' cellspacing='0'>
				<?
					// �������� ������ŭ �������鼭 �Է�
					for($i=0; $i<$Q_Cnt; $i++){
						$bunho_q=$i+1;
?>
							<tr>
								<td>
									<table border='0' width='100%' cellpadding='0' cellspacing='0'>
										<tr>
											<td>����<?=$bunho_q?>. &nbsp;<input type='text' name='Q[<?=$i?>]' size='80' class='ed' value='<?=$Question[$i]?>'> &nbsp; ���� <input type='text' name='Q_Point[<?=$i?>]' size='3' class='ed' value='<?=$Q_Point[$i]?>' onKeypress='onlynumber()'>
											</td>
										</tr>
<?

						// �� �������� �����׸�� ��ŭ �������鼭 ���
						$example=explode("_",$exam[$i]);
						$C_answer=explode("_",$CAnswer[$i]);
						for($j=0; $j<$E_Cnt; $j++){
							$bunho_e=$j+1;

							// ���� üũ�ڽ�
							if($C_answer[$j]=='Y') $c_checked[$j]='checked';
							if($i==0){
								$addCheck = "&nbsp;&nbsp;���� <input type='checkbox' name='Canswer[$i][$j]' value='Y' $c_checked[$j]>";
							}else{
								$addCheck = "&nbsp;&nbsp; <input type='checkbox' name='Canswer[$i][$j]' value='Y' $c_checked[$j]>";
							}

							if(!$example[$j]) $e_checked[$j]="checked";
							if($j>1){
								$addCheck2="&nbsp;&nbsp;������ <input type='checkbox' name='Use[$i][$j]' value='Y' $e_checked[$j]>";
							}else{
								$addCheck2="";
							}
?>
										<tr>
											<td style='padding-left:15'>
												����<?=$bunho_e?>. &nbsp;<input type='text' name='A[<?=$i?>][<?=$j?>]' size='50' class='ed' value='<?=$example[$j]?>'>
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
			<input type="button" value="�������� �߰�" onClick="Add_question()">&nbsp;&nbsp;&nbsp;
			<input type="button" value="�������� ����" onClick="Del_question()">
		</td>
		<td width="43%">
			<input type="button" value="�����Ϸ�" onClick="check()">&nbsp;&nbsp;
			<input type="button" value="��Ϻ���" onClick="location.href='./question2_list.php'">
		</td>
	</tr>
	<tr height='30'><td colspan='3'></td></tr>
</form>
</table>

<?
include_once("./admin.tail.php");
?>
