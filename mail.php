<?php
    if(!empty($_POST["send"])){
        $userName = $_POST["name"];
        $userEmail = $_POST["email"];
        $userSubject = $_POST["subject"];
        $userMessage = $_POST["message"];
        $toEmail = "isapana0020@gmail.com";

        $mailHeaders = "Name: "+$userName +
        "\r\n Email: "+$userEmail+
        "\r\n Subject: "+$userSubject+
        "\r\n Message: "+$userMessage+ "\r\n";

        if(mail($toEmail ,$userName ,$mailHeaders)){
            $message = "Your information recived successfully.";
        }
    }
?>