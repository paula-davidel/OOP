<?php

//Insert data
try
{
	$db=new PDO("mysql:host=localhost;dbname=inventory",'root','');
}
catch(PDOException $e)
{
	die($e->getMessage());
}

$name = $_POST['first_name']." ".$_POST['last_name'];

$statement = $db->prepare('INSERT INTO customers (name) VALUES (:name)');

if(FALSE===$statement)
{
	throw new Exception('Invalid prepare statement');
}

if(FALSE===$statement->execute([':name' => $name]))
{
	throw new Exception(implode('',$statement->errorInfo()));
}
else
{
	header('Location: index.php');
}