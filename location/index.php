<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#loding1").hide();
	$("#loding2").hide();
	$(".state").change(function()
	{
		$("#loding1").show();
		var id=$(this).val();
		var dataString = 'id='+ id;
		$(".district").find('option').remove();
		$(".block").find('option').remove();
		$.ajax
		({
			type: "POST",
			url: "get_district.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding1").hide();
				$(".district").html(html);
			} 
		});
	});
	
	
	$(".district").change(function()
	{
		$("#loding2").show();
		var id=$(this).val();
		var dataString = 'id='+ id;
	
		$.ajax
		({
			type: "POST",
			url: "get_block.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#loding2").hide();
				$(".block").html(html);
			} 
		});
	});
	
});
</script>
<style>
label
{
font-weight:bold;
padding:10px;
}
div
{
	margin-top:100px;
}
select
{
	width:200px;
	height:35px;
	border:2px solid #456879;
	border-radius:10px;
}

.color {
	color:green;
}

.link {
	color:red;
}
</style>
</head>

<body>
<h1 align="center" class="color"> Welcome : Uttar Pradesh State MME </h1>
<center>
<div>
<label>state :</label> 
<select name="state" class="state">
<option selected="selected">--Select state--</option>
<?php
	$stmt = $DB_con->prepare("SELECT * FROM state");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
        <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>
        <?php
	} 
?>
</select>
<br><br><br>
<label>district :</label> <select name="district" class="district">
<option selected="selected">--Select district--</option>
</select>
<img src="ajax-loader.gif" id="loding1"></img>
<br><br><br>
<label>block :</label> <select name="block" class="block">
<option selected="selected">--Select block--</option>
</select>
<img src="ajax-loader.gif" id="loding2"></img>
<br><br><br>
</div>
<br />
</center>
<h3 align="center"><a href="" class="link">Pratham</a></h3>
<h3 align="center"><a href="http://pratham.org/" class="link">www.pratham.org</a></h3>
</body>
</html>
