<!DOCTYPE html>
<html>
<head>
    <title>Form PHP</title>
</head>
<body>

<h2>Form Input Data</h2>

<form method="POST">
    <label>First Name:</label><br>
    <input type="text" name="firstname"><br><br>

    <label>Last Name:</label><br>
    <input type="text" name="lastname"><br><br>

    <label>Phone Number:</label><br>
    <input type="text" name="phone"><br><br>

    <label>Address:</label><br>
    <textarea name="address"></textarea><br><br>

    <button type="submit" name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    echo "<h3>Hasil Input:</h3>";
    echo "Hi, my name is $firstname $lastname <br>";
    echo "Phone Number: $phone <br>";
    echo "Address: $address";
}
?>

</body>
</html>