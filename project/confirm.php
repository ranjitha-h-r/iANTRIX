    <?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/347554e2c7.js" crossorigin="anonymous"></script>
    <title> confirmation</title>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
        @import url('https://fonts.googleapis.com/css?family=Grenze|Inconsolata|Lobster+Two|Mansalva|Pacifico|Patua+One|Roboto+Mono|Rubik+Mono+One|Sacramento&display=swap');


        header,
        section {
            overflow-x: hidden;
        }

        :root {
            --Snigle-font: "Sniglet", cursive;
            --Rublic: "Rubik", cursive;
            --patua: "Patua One", cursive;
            --Lobster: "Lobster", cursive;
            --light-black: #2e2c2caf;
            --bggradient: linear-gradient(to bottom,
                    #dd2476, #ff512f);
            --light-gray: rgba(255, 255, 255, 0)
        }

        header a {
            font-family: var(--Single-font);
            font-size: 0.9em;
            color: whitesmoke;
        }

        header {
            background: #dd2476;
            background: var(--bggradient);
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background: white;
            min-width: 160px;
            box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        header .nav-item:last-child {
            padding-right: 2.5em;
        }

        header .nav-item {
            padding: 0.9em;
        }

        header .navbar-brand {
            padding-left: 8rem;
        }

        header .nav-link:hover {
            color: black;
        }

        header .row .col-md-5 {
            padding: 4.2vmin 1vmin;
        }

        header .row .col-md-7 {
            padding: 22vmin 1vmin;
            padding-bottom: 35vmin;
            font-family: var(--Rubik);
            color: white;

        }

        header .row .col-md-5 img {
            width: 85%;
        }

        header .container .col-md-7 h6 {
            padding: 1vmin;
            letter-spacing: 5px;
        }

        header .container .col-md-7 h1 {
            font-size: 8.5vmin;
            font-weight: bold;
            padding: 0.1em 0em;
        }

        header .container .col-md-7 p {
            padding: 1vmin 5vmin;
        }

        header .container .col-md-7 button {
            border-radius: 30px;
            font-weight: bold;
        }



        /* form {
	background-color: #FFFFFF;
	display: top;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 20px 50px;
	height: 150%;
    text-align: center; */
        /* overflow:scroll; */
        /* position:fixed; */
        /* margin-left:500px;
    margin-top:70px;
	
} */

        /* input {
	background-color: lightgray;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
    width: 100%;
    border-top-left-radius: 9px;
    border-top-right-radius: 9px ;
    border-bottom-left-radius: 9px;
    border-bottom-right-radius: 9px;
} */

        /* .container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
    min-height: 480px;
    overflow:scroll;
    margin-left:200px;
} */


        /* .form-container { 
	position: fixed;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
    overflow:hidden;   
    align-content: center;                /*    overflow added here     */

        /* } */

        /* .sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
	 */
        /* } */

        /* .container.right-panel-active .sign-in-container {
	transform: translateX(100%);
} */

        /* .sign-up-container {
	left: 0;
	width: 35%;
	opacity: 0;   
	background-color:whitesmoke;
    z-index: 1;	 
    align-items: center;
    /* overflow:sccroll; */
        /* }  */

        h3 {
            width: 50%;
            margin-left: 75px;
            text-align: center;
        }






        /* ul { 
list-style-type:none;
      margin:0;
     padding:0;
    overflow:hidden;
    background-color:black;
 } */

        input {
            color: white;
            width: 10%;
            height: 5%;
        }

        h1 {
            background-color: white;
            color: #696969;
            text-align: center;
            font-size:35px;
        }

        h2 {
            color: #cccccc;
        }

        li {
            display: inline;
            float: left;
        }

        li a {
            display: block;
            color: #cccccc;
            text-align: center;
            padding: 16px 35px;
            text-decoration: none;
        }

        input {
            width: 30%;
            padding: 5px 15px;
            background: #ccc;
            border: 1;
            font-weight: bold;
            border-radius: 10px;
        }

        input[type=submit] {
            padding: 5px 15px;
            background: #0F0F0F;
            border: 1;
            font-weight: bold;
            border-radius: 10px;
        }

        input[type=text] {
            padding: 5px 15px;
            background: #ccc;
            border: 1;
            font-weight: bold;
            border-radius: 10px;
        }

        input[type=submit]:focus {
            border-color: #333;
            background: blue;
        }

        input[type=text]:focus {
            border-color: #333;
            background: blue;
        }

        main {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#">
                    <!--company logo here-->
                    <!--   <img src=".png" alt="sometext" width="60" height="40">  -->
                    <i class="fas fa-balance-scale fa-2x mx-2"></i>
                    iANTRIX</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"> </div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- <li class="nav-item">
                      <a class="nav-link" href="#">Sign-In</a>
                    </li>
                    <li class="nav-item dropdown">
                     <div class="dropdown">
                         <a href="#" class="nav-link"></a>
                        <div class="dropdown-content">
                            <a href="#">Generic</a>
                            <a href="#">GrandPrice</a>
                        </div>
                     </div>
                    </li> -->
                        <!-- 
                    <li class="nav-item">
                        <a  href="signin.php">SignIn</a>
                      </li>
                      <li class="nav-item">
                        <a  href="signup.php">SignUp</a>
                      </li>
                      <li class="nav-item">
                        <a  href="aboutus.html">About us</a>
                      </li>
                     -->
                    </ul>
                </div>
            </nav>

        </div>

    </header>

    <main>

        <?php
        // session_start();

         // session_start();
     $user=$_SESSION['loginuser'];
     // $price=$_POST['price'];

        // $user = false;
        // if (isset($_POST['loginuser'])) {
        //     $user = $_POST['loginuser'];
        // }
        // echo $user;


        // $user = $_SESSION['loginuser'];
        // $price = false;
        // if (isset($_POST['price'])) {
        //     $price = $_POST['price'];
        // }
        //  echo $price;


        $price = $_POST['price'];
        $antique = $_POST['antique'];
        $cusprice = $_POST['cusprice'];
        $type = $_POST['type'];

        $cno = $_POST['cno'];
        $cvv = $_POST['cvv'];

        include "connect.php";

        $query1 = "insert into purchase values(\"\",\"$antique\",\"$user\",\"$cusprice\")";
        $result1 = $con->query($query1);
        

        $query6 = "insert into payment values(\"$cno\",\"$cvv\")";
        $result6 = $con->query($query6);


        $query3 = "select max(antique_id) from purchase";
        $result3 = $con->query($query3);
        $row1 = mysqli_fetch_row($result3);

        $antique_id = $row1[0];

        $query2 = "insert into cus_account values(\"\",\"$type\",\"$price\",\"$antique_id\")";
        $result2 = $con->query($query2);
        if ($result1 && $result2) {
            echo "<h2 align=\"center\">";
            echo "  <fieldset> ";
            echo "<h1>Your Booking Reference Number is \"$antique_id \" </h1>";
            echo "<br>";
            // echo "<br>";
            echo " <h1>Antique Name : $antique </h1>";
            echo "<br>";
            // echo "<br>";
            echo " <h1>Your bank name :$cusprice </h1> ";
            echo "<br>";
            // echo "<br>";
            echo " <h1>Amount : $type </h1>";
            echo "<br>";
            echo "<br>";
            // echo "<br>";
            echo "<form action=\"antique.php\" method=\"post\">";
            echo "<input type=\"submit\" value=\"RETURN\">";
            echo "</form>";
            echo "</h2>";
        } else {
            echo " error booking tickets";
        }
        ?>




    </main>

</body>

</html>