<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Report: COUNT()</title>

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
<h3 style="text-align:center;">COUNT()</h3>

<p>Using COUNT() to count the number of states listed in the table</p>

<p>Syntax:<br/>SELECT count(state) FROM statePop;</p>

<div id="ReturnButton" style="margin-left:80%;"> 
<button type="button" onClick="location.href='Reports.php'">Return to Reports</button>
</div>


<?php













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

     	$SpecsQuery1 = mysql_query("select count(state) from statePop");





echo '<table border="1">';
echo '<th>COUNT()</th>';


while ($row = mysql_fetch_assoc($SpecsQuery1)) {
echo '<tr>';
echo '<td style="text-align:center;">';
    echo $row['count(state)'].'<br />';

echo '</td>';



echo '</tr>'; 





}

mysql_close();
 
?> 


</table>



<?php
}







?>


<p>Note: Also includes the District of Columbia.</p>





</div>



<footer style='width:100%;float:left;'>
<hr style="height:3px;background-color:#030321;"/>
<p style='text-align:center;'>Natasha Bonds     |     Professional Portfolio     |     908.764.2432     |     bonds.portfolio@gmail.com</p>     
</footer>


</body>
</html>
