<html>
<body>
Deleting...
<?php
$db = new mysqli('localhost','root','','animal shelter');

//DELETE
$query = "DELETE FROM profile ";
$val = mysqli_query($db, $query);
echo mysqli_error($db);

//DELETE
$query = "DELETE FROM animal ";
$val = mysqli_query($db, $query);
echo mysqli_error($db);

//DELETE
$query = "DELETE FROM adoptions ";
$val = mysqli_query($db, $query);
echo mysqli_error($db);

//DELETE
$query = "DELETE FROM likes ";
$val = mysqli_query($db, $query);
echo mysqli_error($db);

//DELETE
$query = "DELETE FROM donations ";
$val = mysqli_query($db, $query);
echo mysqli_error($db);

//DELETE
$query = "DELETE FROM inquiry ";
$val = mysqli_query($db, $query);
echo mysqli_error($db);


?><br>

Complete
</body>
</html>
