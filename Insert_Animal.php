<html>
<body>
Inserting...
<?php

$db = new mysqli('localhost','root','','animal_shelter');

$one = $_POST["Email"];
$two = $_POST["Firstname"];
$three = $_POST["Lastname"];
$four = $_POST["Password"];
$five = $_POST["Type"];
$six = $_POST["Username"];
$seven = $_POST["Mobile_number"];
$eight = $_POST["Join_date"];
$nine = $_POST["profile_id"];
$ten = $_POST["Last"];
$eleven = $_POST["Last2"];

//INSERT USER
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten ')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);


$query = "INSERT INTO $four VALUES ('$ten', '$eleven')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);




?><br>
Complete
</body>
</html>
