<!DOCTYPE html>
<html>
<body>
<?php
define("SERVERNAME", "fdb1029.awardspace.net");
define("USERNAME", "4329432_mszewczyk");
define("PASSWORD", "Darcy1Witch");
define("DBNAME", "4329432_mszewczyk");

// Create connection
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname, city, street, streetnumber FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        echo "City: " . $row["city"] . "<br>";
        echo "Street: " . $row["street"] . "<br>";
        echo "Street Number: " . $row["streetnumber"] . "<br>";
        echo "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>