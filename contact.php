<?php

if ($_SERVER['REQUEST_METHOD'] =='POST') {

$name = $_POST['name'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$to = 'desronvs@kean.edu';

$headers = 
"From: $name <$email>" .
"\r\n";

$body = 
"Name: $name\nEmail:
$email\nSubject:
$subject\n\n$message";



if (mail($to,
$subject, 
$body, $headers)) {

echo 
'Thank you for your message.';

} else {

echo 
' Your message wasnt sent there was a problem. Please try again.';

}

}

?>

<script>

alert('Email is submitted');

window.location.href="ContactMe.html";

</script>;