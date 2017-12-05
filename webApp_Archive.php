<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Bonds, Natasha</title>

<style>






body {
  color: #FFFFFF;
background-color:#045404;
height:300px;
width: 100%; 

}



</style>

<link rel="Stylesheet" href="AppDiv.css" type="text/css" media="all"/>

<link rel="icon" 
      type="image/x-icon"
      href="
bonds3.ico">



</head>






<body>



<h1 style='text-align:center;font-style:italic;'>Professional Portfolio</h1>

<h2 style='text-align:center;'>Sample Web Application</h2>

<h3 style='text-align:center;'>Natasha Bonds</h3>
<br/>

<br/>

<div id="ColorBandTop">






<menu type="toolbar">



  <menuitem>
    <menu label="File">






   <button type="button" onClick="location.href='http://bondsportfolio-bondsapps.rhcloud.com/'">Portfolio Overview</button>

   <button type="button" onClick="location.href='http://bondsportfolio.webstarts.com/'">Website (Static)</button>

      <button type="button" onClick="location.href='contactMe.php'">Contact Me</button>


    </menu>
  </menuitem>

</div>

<div id='column1' style='width:45%;float:left; height:800px;margin-left: 10px;'>







<?php
if(!empty($_POST['company']))
{








	$company = $_POST['company'];



	$fname = $_POST['fname'];



	$lname = $_POST['lname'];



	$email = $_POST['email'];







$dbuser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbpass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');

$host = getenv('OPENSHIFT_MYSQL_DB_HOST');

$port = getenv('OPENSHIFT_MYSQL_DB_PORT');



$serverConn=mysql_connect($host,$dbuser,$dbpass) or die ('Error connecting to mysql');





$db_selected = mysql_select_db('bondsportfolio', $serverConn);
if (!$db_selected) {
    die ('Cannot use database');
}


     	$registerquery = mysql_query("INSERT INTO Prospective_Employer (Company,Fname,Lname,EmailAddress) VALUES(




'".$company."',

'".$fname."',


'".$lname."',


'".$email."')");


{

echo "<meta http-equiv='refresh' content='0;Welcome.php'/>";

}



}



else
{
	?>





<p style="text-align:center;font-size:20px;">Thank You for Visiting My Web App!!!</p>
<br/>
<form method="post" action="webApp.php" name="entranceform" id="entranceform">
  <fieldset>
    <legend>Prospective Employer or Recruiter</legend>
<p style="text-align:justify;">*First time visitors are asked to supply contact information.  Returning visitors are free to view the site "Anonymously".</p>
<p style="text-align:justify;">**Visitor information is being requested but is not required.  While I would prefer visitors to supply their information, you may elect not to do so.<p/>

<label for="company">Name of Company:<br/></label><input type="text" name="company" id="company" required size="30"/> <br><br />


<label for="fname">First Name:<br/></label><input type="text" name="fname" id="fname" required size="30"/> <br><br />


<label for="lname">Last Name:<br/></label><input type="text" name="lname" id="lname" required size="30"/> <br><br />


<label for="email">Email:<br/></label><input type="text" name="email" id="email" required size="30"/> <br><br />



<input type="submit" name="view" id="view" value="View Portfolio" />



  </fieldset>
</form>

<br/>
<br/>


<button  type="button" onClick="location.href='Welcome.php'">Anonymously View Portfolio</button>

<?php
}
?>



</div>





<div id='column2' style='width:400px;float:left; height:800px;margin-left: 20%;background-color:#070743'>














<img src='informationTech6.jpg' width="400px" margin-left="2px"/>






</div>




<footer style='width:100%;float:left;'>
<hr/>
<p style='text-align:center;'>Natasha Bonds     |     Professional Portfolio     |     908.764.2432     |     bonds.portfolio@gmail.com</p>     
</footer>


</body>
</html>
