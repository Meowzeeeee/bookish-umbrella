<!DOCTYPE html>
<html>
<head>
    <title>Personal Data Form</title>
</head>
<body>
    <h2>Personal Data Form</h2>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $city = $_POST["city"];
        $street = $_POST["street"];
        $streetnumber = $_POST["streetnumber"];

        // Database connection settings
        $servername = "fdb1029.awardspace.net";
        $username = "4329432_mszewczyk";
        $password = "Darcy1Witch";
        $dbname = "4329432_mszewczyk";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare and execute the SQL query to insert data
        $sql = "INSERT INTO MyGuests (id, firstname, lastname, city, street, streetnumber) 
                VALUES (NULL, '$firstname', '$lastname', '$city', '$street', '$streetnumber')";

        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully.";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" required><br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" required><br>

        <label for="city">City:</label>
        <input type="text" name="city" required><br>

        <label for="street">Street:</label>
        <input type="text" name="street" required><br>

        <label for="streetnumber">Street Number:</label>
        <input type="text" name="streetnumber" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
