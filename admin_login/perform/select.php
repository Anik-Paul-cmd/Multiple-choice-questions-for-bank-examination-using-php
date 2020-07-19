<?php

//select.php

include('database_connection.php');

if(isset($_POST["id"]))
{
	$query = "SELECT * FROM moderator WHERE id='".$_POST["id"]."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$password = '';
	$name = '';
	foreach($result as $row)
	{
		$name = $row["email"];
		$language_array = explode(",", $row["password"]);
		$count = 1;
		foreach($language_array as $language)
		{
			$button = '';
			if($count > 1)
			{
				$button = '<button type="button" name="remove" id="'.$count.'" class="btn btn-danger btn-xs remove">x</button>';
			}
			else
			{
				$button = '<button type="button" name="add_more" id="add_more" class="btn btn-success btn-xs">+</button>';
			}
			$password .= '
				<tr id="row'.$count.'">
					<td><input type="text" name="password[]" placeholder="Add Programming Languages" class="form-control name_list" value="'.$language.'" /></td>
					<td align="center">'.$button.'</td>
				</tr>
			';
			$count++;
		}
	}
	$output = array(
		'email'					=>	$name,
		'password'	=>	$password
	);
	echo json_encode($output);
}


?>