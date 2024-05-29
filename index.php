<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    // echo "Success connecting to the db"; for checking it is connecting or not

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `mail`, `phone`, `comment`, `dt`)
             VALUES ('$name', '$age', '$gender', '$email', '$phone', '$comment', current_timestamp());";
    
    // echo $sql

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
</head>
<body>
    <!-- Navbar -->
    <div class="pik" id="pg1">
        <div class="navbar">
            <a href="#travel"><b>CollegeTrips.com</b></a>
            <div class="navbar-right">
                <a href="#pg1">Home</a>
                <a href="#pg1">Packages</a>
                <a href="#pg2">Destination</a>
                <a href="#pg3">Registration</a>
            </div>
        </div>
        <div class="all">
            
            <!-- 1st Page Content -->
            <div class="text">
                <h2 class="ris">Rishikesh: <br>Where Adventure Meets Serenity</h2>
                <p class="para"><b>Explore Rishikesh, nestled along the banks of the sacred Gangas River, where serene
                        landscapes blend with thrilling adventures. Experience heart-pounding activities like
                        white-water rafting and bungee jumping, alongside tranquil yoga sessions amidst the Himalayan
                        foothills. Plan your perfect escape and uncover the magic of Rishikesh today.</b></p>
                <h4>3 Days<br>2 Nights<br>Just For 2999</h4>
                <button class="regis">Resigter For Trip</button>
                <div class="cont">
                    <p><b>Contact For More Details:</b></p>
                    <a href=""><img src="phone-call.png" alt="hh" height="40px" width="40px"
                            style="margin: 0px 10px;"></a>
                    <a href=""><img src="email.png" alt="hh" height="40px" width="40px"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- 2nd page -->
    <div id="pg2"></div>
    <div class="sun" id="pg1">
    <div class="all">
        <div class="next">
            <h1>Destinations</h1>
            <p class="dis"><b>We are covering all these in our trip</b></p>
        </div>
        <!-- Boxes -->
        <div class="container">
            <div class="box" style="background-image: url('laxman\ jhula2.jpg');">
                <div class="box-content">
                    <h3>Laxman Jhula And Ram Jhula</h3>
                    <p>The 450 feet long iron suspended bridges – Laxman and Ram Jhula – are the glory of this beautiful
                        tourist hub.</p>
                </div>
            </div>

            <div class="box" style="background-image: url('river.jpeg');">
                <div class="box-content">
                    <h3>River Rafting</h3>
                    <p>White water rafting in Rishikesh is largely concentrated around Kaudiyala and its banks. It is a
                        major Rishikesh tourist place in the holy town</p>
                </div>
            </div>

            <div class="box" style="background-image: url('neelkanth.jpg');">
                <div class="box-content">
                    <h3>Neelkanth Mahadev Temple</h3>
                    <p>Situated at 1670 m, amidst the sylvan forest, the Neelkanth Mahadev Temple is located 12 km from
                        the town of Rishikesh.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="box" style="background-image: url('triveni.jpeg');">
                <div class="box-content">
                    <h3>Triveni Ghat</h3>
                    <p>Triveni Ghat is a crowded ghat alongside the river Ganges, with pilgrims bathing around and is
                        one of the points of interest in Rishikesh.</p>
                </div>
            </div>

            <div class="box" style="background-image: url('waterfal.jpg');">
                <div class="box-content">
                    <h3>Neer Garh Waterfall</h3>
                    <p>Just two kilometres from the Laxman Jhula, a visit to this mesmerizing waterfall that happens to
                        be one of the best Rishikesh sightseeing spots,</p>
                </div>
            </div>

            <div class="box" style="background-image: url('gufa.jpg');">
                <div class="box-content">
                    <h3>Vashishta Gufa</h3>
                    <p>An ancient cave, away from the city lights, it is an ideal place to visit in Rishikesh in 2 days.
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- 3rd page -->
    <div class="cloud">
        <div id="pg3"></div>
        <div class="all">
            <div class="page3">
                <h3>Registration</h3>
            </div>
            <h2>Fill the follows to proceed for Rishikesh trip</h2>
            
            <form action="index.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>

                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment"></textarea>

                <input type="submit" value="Submit">
                <input type="reset" value="Reset">

            </form>
            <?php
            if($insert == true){
            echo "<h2 class='submitMsg'>Thanks for submitting your Rishikesh trip form<h2>";
            }
            ?>

        </div>

    </div>
    <footer>
        <p>&copy; 2024 Shorya Verma. All rights reserved.</p>
    </footer>

</body>

</html>
