<?php
include 'dbConfig.php';
session_start();
$uid=$_SESSION['uid'];
	$sql = "SELECT * from patientinfo where uid='$uid'";
	$result=mysqli_query($conn,$sql);
	$row=$result->fetch_assoc();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Fundraiser.css"/>
</head>

<body style="max-width:100%; max-height:100%;">
	<select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="vw">VW</option>
  <option value="audi" selected>Audi</option>
</select>

	<p style="padding: 5px 5px 5px 5px;">UserID : <?php echo $row['uid'];?></p>
	<p style="padding: 5px 5px 5px 5px;">Name of Patient : <?php echo $row['namePatient']; ?></p>
	<p style="padding: 5px 5px 5px 5px;">Date of Birth : <?php echo $row['dob']; ?><p>
	<p style="padding: 5px 5px 5px 5px;">Sex : <?php echo $row['gender'];?></p>
	<p style="padding: 5px 5px 5px 5px;">Address : <?php echo $row['address'];?></p>
	<p style="padding: 5px 5px 5px 5px;">Phone : <?php echo $row['phonePatient']; ?></p>
	<p style="padding: 5px 5px 5px 5px;">Country : <?php echo $row['countryPatient']; ?></p>
	<p style="padding: 5px 5px 5px 5px;">SSN : <?php echo $row['ssnPatient'];?></p>
	<p style="padding: 5px 5px 5px 5px;">Visa Status : <?php echo $row['visaStatusPatient'];?></p> 
	<p style="padding: 5px 5px 5px 5px;">Case Manager : <?php echo $row['caseManagerName']; ?></p>
	<p style="padding: 5px 5px 5px 5px;">Phone :<?php  echo $row['caseManagerPhone']; ?></p>
	<p style="padding: 5px 5px 5px 5px;">Maritial Status : <?php echo $row['maritialStatusPatient']; ?></p>
	<p style="padding: 5px 5px 5px 5px;">Insurance : <?php echo $row['insurancePatient'];?></p>
	<p style="padding: 5px 5px 5px 5px;">Income : <?php echo $row['income($)'];?></p>
	Asset : <?php echo $row['asset'];?></p>
	Mental Status : <?php echo $row['mentalStatus']; ?></p>
	Past Medical Histoy : <?php echo $row['pastMedicalHistory'];?></p> 
	Hospitalization : <?php echo $row['hospitalization'];?></p>
	Cardiovascular : <?php echo $row['cardiovascular'];?></p>
	Neurological/sensory : Hearing Aid : <?php echo $row['neuro_hearing'];?></p>
	Musculoskeletal : Ambulation With: Cane : <?php echo $row['ambulatio_cane']; ?></p>
	Walker : <?php echo $row['ambulatio_walker']; ?></p>
	Wheel Chair : <?php echo $row['ambulatio_wheelChair'];?></p> 
	Genitourinary : Incontinent : <?php echo $row['incontinent'];?></p>
	Continent : <?php echo $row['continent'];?></p>
	Bathing : <?php echo $row['bathing'];?></p>
	Dressing : <?php echo $row['dressing']; ?></p>
	Feeding : <?php echo $row['feeding'];?></p>
	LightHouse Keeping : <?php echo $row['lighhouse']; ?></p>
	Meal Preparation : <?php echo $row['mealpreparation']; ?></p>
	History of Fall : <?php echo $row['historyoffall'];?></p>
	History of Fall : <?php echo $row['history_fall'];?></p>
	Date: : <?php echo $row['date_fall'];?></p>
	Family Doctor: : <?php echo $row['familyDoctorName']; ?></p>
	Phone: <?php echo $row['familyDoctorphone']; ?></p>
	Fax : <?php echo $row['familyDoctorFax'];?></p>
	Address: : <?php echo $row['familyDoctoraddress'];?></p> 
	Contact Person: : <?php echo $row['contactPersonName'];?></p>
	Relationship: : <?php echo $row['contactPersonrelation']; ?></p>
	Cell Phone : <?php echo $row['contactPersonphone'];?></p>
	Home Phone : <?php echo $row['contactPersonHomephone']; ?></p>
	Work Phone : <?php echo $row['contactPersonWorkphone'];?></p>
	Back-Up Person : <?php echo $row['backupPersonName'];?></p>
	Relationship : <?php echo $row['backupPersonRelatioin']; ?></p>
	Cell Phone : <?php echo $row['backupPersonPhone'];?></p>
	How many adults live in the household? : <?php echo $row['adultsNo'];?></p>
	How many children under age of 18? : <?php echo $row['childerNo']; ?></p>
	Are their pets in household? : <?php echo $row['petsInfo'];?></p>
	If so how many? : <?php echo $row['petsNo'];?></p>
	What kind? : <?php echo $row['petsKind']; ?></p>
	
	If you want to make changes in form,please click below: </p>
	<!---
	<form action="Fundraiser.php">
	<button type='submit' name='commentSubmit' style='border:none;color:white;padding:15px 32px; text-algin:center;display:inlin-block;background-color:#4d668e'>Edits</button>
	</form>
	-->
	<form action="logout.php" >
	<button type='submit' name='commentSubmit' style='border:none;color:white;padding:15px 32px; text-algin:center;display:inlin-block;background-color:#4d668e'>LOG OUT</button>
</form>

</body>
</html>
?>