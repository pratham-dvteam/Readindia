<?php
include('dbconfig.php');
if($_POST['id'])
{
	$id=$_POST['id'];
		
	$stmt = $DB_con->prepare("SELECT * FROM district WHERE state_id=:id ORDER BY `district`.`district_name` ASC");
	$stmt->execute(array(':id' => $id));
	?><option selected="selected">Select district :</option><?php
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
        	<option value="<?php echo $row['district_id']; ?>"><?php echo $row['district_name']; ?></option>
        <?php
	}
}
?>
<!-- www.techsofttutorials.com   Techsoft Tutorials, Free Latest Technology Tutorials and Demo. -->