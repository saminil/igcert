<?
## 설문조사 프로그램입니다. 07.09.20 이창협 chang0301@nate.com ##
## 기존 설문조사에서 각 문항별로 정답을 저장하여 시험지형식의 설문으로 변경 하였습니다. ##
$g4_path="..";
include "$g4_path/common.php";

$bo_table="menu400";
include "../head.php";

$bbscode="Research2";
$bbscodeAnswer="Answer2";

if($member[mb_id]!='admin'){
//	echo "작업중입니다. 금방끝나용~";
//	exit;
}
?>