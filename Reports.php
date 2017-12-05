<!doctype html>
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


<div id='column1' style='width:90%;float:left; height:1950px;margin-left: 10px;'>


<br/>
<br/>
	<fieldset style="border-color:#8DB600;">

    <legend>Unemployment Rates by State</legend>
<br/>



      <button type="button" onClick="location.href='specs.php'">View Table Specs</button>





      <button type="button" onClick="location.href='tableData.php'">View Data</button>



</fieldset>

<br/>
<br/>
	<fieldset style="border-color:#8DB600;">


    <legend>State Populations</legend>


<br/>
      <button type="button" onClick="location.href='specs_Pop.php'">View Table Specs</button>

      <button type="button" onClick="location.href='tableData_Pop.php'">View Data</button>

</fieldset>







<br/>
<br/>
	<fieldset style="border-color:#8DB600;">


    <legend>Special Reports</legend>


<br/>

<p>Joining Tables using JOIN...ON</p><br/>
      <button type="button" onClick="location.href='report_JoinOn.php'">Run Report</button>

<br/>
<br/>

<p>Using COUNT()</p><br/>
      <button type="button" onClick="location.href='report_Count_States.php'">Run Report</button>
<br/>


<br/>

<p>Using COUNT() and GROUP BY</p><br/>
      <button type="button" onClick="location.href='report_Count_GroupBy.php'">Run Report</button>

<br/>
<br/>


<p>Using SUM() and GROUP BY</p><br/>

      <button type="button" onClick="location.href='report_Sum_GroupBy.php'">Run Report</button>

<br/>
<br/>
<p>Using SUM(), GROUP BY, and HAVING</p><br/>

      <button type="button" onClick="location.href='report_Sum_GroupBy_Having.php'">Run Report</button>

<br/>
<br/>

<p>Using AVG() and GROUP BY</p><br/>

      <button type="button" onClick="location.href='report_AVG_GROUP BY.php'">Run Report</button>



<br/>

<br/>


</fieldset>






<br/>
<br/>










	<fieldset style="border-color:#8DB600;">


    <legend>User Input</legend>


<br/>

<p>Report: Allows Users to Specify Population</p><br/>
      <button type="button" onClick="location.href='report_UserInput_pMatch_pReplace_Sum_GroupBy_Having.php'">Go to Form</button>




<br/>

<p>Report: Allows Users to Specify a Search Term for Region.  A <u>Drop-Down Menu</u> is Used to Avoid Errors in User Input.</p><br/>
      <button type="button" onClick="location.href='report_UserInput_LIKE_DropDown.php'">Go to Form</button>


<br/>

<p>Report: Allows Users to Specify a Search Term for Region.  Errors in User Input is Handled <u>Programmatically</u>.</p><br/>
      <button type="button" onClick="location.href='report_UserInput_LIKE_Programming.php'">Go to Form</button>




<br/>

<p>Report: Allows Users to Specify a Search Term for Region and Supply a Replacement Term.</p><br/>
      <button type="button" onClick="location.href='report_UserInput_REPLACE.php'">Go to Form</button>






<br/>

<br/>







</fieldset>


<br/>

<br/>







	<fieldset style="border-color:#8DB600;">


    <legend>Formatting Data Presented in Reports</legend>


<br/>

<p>Reformatted Report: Comma-Separated Populations</p><br/>
      <button type="button" onClick="location.href='report_FormatFunction.php'">Run Report</button>

<br/>





<br/>

<p>Reformatted Report: Displaying Numbers in a Different Format Using Format()</p><br/>
      <button type="button" onClick="location.href='report_FormatFunction2.php'">Run Report</button>

<br/>

<p>Reformatted Report: Displaying Dates in a Different Format Using Date_Format()</p><br/>
      <button type="button" onClick="location.href='report_DATE_FORMAT.php'">Run Report</button>







<br/>

<br/>


</fieldset>

</div>





</body>
</html>
