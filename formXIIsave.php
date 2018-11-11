<?php

$con = new mysqli ("localhost","root","","admission");

if($con->connect_error){
	die("Connection Failed");
}
else{
	echo "Connection Successfull";

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
	$Xpercent = $_POST['Xpercent'];
	$Pyear = $_POST['Pyear'];
	$field = $_POST['field'];
	


	//echo "$Fname <br> $Mname <br> $Lname <br> $gender <br> $address <br> $city <br> $District <br> $State <br> $pincode <br> $Mnumber <br> $email <br> $IXpercent <br> $Xpercent";

	$query = "insert into form12 values (NULL , '$Fname','$Mname','$Lname','$gender','$address','$city','$District','$State','$pincode','$Mnumber','$email','$Xpercent','$Pyear','$field');" ;

	if($con->query($query)){
		echo "<script> alert('Form Saved Successfully'); window.location = 'nevnav.html'; </script>";
	}
	else{
		echo "<script> alert('Error in query firing');</script>";
	}

	


}


$con->close();
?>