<html>
<body>
Inserting...
<?php
    $db = new mysqli('localhost','root','','animal shelter');


/*
//PRINT PROFILE DATABASE
$query = "SELECT * FROM profile";
$val = mysqli_query($db, $query);

$mask = "| %.20s | %.20s | %.20s | %.20s | %.20s | %.20s | %.20s | %.20s | %.20s | <br/>";
printf($mask, 'Email', "firstname", "lastname", "Password", "Type", "Username", "Mobile_number", "Join_date", "Profile_id");

while($r=mysqli_fetch_row($val)) {
    //printf($r[0]." ".$r[1]." ".$r[2]." ".$r[3]." ".$r[4]." ".$r[5]." ".$r[6]." ".$r[7]." ".$r[8]." "."<br/>");
    //printf("%-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   <br/>", $r[0], $r[1], $r[2], $r[3], $r[4], $r[5], $r[6], $r[7], $r[8]);
    printf($mask, $r[0], $r[1], $r[2], $r[3], $r[4], $r[5], $r[6], $r[7], $r[8]);
}
//DONE PRINTING PROFILE DATABASE
*/

    $one = $_POST["Email"];
    $two = $_POST["Firstname"];
    $three = $_POST["Lastname"];
    $four = $_POST["Password"];
    $five = $_POST["Type"];
    $six = $_POST["Username"];
    $seven = $_POST["Mobile_number"];
    $eight = $_POST["Join_date"];
    $nine = $_POST["profile_id"];

//INSERT USER
    $query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', $seven, '$eight', $nine)";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
/*INSERT INTO `profile` (`Email`, `Fname`, `Lname`, `Password`, `Type`, `Username`, `Mobile_number`, `Join_date`, `profile_id`) VALUES ('One@gmail.com', 'FirstOne', 'LastOne', 'OnePass', 'Admin', 'OneUserName', '1111111111', '2019-04-26', '1'); */
?><br>
Complete
</body>
</html>
