<?
## �������� ���α׷��Դϴ�. 07.09.20 ��â�� chang0301@nate.com ##
## ���� �������翡�� �� ���׺��� ������ �����Ͽ� ������������ �������� ���� �Ͽ����ϴ�. ##

include_once("./_common.php");

$bbscode="Research2";

switch($type){
	case 'write' :
		$Title=addslashes($Title);
		
		// ���� ���� ����
		for($i=1; $i<=$Q_Cnt; $i++){
			$Question.=addslashes($Q[$i])."|";
			$Point.=$Q_Point[$i]."|";

			// ������ ���� ���� ����
			for($j=1; $j<=$E_Cnt; $j++){
				if($Use[$i][$j]=="Y"){
					$A[$i][$j]="";
				}
				$exam[$i].=addslashes($A[$i][$j]).'_';
				$Correct[$i].=$Canswer[$i][$j].'_';
			}
			$Example.=$exam[$i]."|";
			$CorrectAnswer.=$Correct[$i].'|';
		}

		$query="insert into $bbscode (Title, Q_Cnt, E_Cnt, Question, Example, CorrectAnswer, Q_Point, Q_Sdate, Q_Edate,
					AnswerCnt, RegDate, State) values('$Title','$Q_Cnt','$E_Cnt','$Question','$Example','$CorrectAnswer','$Point',
					'$Q_Sdate','$Q_Edate',0,'$g4[time_ymdhis]','1');";

		sql_query($query);

		alert("��ϵǾ����ϴ�","./question2_list.php");
	break;


	case 'delete' :
		// �������� ���� ������ ���� (R_answer)
		$query="delete from Answer2 where Q_num=$num";
		sql_query($query);

		// �������� ������ ���� (research)
		$query="delete from $bbscode where Num=$num";
		sql_query($query);

		alert("�����Ǿ����ϴ�","./question2_list.php");
	break;


	case 'modify1' :
		$Title=addslashes($Title);
		$Q_Sdate="$s_year-$s_month-$s_day";
		$Q_Edate="$e_year-$e_month-$e_day";

		$query="update $bbscode set Title='$Title', Q_Sdate='$Q_Sdate', Q_Edate='$Q_Edate', State='$State' where Num=$num";
		sql_query($query);

		// ������ ���� ������� ���� �����Ͱ� ������� ������ �������� ���ϵ��� �Ѵ�.
		$sql="select Num from Answer2 where Q_num=$num limit 0,1";
		$result=sql_query($sql);
		$row=sql_fetch_array($result);

		if($row[Num])
			alert("�����Ǿ����ϴ�","./question2_list.php");
		else
			echo "<meta http-equiv='refresh' content='0; url=./question2_modify1.php?bbscode=$bbscode&Qno=$num&mod=type2'>";
	break;


	case 'modify2' :
		// ���� ���� ����
		for($i=0; $i<$Q_Cnt; $i++){
			$Question.=addslashes($Q[$i])."|";
 			$Point.=$Q_Point[$i]."|";

			// ������ ���� ���� ����
			for($j=0; $j<$E_Cnt; $j++){
				if($Use[$i][$j]=="Y"){
					$A[$i][$j]="";
				}
				$exam[$i].=addslashes($A[$i][$j])."_";
				$Correct[$i].=$Canswer[$i][$j].'_';
			}
			$Example.=$exam[$i]."|";
			$CorrectAnswer.=$Correct[$i].'|';
		}

		$query="update $bbscode set Q_Cnt='$Q_Cnt', Question='$Question', Example='$Example', CorrectAnswer='$CorrectAnswer', Q_Point='$Point' where Num=$num";
		sql_query($query);

		alert("�����Ǿ����ϴ�","./question2_modify2.php?bbscode=$bbscode&num=$num");
	break;


	default :

	break;
}
?>