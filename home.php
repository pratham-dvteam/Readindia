
<?php include 'header.php';?>

<?php
  session_start();
  include_once 'dbconnect.php';

  if(!isset($_SESSION['user']))
  {
  	header("Location: index.php");
  }

  $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
  $userRow=mysql_fetch_array($res);
?>


<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome - <?php echo $userRow['user_email']; ?></title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  
  <body>
  <div id="header"> 
    
    <div id="right">
  	  <div id="content">
        ' <?php echo $userRow['user_name']; ?>&nbsp;
        <a href="logout.php?logout">Sign Out</a>
      </div>
    
    </div>
    	

</body>
</html>