<?php

    session_start();

    $letters = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $capital_letters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $symbols = ["#","@","*","£","$","%","&","€","^","?","+"];
    $numbers = [1,2,3,4,5,6,7,8,9,0];
    
    $dictionary = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",1,2,3,4,5,6,7,8,9,0,"#","@","*","£","$","%","&","€","^","?","+"];

    if( !empty($_GET["psw-length"]) ){
        $psw_length = (int)$_GET['psw-length'];
    }else{
        $psw_length = 0;
    }

    $generated_psw = "";

    function generatePassword($arr1, $arr2, $arr3, $arr4, $psw_length, $generated_psw){

        for($i = 0; strlen($generated_psw) < $psw_length; $i++) {

            for($i = 0; $i < 1; $i++){

                $randomIndex = array_rand($arr1);
                $randomElement = $arr1[$randomIndex];
                
                $generated_psw .= $randomElement;

            };
            for($i = 0; $i < 1; $i++){

                $randomIndex = array_rand($arr2);
                $randomElement = $arr2[$randomIndex];
                
                $generated_psw .= $randomElement;

            };
            for($i = 0; $i < 1; $i++){

                $randomIndex = array_rand($arr3);
                $randomElement = $arr3[$randomIndex];
                
                $generated_psw .= $randomElement;

            };
            for($i = 0; $i < 1; $i++){

                $randomIndex = array_rand($arr4);
                $randomElement = $arr4[$randomIndex];
                
                $generated_psw .= $randomElement;

            };

        };

        $_SESSION["safePsw"] = $generated_psw;

        return $_SESSION["safePsw"];

    };

    generatePassword($letters, $capital_letters, $symbols, $numbers, $psw_length, $generated_psw);

?>