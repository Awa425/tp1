
<?php session_start();?>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.login.css ">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign">Se connecter</p>
    <form class="form1" action="../controller/security.php" method="POST">
      <p class="erreur"><?php if (isset($_SESSION['errAuthentification']))  {
        echo $_SESSION['errAuthentification'];
      }?></p>
      <input class="un " type="text" name="login"  placeholder="Login">
      <input class="pass" type="password" name="pass"  placeholder="Password">
      <input type="submit" name="connecter" class="submit" value="Connexion"></input>                
    </div>   
</body>

</html>

