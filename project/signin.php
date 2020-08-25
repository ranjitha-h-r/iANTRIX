<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/347554e2c7.js" crossorigin="anonymous"></script>
  <title> signin form</title>

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
      overflow: hidden;
      position: fixed;
      margin-left: 85px;

    }

    input {
      background-color: lightgray;
      border: none;
      padding: 12px 15px;
      margin: 8px 0;
      width: 75%;
      border-top-left-radius: 9px;
      border-top-right-radius: 9px;
      border-bottom-left-radius: 9px;
      border-bottom-right-radius: 9px;
    }

    .container {
      background-color: black;
      border-radius: 10px;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
        0 10px 10px rgba(0, 0, 0, 0.22);
      position: relative;
      overflow: hidden;
      width: 768px;
      max-width: 100%;
      min-height: 480px;
    }

    .form-container {
      position: absolute;
      top: 200px;
      margin-left: 25%;
      height: 100%;
      transition: all 0.6s ease-in-out;
      overflow: hidden;
      /*    overflow added here     */

    }

    .sign-in-container {
      left: 0;
      width: 30%;
      z-index: 2;

    }

    .container h3 {
      background-color: white;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0),
        0 10px 10px rgba(0, 0, 0, 0);
    }

    h3 {
      font-size: 16px;
      /* width:80px;
    margin-left:41%; */
    }

    h3:hover {
      color: lightseagreen;
      cursor: pointer;

    }

    h4 {
      border-radius: 20px;
      border: 1px solid white;
      background-color: white;
      color: lightcoral;
      font-size: 14px;
      font-weight: bold;
      padding: 12px 45px;
      letter-spacing: 1px;
      text-transform: uppercase;
      width: 200px;
      margin-left: 30%;
      transition: transform 80ms ease-in;
    }

    h4:hover {
      color: lightcoral;
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

  <main>
    <div class="form-container sign-in-container">
      <form action="authent.php" method="post">
        <h1>Sign in</h1>
        <!-- <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span> -->
        <input type="text" name="username" placeholder="username" required="required" />
        <input type="password" name="password" placeholder="password" required="required" /><br>
        <h3> <input type="checkbox" name="admin" value="admin"><label>Login as administrator</label><br>
        </h3>
        <h4> <input type="submit" value="LOG IN" name="submit" /> </h4>
        <!-- <button>Sign In</button> -->
      </form>
    </div>
  </main>
</body>

</html>