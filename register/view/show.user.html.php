<?php session_start();
    if (!isset($_SESSION['login']) && !isset($_SESSION['pass'])) {
        header('location:login.html.php');
    }
?>
<?php 
    session_start();
    $old_record = json_decode(file_get_contents('../controller/fichier.json'), true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.user.css">
    <title>Users</title>
</head>
<body>
    <div>
        <ul class="menu">
            <li><a href="./accueil.admin.html.php" >Accueil</a></li>
            <li><a href="#" class="active">Utilisateurs</a></li>
            <li><a href="./register.html.php">Inscription</a></li>
            <!-- <li><a href="./login.html.php">Deconnexion</a></li> -->
            <li><a href="../logout.php">Deconnexion</a></li>
            <li class="slider"></li>
        </ul>
    <h2>Liste des utilisateurs</h2>
    <div class="main">
        <table class="table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Login</th>
                <th>Password</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($old_record as $value) { ?>
                    <tr>
                        <td><?php echo $value['nom'];?></td>
                        <td><?php echo $value['prenom'];?></td>
                        <td><?php echo $value['login'];?></td>
                        <td><?php echo $value['pass'];?></td>
                        <td><?php echo $value['role'];?></td> <?php
                    }?>
                    </tr> 
            <tr>
               
            </tr>
            <tbody>
        </table>
    </div>
    </div>    
</body>
</html>