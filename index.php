<?php

    $dictionary = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",1,2,3,4,5,6,7,8,9,0,"#","@","*","£","$","%","&","€","^","?","+"];

    if( !empty($_GET["psw-length"]) ){
        $psw_length = (int)$_GET['psw-length'];
    }else{
        $psw_length = 0;
    }

    $generated_psw = "";

    function generatePassword($dictionary, $psw_length, $generated_psw){

        for($i = 0; strlen($generated_psw) < $psw_length; $i++) {

            $randomIndex = array_rand($dictionary);
            $randomElement = $dictionary[$randomIndex];
            
            $generated_psw .= $randomElement;

        };

        return $generated_psw;

    };

    var_dump($psw_length);
    var_dump(generatePassword($dictionary, $psw_length, $generated_psw));

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
        
        <!-- App Titles -->
        <div class="ms-container text-center">
            <h1 class="app-title">Strong Password Generator</h1>
            <h2 class="app-desc">Genera una password sicura</h2>
        </div>
        <!-- /App Titles -->

        <!-- Results -->
        <div class="ms-container-sm">
            <div class="ms-psw-container">
                <p class="psw-text">Nessun parametro valido inserito</p>
            </div>
        </div>
        <!-- /Results -->

        <!-- Form -->
        <div class="ms-container-sm">
            <form class="row" action="" method="GET">
                <div class="col d-flex flex-column justify-content-center">
                    <h4>Lunghezza Password:</h4>
                    <div class="ms-btns-container">
                        <button class="btn btn-primary" type="submit">Invia</button>
                        <button class="btn btn-secondary" type="submit">Annulla</button>
                    </div>
                </div>
                <div class="col d-flex flex-column align-items-center">
                    <input class="ms-input-psw" type="number" min="4"
                    name="psw-length">
                </div>
            </form>
        </div>
        <!-- /Form -->

        <!-- Bootstrap CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- /Bootstrap CDN -->
    </body>
</html>