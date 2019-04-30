<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Petbase</title>
</head>


<title>Homepage</title>
<body>
<h1>Database Home</h1>

<!--DISPLAY PROFILES DROPDOWN-->
<p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Profiles" aria-expanded="false" aria-controls="Profiles">
        Display Profiles
    </button>
</p>
<div class="collapse" id="Profiles">
    <div class="card card-body">
        <?php
        $db = new mysqli('localhost','root','','animal_shelter');



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
    </div>
</div>

<!--DISPLAY ANIMALS DROPDOWN-->
<p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Animals" aria-expanded="false" aria-controls="Animals">
        Display Animals
    </button>
</p>
<div class="collapse" id="Animals">
    <div class="card card-body">
        <?php
        $db = new mysqli('localhost','root','','animal_shelter');



        //PRINT Animals DATABASE
        $query = "SELECT * FROM animal";
        $val = mysqli_query($db, $query);

        $mask = "| %.20s | %.20s | %.20s | %.20s | %.20s | %s | %.20s | %.20s | %.20s | %.20s | <br/>";
        printf($mask, 'Availability', "Posted Date", "Color", "Type", "Name", "Description", "Age", "Breed", "Size", "Animal_id");

        while($r=mysqli_fetch_row($val)) {
            //printf($r[0]." ".$r[1]." ".$r[2]." ".$r[3]." ".$r[4]." ".$r[5]." ".$r[6]." ".$r[7]." ".$r[8]." "."<br/>");
            //printf("%-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   <br/>", $r[0], $r[1], $r[2], $r[3], $r[4], $r[5], $r[6], $r[7], $r[8]);
            printf($mask, $r[0], $r[1], $r[2], $r[3], $r[4], $r[5], $r[6], $r[7], $r[8], $r[9]);
        }1
        //DONE PRINTING Animals DATABASE
        ?>
    </div>
</div>


<!--DISPLAY ADOPTIONS DROPDOWN-->
<p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ADOPTIONS" aria-expanded="false" aria-controls="ADOPTIONS">
        Display Adoptions
    </button>
</p>
<div class="collapse" id="ADOPTIONS">
    <div class="card card-body">
        <?php
        $db = new mysqli('localhost','root','','animal_shelter');



        //PRINT Animals DATABASE
        $query = "SELECT * FROM adoptions";
        $val = mysqli_query($db, $query);

        $mask = "| %.20s | %.20s | %.20s | %.20s | <br/>";
        printf($mask, 'fee', "Date", "Adopting_user_id", "adopted_animal_id");

        while($r=mysqli_fetch_row($val)) {
            //printf($r[0]." ".$r[1]." ".$r[2]." ".$r[3]." ".$r[4]." ".$r[5]." ".$r[6]." ".$r[7]." ".$r[8]." "."<br/>");
            //printf("%-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   <br/>", $r[0], $r[1], $r[2], $r[3], $r[4], $r[5], $r[6], $r[7], $r[8]);
            printf($mask, $r[0], $r[1], $r[2], $r[3]);
        }
        //DONE PRINTING Adoptions DATABASE
        ?>
    </div>
</div>




<!--DISPLAY LIKEs DROPDOWN-->
<p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#LIKEs" aria-expanded="false" aria-controls="LIKEs">
        Display Likes
    </button>
</p>
<div class="collapse" id="LIKEs">
    <div class="card card-body">
        <?php
        $db = new mysqli('localhost','root','','animal_shelter');



        //PRINT Animals DATABASE
        $query = "SELECT * FROM likes";
        $val = mysqli_query($db, $query);

        $mask = "| %.20s | %.20s | %.20s | %.20s | %.20s | <br/>";
        printf($mask, 'date', "comment", "like_user_id", "like_animal_id", "Like_id");

        while($r=mysqli_fetch_row($val)) {
            //printf($r[0]." ".$r[1]." ".$r[2]." ".$r[3]." ".$r[4]." ".$r[5]." ".$r[6]." ".$r[7]." ".$r[8]." "."<br/>");
            //printf("%-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   <br/>", $r[0], $r[1], $r[2], $r[3], $r[4], $r[5], $r[6], $r[7], $r[8]);
            printf($mask, $r[0], $r[1], $r[2], $r[3], $r[4]);
        }
        //DONE PRINTING Likes DATABASE
        ?>
    </div>
</div>




<!--DISPLAY DONATIONs DROPDOWN-->
<p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#DONATIONs" aria-expanded="false" aria-controls="DONATIONs">
        Display Donations
    </button>
