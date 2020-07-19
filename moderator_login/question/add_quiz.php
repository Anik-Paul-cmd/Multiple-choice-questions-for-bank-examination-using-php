<?php
extract($_POST);
 include("../../database.php");
$quiz=new DB_con;
$qus=htmlentities($qus);
$option1=htmlentities($op1);
$option2=htmlentities($op2);
$option3=htmlentities($op3);
$option4=htmlentities($op4);
$option5=htmlentities($op5);
$option6=htmlentities($op6);
$option7=htmlentities($op7);
$option8=htmlentities($op8);
if($option1==null){
  $option1="null";
}
if($option2==null){
  $option2="null";
}
if($option3==null){
  $option3="null";
}
if($option4==null){
  $option4="null";
}
if($option5==null){
  $option5="null";
}
if($option6==null){
  $option6="null";
}
if($option7==null){
  $option7="null";
}
if($option8==null){
  $option8="null";
}
$array=[$option1,$option2,$option3,$option4,$option5,$option6,$option7,$option8];
$answer=array_search($ans,$array);
$query="insert into questions values ('','$qus','$option1','$option2','$option3','$option4','$option5','$option6','$option7','$option8','$answer','$cat')";
if($quiz->add_quiz($query))
{
	$quiz->url("index.php?msg=run");
	//echo "data insert successfully";
}

?>
