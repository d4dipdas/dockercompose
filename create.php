<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn = mysqli_connect(
        'db', # service name
        'dip', # username
        'pass', # password
        'mydata' # db table
    );
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error creating record: " . $conn->error;
    }

    $conn->close();
?>