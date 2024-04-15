<?php 
if(isset($_POST['submit'])){
    $to = "baonn@doppelherz.vn"; // this is your Email address
    $from = "baonn@sweetsica.com"; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Lời nhắn từ catalogue Thái Hưng!";
    $subject2 = "Copy of your form submission";
    $message = "- Họ tên: ". $first_name . " " . $last_name . "\n\n" . "- Email: " $_POST['email'] . "\n\n" ."- Lời nhắn:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Gửi tin nhắn thành công! Cảm ơn " . $first_name . ", chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 