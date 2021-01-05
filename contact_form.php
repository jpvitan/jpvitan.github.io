<?php
    if(isset($_POST['submit'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $destination = 'justinepaulvitan@jpvitan.com';
        $headers = 'From: '.$email;
        
        $message = '[Sender Details]\nFirst Name: '.$first_name.'\nLast Name: '.$last_name.'\nCountry: '.$country.'\n\n[Message]\n'.$message;
        
        $result = mail($destination, $subject, $message, $headers);
        if($result){
            
        }else{
            
        }
    }
?>