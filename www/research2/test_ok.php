<?
## 설문조사 프로그램입니다. 07.09.20 이창협 chang0301@nate.com ##
## 기존 설문조사에서 각 문항별로 정답을 저장하여 시험지형식의 설문으로 변경 하였습니다. ##
include "./config.php";

$sql = "select CorrectAnswer, Q_Point from $bbscode where Num=$QNum";
$result=sql_query($sql);
$row=sql_fetch_array($result);

$CorrectAnswer = explode('|',$row[CorrectAnswer]);	// 문제의 정답
$QPoint = explode('|',$row[Q_Point]);	// 각 문항의 점수
$Tot_Point = 0;		// 최종 점수

// 테스트결과 저장
$id = $member[mb_id];
$name = $member[mb_name];
$IP = $_SERVER[REMOTE_ADDR];

for($i=0; $i<$Q_Cnt; $i++){
	$Canswer = $CorrectAnswer[$i];
	$C_answer = explode('_',$Canswer);
	$CanswerCnt[$i] = 0;
	$MemberAnswer[$i] = 0;

	// 각 문항별로 정답의 갯수 가져옴(정답이 두개이상일 수도 있음)
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

		// 정답 체크 (정답일 경우 정답체크, 정답수도 증가)
		if(($A[$i][$j]=='Y') && ($C_answer[$j] == $A[$i][$j])){
			$MemberAnswer[$i]++;
		}
	}

	// 최종적으로 정답의 갯수와 맞춘답의 수가 일치하면 해당문항의 점수를 더해줌
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

// 테스트 참여수 증가
$sql="update $bbscode set AnswerCnt=AnswerCnt+1 where Num=$QNum";
sql_query($sql);

alert("정상적으로 저장되었습니다\n결과는 테스트 종료일 후에 확인이 가능합니다.","./list.php");
?>