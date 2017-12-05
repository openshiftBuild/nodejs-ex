<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Report: LIKE</title>

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

<hr style="height:3px;background-color:#030321;"/>
<hr style="height:3px;background-color:#030321;"/>
<br/>




   <a href='http://bondsportfolio-bondsapps.rhcloud.com/' style="color:#030321">Portfolio Overview</a>
<br/>


<a href='http://bondsportfolio-bondsapps.rhcloud.com/Welcome.php' style="color:#030321">Welcome</a>


<br/>

<a href='http://bondsportfolio-bondsapps.rhcloud.com/Reports.php' style="color:#030321">Reports</a>






<br/>

<a href='http://bondsportfolio.webstarts.com/' style="color:#030321">Website (Static)</a>



<br/>

<a href='http://bondsportfolio-bondsapps.rhcloud.com/contactMe.php' style="color:#030321">Contact Me</a>





<br/>


<div id='column1' style='width:90%;float:left; height:800px;margin-left: 10px;'>



<br/>
<h3 style="text-align:center;">LIKE</h3>
<h4 style="text-align:center;">User Input Errors Handled on the Backend (PHP Programming)</h4>
<p>Using LIKE, provides data according to user input.  The user is allowed to enter whatever they desire.  PHP code handles input errors.</p>

<p>Syntax:<br/>SELECT Region, State,Division, Rate from unEmpRate WHERE Region LIKE '$userInput1%' ORDER BY State, Rate;</p>







<?php

if(empty($_POST['searchTerm']))


{

?>



<br/>
<br/>

<div id="ReturnButton" style="margin-left:80%;"> 
<button type="button" onClick="location.href='Reports.php'">Return to Reports</button>
</div>
<form method="post" action="report_UserInput_LIKE_Programming2.php" name="LIKEform" id="LIKEform">
  <fieldset>
    <legend>Select Search Term for the Region</legend>
<p style="text-align:justify;">*Required Field</p>


<label for="searchTerm">*Term:<br/><i>(Specify a <u>Region</u>.  "Midwest", "Northeast", "South", and "West" are the designated regions.)<i/><br/></label><input type="text" name="searchTerm" id="searchTerm" required size="30"/> <br><br />




<input type="submit" name="viewR" id="viewR" value="View Results" />



  </fieldset>
</form>




<?php

}

else
{


	$userInput1 = strtoupper($_POST['searchTerm']);





$dbuser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbpass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');

$host = getenv('OPENSHIFT_MYSQL_DB_HOST');

$port = getenv('OPENSHIFT_MYSQL_DB_PORT');



$serverConn=mysql_connect($host,$dbuser,$dbpass) or die ('Error connecting to mysql');









$db_selected = mysql_select_db('bondsportfolio', $serverConn);
if (!$db_selected) {
    die ('Cannot use database');
}

else
{







 echo '<br/>';

     	$SpecsQuery1 = mysql_query("SELECT Region, State,Division, Rate from 
 unEmpRate WHERE Region LIKE '$userInput1%' ORDER BY State, Rate");





echo '<table border="1">';
echo '<th>Region</th>';
echo '<th>State</th>';
echo '<th>Division</th>';
 echo '<th>Rate</th>';

while ($row = mysql_fetch_assoc($SpecsQuery1)) {
echo '<tr>';


echo '<td>';
    echo $row['Region'].'<br />';

echo '</td>';







echo '<td>';
    echo $row['State'].'<br />';

echo '</td>';





echo '<td>';
    echo $row['Division'].'<br />';

echo '</td>';









echo '<td>';
    echo $row['Rate'].'<br />';

echo '</td>';




echo '</tr>'; 





}

mysql_close();
 
?> 


</table>


<br/>
<br/>


      <button type="button" onClick="location.href='report_UserInput_LIKE_Programming2.php'">Return to Form</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 
<button type="button" onClick="location.href='Reports.php'">Return to Reports</button>















<?php
}









}




?>




















</div>







</body>
</html>
