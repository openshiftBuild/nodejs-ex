<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>New Characters</title>

<style>






body {
  color: #FFFFFF;
background-color:purple;
height:300px;
width: 100%; 

}



</style>

<link rel="Stylesheet" href="AppDiv.css" type="text/css" media="all"/>






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
<br/>

<br/>

<h1 style='text-align:center;font-style:italic;'>Add New Character Profile Information</h1>


<br/>

<br/>
<div id='column1' style='width:45%;float:left; height:800px;margin-left: 10px;'>

<?php

if(empty($_POST['name']))


{

?>



<br/>
<br/>



<form method="post" action="addProfile.php" name="profileform" id="profileform">
  <fieldset>
    <legend>New Character</legend>
<p style="text-align:justify;">*Required Field</p>


<label for="populationInput">*Admin's Code:<br/></label><input type="text" name="adminCode" id="adminCode" required size="30"/> <br><br />



<label for="populationInput">*Dimension:<br/></label><input type="text" name="dimension" id="dimension" required size="30"/> <br><br />



<label for="populationInput">*Name:<br/></label><input type="text" name="name" id="name" required size="30"/> <br><br />



<label for="description">*Description:<br/></label><input type="text" name="description" id="description" required size="30"/> <br><br />


<label for="description">*Goal:<br/></label><input type="text" name="goal" id="goal" required size="30"/> <br><br />





<input type="submit" name="submit" id="submit" value="Submit" />



  </fieldset>
</form>




<?php

}

else
{


	

	 $adminCode = $_POST['adminCode'];





if($adminCode==123)
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






	 $name = $_POST['name'];


	 $dimension = $_POST['dimension'];

	 $description = $_POS['description'];

	 $goal = $_POST['goal'];







 echo '<br/>';



$registerquery = mysql_query("INSERT INTO test (Name,Dimension,Description,Goal) VALUES(

'".$name."',

'".$dimension."',


'".$description."',


'".$goal."')");










 echo '<br/>';

 echo '<br/>';






mysql_close();


 
?> 






<br/>
<br/>

<p><b>Success!!!  You have entered a new character.</b></p>
<br/>

<br/>

      <button type="button" onClick="location.href='test.php'">Current Profiles</button>



<?php
}





}



else
{
?>
<br/>
<p style="font-size:18px;text-align:center;">There was a problem with your Admin Code.<br/>Please try again.</p><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <button type="button" onClick="location.href='addProfile.php'">Re-Enter Admin Code</button>

<?php



}





}

?>








</div>




<div id='column2' style='width:400px;float:left; height:800px;margin-left: 20%;'>







<br/>
<br/>











<img src='Monsters.jpg' width="292px" height="219px" margin-left="2px"/>
<br/>
<br/>
<br/>




</div>






</body>
</html>
