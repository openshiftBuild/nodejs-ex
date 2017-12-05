<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Report: SUM(), GROUP BY, HAVING</title>

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
<h3 style="text-align:center;">Populations Grouped By Region and Displayed According to User Criteria</h3>


<p>Display total population by region according to criteria set by the user.</p>

<p>Syntax:<br/>
SELECT Region, SUM(Population) 
FROM  `statePop` 
GROUP BY Region
HAVING SUM(Population) >= '$userInput2'
</p>









<?php

if(empty($_POST['populationInput']))


{

?>



<br/>
<br/>

<div id="ReturnButton" style="margin-left:80%;"> 
<button type="button" onClick="location.href='Reports.php'">Return to Reports</button>
</div>
<form method="post" action="report_UserInput_pMatch_pReplace_Sum_GroupBy_Having.php" name="popform" id="popform">
  <fieldset>
    <legend>Search for <u>Regions</u> with a Specified <u>Minimum</u> Population</legend>
<p style="text-align:justify;">*Required Field</p>


<label for="populationInput">*Minimum Population:<br/><i>(Enter with or without commas)</i><br/></label><input type="text" name="populationInput" id="populationInput" required size="30"/> <br><br />




<input type="submit" name="viewR" id="viewR" value="View Results" />



  </fieldset>
</form>




<?php

}

else
{


	$test1_userInput = $_POST['populationInput'];

if(preg_match("/^[0-9.,]+$/",$test1_userInput))

{
 







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



$test2_userInput = $test1_userInput;

$userInput2= preg_replace("/[^0-9.]/", "", $test2_userInput);


 echo '<br/>';



     	$SpecsQuery1 = mysql_query("SELECT Region, SUM(Population) 
FROM  `statePop` 
GROUP BY Region
HAVING SUM(Population) >= '$userInput2'");


    if(mysql_num_rows($SpecsQuery1) == 0)

{

?>

<br/>
<br/>



<p style="color:Red;font-size:24px;text-align:center;">Your search produced 0 (zero) results.</p>
<br/>
<br/>
<button type="button" onClick="location.href='report_UserInput_pMatch_pReplace_Sum_GroupBy_Having.php'">Try Again</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 
<button type="button" onClick="location.href='Reports.php'">Return to Reports</button>





<?php
}

else
{

 echo '<br/>';

 echo '<br/>';

echo 'Your Input: ';
echo $test1_userInput;
 echo '<br/>';

 echo '<br/>';






echo '<table border="1">';

echo '<th>Region</th>';
echo '<th>SUM()</th>';


while ($row = mysql_fetch_assoc($SpecsQuery1)) {
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




<br/>
<br/>

      <button type="button" onClick="location.href='report_UserInput_pMatch_pReplace_Sum_GroupBy_Having.php'">Return to Form</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 
<button type="button" onClick="location.href='Reports.php'">Return to Reports</button>





<?php
}

}


}


else
{

echo '<br/>';
echo '<br/>';


echo 'There was a problem with your input.  Only digits, commas, and decimal points are allowed.  Please try again.';


echo '<br/>';
echo '<br/>';
?>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onClick="location.href='report_UserInput_pMatch_pReplace_Sum_GroupBy_Having.php'">Try Again</button>
</p>
<?php
}

}
?>








</div>






<footer style='width:100%;float:left;'>
<hr style="height:3px;background-color:#030321;"/>
<p style='text-align:center;'>Natasha Bonds     |     Professional Portfolio     |     908.764.2432     |     bonds.portfolio@gmail.com</p>     
</footer>


</body>
</html>
