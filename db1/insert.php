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

// Insert data into MyGuests table
$sql = "INSERT INTO MyGuests (id, firstname, lastname, city, street, streetnumber) VALUES
    (NULL, 'John', 'Doe', 'New York', 'Main St', '123'),
    (NULL, 'Jane', 'Smith', 'London', 'Park Ave', '456'),
    (NULL, 'Mike', 'Johnson', 'Paris', 'Rue de la Paix', '789')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>