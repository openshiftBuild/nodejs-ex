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

if(empty($_POST['adminCode']))


{

?>



<br/>
<br/>



<form method="post" action="addProfile_POST.php" name="profileform" id="profileform">
  <fieldset>
    <legend>New Character</legend>
<p style="text-align:justify;">*Required Field</p>


<label for="adminCode">*Admin's Code:<br/></label><input type="text" name="adminCode" id="adminCode" required size="30"/> <br><br />




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






 echo 'hi';


}


else
{
echo 'bye';
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
