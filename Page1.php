<html>

<body>

    <?php
    $servername = "localhost";
    $username = "db21_024";
    $password = "db21_024";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>

</body>

</html>