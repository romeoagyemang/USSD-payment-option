<?php

$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];


if ($text == "") {
    // this is the first request> note how we wstart the response with CON
    $response = "CON What would you want to check \n";
    $response =  "1. My Account No \n";
    $response =  "2. My Phone Number";

} elseif ($text == "1") {
    // business logic for the first is level response
    $response = "CON Choose account information you want to view \n";
    $response .= "1. Account Number \n";
    $response .= "2. Account Balance";

} elseif ($text == "2") {
    // Business logic for the first level response
    // This is a terminal request. Note how we start with END.
    $response = "END Your phone number is " .$phoneNumber;

} elseif ($text == "1*1") {
    // This is a second level response where the user selected 1 in the first instance
    $accountNumber = "ACC1001";

    // This is a terminal request. Note how we start with END
    $response = "END Your Account Number is ".$accountNumber;

} elseif ($text = "1*2") {
    // This is a second level response where the user selected 1 in the first instance
    $balance = "GHS 10,000";

    // This is a terminal request. Note how we start with END
    $response = "END Your balance is ".$balance;

}  

//echo the response to the API. The response depends on the statement that us fulfilled in each instance
header("Content-type; text/plain");
echo $response;




























?>