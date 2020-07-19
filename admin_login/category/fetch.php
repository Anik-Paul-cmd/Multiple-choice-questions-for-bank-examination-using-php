<?php

//fetch.php

include('database_connection.php');

$query = "SELECT * FROM category ORDER BY id DESC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_rows = $statement->rowCount();

$output = '
<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<tr>
			
			<th>Category</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
';

if($total_rows > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			
			<td>'.$row["cat_name"].'</td>
			<td><button type="button" email="edit" id="'.$row["id"].'" class="btn btn-warning btn-xs edit">Edit</button></td>
			<td><button type="button" email="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button></td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4">No Data Found</td>
	</tr>
	';
}
$output .= '</table></div>';

echo $output;

?>