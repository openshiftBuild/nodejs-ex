<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Contact Me</title>


<style>






body {

background-color:Blue;

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






<div id='column2' style='width:450px;float:left; height:800px;margin-left: 20%;'>


<?php
if(!empty($_POST['message']))
{








	$fname = $_POST['fname'];
	$lname = $_POST['lname'];

	$email = $_POST['email'];

    $message = $_POST['message'];





$dbuser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbpass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');

$host = getenv('OPENSHIFT_MYSQL_DB_HOST');

$port = getenv('OPENSHIFT_MYSQL_DB_PORT');



$serverConn=mysql_connect($host,$dbuser,$dbpass) or die ('Error connecting to mysql');





$db_selected = mysql_select_db('bondsportfolio', $serverConn);
if (!$db_selected) {
    die ('Cannot use database');
}


     	$registerquery = mysql_query("INSERT INTO contactMeMom (fName,lName,EmailAddress,Message) VALUES(





'".$fname."',
'".$lname."',
'".$email."',


'".$message."')");


?>

<br/>
<br/>
<br/>
<h1 style="color:#F7F9FA;text-align:center">Message Received.</br>You will be contacted shortly.</h1>


<?php

}



else
{
	?>
    
   <h1>Contact Me</h1>
    
   <p>Please enter your details below.</p>
    
	<form method="post" action="contactMeMom.php" name="contactUsform" id="contactUsform">


	<fieldset style="border-color:#B62e00;">
<p>Questions and Comments</p>
   <p style="font-style:italic;">(*) denotes a required field.</p> <br /> 







<br />




<label for="fname">*First Name:   </label><br /><input type="text" name="fname" id="fname" required><br /><br /><br />


		<label for="lname">*Last Name:   </label><br /><input type="text" name="lname" id="lname" required /><br /><br /><br />

		<label for="email">*Email:   </label><br /><input type="text" name="email" id="email" required /><br/><br /><br />


<label for="message" required>*Message:   </label><br />



<textarea rows="4" cols="50" name="message" id="message" required></textarea>


<br /><br />
<br />


		<input type="submit" name="contact" id="contact" value="Contact Me" />
	</fieldset>


	</form>
    
   <?php
}
?>


</div>


<div id='column2' style='width:350px;float:left; height:800px;margin-left: 20%;'>







<br/>
<br/>
















<img src='yuya.jpg'   width="300px" height="175px">
<br/>
<br/>
<br/>


</div>






</body>
</html>
