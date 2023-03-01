<?php
error_reporting(E_ERROR | E_PARSE);

if(isset($_SESSION)) {
    session_unset();
    session_destroy();
    session_abort();
    session_register_shutdown();    
} else {
    if (isset($_POST['start']) && (int) $_POST['start'] >= 3 && (int) $_POST['start'] <= 12) {
        session_start();
        $_SESSION['pairNmbr'] = (int) $_POST['start'];
        header('Location: jeu.php');    
    } 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="homepage">
        <h1 style="padding-top:5%;">Bienvenue sur le jeu de Memory</h1>
        <div class="homepage-container">
            <h2>Memory_Game_Car </h2>
            <?php if (isset($_POST['start']) && (gettype($_POST['start']) != 'integer' || $_POST['start'] > 12 || $_POST['start'] < 2)): ?>
            <p><i>Nombre de pairs entre 3 et 12</i></p>
            <?php endif;?>
            <h2>Entrez un nombre de paires (entre 3 et 12)</h2>
            <form action="" method="post">
                <input type="text" name="start" class="restart">
                <input type="submit" value="START GAME" class="restart">
            </form><br>
        </div>
    </div>
    <footer class="footer">                                      
                
                    <p>© 2023 Copyright: Memory_Game_Car</p>
                
            </footer>
</body>
</html>
