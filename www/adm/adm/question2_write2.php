<?
## �������� ���α׷��Դϴ�. 07.09.20 ��â�� chang0301@nate.com ##
## ���� �������翡�� �� ���׺��� ������ �����Ͽ� ������������ �������� ���� �Ͽ����ϴ�. ##

$sub_menu = "500100";
include_once("./_common.php");

$g4[title] = "�������� ���";
include_once("./admin.head.php");

$sdate="$s_year-$s_month-$s_day";
$edate="$e_year-$e_month-$e_day";

?>

<script language="javascript">
<!--
// ���ڸ� �Է�
function onlynumber(){
	if((event.keyCode<48)||(event.keyCode>57)){
		event.returnValue=false;
	}
}

// ����Ʈ �ϰ�ó��(ù��° �Է�)
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

	objTbl = document.getElementById("Qaddition");

	objRow = objTbl.insertRow(objTbl.rows.length);
	objCell = objRow.insertCell(0);


	AddHTML ="<tr><td><table border='0' width='100%' cellpadding='0' cellspacing='0'><tr><td>����"+q+".&nbsp;<input type='text' name='Q["+q+"]' size='80' class='ed'> &nbsp; ���� <input type='text' name='Q_Point["+q+"]' size='3' class='ed' onKeypress='onlynumber()'></td></tr>";

	for(i=1; i<=e_count; i++){
		addCheck="&nbsp;&nbsp; <input type='checkbox' name='Canswer["+q+"]["+i+"]' value='Y'>";

		if(i>2){
			addCheck2="&nbsp;&nbsp;������ <input type='checkbox' name='Use["+q+"]["+i+"]' value='Y'>";
		}else{
			addCheck2="";
		}

		AddHTML += "<tr><td style='padding-left:15'>����"+i+". &nbsp;<input type='text' name='A["+q+"]["+i+"]' size='50' class='ed'>"+
						addCheck + addCheck2+"</td></tr>";
	}

	AddHTML += "<tr height='8'><td></td></tr><tr height='1'><td bgcolor='#FF9900'></td></tr><tr height='8'><td></td></tr></table></td></tr>";

	objCell.innerHTML=	AddHTML;
	frm.Q_Cnt.value++;
}


function Del_question(){
	// question_write1.php���� �Է��� �������� �� ���Ϸδ� �ʵ尡 �������� �ʾƾ� �մϴ�.
	var frm=document.q_form;
	var q_cnt = <?=(int)$Q_Cnt?>;
	var q_cnt_ADD=frm.Q_Cnt.value;	// �߰��� ���� ���׼�
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
			alert(i+"�� ������ ������ �Է����ּ���");
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
					<td>�űԼ������� �������� �Է�</td>
				</tr>
				<tr height='10'><td></td></tr>

				<tr>
					<td>�������� ���� : <font color='#0033CC' size='2'><b><?=$Title?></b></font></td>
				</tr>
				<tr height='10'><td colspan="2"></td></tr>
				<tr>
					<td>
						<font color='#FF3300'>�� ����, �����׸� �ۼ��ÿ��� '_', '|' �� �����ڷ� ���Ǳ� ������ ����Ͻ� �� �����ϴ�.</font><br>
						<font color='#3333FF'>&nbsp; &nbsp; �� ������ ���信 �ش��ϴ� ���⿡ üũ�ϼ���.</font> 
					</td>
				</tr>
				<tr height='5'><td colspan="2"></td></tr>

				<tr>
					<td>
						<table id='Qaddition' border='0' width='100%' cellpadding='0' cellspacing='0'>
<?
					// �������� ������ŭ �������鼭 �Է�
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
											<td>����<?=$i?>. &nbsp;<input type='text' name='Q[<?=$i?>]' size='80' class='ed'>
												&nbsp; ���� <input type='text' name='Q_Point[<?=$i?>]' size='3' class='ed' <?=$inputPointAll?> onKeypress='onlynumber()'>
											</td>
										</tr>
<?

						// �����׸�� ��ŭ �������鼭 �Է�
						for($j=1; $j<=$E_Cnt; $j++){
							// ���� üũ�ڽ�
							if($i==1){
								$addCheck = "&nbsp;&nbsp;���� <input type='checkbox' name='Canswer[$i][$j]' value='Y'>";
							}else{
								$addCheck = "&nbsp;&nbsp; <input type='checkbox' name='Canswer[$i][$j]' value='Y'>";
							}
							
							// ���� ��뿩�� üũ�ڽ�
							if($j>2){
								$addCheck2="&nbsp;&nbsp;������ <input type='checkbox' name='Use[$i][$j]' value='Y'>";
							}else{
								$addCheck2="";
							}
?>
										<tr>
											<td style='padding-left:15'>
												����<?=$j?>. &nbsp;<input type='text' name='A[<?=$i?>][<?=$j?>]' size='50' class='ed'>
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
			<input type="button" value="�������� �߰�" onClick="Add_question()">&nbsp;&nbsp;&nbsp;
			<input type="button" value="�������� ����" onClick="Del_question()">&nbsp;&nbsp;&nbsp;			
		</td>
		<td width="43%"><input type="button" value="������ �����ϱ�" onClick="check()"></td>
	</tr>
	<tr height='30'><td colspan='3'></td></tr>
</form>
</table>

<?
include_once("./admin.tail.php");
?>
