<?php

if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    // inclure ma connexion
    require_once "config.php" ;

    // prépare ma requête pour récupérer le user en fonction de l'id
    $sql "SELECT* FROM users WHERE id = ?" ;


// prepare ma connexion avec $link et ajoute ma requête avec $sql
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id) ;

        $param_id = trim($_GET['id']);
        
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ (Lecture)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>

</head>


<body>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">Lecture</h1>
                    <div class="form-group">
                        <label for="">Email</label>
                        <p><?php echo $row["email"]; ?> </p>
                    </div>
                    <div class="form-groupe">
                        <label for="">Mot de passe</label>
                        <p><?php echo $row["Mot de passe"]; ?> </p>

                    </div>

                </div>
            </div>
        </div>


    </div>


</body>

</html>