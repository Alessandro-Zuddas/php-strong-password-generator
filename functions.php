<?php

    session_start();

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

        $_SESSION["safePsw"] = $generated_psw;

        return $_SESSION["safePsw"];

    };

    generatePassword($dictionary, $psw_length, $generated_psw);

?>