<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/347554e2c7.js" crossorigin="anonymous"></script>
    <title> Booking form</title>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
        @import url('https://fonts.googleapis.com/css?family=Grenze|Inconsolata|Lobster+Two|Mansalva|Pacifico|Patua+One|Roboto+Mono|Rubik+Mono+One|Sacramento&display=swap');


        header,
        section {
            position: fixed;
            width: 100%;
            top: 0;
            overflow: hidden;
            margin: 0;
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
            text-align: left;
        }

        h2 {
            font: var(--Lobster);
            color: gray;
            font-size: x-large;
            padding: 5px -5px 5px 5px;
            text-align: left;

        }

        h1 {
            font: var(--Lobster);
            color: linear-gradient(to bottom, red, pink);
            text-align: center;
            font-size: xx-large;
            padding: 15px 15px 15px 15px;
            margin-left: -95px;
        }

        h4 {
            text-align: center;
            margin-left: 130px;
        }



        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: black;
        }

        input {
            color: white;
            width: 10%;
            height: 5%;
        }

        /* h1 {
background-color:#6e7b8b;
    color:black;
    text-align:center;
}
h2 {
color:#cccccc;
}
li  {
   display:inline;
   float:left;
}
li a {  
display:block;
color:#cccccc;
text-align:center;
padding:16px 35px;
text-decoration:none;
} */
        input {
            /* width:60%; */
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
            width: 100%;
            align: center;
        }

        input[type=text] {
            padding: 5px 15px;
            background: #ccc;
            border: 1;
            font-weight: bold;
            border-radius: 10px;
            width: 45%;
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
            margin-top: 130px;
            margin-left: 360px;
        }

        .sidenav {
            height: 100%;
            width: 160px;
            position: fixed;
            z-index: 1;
            top: 69px;
            left: 0;
            background-color: #D3D3D3;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }


        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        form {
            background-color: #FFFFFF;
            display: top;
            align-items: left;
            justify-content: left;
            flex-direction: column;
            padding: 20px 50px;
            height: 150%;
            text-align: left;
            overflow: hidden;
            position: fixed;
            margin-left: 275px;

        }

        h5 {
            margin-left: -110px;
            text-align: left;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"> <i class="fas fa-balance-scale fa-2x mx-2"></i> iANTRIX</a>
            </nav>
        </div>


        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mr-auto"> </div>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="antique.php">Back<span class="sr-only">(current)</span></a>
                </li>
            </ul>

        </div>

    </header>

    <div class="sidenav">
        <a href="#aboutus.html">About us</a>
        <a href="aboutus.html">Contact us</a>
        <a href="aboutus.html">Address</a>


         <a href="https://en.wikipedia.org/wiki/Antique">Antiques?</a>
          
           <a href="https://www.bbc.co.uk/mediacentre/mediapacks/antiques-roadshow-40/valuable">Best-ones</a>
           <a href="admins.html">Admins</a>
           <!--  <a href="aboutus.html">Address</a> -->
        <!-- <a href="#contact">Contact</a> -->
    </div>
 
    <main>
        <?php
        $name = $_POST['antiquename'];
        ?>
       

        <br>

        <form action="payment.php" method="post">
            <fieldset>
                <fieldset>
                    <fieldset>
                        <fieldset align="center">
                            <!-- <legend align="center"><b><h2>Booking</h2></b></legend> -->
                            <b>
                                <h1>Booking</h1>
                            </b <label>
                            <h2 align="center">Antique Name : <?php echo "$name"; ?>
                            </h2></label>
                            <br>

                            <label>
                                <h2 align="center">bank name :
                                    <!-- <select name="cusprice">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select> -->


                                    <input type="text" placeholder="name" name="cusprice" required="required" /><br>



                                </h2>
                            </label><br>
                            <br>
 <label>
                                <h2 align="center">account type :
                                    <!-- <select name="cusprice">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select> -->


                                    <input type="text" placeholder="type" name="type" required="required" /><br>



                                </h2>
                              <!--   <h2 align="center">Payment Type :
                                    <select name="type">
                                        <option>Debit Card</option>
                                        <option>Credit Card</option>
                                    </select>
                                </h2> -->
                            </label>
                            <br>
                            <label>
                                <h2 align="center">
                                    <?php
                                    include "connect.php";
                                    $query = "select antique_price from antique where antique_name=\"$name\"";
                                    $result = $con->query($query);
                                    $row = mysqli_fetch_row($result);
                                    echo " <h5>Final Price : $row[0] </h5>";
                                    echo " <input type=\"hidden\" name=\"antique\" value=\"$name\"> ";
                                    echo " <input type=\"hidden\" name=\"price\" value=\"$row[0]\"> ";
                                    ?>
                                </h2>
                            </label>
                            <br>

                           
                        </fieldset>
                    </fieldset>
                </fieldset>
            </fieldset>
            <br>
            <label>
                <h4 align="center">
                    <input type="submit" value="Proceed">
                </h4>
            </label>
        </form>

    </main>

</body>

</html>