</p>
<div class="collapse" id="DONATIONs">
    <div class="card card-body">
        <?php
        $db = new mysqli('localhost','root','','animal_shelter');



        //PRINT Animals DATABASE
        $query = "SELECT * FROM donations";
        $val = mysqli_query($db, $query);

        $mask = "| %.20s | %.20s | %.20s | %.20s | %.20s | %.20s | <br/>";
        printf($mask, 'amount', "purpose", "date", "donate_animal_id", "donate_user_id", "donation_id");

        while($r=mysqli_fetch_row($val)) {
            //printf($r[0]." ".$r[1]." ".$r[2]." ".$r[3]." ".$r[4]." ".$r[5]." ".$r[6]." ".$r[7]." ".$r[8]." "."<br/>");
            //printf("%-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   <br/>", $r[0], $r[1], $r[2], $r[3], $r[4], $r[5], $r[6], $r[7], $r[8]);
            printf($mask, $r[0], $r[1], $r[2], $r[3], $r[4], $r[5], $r[6]);
        }
        //DONE PRINTING DONATIONs DATABASE
        ?>
    </div>
</div>




<!--DISPLAY Inquiries DROPWDOWN-->
<p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Inquiries" aria-expanded="false" aria-controls="Inquiries">
        Display Inquiries
    </button>
</p>
<div class="collapse" id="Inquiries">
    <div class="card card-body">
        <?php
        $db = new mysqli('localhost','root','','animal_shelter');



        //PRINT inquieries DATABASE
        $query = "SELECT * FROM inquiry";
        $val = mysqli_query($db, $query);

        $mask = "| %s | %s | %s | %s | %s | <br/>";
        printf($mask, 'Question', "Date", "Answer", "Inquiry_user_id", "Inquiry_admin_id");

        while($r=mysqli_fetch_row($val)) {
            //printf($r[0]." ".$r[1]." ".$r[2]." ".$r[3]." ".$r[4]." ".$r[5]." ".$r[6]." ".$r[7]." ".$r[8]." "."<br/>");
            //printf("%-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   %-20s   <br/>", $r[0], $r[1], $r[2], $r[3], $r[4], $r[5], $r[6], $r[7], $r[8]);
            printf($mask, $r[0], $r[1], $r[2], $r[3], $r[4]);
        }
        //DONE PRINTING Inquiries DATABASE
        ?>
    </div>
</div>



<!--INSERT USER DROPDOWN-->
<p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#adduser" aria-expanded="false" aria-controls="adduser">
        Add User
    </button>
</p>
<div class="collapse" id="adduser">
    <div class="card card-body">
        <form action="Insert_Profile.php" method="post">
            Email: <input type="text" name="Email"><br>
            Firstname: <input type="text" name="Firstname"><br>
            Lastname: <input type="text" name="Lastname"><br>
            Password: <input type="text" name="Password"><br>
            Type: <input type="text" name="Type"><br>
            Username: <input type="text" name="Username"><br>
            Mobile_number: <input type="text" name="Mobile_number"><br>
            Join_date(Ex:2019-04-26): <input type="text" name="Join_date"><br>
            Profile_id: <input type="text" name="profile_id"><br>

            <input type="submit">
        </form>
    </div>
</div>


<!--INSERT Animal DROPDOWN-->
<p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#addanimal" aria-expanded="false" aria-controls="addanimal">
        Add Animal
    </button>
</p>
<div class="collapse" id="addanimal">
    <div class="card card-body">
        <form action="Insert_Animal.php" method="post">
            Availability(0 or 1): <input type="text" name="Email"><br>
            Posted_date(Ex:2019-04-26): <input type="text" name="Firstname"><br>
            Color: <input type="text" name="Lastname"><br>
            Type: <input type="text" name="Password"><br>
            Name: <input type="text" name="Type"><br>
            Description: <input type="text" name="Username"><br>
            Age: <input type="text" name="Mobile_number"><br>
            Breed: <input type="text" name="Join_date"><br>
            Size: <input type="text" name="profile_id"><br>
            Animal_id: <input type="text" name="Last"><br>
            Animal_quirk(0 or 1): <input type="text" name="Last2"><br>

            <input type="submit">
        </form>
    </div>
</div>




<!-- INSERT SAMPLE DATA-->
<p>
<form action="Insert_Samples.php">

    <button type="submit">Insert Sample Data</button>
</form>
</p>


<!-- DELETE ALL DATA-->
<p>
<form action="Delete_All.php">

    <button type="submit">Delete Sample Data</button>
</form>
</p>






<b>HTML HERE</b>

<?php
//MORE PHP HERE
?>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


