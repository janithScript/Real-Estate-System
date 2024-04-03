<?php
    include_once './dbc.php';

    $usrname = mysqli_real_escape_string($connect, $_POST['usrname']);
    $typ = mysqli_real_escape_string($connect, $_POST['type']);

    $sql4 = "DELETE FROM cart WHERE user_name = '$usrname' AND type = '$typ'";

    if (mysqli_query($connect, $sql4)) {
        echo '<script type="text/javascript"> 
                alert("Data removed!");
                window.location = "index.php?signup=success";
              </script>';
        exit;
    } else {
        echo '<script type="text/javascript"> 
                alert("Data not removed!");
                window.location = "index.php?error=registration_failed";
              </script>';
        exit;
    }
?>
