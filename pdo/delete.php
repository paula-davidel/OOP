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
	
$value_id=explode("=",$condition);

$id = $value_id[1];
$statement = $db->prepare('DELETE from customers WHERE id = :id');
if (false === $statement) 
{
    throw new Exception('Invalid prepare statement');
}
if (false === $statement->execute([':id' => $id])) 
{
    throw new Exception(implode(' ', $statement->errorInfo()));
}
else
{
	header('Location: index.php');
}