<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/347554e2c7.js" crossorigin="anonymous"></script>
  <title> update</title>

  <style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
  @import url('https://fonts.googleapis.com/css?family=Grenze|Inconsolata|Lobster+Two|Mansalva|Pacifico|Patua+One|Roboto+Mono|Rubik+Mono+One|Sacramento&display=swap');
   

  header,
section{
 position: fixed;
 width:100%;
 top:0;
 overflow:hidden;
 margin:0;
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

/*h3{
    width:50%;
    margin-left:75px;
    text-align: center;
}
*/


main{
    margin-top: 69px;
}



ul { 
list-style-type:none;
      margin:0;
     padding:0;
    overflow:hidden;
    background-color:black;
 }

input {
   color:white;
   width:10%;
height:5%;
}

      h1{
        font:bolder;
        color:red;
        font-size: 35px;
      }
h2 {
color:#cccccc;
}
h3 {
      width: 45%;
      margin-left: -56px;
      text-align: center;
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
}
select {
 width:35%;
padding:5px 15px;
    background:#ccc;
border:1;
font-weight:bold;
border-radius:10px;
}

 input {
      background-color: lightgray;
      border: none;
      padding: 12px 15px;
      margin: 8px 0;
      width: 35%;
      border-top-left-radius: 9px;
      border-top-right-radius: 9px;
      border-bottom-left-radius: 9px;
      border-bottom-right-radius: 9px;
    }



input[type=submit] {
padding:5px 15px;
    background:lightgrey;
border:1;
font-weight:bold;
border-radius:10px;
color:black;
}
/*input[type=text]{
padding:5px 15px;
    background:#ccc;
border:1;
font-weight:bold;
border-radius:10px;
}*/
input[type=submit]:focus { 
border-color:black;
/*background:blue;
margin-right:100px;*/
}
input[type=text]:focus { 
border-color:#333;
background:blue;
}

main{
  margin-left:620px;
  margin-top:160px;
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

<div class="form-container sign-up-container">
<form action="updatequery.php" method="post">
<h1>UPDATE AN ANTIQUE</h1>
<!-- <h3> Select antique name to update </h3> -->
<br>
  <br>

<select name="antique">
   <?php
     include "connect.php";
     $query="select * from antique";
     $result=$con->query($query);
     while($row=mysqli_fetch_row($result))
     {
       echo"<option>$row[1]</option>";
     }
    ?>
  </select> 
  <br>
  <br>
  <input type="text" placeholder="New Price" name="price" required="required" /><br>
  <br>
  <br>
 <h3><input type ="submit" name="update" value="UPDATE"  /> </h3>
 <br>

<!-- <button
onclick="window.location.href='file:/home/suhaas/Documents/DBMS%20mini%20pro/DBMS%20_code/html/antique-homepage.html'">Sign
Up</button> -->
</form>


</main>

</body>
</html>
