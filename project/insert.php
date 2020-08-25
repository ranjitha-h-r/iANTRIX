<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/347554e2c7.js" crossorigin="anonymous"></script>
  <title> insert</title>

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

    form {
      background-color: #FFFFFF;
      display: top;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 20px 50px;
      height: 150%;
      text-align: center;
      /* overflow:scroll; */
      /* position:fixed; */
      margin-left: 500px;
      margin-top: 120px;

    }

    input {
      background-color: lightgray;
      border: none;
      padding: 12px 15px;
      margin: 8px 0;
      width: 100%;
      border-top-left-radius: 9px;
      border-top-right-radius: 9px;
      border-bottom-left-radius: 9px;
      border-bottom-right-radius: 9px;
    }

    .container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
        0 10px 10px rgba(0, 0, 0, 0.22);
      position: relative;
      overflow: hidden;
      width: 768px;
      max-width: 100%;
      min-height: 480px;
      overflow: scroll;
      margin-left: 200px;
    }


    .form-container {
      position: fixed;
      top: 0;
      height: 100%;
      transition: all 0.6s ease-in-out;
      overflow: hidden;
      align-content: center;
      /*    overflow added here     */

    }

    main{
      margin-top:80px;
       margin-left: 80px;
    }

    /* .sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
	 */
    }

    /* .container.right-panel-active .sign-in-container {
	transform: translateX(100%);
} */

    .sign-up-container {
      left: 0;
      width: 35%;
      opacity: 0;
      background-color: whitesmoke;
      z-index: 1;
      align-items: center;
      /* overflow:sccroll; */
    }

      h1{
        font:bolder;
        color:red;
        font-size: 35px;
      }

    h3 {
      width: 50%;
      margin-left: 75px;
      text-align: center;
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
          <a class="nav-link" href="C:\Users\suhaa\OneDrive\Desktop\iANTRIX\project\index.html">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>

    </div>

  </header>

  <main>
    <!-- <?php
          include "connect.php";

          $query = "call accountid";

          $result = $con->query($query);
          $row = mysqli_fetch_row($result);
          $total = $row[0];
          ?> -->
  

    <div class="form-container sign-up-container">
      <form action="insertquery.php" method="post">
        <h1>INSERT NEW ANTIQUE</h1>
        <!-- <div class="social-container">
<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
</div> -->
        <!-- <span>or use your email for registration</span> -->
        <input type="text" placeholder="ANTIQUE Name" name="antiquename" required="required" /><br>
        <input type="text" placeholder="Category" name="category" required="required" /><br>
     <!--    <input type="date" placeholder="start of auction" name="soa" required="required" /><br>
        <input type="date" placeholder="end of auction" name="eoa" required="required" /><br> -->


        <input type="text" placeholder="Age" name="age" required="required" /><br>
        <input type="text" placeholder="Price" name="price" required="required" /><br>
        <input type="text" placeholder="Image location" name="imagelocation" required="required" /><br>
        <h3> <input type="submit" name="insert" value="INSERT" /></h3>

        <!-- <button
onclick="window.location.href='file:/home/suhaas/Documents/DBMS%20mini%20pro/DBMS%20_code/html/antique-homepage.html'">Sign
Up</button> -->
      </form>
    </div>
  </main>


</body>

</html>