<?php


function showAllProfiles()
{
    $mysqli = new mysqli('localhost', 'root', '', 'memory');
    $query = "SELECT DISTINCT name FROM score_utilisateurs";
    $result = $mysqli->query($query);
    $result = $result->fetch_all();
    return $result;
}

function showProfileRecords($req) {
    $mysqli = new mysqli('localhost', 'root', '', 'memory');
    $query = "SELECT * FROM score_utilisateurs ORDER BY  score  DESC  ";
    $result = $mysqli->query($query);
    $result = $result->fetch_all();
    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="profiles">
        <div class="profiles-container">
            
            <div class="profiles-container__right-block">
            <div class="profiles-container__content-block">
                        <div class="content-block__container">
                            
                            <h2 style="text-align:center;">Le classement des joueurs par scores obtenus :</h2>
                            <?php 
                            $_SESSION['user']=['name'];?>

            <div class="tableau_classement">
                            <?php
                            foreach (showProfileRecords($_SESSION['user']) as $val): ?>                                
                                <p><?=$val[1]?> a obtenu : </p>
                                <p style="color:aqua;font-size:30px;"><i><?=$val[2]?></i> points</p>
                            <?php endforeach; ?>
                        </div>
                </div> 
                <div class="profiles-container__backwards-block">
                    <form action="index.php" method="post">
                        <input type="submit" value="ACCUEIL">
                    </form>
                </div>
            </div>
        </div>
    </div></div>
    
</body>
</html>