<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';
    $website = $_POST["website"] ?? '';
    $comment = $_POST["comment"] ?? '';
    $gender = $_POST["gender"] ?? '';

    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Website: $website<br>";
    echo "Comment: $comment<br>";
    echo "Gender: $gender<br>";

    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "kaytari";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO users (name, email, website, comment, gender)
            VALUES ('$name', '$email', '$website', '$comment', '$gender')";
   if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
