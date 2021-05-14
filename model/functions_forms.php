<?php 

// insert data from comp form to database
function submit_competition_form($firstName, $lastName, $email, $mobile, $answer, $marketing, $termsConditions){
	global $conn;
	$sql = "INSERT INTO `entrees` (first_Name, last_Name, email_Address, mobile_Number, user_Response, recieve_Marketing, Terms_Conditions)   VALUES ('$firstName', '$lastName', '$email', '$mobile', '$answer', '$marketing', '$termsConditions')";
	$conn->exec($sql);
};
// sanatise our data for input

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>