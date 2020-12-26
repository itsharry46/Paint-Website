<?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['message'];


        $to='hariachary7@gmail.com';
        $subject='Website Enquiry';
        $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Message: "."\n\n".$msg;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers))
        {
            echo"<h1>Sent</h1>";
        }
        else
        {
            echo"Something went wrong";
        }
    }

?>