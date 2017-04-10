<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formintakepatient";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";
}

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

$sql ="INSERT INTO `general info` (`name`, `dateOfBirth`, `gender`, `address`, `phoneNo`, `country`, `ssn`, `visaStatus`, `caseManager`, `cPhone`, `maritialStatus`, `insurance`, `income`, `asset`) VALUES ('$name', '$dob', '$gender', '$address', '$phone', '$country', '$ssn', '$visa', '$cManager', '$cphone', '$maritial', '$insurance', '$income', '$asset')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$mStatus = $_POST['mStatus'];
$hospitalizatioin = $_POST['hospitalizatioin'];
$pHistory = $_POST['pHistory'];
$cardivascular = $_POST['cardivascular'];
$hearingaid	 = $_POST['hearingaid'];
$cane = $_POST['cane'];
$walker = $_POST['walker'];
$hfall = $_POST['hfall'];
$fall = $_POST['fall'];
$incontinent = $_POST['incontinent'];
$continent = $_POST['continent'];
$bathing = $_POST['bathing'];
$dressing = $_POST['dressing'];
$feeding = $_POST['feeding'];
$lighhouse = $_POST['lighhouse'];
$mealpreparation = $_POST['mealpreparation'];

$sqlp ="INSERT INTO `patientcondition` (`mStatus`, `hospitalizatioin`, `pHistory`, `cardivascular`, `hearingaid`, `cane`, `walker`, `hfall`, `fall`, `incontinent`, `continent`, `bathing`, `dressing`, `feeding`, `lighhouse`, `mealpreparation`) VALUES ('$mStatus', '$hospitalizatioin', '$pHistory', '$cardivascular', '$hearingaid', '$cane', '$walker', '$hfall', '$fall', '$incontinent', '$continent', '$bathing', '$dressing', '$feeding', '$lighhouse', '$mealpreparation')";

if ($conn->query($sqlp) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

