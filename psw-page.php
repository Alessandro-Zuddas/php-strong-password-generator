<?php
    session_start();

    include __DIR__ . "/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <!-- Bootstrap CDN -->
        <!-- Mine style -->
        <link rel="stylesheet" href="style.css">
        <!-- /Mine style -->
        <title>La tua password</title>
    </head>
    <body>
        
        <!-- App Titles -->
        <div class="ms-container text-center">
            <h1 class="app-title">La tua password sicura:</h1>
        </div>
        <!-- /App Titles -->

        <!-- Results -->
        <div class="ms-container-sm">
            <div class="ms-psw-container text-center my-5 py-5">

                <?php if(generatePassword($dictionary, $psw_length, $generated_psw) == ""){ ?>
                    <p class="psw-text">Nessun parametro valido inserito</p>
                <?php } else { ?>
                    <strong class="psw-text"> <?php echo $_SESSION["safePsw"] ?> </strong>
                <?php } ?>

            </div>

            <form class="text-center" action="index.php">
                <button class="btn btn-secondary">Indietro</button>
            </form>
        </div>
        <!-- /Results -->

        <!-- Bootstrap CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- /Bootstrap CDN -->
    </body>
</html>