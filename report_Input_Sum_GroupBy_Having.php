<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Report: User Input for SUM(), GROUP BY, HAVING</title>

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




      <button type="button" onClick="location.href='Welcome.php'">Welcome</button>

      <button type="button" onClick="location.href='Reports.php'">Reports</button>

   <button type="button" onClick="location.href='http://bondsportfolio-bondsapps.rhcloud.com/'">Return to Overview</button>

   <button type="button" onClick="location.href='http://bondsportfolio.webstarts.com/'">Website (Static)</button>



      <button type="button" onClick="location.href='contactMe.php'">Contact Me</button>


    </menu>
  </menuitem>

</div>

<?php

if(!empty($_POST['populationInput']))
{

	$userPop = $_POST['populationInput'];





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

     	$Query1 = mysql_query("SELECT Region, SUM(Population) 
FROM  statePop 
GROUP BY Region
HAVING SUM(Population) >'".$userPop."'");





echo '<table border="1">';

echo '<th>Region</th>';
echo '<th>SUM()</th>';


while ($row = mysql_fetch_assoc($Query1)) {
echo '<tr>';


echo '<td>';
    echo $row['Region'].'<br />';

echo '</td>';


echo '<td style="text-align:center;">';
    echo $row['SUM(Population)'].'<br />';

echo '</td>';



echo '</tr>'; 





}

mysql_close();
 
?> 


</table>



<?php
}







?>




















}


----------------

else
{

?>


<form method="post" action="report_Input_Sum_GroupBy_Having.php" name="popform" id="popform">
  <fieldset>
    <legend>Select a Population Size</legend>
<p style="text-align:justify;">*Required Field</p>


<label for="populationInput">*Population:<br/></label><input type="text" name="populationInput" id="populationInput" required size="30"/> <br><br />




<input type="submit" name="viewR" id="viewR" value="View Results" />



  </fieldset>
</form>







<?php


}
<br/>
<br/>




<br/>
<h3 style="text-align:center;">SUM(), GROUP BY, and HAVING</h3>

<p>User Input for SUM(), GROUP BY, and HAVING</p>

<p>Syntax:<br/>SELECT Region, SUM( Population ) 
FROM statePop GROUP BY Region HAVING SUM( Population ) > [User Input Here]</p>

<br/>












<br/>
<br/>











<img src='BlueBackground_DB.jpg' width="400px" height="200px" margin-left="2px"/>
<br/>
<br/>
<br/>


<img src='WelcomePHP_Green_Darker.jpg' width="400px"  height="100px" margin-left="2px"/>
<br/>
<br/>
<br/>

<img src='WelcomePHP_Green_Darker.jpg' width="400px"  height="100px" margin-left="2px"/>
<br/>
<br/>
<br/>
<img src='WelcomePHP_Green_Darker.jpg' width="400px"  height="100px" margin-left="2px"/>











</body>
</html>
