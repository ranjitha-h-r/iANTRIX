<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/347554e2c7.js" crossorigin="anonymous"></script>
  <title> antique homepage</title>

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


    main {
      margin-top: 50px;
      margin-left: 170px;
    }



    input {
      color: black;
      width: 20%;
      height: 5%;
    }

    /* h1 {
color:red;
}
h2 {
color:white;
} */
    input[type=text] {
      padding: 5px 15px;
      background: #ccc;
      border: 0;
      border-radius: 10px;
    }

    a {
      color: red;
    }

    .sidenav {
      height: 100%;
      width: 160px;
      position: fixed;
      z-index: 1;
      top: 67px;
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

    .cards {
      width: 380px;
      background-color: black;
      border-radius: 10px;
      margin: 30px;
      box-shadow: 2px 2px 6px black;
      display: inline-block;
      margin-top: 100px;


    }

    .cards:hover {
      box-shadow: 5px 5px 10px black;
    }

    .image img {
      margin-left: 46px;
      width: 250px;
      margin-top: 25px;
      border-top-left-radius: 50px;
      border-top-right-radius: 50px;
      border-bottom-left-radius: 50px;
      border-bottom-right-radius: 50px;
    }

    .title {
      text-align: center;
      padding: 0px;
      font-family: var(--patua);
    }

    .title>h1 {
      font-size: 40px;
      font: bold;
      color: red;
      font-color: var(--bggradient);
      margin-top: -230px;
    }

    .des {
      text-align: center;

    }

    .des p {
      margin-top: 0px;
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

  </header>

  <div class="sidenav">
    <a href="aboutus.html">About us</a>
    <a href="aboutus.html">Contact us</a>
    <a href="aboutus.html">Address</a>
    <a href="index.html">Home</a>
    

    <a href="https://en.wikipedia.org/wiki/Antique">Antiques?</a>
    <a href="https://www.bbc.co.uk/mediacentre/mediapacks/antiques-roadshow-40/valuable">Best-ones</a>
    <a href="admins.html">Admins</a>
    <!-- <a href="#contact">Contact</a> -->
  </div>
  <main>
    <?php
    // session_start();
    if ($_SESSION['login'] == 0) {
      $user = $_SESSION['loginuser'];
       

    echo"<script type='text/javascript'>alert('HELLO $user WELCOME TO ONLINE PURCHASE PORTAL FOR ANTIQUES')</script>";
     
      $_SESSION['login'] = 1;
    }
    include "connect.php";
    $query = "select antique_image,antique.antique_name,antique_category,soa,eoa,antique_age,antique_price from antique,antique_sale where antique.antique_name=antique_sale.antique_name";
    $result = $con->query($query);
    while ($row = mysqli_fetch_row($result)) {
      echo "<div style=\"background-color: rgba(255, 255, 255, 255);\">";
      echo " <form action=\"booking.php\" method=\"post\"> ";
      //  echo "<h3>";
      //  echo "<p>";
      echo "<div class=\"image\"><img src=\"$row[0]\" > </div> ";
      // echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
      echo "<div class=\"title\">";
      echo " <h1>";
      echo " Antique Name : ";

      echo $row[1];
      echo "</h1>";
      // echo "<br>";
      // echo "<br>";
      // echo "<br>";


      //  echo "&nbsp";echo "&nbsp";echo "&nbsp";
      echo "<div class=\"des\">";
      echo "<p>";;
      echo "Antique Category :";
      echo $row[2];
      echo "</p>";
      echo "</div>";
      //  echo "<br>"; 


      //  echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
      echo "<div class=\"des\">";
      echo "<p>";
      echo " antique discovered on &nbsp:&nbsp";
      echo $row[3];
      echo "</p>";
      echo "</div>";
      //   echo "<br>";


      //  echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
      echo "<div class=\"des\">";
      echo "<p>";
      echo "antique set to sale on &nbsp:&nbsp";
      echo $row[4];
      echo "</p>";
      echo "</div>";
      //  echo "<br>";


      //  echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
      // echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";

      echo "<div class=\"des\">";
      echo "<p>";
      echo " Antique age &nbsp:&nbsp";
      echo $row[5];
      echo "</p>";
      echo "</div>";
      //  echo "<br>";


    
      echo "<div class=\"des\">";
      echo "<p>";
      echo " Antique price  &nbsp:&nbsp";
      echo $row[6];
      echo "</p>";
      echo "</div>";
      //    echo "<br>";


      echo " <input type=\"hidden\" name=\"antiquename\" value=\"$row[1]\" > ";
    
      // echo " <input type=\"text\" name=\"button\" value=\"your price\" > ";
      // echo "<br>";
      // echo "<br>";
      echo " <input type=\"submit\" value=\"Purchase Now\" > ";
      echo "<br>";
      echo "<br>";

      // echo "</p>";
      //    echo "</h3>";
      echo "</form>";
      echo "</div>";
    }
    ?>

  </main>


</body>

</html>