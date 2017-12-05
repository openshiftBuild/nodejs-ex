-<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Reports</title>

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
      type="image/png" 
      href="
AKA_Favicon.png">





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






	 $checkusername = mysql_query("
SELECT Population, a.Year, a.State, Rate
FROM  `statePop` a
JOIN unEmpRate b ON ( a.State = b.State ) 
AND a.Year LIKE  '%2016%')");













echo '<table border="1">';
echo '<th>Population</th>';
 echo '<th>Year</th>';
 echo '<th>State</th>';
 echo '<th>Rate</th>';



while ($row = mysql_fetch_assoc($checkusername)) {
echo '<tr>';
echo '<td>';
    echo $row['Population'].'<br />';

echo '</td>';



echo '<td>';
    echo $row['Year'].'<br />';

echo '</td>';





echo '<td>';
    echo $row['State'].'<br />';

echo '</td>';




echo '<td>';
    echo $row['Rate'].'<br />';

echo '</td>';



echo '</tr>'; 




}





     
     

mysql_close();
 
?> 


</table>




















<footer style='width:100%;float:left;'>
<hr/>
<p style='text-align:center;'>Natasha Bonds     |     Professional Portfolio     |     908.764.2432     |     bonds.portfolio@gmail.com</p>     
</footer>


</body>
</html>
