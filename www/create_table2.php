<?
	include_once("./_common.php");

$query = "CREATE TABLE `Research2` (
	`Num` INT(11) NOT NULL AUTO_INCREMENT ,
	`Title` VARCHAR(255) ,
	`Q_Cnt` VARCHAR(3) ,
	`E_Cnt` VARCHAR(2) ,
	`Question` TEXT,
	`Example` TEXT,
	`CorrectAnswer` TEXT,
	`Q_Point` tinyint(3),
	`Q_Sdate` VARCHAR(30) ,
	`Q_Edate` VARCHAR(30) ,
	`AnswerCnt` INT(6) DEFAULT '0',
	`RegDate` DATETIME,
	`State` CHAR(1),
	PRIMARY KEY (`Num`) 
	);";
	
if(sql_query($query)){
	echo '설문조사 테이블이 설치되었습니다.';
};


$query2 = "CREATE TABLE `Answer2` (
	`Num` INT(11) NOT NULL AUTO_INCREMENT ,
	`Q_num` INT(11) NOT NULL ,
	`MemberID` VARCHAR(50) ,
	`MemberName` VARCHAR(10) ,
	`Answer` TEXT,
	`RegDate` DATETIME,
	`IP` VARCHAR(30),
	`Point` smallint(5) unsigned,
	PRIMARY KEY (`Num`) 
	);";
	
if(sql_query($query2)){
	echo '설문 답변테이블이 설치되었습니다.';
}
?>
<br>
<input type='button' value='뒤로' onClick='history.back(-1)'>