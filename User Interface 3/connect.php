<?php
include_once 'database.php';
if(isset($_POST['save']))
{    
     $uname = $_POST['uname'];
     $phone = $_POST['phone'];
     $mail = $_POST['mail'];
     $psw = $_POST['psw'];
     $pswd = $_POST['pswd'];
     $sql = "INSERT INTO registration (uname,phone,mail,psw,pswd)
     VALUES ('$uname','$phone','$mail','$psw','$pswd')";
     if (mysqli_query($conn, $sql)) {
        echo "Your account has been created successfully !";
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
