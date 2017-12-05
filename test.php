<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Characters</title>

<style>






body {

background-color:Green;

}



</style>







</head>






<body>





<div id="ColorBandTop">






<menu type="toolbar">



  <menuitem>
    <menu label="File">


      <button type="button" onClick="location.href='index.php'">Welcome</button>

      <button type="button" onClick="location.href='test.php'">Characters</button>

      <button type="button" onClick="location.href='admin.php'">Admin</button>


      <button type="button" onClick="location.href='contactMeMom.php'">Contact Me (my mom)</button>
    </menu>
  </menuitem>

</div>

<div id='column1' style='width:450px;float:left; height:800px;margin-left: 10px;'>



<br/>
<h3 style="text-align:center;">Character Profiles</h3>



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

     	$SpecsQuery1 = mysql_query("SELECT Dimension,Name, Description,Goal from 
 test ORDER BY Dimension, Name");





echo '<table border="1">';

echo '<th>Dimension</th>';
echo '<th>Name</th>';
 echo '<th>Description</th>';
 echo '<th>Goal</th>';

while ($row = mysql_fetch_assoc($SpecsQuery1)) {
echo '<tr>';


echo '<td>';
    echo $row['Dimension'].'<br />';

echo '</td>';







echo '<td>';
    echo $row['Name'].'<br />';

echo '</td>';





echo '<td>';
    echo $row['Description'].'<br />';

echo '</td>';





echo '<td>';
    echo $row['Goal'].'<br />';

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




<div id='column2' style='width:350px;float:left; height:800px;margin-left: 20%;'>







<br/>
<br/>
















<img src='yuto_yuya.jpg'  width="300px" height="147px">

<br/>


<br/>
<br/>





</div>




</body>
</html>
