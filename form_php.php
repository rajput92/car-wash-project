<?php
include 'dbConfig.php';

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$ssn = $_POST['ssn'];
$visa = $_POST['visa'];
$cManager = $_POST['cManager'];
$cphone = $_POST['cphone'];
$maritial = $_POST['maritial'];
$insurance = $_POST['insurance'];
$income = $_POST['income'];
$asset = $_POST['asset'];

$mStatus = $_POST['mStatus'];
$hospitalizatioin = $_POST['hospitalizatioin'];
$pHistory = $_POST['pHistory'];
$cardivascular = $_POST['cardivascular'];
$hearingaid	 = $_POST['hearingaid'];
$cane = $_POST['cane'];
$walker = $_POST['walker'];
$wheelchair = $_POST['wheelchair'];
$incontinent = $_POST['incontinent'];
$continent = $_POST['continent'];
$bathing = $_POST['bathing'];
$dressing = $_POST['dressing'];
$feeding = $_POST['feeding'];
$lighhouse = $_POST['lighhouse'];
$mealpreparation = $_POST['mealpreparation'];
$hfall = $_POST['hfall'];
$fall = $_POST['fall'];
$date = $_POST['date'];

$fDoctor = $_POST['fDoctor'];
$familydoctorphone = $_POST['familydoctorphone'];
$doctorfaxphone = $_POST['doctorfaxphone'];
$familydoctoraddress = $_POST['familydoctoraddress'];
$cPerson	 = $_POST['cPerson'];
$relationship = $_POST['relationship'];
$cellphone = $_POST['cellphone'];
$homephone = $_POST['homephone'];
$workphone = $_POST['workphone'];
$bPerson = $_POST['bPerson'];
$brelationship = $_POST['brelationship'];
$bcellphone = $_POST['bcellphone'];
$adultsinfo = $_POST['adultsinfo'];
$childrenInfo = $_POST['childrenInfo'];
$petsinfo = $_POST['petsinfo'];
$petsNo = $_POST['petsNo'];
$petsKind = $_POST['petsKind'];


$sql ="INSERT INTO `patientInfo` (`namePatient`, `dob`, `gender`, `address`, `phonePatient`, `countryPatient`, `ssnPatient`, `visaStatusPatient`, `caseManagerName`, `caseManagerPhone`, `maritialStatusPatient`, `insurancePatient`, `income($)`, `asset`, `mentalStatus`, `pastMedicalHistory`, `hospitalization`, `cardiovascular`, `neuro_hearing`, `ambulatio_cane`, `ambulatio_walker`, `ambulatio_wheelChair`, `incontinent`, `continent`, `bathing`, `dressing`, `feeding`, `lighhouse`, `mealpreparation`, `historyoffall`, `history_fall`, `date_fall`, `familyDoctorName`, `familyDoctorphone`, `familyDoctorFax`, `familyDoctoraddress`, `contactPersonName`, `contactPersonrelation`, `contactPersonphone`, `contactPersonHomephone`, `contactPersonWorkphone`, `backupPersonName`, `backupPersonRelatioin`, `backupPersonPhone`, `adultsNo`, `childerNo`, `petsInfo`, `petsNo`, `petsKind`, `uid`) VALUES ('$name', '$dob', '$gender', '$address', '$phone', '$country', '$ssn', '$visa', '$cManager', '$cphone', '$maritial', '$insurance', '$income', '$asset', '$mStatus', '$hospitalizatioin', '$pHistory', '$cardivascular', '$hearingaid', '$cane', '$walker','$wheelchair', '$incontinent', '$continent', '$bathing', '$dressing', '$feeding', '$lighhouse', '$mealpreparation', '$hfall', '$fall', '$date', '$fDoctor', '$familydoctorphone', '$doctorfaxphone', '$familydoctoraddress', '$cPerson', '$relationship', '$cellphone', '$homephone', '$workphone', '$bPerson', '$brelationship', '$bcellphone', '$adultsinfo', '$childrenInfo', '$petsinfo', '$petsNo', '$petsKind','rajput1914')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

