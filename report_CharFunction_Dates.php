<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Report: DATE_FORMAT()</title>

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

<div id='column1' style='width:45%;float:left; height:800px;margin-left: 10px;'>



<br/>
<h3 style="text-align:center;">Formatting Dates Using DATE_FORMAT()</h3>

<p>Reformatting the year supplied in the statePop table by Using DATE_FORMAT()</p>

<p>Syntax:<br/>SELECT Region, State, Population, Year, DATE_FORMAT(Year,'%Y') 'Year Reformatted'  
FROM  statePop</p>

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

     	$SpecsQuery1 = mysql_query("SELECT Region, State, Population, Year, DATE_FORMAT(Year,'%Y') 'Year Reformatted'  
FROM  statePop");





echo '<table border="1">';

echo '<th>Region</th>';

echo '<th>State</th>';
echo '<th>Population</th>';
echo '<th>Year</th>';
echo '<th>Year Formatted</th>';






while ($row = mysql_fetch_assoc($SpecsQuery1)) {
echo '<tr>';


echo '<td>';
    echo $row['Region'].'<br />';

echo '</td>';


echo '<td>';
    echo $row['State'].'<br />';

echo '</td>';


echo '<td>';
    echo $row['Population'].'<br />';

echo '</td>';


echo '<td>';
    echo $row['Year'].'<br />';

echo '</td>';


echo '<td>';
    echo $row['Year Reformatted'].'<br />';

echo '</td>';





echo '</tr>'; 





}

mysql_close();
 
?> 


</table>



<?php
}







?>








</div>





<div id='column2' style='width:400px;float:left; height:800px;margin-left: 20%;background-color:#070743'>







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


</div>






</body>
</html>
