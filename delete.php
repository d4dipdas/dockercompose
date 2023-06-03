<?php
    $id = $_GET['id'];

    $conn = mysqli_connect(
        'db', # service name
        'dip', # username
        'pass', # password
        'mydata' # db table
    );

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM users WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>