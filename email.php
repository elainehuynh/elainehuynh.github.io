<html>
<head>
<title>Thank you for emailing me!</title>
<link rel="stylesheet" type="text/css" media="all" href="css/emailstyle.css">
<script language="JavaScript">
	<!--
	var time = null;

	function move() {
		window.location = 'index.php';
	}
	//-->
</script>

</head>

<body  onload="timer=setTimeout('move()',3500)">

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Check for empty fields
if (empty($name) || empty($email) || empty($message)){
    die ("Error! Please fill in all required fields.");    
}
// Checks the correct format for the email

    //Send the email and input YOUR EMAIL
    $webmaster = "personal@elainehuynh.com";
    $headers = "MIME-Version: 1.0\r\n";  
    $headers = "From: $name<$email>\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";  
    
    //Edit these fields
    $message = "<b>Name:</b> $name<br /> <b>E-mail:</b> $email <br /> <b>Message:</b> $message";
    
    // If the email has been sucessfully sent
    if (mail($webmaster, 'An e-mail has been sent from your site, http://elainehuynh.com!' , $message , $headers)) {
        echo "Thank you, $name! The e-mail was successfully sent. I will get to you as soon as possible!<br /><br />You are now being redirected.<br />";   
    }
    // This is usually not necessary, but you might want to catch the errors just in case
    else {
        echo "E-mail could not be sent. Please try again. You are now being redirected.";
    }
?>

</body>
</html>