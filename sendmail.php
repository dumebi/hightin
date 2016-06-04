<?php

// Set JSON header
header('Content-Type: text/html; charset="UTF-8"');
// Disable Error Reporting
error_reporting(0);
// Start buffering
//ob_start();

// recipient
$to = 'info@hightinglobal.com';
// message subject
$subject = 'New Website Mail';

// Getting form values from _REQUEST
$name    = !empty($_REQUEST['name'])    ? $_REQUEST['name']    : '-';
$email   = !empty($_REQUEST['email'])   ? $_REQUEST['email']   : '-';
$message = !empty($_REQUEST['message']) ? $_REQUEST['message'] : '-';

// Forming Message
$text = "

<body>
    <table>
        <tr>
            <td>Name: </td>
            <td>$name</td>
        </tr>
        <tr>
            <td>E-mail: </td>
            <td>$email</td>
        </tr>
        <tr>
            <td>Message: </td>
            <td>$message</td>
        </tr>
    </table>
</body>
";

$result = mail($to, $subject, $text);
if($result){
	
				echo" <script>alert('Your message has been sent! we will get back to you shortly');</script>"; 
				echo" <script>window.location='index.html';</script>"; 
}else{
	
				echo" <script>alert('Error sending message');</script>"; 
				echo" <script>window.location='contact.html';</script>"; 
}
// End Buffering
//ob_end_clean();

/*
echo json_encode(array(
    'message_send' => $result ? 'ok' : 'error',
    'hash'         => substr(md5(time()), 3, 7)
));

*/