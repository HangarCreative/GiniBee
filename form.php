<?php
ini_set('display_errors', 1);
//define variable and set to empty values
$Fname_error = $Lname_error = $email_error = $message_error = $success = "";
$Fname = $Lname = $email = $phone = $company = $message = $success =  "";

//dorm is submitted with POST method
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["Fname"])){
        $Fname_error = "Ime je obvezno";
    } else {
        $Fname = test_input($_POST["Fname"]);
        //check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z ]*$/", $Fname)) {
            $Fname_error = "Samo črke in presledki so dovoljeni";
        }
    }

    if(empty($_POST["Lname"])){
        $Lname_error = "Priimek je obvezen";
    } else {
        $Lname = test_input($_POST["Lname"]);
        //check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z ]*$/", $Lname)) {
            $Lname_error = "Samo črke in presledki so dovoljeni";
        }
    }

    if(empty($_POST["email"])){
        $email_error = "Email je obvezen";
    } else {
        $email = test_input($_POST["email"]);
        //check if email only contains letters and whitespace
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Nepravilen email";
        }
    }

    if(empty($_POST["message"])){
        $message_error = "Sporočilo je prazno";
    } else {
        $message = test_input($_POST["message"]);
    }
    
    if(empty($_POST["phone"])){
        $phone = "";
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if(empty($_POST["company"])){
        $company = "";
    } else {
        $company = test_input($_POST["company"]);
    }

    if($Fname_error == '' and $Lname_error == '' and $email_error == '' and $message_error == ''){
        $message_body = "";
        unset($_POST["submit"]);

        $message_body = "Ime: $Fname\n";
        $message_body .= "Priimek: $Lname\n\n";
        $message_body .= "Email: $email\n\n";
        $message_body .= "Telefonska st.: $phone\n\n";
        $message_body .= "Podjetje: $company\n\n";
        $message_body .= "Sporočilo: \n$message\n";

        $to = 'rado.mulej@ginibeegin.com';
        $subject = "Novi kontakt od $Fname $Lname";
        $header = "FROM: $Fname $Lname <$email>";
        if(mail($to, $subject, $message_body, $header)){
            $Fname = $Lname = $email = $phone = $company = $message = "";
            http_response_code(200);
            echo "Sporočilo poslano!";
        }
    }else{
        http_response_code(400);
        echo json_encode(array("Fname" => "$Fname_error",
            "Lname" => "$Lname_error",
            "email" => "$email_error",
            "message" => "$message_error",
            "success" => ""));
        // echo "Nepravilni podatki. Prosim preverite jih.";
    }

}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}