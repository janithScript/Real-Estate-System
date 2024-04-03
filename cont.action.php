<?php
        include_once './dbc.php';

        $usr1 = $_POST['usr'];
        $no = $_POST['number'];
        $email1 = $_POST['email1'];
        $msg = $_POST['message'];

        $sql3 = "INSERT INTO contact (user_name, phone_number, email, message) VALUES ('$usr1','$no' ,'$email1', '$msg')"; 
        $result = mysqli_query($connect, $sql3);

        header("Location: index.php?sent=success"); 
?>
