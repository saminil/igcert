<?
## �������� ���α׷��Դϴ�. 07.09.20 ��â�� chang0301@nate.com ##
## ���� �������翡�� �� ���׺��� ������ �����Ͽ� ������������ �������� ���� �Ͽ����ϴ�. ##
include "./config.php";

$sql = "select CorrectAnswer, Q_Point from $bbscode where Num=$QNum";
$result=sql_query($sql);
$row=sql_fetch_array($result);

$CorrectAnswer = explode('|',$row[CorrectAnswer]);	// ������ ����
$QPoint = explode('|',$row[Q_Point]);	// �� ������ ����
$Tot_Point = 0;		// ���� ����

// �׽�Ʈ��� ����
$id = $member[mb_id];
$name = $member[mb_name];
$IP = $_SERVER[REMOTE_ADDR];

for($i=0; $i<$Q_Cnt; $i++){
	$Canswer = $CorrectAnswer[$i];
	$C_answer = explode('_',$Canswer);
	$CanswerCnt[$i] = 0;
	$MemberAnswer[$i] = 0;

	// �� ���׺��� ������ ���� ������(������ �ΰ��̻��� ���� ����)
	for($a=0; $a<$E_Cnt; $a++){
		if($C_answer	[$a]=='Y'){
			$CanswerCnt[$i]++;
		}
	}

	for($j=0; $j<$E_Cnt; $j++){
		if($j==0)
			$as = $A[$i][$j];
		else
			$as .= '_'.$A[$i][$j];

		// ���� üũ (������ ��� ����üũ, ������� ����)
		if(($A[$i][$j]=='Y') && ($C_answer[$j] == $A[$i][$j])){
			$MemberAnswer[$i]++;
		}
	}

	// ���������� ������ ������ ������� ���� ��ġ�ϸ� �ش繮���� ������ ������
	if($CanswerCnt[$i] == $MemberAnswer[$i]){
		$Tot_Point = $Tot_Point + $QPoint[$i];
	}

	if($i==0)
		$Answer=$as;
	else
		$Answer.='|'.$as;
}

$query="insert into $bbscodeAnswer (Q_num, MemberID,  MemberName, Answer, RegDate, IP, Point) values($QNum,'$id','$name','$Answer',now(),'$IP',$Tot_Point);";
sql_query($query);

// �׽�Ʈ ������ ����
$sql="update $bbscode set AnswerCnt=AnswerCnt+1 where Num=$QNum";
sql_query($sql);

alert("���������� ����Ǿ����ϴ�\n����� �׽�Ʈ ������ �Ŀ� Ȯ���� �����մϴ�.","./list.php");
?>