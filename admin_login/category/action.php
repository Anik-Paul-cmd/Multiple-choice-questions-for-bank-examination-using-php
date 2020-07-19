<?php

//action.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$cat_name = implode(",", $_POST["cat_name"]);
	$data = array(
		
		':cat_name'	=>	$cat_name
	);
	$query = '';
	if($_POST["action"] == "insert")
	{
		$query = "INSERT INTO category ( cat_name) VALUES ( :cat_name)";
	}
	if($_POST["action"] == "edit")
	{
		$query = "
		UPDATE category 
		SET cat_name = :cat_name 
		WHERE id = '".$_POST['hidden_id']."'
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute($data);
}


?>