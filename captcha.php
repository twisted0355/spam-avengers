<?php

    function captchaRand(){
        //calcul générator rand A + rand B
        $nbrA = rand(0,10);
        $nbrB = rand(0,10);

        //total
        $total = $nbrA + $nbrB;

        //random question message A + B = ?
        $randomMsg =  $nbrA . " + " .$nbrB;
        return $total;

    }

    function captchaVerif($total){
        //Response captcha
        $response = $_POST['resp_captcha'];

        //condition of submiting form
        if(isset($nbrA) && isset($nbrB) && $total = htmlspecialchars(ctype_digit($response))){
            // Receving e-mail
            $to = "mymail@gmail.com";
        }
        else{
            //else mail return to sender :-p ( mouahaha )
            $to = int($_POST["email"]);
        }
    }

?>