<?php

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
        <title>Password Generator</title>
    </head>
    <body>
        
        <div class="ms-container text-center">
            <h1 class="app-title">Strong Password Generator</h1>
            <h2 class="app-desc">Genera una password sicura</h2>
        </div>

        <div class="ms-container-sm">
            <div class="ms-psw-container">
                <p class="psw-text">Nessun parametro valido inserito</p>
            </div>
        </div>

        <div class="ms-container-sm">
            <!-- Form -->
            <form class="row" action="">
                <div class="col d-flex flex-column justify-content-center">
                    <h4>Lunghezza Password:</h4>
                    <div class="ms-btns-container">
                        <button class="btn btn-primary" type="submit">Invia</button>
                        <button class="btn btn-secondary" type="submit">Annulla</button>
                    </div>
                </div>
                <div class="col d-flex flex-column align-items-center">
                    <input class="ms-input-psw" type="number">
                </div>
            </form>
            <!-- /Form -->
        </div>

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
        <!-- /Bootstrap CDN -->
    </body>
</html>