<Html>
<head>
<title>School List</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<br/><br/>
<body bgcolor="">

		<form name="form1"  method="GET" action="dbconn.php">
		
			State ID:<input type="test" name="stid" >	&nbsp;&nbsp;
			State Name:<input type="text" name="stname" ">	<br/><br/>
			District ID:<input type="text" name="dstid" >	&nbsp;&nbsp;
			District Name:<input type="text" name="dstname" >	<br/><br/>
			Block ID:<input type="text" name="blkid" >		&nbsp;&nbsp;
			Block Name:<input type="text" name="blkname" >	<br/><br/>
			School Code:<input type="text" name="sccode" >	&nbsp;&nbsp;
			School Name:<input type="text" name="scname" >	<br/><br/>
			Village ID: <input type="tetx" name="vlid" >  &nbsp;&nbsp;
			Village Name:<input type="text" name="vlname" >		<br/><br/>
			
			<input type="submit" name="submit" value="Submit">		<br/>
			
		</form>
		
	
</body>
</Html>