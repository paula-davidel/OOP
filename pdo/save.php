<?php
try 
{
    $db = new PDO('mysql:host=localhost;dbname=inventory', 'root', '');
} 
catch (PDOException $e) 
{
    die($e->getMessage());
}

$id = $_POST['id'];
$name = $_POST['name'];
$statement = $db->prepare('UPDATE customers SET name = :name WHERE id = :id');
if (false === $statement) 
{
    throw new Exception('Invalid prepare statement');
}
if (false === $statement->execute([':name' => $name, ':id' => $id])) 
{
    throw new Exception(implode(' ', $statement->errorInfo()));
}
else
{
	header('Location: index.php');
}