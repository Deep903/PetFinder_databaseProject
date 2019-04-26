<html>
<title>Homepage</title>
<body>
<h1>Database Home</h1>

<?php
  $db = new mysqli('localhost','root','','animal shelter');



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
?>

<b>HTML HERE</b>

<?php
//MORE PHP HERE
?>

</body>
</html>


