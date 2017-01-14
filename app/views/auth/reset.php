<!DOCTYPE html>
<?php header('Content-Type: text/html'); ?>
<html lang="en">

  <head>
    <title>Camagru - Reset</title>
    <meta name="viewport" charset="UTF-8" content="width=device-width, initial scale=1">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Shadows+Into+Light" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/css/camagru.css">
  </head>

  <body>

    <header>

      <ul class="topnav" id="myTopnav">
        <li><a class="active" href="/Camagru/public/home" style="font-family: 'Architects Daughter', cursive;">Camagru</a></li>
        <?php if (isset($_SESSION['user'])) { echo '<li><a href="/Camagru/public/auth/logout">Log out</a></li>'; } else { echo '<li><a href="/Camagru/public/auth/login">Log in</a></li>'; } ?>
        <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="open_close()">☰</a></li>
      </ul>


    </header>

    <form action="action_page.php">
      <div class="container">
        <label><b style="color: white;">E-mail</b></label>
        <input type="email" placeholder="placeholder@domain.co" name="email" required>

        <button type="submit" style="background-color: #333;">Login</button>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <a href="/Camagru/public/home" ><button type="button" class="cancelbtn">Cancel</button></a>
        <span class="psw">Forgot <a href="/Camagru/public/auth/reset">password?</a></span>
      </div>
    </form>

    <footer><p style="text-align: center; color: #333;">developed by afullstopdot</p></footer>

    <script src="<?php echo SITE_URL; ?>/js/camagru.js"></script>
    
  </body>

</html>