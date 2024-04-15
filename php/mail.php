<?php
// var_dump($_POST);
// $name = $_POST["name"];
// $email = $_POST["email"];
// $message = $_POST["msg"];



// $EmailTo = "baonn@doppelherz.vn";
// $Title = "New Message Received";

// // prepare email body text
// $Fields .= "Name: ";
// $Fields .= $name;
// $Fields .= "\n";

// $Fields.= "Email: ";
// $Fields .= $email;
// $Fields .= "\n";

// $Fields .= "Message: ";
// $Fields .= $message;
// $Fields .= "\n";


// // send email
// $success = mail($EmailTo,  $Title,  $Fields, "From:".$email);

if(isset($_POST['submit'])){
    $to = "baonn@doppelherz.vn"; // this is your Email address
    $from = "baonn@sweetsica.com"; // this is the sender's Email address
    $file = ($_POST['file'] ? $_POST['file'] : "");
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Lời nhắn từ catalogue Thái Hưng!";
    $subject2 = "Copy lời nhắn từ catalogue Thái Hưng!";
    $message = "- Họ tên: ". $first_name . " " . $last_name . "\n\n" . "- Email: " $_POST['email'] . "\n\n" ."- Lời nhắn:" . "\n\n" . $_POST['message'] . "\n\n" ."- Link file đính kèm: " . $_POST['file'] ;
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Gửi tin nhắn thành công! Cảm ơn " . $first_name . ", chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
 ?>

