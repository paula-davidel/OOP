<!DOCTYPE html>
<html>
<body>

<h1>My first insert data</h1>

<form action="/pdo/insert.php" method="POST">
<fieldset>
    <legend>Personal Data:</legend>
    <label for="first_name">First name:</label><br>
    <input type="text" id="first_name" name="first_name" placeholder="Please complete..."><br>
    <label for="last_name">Last name:</label><br>
    <input type="text" id="last_name" name="last_name" placeholder="Please complete..."><br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>
<br>
<?php require('select.php');?>
	<h2> Users </h2>
	<table>
	   	<?php foreach ($results as $result) {?>
	   	<tr> 
	   	<td><?php echo $result['name'] ?></td>
	   	<td><button type="submit" name="update" value="update" class="btn btn-primary"><a href="update.php?id=<?php echo $result['id'];?>">Update</a></button></td>
	   	<td><button type="submit" name="delete" value="delete" class="btn btn-primary"><a href="delete.php?id=<?php echo $result['id'];?>">Delete</a></button></td>
	    </tr>
	   <?php }?>
	</table>
</body>
</html>