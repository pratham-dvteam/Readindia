<?php
include('dbconfig.php');
if($_POST['id'])
{
	$id=$_POST['id'];
	
	$stmt = $DB_con->prepare("SELECT * FROM block WHERE district_id=:id ORDER BY `block`.`block_name` ASC");
	$stmt->execute(array(':id' => $id));
	?><option selected="selected">Select block :</option>
	<?php while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
		<option value="<?php echo $row['block_id']; ?>"><?php echo $row['block_name']; ?></option>
		<?php
	}
}
?>