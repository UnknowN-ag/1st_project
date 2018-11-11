<?php

$con = new mysqli ("localhost","root","","admission");

if($con->connect_error){
	die("Connection Failed");
}
else{
	//echo "Connection Successfull";

	$Fname = $_POST['Fname'];
	$Mname = $_POST['Mname'];
	$Lname = $_POST['Lname'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$District = $_POST['District'];
	$State = $_POST['State'];
	$pincode = $_POST['pincode'];
	$Mnumber = $_POST['Mnumber'];
	$email = $_POST['email'];
	$IXpercent = $_POST['IXpercent'];
	$Xpercent = $_POST['Xpercent'];


	//echo "$Fname <br> $Mname <br> $Lname <br> $gender <br> $address <br> $city <br> $District <br> $State <br> $pincode <br> $Mnumber <br> $email <br> $IXpercent <br> $Xpercent";

	$query = "insert into form10 values (NULL , '$Fname','$Mname','$Lname','$gender','$address','$city','$District','$State','$pincode','$Mnumber','$email','$IXpercent',$Xpercent);" ;

	$con->query($query);

	echo "<script> alert('Form Saved Successfully'); window.location = 'nevnav.html'; </script>";


}


$con->close();
?>