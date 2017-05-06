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
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['user_email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
   
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .Dashborad:hover .dropbtn {
    background-color: red;
}

li.Dashborad {
    display: inline-block;
}

.Dashborad-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.Dashborad-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.Dashborad-content a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
</head>
<body>
<?php include 'header.php';?>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#School List" onclick="reportcard()" >School List</a></li>
  <li class="Dashborad">
    <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Dashborad</a>
    <div class="Dashborad-content" id="myDashborad">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a class="test" tabindex="-1" href="#">link 3 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
		  
		  
          
    </div>
	<div id="right">
    	<div id="content">
        	hi' <?php echo $userRow['user_name']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
	
  </li>
  </UL>
</ul>

<h3>Dashborad Menu </h3>
<p>Click on the "Dashborad" link to see the Dashborad menu.</p>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the Dashborad content */
function myFunction() {
    document.getElementById("myDashborad").classList.toggle("show");
}

// Close the Dashborad if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var Dashborads = document.getElementsByClassName("Dashborad-content");
    for (var d = 0; d < Dashborads.length; d++) {
      var openDashborad = Dashborads[d];
      if (openDashborad.classList.contains('show')) {
        openDashborad.classList.remove('show');
      }
    }
  }
}
</script>
<script>
function reportcard() {
    window.location.assign("http://localhost/rip/reportcard.php")
}
</script>

<tbody>
<tr>
<td id="sidebarcell" class="sidebarcell">
	<div class ="sidebar fixed" id = "sidebarDiv" </div>
<td>
</tr>
</tbody>


</body>
</html>
