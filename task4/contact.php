<?php

require 'config.php';

// Start the session
session_start();
if (isset($_POST['contact'])){
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$subject = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);

$sql = "INSERT INTO messages (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
// Set session variables
$_SESSION["msg"] = "Thanks for contacting us, your message has been received";
$_SESSION["success"] = "success";
// header("Location: index.php?msg");
echo $name, $email, $subject, $message;

} else {
    $_SESSION["msg"] = "Failed to send message";
    $_SESSION["msg_type"] = "error";
    echo $conn->connect_error;
// header("Location: index.php?msg");

}

}
else {
    
}



$conn->close();

?>

