<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM brgList WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
        <tr>
            <td>State</td>
            <td><input type='text' name='state' class='form-control' value='<?php echo $row['state']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Name</td>
            <td><input type='text' name='brgName' class='form-control' value='<?php echo $row['brgName']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Higher Education</td>
            <td><input type='text' name='higherEducation' class='form-control' value='<?php echo $row['higherEducation']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Date of Birth</td>
            <td><input type='text' name='dateOfBirth' class='form-control' value='<?php echo $row['dateOfBirth']; ?>' required></td>
        </tr>

        <tr>
            <td>Date of Joining Pratham</td>
            <td><input type='text' name='dateOfJoiningPratham' class='form-control' value='<?php echo $row['dateOfJoiningPratham']; ?>' required></td>
        </tr>

        <tr>
            <td>Contect Number</td>
            <td><input type='text' name='contectNumber' class='form-control' value='<?php echo $row['contectNumber']; ?>' required></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type='text' name='email' class='form-control' value='<?php echo $row['email']; ?>' required></td>
        </tr>

        <tr>
            <td>Program Name</td>
            <td><input type='text' name='programName' class='form-control' value='<?php echo $row['programName']; ?>' required></td>
        </tr>


        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
