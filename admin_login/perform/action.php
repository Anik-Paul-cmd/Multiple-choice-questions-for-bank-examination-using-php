<?php

//action.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$password = implode(",", $_POST["password"]);
	$data = array(
		':email'						=>	$_POST["email"],
		':password'	=>	$password
	);
	$query = '';
	if($_POST["action"] == "insert")
	{
		$query = "INSERT INTO moderator (email, password) VALUES (:email, :password)";
	}
	if($_POST["action"] == "edit")
	{
		$query = "
		UPDATE moderator 
		SET email = :email, 
		password = :password 
		WHERE id = '".$_POST['hidden_id']."'
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute($data);
}


?>