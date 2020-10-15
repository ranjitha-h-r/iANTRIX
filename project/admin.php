<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="/home/suhaas/Documents/DBMS mini pro/DBMS _code/css/about-us.css"> -->
    <script src="https://kit.fontawesome.com/347554e2c7.js" crossorigin="anonymous"></script>
     

    <style>

/*Google font*/
@import url('https://fonts.googleapis.com/css?family=Grenze|Inconsolata|Lobster+Two|Mansalva|Pacifico|Patua+One|Roboto+Mono|Rubik+Mono+One|Sacramento&display=swap');
*{
    box-sizing:border-box;
}


header,
section{

} 

:root{
    --Snigle-font:"Sniglet",cursive;
    --Rublic:"Rubik",cursive;
    --patua:"Patua One",cursive;
    --Lobster:"Lobster",cursive;
    --light-black:#2e2c2caf;
    --bggradient:linear-gradient(
                 to bottom,
                 #dd2476,#ff512f);
  --light-gray:rgba(255,255,255,0)            
  }

header a{
    font-family:var(--Single-font);
    font-size:0.9em;
    color:whitesmoke;
}

header{ 
    background:#dd2476;
    background:var(--bggradient);
}


/* section-1 */

.section-1{
    padding:15vmin 0;
     margin-top:-70px;
}

.section-1 .row .col-md-6 .panel{
    position:absolute;
    top:15vmin;
    left:-5vmin;
    background:white;
    border-radius:3px;
    text-align:left;
    padding:13vmin 5vmin 20vmin 10vmin;
    box-shadow:0px 25px 42px rgba(0, 0, 0, 0.2);
    font-family:var(--Rubik);
    z-index:1;
     margin-top:-70px;
}

.section-1 .row .col-md-6 .panel h1{
    font-weight:bold;
    padding:0.4em 0;
     font-size:26px;
    color:red;
}

.section-1 .row .col-md-6 .panel p{
    font-size:0.9em;
    color:rgba(0,0,0,0.5);
}

/* section-2 */

.section-2{
    padding:15vmin 0;
    margin-top:-70px;
    margin-bottom: 50px;
}

.section-2 .pray .col-md-11 .panel{
    position:absolute;
    top:1vmin;
    right:-6vmin;
    background:white;
    border-radius:3px;
    text-align:left;
    padding:13vmin 5vmin 20vmin 10vmin;
    box-shadow:0px 25px 42px rgba(0, 0, 0, 0.2);
    font-family:var(--Rubik);
    z-index:1;
    width: 650px;
    margin-right:-170px;
    height:680px;

}

.section-2 .pray .col-md-11 .panel h1{
    font-weight:bold;
    padding:0.4em 0;
    font-size:26px;
    color:red;

}

.section-2 .pray .col-md-11 .panel p{
    font-size:0.9em;
    color:rgba(0,0,0,0.5);
}

h1{
    font-size: 20px;
    color:red;

}

h2{
    color:grey;
    font-size:20px;
}

 input {
      background-color: lightgray;
      border: none;
      padding: 12px 15px;
      margin: 4px 0;
      width: 100%;
      border-top-left-radius: 9px;
      border-top-right-radius: 9px;
      border-bottom-left-radius: 9px;
      border-bottom-right-radius: 9px;
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


  <br>
    <marquee width="100%" style="color:grey">
        <b><?php
            session_start();
            echo "Welcome      admin   &nbsp ";
            echo $_SESSION['admin'];
            ?></b></marquee>


    <main>
        <secttion class="section-1">
            <div class="container text-center">
                <div class="row">

                    <div class="col-md-6">
                        <div class="panel text-left">
                            <h1>ANTIQUES PRESENT IN THE DATABASE</h1>
                              <p align="center">
        <font size="5" color="black">
            <b>



                <?php
                include "connect.php";
                $query = "select * from antique";
                $result = $con->query($query);
                while ($row = mysqli_fetch_row($result)) {
                    echo $row[1];
                    echo "<br>";
                }
                ?>


                <b>
        </font>
    </p>
                        </div>

                    </div>
                </div>
            </div>


        </section>

        <section class="section-2">
            <div class="container text-center">
                <div class="pray">

                    <div class="col-md-11">
                        <div class="panel text-left">
                            <h1>CHANGES TO MAKE?</h1> <br>
                            
                          <p>
                           <h3 align="center">
        <form action="insert.php" method="post">
          <h2>  <input type="submit" style="color:black" value="INSERT">(INSERT AN ANTIQUE )</h2>
            
        </form>
        <br>

        <form action="update.php" method="post">
            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
          <h2>  <input type="submit" value="UPDATE">(UPDATE A ANTIQUE DETAILS)</h2>
       
        </form>

        <br>
        <form action="delete.php" method="post">
           <h2> <input type="submit" value="DELETE">(DELETE AN ANTIQUE)</h2>
         
        </form>
        
        <br>
        <form action="view.php" method="post">
           <h2> <input type="submit" value="View">(VIEW PURCHASE DETAILS)</h2>
           
        </form>
        
        <br>
    </h3>
     <p>

   </div>
        </div>

         </div>

            </div>
        </section>

    </main>
</body>

</html>