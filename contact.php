<?php

    if(isset($_POST['email']) && $_POST['email'] != ''){
            echo '<pre>';
            var_dump( $_POST );
            $contactName = $_POST['name'];
            $contactSubject = $_POST['subject'];
            $contactEmail = $_POST['email'];
            $contactMessage = $_POST['message'];
        
            $to = "austin.l.scott75@outlook.com";
            $body="";
            $body .= "From: ".$contactName. "\r\n";
            $body .= "Email: ".$contactEmail. "\r\n";
            $body .= "Message: ".$contactMessage. "\r\n";
            $headers = "Reply to: $contactEmail \r\n";
            
            mail($to, $contactSubject, $body, $headers) or die("Failure");
            header("Location: index.html");
    }


?>