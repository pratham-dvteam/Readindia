<?php include 'header.php';?>
<html>

  <head><title>School Report Card</title>
    <style type="text/css">
    .progress {
        
        width: 150px;
        height: 16px;
        border: 1px solid #111;
        background-color: #019dd6;
        position:relative;
        }
         .progress-label {
        position: absolute;
        left: 42%;
        }
        
        a:hover, a:visited, a:link, a:active
        {
            text-decoration: none;
        }
        #ft
        {
            font-family:candara;
            font-size:17px;
            font-weight:bold;
            color:#000;    
            text-align:center;
        }
        #ft1
        {
            font-family:calibri;
            font-size:18px;
            font-weight:bold;
            color:brown;    
            text-align:center;
        }
        #ct
        {
            font-family:candara;
            font-size:17px;
            font-weight:bold;
            color:#CC3300;    
            text-align:center;
        }
        #but1
        {
            font-family:calibri;
            font-size:13px;
            font-weight:bold;
            color:#CC3300;
            text-align:center;
            height:30px;
        }
        </style>
	<script type='text/javascript' src='js/jquery-1.11.3.min'></script>
    <script type="text/javascript">
	$(document).ready(function(e){
			$.ajax({
				url:'web_service.php',
				data:'getData=getprogramWise',
				type:'POST',
				dataType:'JSON',
				success:function(data){
					console.log(data);
					$("#getprogramWise").append("<option value=''>--Select program--</option>");
					for(var i=0;i<data.length;i++)
					{
						$("#getprogramWise").append('<option value="'+data[i].program+'">'+data[i].program+'</option>');
					}
				}
			});
			
	$("#getprogramWise").change(function(e){
				$("#subcatsSelect1").find('option').remove();
				$.ajax({
					url:'web_service.php',
					data:'getData=gettypeOfCampWise&camp='+this.value,
					type:'POST',
					dataType:'JSON',
					success:function(data){
						console.log(data);
						$("#subcatsSelect1").append("<option value=''>--None--</option>");
						if(data!='no')
						{
							for(var i=0;i<data.length;i++)
							{
								$("#subcatsSelect1").append("<option value='"+data[i].typeOfCamp+"'>"+data[i].typeOfCamp+"</option>");
							}
						}
					}
				});
	
			$("#subcatsSelect1").change(function(e){
				$("#subcatsSelect2").find('option').remove();
				$.ajax({
					url:'web_service.php',
					data:'getData=getStateWise&state='+this.value,
					type:'POST',
					dataType:'JSON',
					success:function(data){
						console.log(data);
						$("#subcatsSelect2").append("<option value=''>--None--</option>");
						if(data!='no')
						{
							for(var i=0;i<data.length;i++)
							{
								$("#subcatsSelect2").append("<option value='"+data[i].state+"'>"+data[i].state+"</option>");
							}
						}
					}
				});
				
			$("#subcatsSelect2").change(function(e){
				$("#subcatsSelect3").find('option').remove();
				$.ajax({
					url:'web_service.php',
					data:'getData=getBlockWise&block='+this.value,
					type:'POST',
					dataType:'JSON',
					success:function(data){
						console.log(data);
						$("#subcatsSelect3").append("<option value=''>--None--</option>");
						if(data!='no')
						{
							for(var i=0;i<data.length;i++)
							{
								$("#subcatsSelect3").append('<option value="'+data[i].block+'">'+data[i].block+'</option>');
							}
						}
					}
				});
				
						
			$("#btnSumbmit").click(function(e){
				var a= $("#subcatsSelect3").val();
				$.ajax({
					url:'schoolList.php',
					data:'block='+a,
					type:'POST',
					
					success:function(data){
						      $("#schoolList").html(data);
						},
					error   : function(data){
				}
					
				});
			
		});
		});
		});
		});
		});
	</script>


  </head>
  <div id="header"> 
    
    <div id="left">
  	  <div id="content" align="right" >
      
        <a href="logout.php?logout" >Sign Out</a>
      
      </div>
    
    </div>

<font color="green" face="calibri" size="5"><center><b>Read India 2015-16: School Report Card</b></center></font>
<br></Br>

<body>	
		<center>

			<font face="calibri" size="3"><b>Select Program :</b> </font>
			<select id='getprogramWise' name="" size="1" onchange="" style="width:150px;">
				</select>
			<font face="calibri" size="3"><b>Select Type of Camp :</b> </font><select id='subcatsSelect1' name="" size="1" onchange="" style="width:150px;">
				</select>
			<font face="calibri" size="3"><b>Select State :</b> </font><select id='subcatsSelect2' name="" size="1" onchange="" style="width:150px;">
				</select>
			<font face="calibri" size="3"><b>Select Block :</b> </font><select id='subcatsSelect3' name="" size="1" onchange="" style="width:150px;">
				</select>
		</center>
</body>
	<br />
		<center>
			<input class="btn" id="btnSumbmit" name="btnSumbmit" value="List Schools" style="width:150px; font-family: 'candara'; font-size: 12pt; color: #0000ff; background-color: #FFFFC0; border: 2pt ridge gold" type="button" />
		</center>
	<br />
  
		<center><font color="Black" face="calibri" size="3"><b>[SELECT ALL THE FILTERS TO GET RESULT]</b> </font>  </center>
        
	<br /><span id="">
  
<style>

			table {
				width: 56%;
				colspan : 5px;
				table-layout:fixed;
				font color: #008000;
				border-collapse: 9;
				align:center;
				
				colgroup span: 9;
				background-size: 3;
			}
			th{
				border: 0px solid #111;
			}
			td
			{
				font: candara;
				font color: "#008000";
				background-size: 3;
				text-align: center;
				padding: 7px;

			}

			button[type="submit"] {
			  font-size: 10pt;
			  padding:0.25em;
			  box-sizing: border-box;
			  width:130px;
			  font-family: 'candara';
			  color: #0000ff; 
			  background-color: #FFFFC0;
			  border: 2pt ridge gold ;
				}
				td.schoolCode{
				font-weight: bold;
			}
			td.program{
				font-weight: bold;
			}
			tr:hover{background-color:#f2f2f2}
</style>

 <script type="text/javascript">
       
        function buttonclick(schoolCode) {
     
     
        window.open("http://localhost/readindia/summarysheet.php?schoolCode="+schoolCode);
     
    }

</script>
<script type='text/javascript' src='https://dub01.online.tableau.com/javascripts/api/viz_v1.js'>
	window.location.href = "https://dev-368517.oktapreview.com/home/tableauonline/0oa9n97y3e9Z7Zq210h7/12005";	

</script>

</head>
	<Div id= "schoolList">

<div class='tableauPlaceholder' style='width: 1353px; height: 1382px;'><object class='tableauViz' width='1353' height='1382' style='display:none;'><param name='host_url' value='https%3A%2F%2Fdub01.online.tableau.com%2F' /> <param name='site_root' value='&#47;t&#47;prathaminsights' /><param name='name' value='GoogleAnalytics&#47;OverallTrends' /><param name='tabs' value='yes' /><param name='toolbar' value='yes' /><param name='showShareOptions' value='true' /></object></div>
	</Div> 
</html>
