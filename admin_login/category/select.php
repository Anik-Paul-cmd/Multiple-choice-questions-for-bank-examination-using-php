<?php

//select.php

include('database_connection.php');

if(isset($_POST["id"]))
{
	$query = "SELECT * FROM category WHERE id='".$_POST["id"]."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$cat_name = '';
	$name = '';
	foreach($result as $row)
	{
		
		$language_array = explode(",", $row["cat_name"]);
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
			$cat_name .= '
				<tr id="row'.$count.'">
					<td><input type="text" name="cat_name[]" placeholder="ADD Bank Category" class="form-control name_list" value="'.$language.'" /></td>
					<td align="center">'.$button.'</td>
				</tr>
			';
			$count++;
		}
	}
	$output = array(
		
		'cat_name'	=>	$cat_name
	);
	echo json_encode($output);
}


?>