<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:index.html');
 
 
?>
<html>
 <head>
  <title> Manage Questions</title>
  <link rel="stylesheet" type="text/css" href="./css/layout1.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  <!-- </div>
  <div id="nav">  -->
    <ul>
   <li> <a href="logout.php">Logout</a></li>  
   <li> <a href="adminhome.php">Back to Control Pannel</a></li>
   <li> <a href="viewquestions.php">View Questions</a></li>
  <li>  <a href="createquestion.php">Create Question</a></li>
</ul>
</div>
<div style="text-align: center; background-color: lightgrey; width: 1200px;
    border: 15px solid green; padding: 50px; margin: 20px;"><!-- id="section"  style="text-align: center;"-->
  <h1>Control Pannel:Manage Questions</h1>
   <table cellspacing="50px"> <!---->
	 <tr>
   <td><a href="viewquestions.php"><img id="viewimage" src="./images/viewimage.png" style="border:2px solid olive;width:100px;height:100px;"/><br/>View Questions</a></td>
	  <td><a href="createquestion.php"><img id="createquestionimage" src="./images/questionsimage.jpg" style="border:2px solid olive;height:100px;width:100px;"/><br/>Create Question</a></td>
	 </tr>
   </table>
    </div>  
 </body>
</html>