<html>
<body>
Deleting...
<?php

$db = new mysqli('localhost','root','','animal_shelter');

$one = $_POST["Email"];


//INSERT USER
$query = "DELETE FROM animal WHERE animal_id = '$one'";
$val = mysqli_query($db, $query);
echo mysqli_error($db);





?><br>
Complete
</body>
</html>
