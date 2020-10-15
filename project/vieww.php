<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/347554e2c7.js" crossorigin="anonymous"></script>
    <title> vieww</title>

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

   

        h3 {
            width: 50%;
            margin-left: 75px;
            text-align: center;
        }

        main {
            margin-top: 70px;
        }




      
        select {
            width: 20%;
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
            </ul

        </div>

    </header>

    <main>

        

        <br>
        <table width="90%" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>
                    <font size="5" color="black">Account Id</font>
                    </th>
                <td>
                    <font size="5" color="black">Card no.</font>
                    </th>
                <td>
                    <font size="5" color="black">Status</font>
                    </th>
               <!--  <td>
                    <font size="5" color="black">Customer Name</font>
                    </th>
                <td>
                    <font size="5" color="black">Bank name</font>
                    </th> -->
            </tr>
            <?php
            include "connect.php";


            $query = " select s.account_id, p.cno, s.status from status s, payment p where cno > 0";
            $result = $con->query($query);
            while ($row1 = mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td>";
                echo $row1[0];
                echo "</td>";
                echo "<td>";
                echo $row1[1];
                echo "</td>";
                echo "<td>";
                echo $row1[2];
                echo "</td>";


                // echo "<td>";
                // echo $row1[3];
                // echo "</td>";
                // echo "<td>";
                // echo $row1[4];
                // echo "</td>";
                // echo "</tr>";
            }
            ?>
            <tr>
                <td>
                    <font size="5" color="black"></font>
                    </th>
                <td>
                    <font size="5" color="black"></font>
                    </th>
                <td>
                    <font size="5" color="black"></font>
                    </th>
                

            </tr>
        </table>
   
    </main>

</body>

</html>