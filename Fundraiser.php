<?php
session_start();
		date_default_timezone_set('PST8PDT');
	include 'dbConfig.php';
	include 'comments.php';
	$uid = $_SESSION['uid'];
	$sql = "SELECT * from patientinfo where uid='$uid'";
	$result=mysqli_query($conn,$sql);
	if(!isset($_SESSION['uid'])){
		
		header("Location: login.php");
		
	}
	
if ($result && mysqli_num_rows($result) == 1){
	
	header("Location: retriveForm.php");
}

	

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Fundraiser.css"/>
</head>

<body style="max-width:100%; max-height:100%;">
<img src="image_1.jpg" style="z-index:-1;min-height: 100%;min-width: 1024px;width: 100%;height: auto;position: fixed;top: 0;left: 0; opacity:0.2; ">

<div style=" margin: 5% 5% 5% 5%; position:absolute; max-width:100%">
  <form id="patient_form" action="form_php.php" method="post" >

	<div style="display:block; position:relative; max-width:100%;">
	
	<fieldset>
    <legend >General Info</legend>
	<div style="width:100%; float:left;position:relative;">
    <label for="name">Name of Patient</label>
    <input type="text" id="name" name="name" placeholder="enter name of the patient">
	</div>

	<div style="width:50%; float:left;position:relative;">
    <label for="dob">Date of Birth</label>
    <input type="text" id="dob" name="dob" placeholder="enter date of birth of the patient">
	</div>
	

	
	<div style="width:50%;  float:left;position:relative;">
	<label for="Sex">Sex:</label></br>
    <input type="radio" id="male" name = "gender" value="male" checked>Male
	<input type="radio" id="female" name = "gender" value="female">Female
	<input type="radio" id="other" name = "gender" value="other">other</br>
	</div>
	
	<div style="width:100%; float:left;position:relative;">
	<label for="address">Address</label>
	<textarea name="address" form="patient_form">Enter address here...</textarea>
	</div>

	<div style="width:47.5%; float:left;position:relative;">
	<label for="phone">Phone#</label>
    <input type="text" id="phone" name="phone" >
	</div>

	<div style="width:47.5%; float:left;position:relative; margin-left:5%">
	<label for="country">Country</label>
    <input type="text" id="country" name="country" placeholder="enter name of country">
	</div>

	<div style="width:47.5%;float:left;position:relative;">
	<label for="ssn">SSN#</label>
    <input type="text" id="ssn" name="ssn">
	</div>
	
	<div style="width:47.5%; float:left;position:relative; margin-left:5%">
    <label for="visa"> Visa Status</label>
    <input type="text" id="visa" name="visa">
	</div>
	
	<div style="width:47.5%;float:left;position:relative;">
	<label for="cManager">Case Manager</label>
    <input type="text" id="cManager" name="cManager">
	</div>
	
	<div style="width:47.5%; float:left;position:relative; margin-left:5%">
	<label for="phone">Phone#</label>
    <input type="text" id="cphone" name="cphone" >
	</div>
	
	<div style="width:47.5%;float:left;position:relative;">
	<label for="maritial"> Maritial Status</label>
    <input type="checkbox" id="Maried" name = "maritial" value="Maried" checked>Maried
	<input type="checkbox" id="widowed" name = "maritial" value="widowed">Widowed</br>
	</div>
	
	<div style="width:47.5%; float:left;position:relative; margin-left:5%">
	<label for="insurance">Insurance</label>
    <input type="checkbox" id="medicad" name = "insurance" value="medicad" checked>Medicad 
	<input type="checkbox" id="longTerm" name = "insurance" value="longTerm">Long term care Ins.</br>
	</div>
	
	<div style="width:47.5%;float:left;position:relative;">
	<label for="income">Income</label>
    <input type="text" id="income" name="income" placeholder="$ /month">
	</div>
	
	<div style="width:47.5%; float:left;position:relative; margin-left:5%">
	<label for="asset">Asset</label>
    <input type="text" id="asset" name="asset" placeholder="$">
	</div>
	
	</fieldset><br>
	<fieldset>
    <legend>Patient Condition</legend>
	<label for="pCondition"></label>
	
	<div style="width:47.5%;float:left;position:relative;">
	<label for="mStatus">Mental Status</label>
    <input type="text" id="mStatus" name="mStatus" >
	</div>
	
	<div style="width:47.5%;float:left;position:relative;margin-left:5%">
	<label for="pHistory">Past Medical Histoy </label>
    <input type="checkbox" id="hospitalizatioin" name = "hospitalizatioin" value="yes" checked>Hospitalization</br>
	<textarea name="pHistory" form="patient_form">If yes, than enter any Medical Histoy</textarea>
	</div>
	
	
	<fieldset>
	<legend>DX:</legend>
	<div style="width:100%;float:left;position:relative;">
	<label for="pCondition"></label>
    Cardiovascular<input type="text" id="cardivascular" name="cardivascular" >
	</div>
	
	<div style="width:40%;float:left;position:relative;">
	<label for="mStatus">Neurological/sensory</label>
    <input type="checkbox" id="hearingaid" name = "hearingaid" value="yes" >Hearing Aid</br>
	</div>
	
	<div style="width:50%;float:left;position:relative; ">
	<label for="mStatus">Musculoskeletal : Ambulation With</label>
    <input type="checkbox" id="cane" name = "cane" value="yes" >Cane
	<input type="checkbox" id="walker" name = "walker" value="yes" >Walker
	<input type="checkbox" id="walker" name = "wheelchair" value="yes" >Wheel Chair
	</div>
	
	<div style="width:40%;float:left;position:relative; ">
	<input type="checkbox" id="fall" name = "hfall" value="yes" >History of Fall</br>
	<input type="text" id="fall" name = "fall" placeholder="if yes, please enter">
	</div>
	
	<div style="width:45%;float:left;position:relative; margin-top:2.2%;margin-left:5%;">
	Date:<input type="text" id="date" name = "date" placeholder="date of fall">
	</div>
	
	<div style="width:100%;float:left;position:relative; ">
	Genitourinary : <input type="checkbox" id="incontinent" name = "incontinent" value="yes" >Incontinent
					<input type="checkbox" id="continent" name = "continent" value="yes" >Continent</br>
	</div>
	
	<div style="width:100%;float:left;position:relative; ">
	Personal Care : 
	ADL/s: <input type="checkbox" id="bathing" name = "bathing" value="yes" >Bathing
	<input type="checkbox" id="dressing" name = "dressing" value="yes" >Dressing
	<input type="checkbox" id="feeding" name = "feeding" value="yes" >Feeding
	
	<input type="checkbox" id="lh" name = "lighhouse" value="yes" >LightHouse Keeping
	<input type="checkbox" id="mp" name = "mealpreparation" value="yes" >Meal Preparation
	</div>
	
	</fieldset><br>
	</fieldset><br>
	
	<fieldset>
    <legend>Family Doctor Info.</legend>
	Family Doctor: <input type="text" id="fDoctor" name = "fDoctor"  placeholder="family doctor name">
	Phone#: <input type="text" id="phone" name = "familydoctorphone" placeholder="family doctor phone" >
	Fax#: <input type="text" id="phone" name="doctorfaxphone"  placeholder="family doctor fax">
	Address:<textarea name="familydoctoraddress" form="patient_form">Enter address here...</textarea>
	</fieldset><br>
	
	<fieldset>
    <legend>Contact Person Info.</legend>
	Contact Person: <input type="text" id="cPerson" name = "cPerson"  placeholder="contact person name">
	Relationship: <input type="text" id="relationship" name = "relationship" placeholder="contact person relation" >
	Cell Phone#: <input type="text" id="cellphone" name = "cellphone"  placeholder="contact person phone">.
	
	
	Home Phone#: <input type="text" id="homephone" name = "homephone"  >
	Work Phone#: <input type="text" id="workphone" name = "workphone"  >
	</fieldset><br>
	
	<fieldset>
    <legend>Back-Up Person Info.</legend>
	Back-Up Person: <input type="text" id="bPerson" name = "bPerson"  placeholder="backup person name">
	Relationship: <input type="text" id="brelationship" name = "brelationship"  placeholder="backup person relation">
	Cell Phone#: <input type="text" id="bcellphone" name = "bcellphone" placeholder="backup person phone" >
	</fieldset><br>
	
	<fieldset>
    <legend></legend>
	How many adults live in the household?<input type="text" id="adultsinfo" name="adultsinfo" ></textarea>
	How many children under age of 18?<input type="text" name="childrenInfo" ></textarea>
	Are their pets in household?<input type="text" id="petsinfo" name="petsinfo" ></textarea>
	If so how many?<input type="text" id="petsNo" name="petsNo" ></textarea>
	What kind?<input type="text" id="petsKind"name="petsKind" ></textarea>
	</fieldset><br>

  
    <input type="submit" name="submit" value="Submit">

  </form>
  </div>
<?php
echo "<form method='POST' action='".setComment($conn)."'>
<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
<textarea name='message'></textarea><br>
<button type='submit' name='commentSubmit' style='border:none;color:white;padding:15px 32px; text-algin:center;display:inlin-block;background-color:#4d668e'>Comments</button>
</form>";

getComments($conn);

?>
<form action="logout.php" >
	<button type='submit' name='commentSubmit' style='border:none;color:white;padding:15px 32px; text-algin:center;display:inlin-block;background-color:#4d668e'>LOG OUT</button>
</form>

</body>
</html>
