<?php
ini_set('display_errors', 1);
//define variable and set to empty values
$name_error = $email_error = $phone_error = $message_error = $success = "";
$name = $email = $phone = $company = $message = $success =  "";

//dorm is submitted with POST method
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $name_error = "Ime je obvezno";
    } else {
        $name = test_input($_POST["name"]);
        //check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_error = "Samo črke in presledki so dovoljeni";
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
    
    if(empty($_POST["phone"])){
        $phone_error = "Telefonska številka je obvezna";
    } else {
        $phone = test_input($_POST["phone"]);
        //check if phone only contains letters and whitespace
        if(!preg_match("/^\+?(?:\d{3} ?\d{3} ?\d{3} ?\d{3}|\d{4} \d{3} \d{3}|\d{3} ?\d{3} ?\d{3})$/",$phone)) {
            $phone_error = "Nepravilna telefonska številka";
        }
    }

    if(empty($_POST["company"])){
        $company = "";
    } else {
        $company = test_input($_POST["company"]);
    }

    if(empty($_POST["message"])){
        $message_error = "Sporočilo je prazno";
    } else {
        $message = test_input($_POST["message"]);
    }

    if($name_error == '' and $email_error == '' and $phone_error == '' and $message_error == ''){
        $message_body = "";
        unset($_POST["submit"]);

        $message_body = "Ime: $name\n";
        $message_body .= "Email: $email\n\n";
        $message_body .= "Telefonska št.: $phone\n\n";
        $message_body .= "Podjetje: $company\n\n";
        $message_body .= "Sporočilo: \n$message\n";

        $to = 'alen2herceg@gmail.com';
        $subject = "Novi kontakt od $name";
        $header = "FROM: $name <$email>";
        if(mail($to, $subject, $message_body, $header)){
            $name = $email = $phone = $company = $message = "";
            http_response_code(200);
            echo "Sporočilo poslano!";
        }
    }else{
        http_response_code(400);
        echo "Nepravilni podatki. Prosim preverite jih.";
    }

}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}