<?php
    include_once './dbc.php';

    $usrname = mysqli_real_escape_string($connect, $_POST['usrname']);
    $addr = mysqli_real_escape_string($connect, $_POST['address']);
    $prc = mysqli_real_escape_string($connect, $_POST['price']);
    $typ = mysqli_real_escape_string($connect, $_POST['type']);

    $sql1 = "INSERT INTO property (address, value) VALUES ('$addr', '$prc')";
    $sql2 = "INSERT INTO cart (user_name, type) VALUES ('$usrname', '$typ')";

    if (mysqli_query($connect, $sql1) && mysqli_query($connect, $sql2)) {
        echo '<script type="text/javascript"> 
            alert("Added to the Cart!");
            window.location = "index.php?signup=success";
            </script>';
            exit;
    } else {
        echo '<script type="text/javascript"> 
        alert("Something went wrong. Try again!");
        window.location = "index.php?signup=success";
        </script>';
        exit;
    }
?>

