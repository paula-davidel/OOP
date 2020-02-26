<?php
	$Query_String  = explode("&", explode("?", $_SERVER['REQUEST_URI'])[1] );
	foreach ($Query_String as $key => $value)
	{
		$condition = $value;
	}
try 
{
  $db = new PDO('mysql:host=localhost;dbname=inventory', 'root', '');
} 
catch (PDOException $e) 
{
    die($e->getMessage());
}
$results = array();
$statement = $db->query("SELECT * FROM customers WHERE {$condition}");
// print_r($db->errorInfo());exit;
if (false === $statement)
{
    throw new Exception('Invalid query');
}
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) 
{
    $results[] = array(
    	'id' => $row['id'],
    	'name' => $row['name']
    );
}

foreach ($results as $result) {?>

<h2> Hello <?php echo $result['name'] ?> </h2>
<br>
<form method='POST' action='save.php'>
			<input type="text" id="name" name="name" value="<?php echo $result['name'] ?>">
		   	<input type="text" id="id" name="id" value="<?php echo $result['id'];?>" hidden>
		   	<button type="submit" name="save" value="save" class="btn btn-primary">Save</button>
</form> 
<?php }?>


