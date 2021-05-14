<?php
require_once '../model/conn.php';
require_once '../model/functions_forms.php';


// cleanse variables
$form_data = '';
$message = '';
$validation_error = '';
$error = [];

$first_name = $last_name = $email_address =
$mobile_number = $form_answer = $marketing =
$terms_conditions_agree = '';

$form_data = json_decode(file_get_contents('php://input'));

// validate first name
if(empty($form_data->FirstName)){
	$error['firstName'] = "First Name is required";
}else{
	$first_name = test_input($form_data->FirstName);
}

// validate last name
if(empty($form_data->LastName)){
	$error['lastName'] = "Last Name is required";
}else{
	$last_name = test_input($form_data->LastName);
}

// validate email address
if(empty($form_data->EmailAddress)){
	$error['emailAddress'] = "Email Address is required";
}else{
	$email_address = test_input($form_data->EmailAddress);
}
// validate mobile number
if(empty($form_data->MobileNumber)){
	$error['mobileNumber'] = "Mobile Number is required";
}else{
	$mobile_number = test_input($form_data->MobileNumber);
}

// validate form answer
if(empty($form_data->EntryAnswer)){
	$error['entryAnswer'] = "Entry Answer is required";
}else{
	$form_answer = test_input($form_data->EntryAnswer);
}

// validate form terms conditions
if(empty($form_data->TermsConditions)){
	$error['termsConditions'] = "You are required to agree to the Terms and Conditions";
}else{
	$terms_conditions_agree = test_input($form_data->TermsConditions);
}



if(empty($error)){

	submit_competition_form($first_name, $last_name, $email_address, $mobile_number, $form_answer, $marketing, $terms_conditions_agree);
	$data['status'] = true;
	$data['success'] = "Entry submitted successfully.";
}else{
	$data['error'] = $error;
}

// dump data back to page
echo json_encode($data);	


?>