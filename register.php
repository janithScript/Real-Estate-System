<?php
        include_once './dbc.php';

        $usr = $_POST['username'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $sql = "INSERT INTO buyers (user_name, email, password) VALUES ('$usr', '$email', '$pwd')"; 
        $result = mysqli_query($connect, $sql);

        header("Location: index.php?signup=success"); 
?>
