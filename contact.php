<?php
$name = $_REQUEST['”VisitorName”'];
$email = $_REQUEST['”VisitorEmail”'];
$message = $_REQUEST['message'];

//Check Input field
if(empty($name)) || empty($email) || empty($message){
    {
        echo "Please fill all the details";
    }

    else
    {
        mail("srishtisinghal2614@gmail.com","Portfolio Message",$message, "FROM: $name < $email >" );
        echo "<script type = 'text/javascript'> alert('Your message sent successfully! ');
        window.history.go(-1);
        </script>"; 
    }

}
?>