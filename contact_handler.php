<?php
//single recipients
$to  = 'xwang67@dons.usfca.edu';

// multiple recipients
// $to  = 'aidan@example.com' . ', '; // note the comma
// $to .= 'wez@example.com';

// subject
$subject = 'Contact information';

// message
$message = '<html>';
$message .='<head>';
$message .= '<title>receive contact reuqest</title>';
$message .= '</head>';
$message .= '<body>';
$message .= '<img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<p>Here are the contact information</p>';
$message .= '<table>';
$message .= '<tr>';
$message .= '<th>FullName</th><th>Day</th><th>Email</th><th>Message</th>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td>' .$_POST['fullname'] .'</td><td>' .$_POST['email'] .'</td><td>' .$_POST['message'] .'</td>';
$message .= '</tr>';
$message .= '</table>';
$message .= '</body>';
$message .= '</html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Eric <xwang67@dons.usfca.edu>' . "\r\n";
$headers .= 'From: Contact Request <contact@example.com>' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);
header("Location: index.php");
?>