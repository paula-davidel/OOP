<?php

try 
{
  $db = new PDO('mysql:host=localhost;dbname=inventory', 'root', '');
} 
catch (PDOException $e) 
{
    die($e->getMessage());
}
$results = array();
$statement = $db->query('SELECT * FROM customers');

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
