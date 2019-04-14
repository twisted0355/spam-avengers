<?php
    //calcul générator rand A + rand B
    $nbrA = rand(0,10);
    $nbrB = rand(0,10);

    //total
    $total = $nbrA + $nbrB;

    function captchaRand($nbrA,$nbrB,$total){
        //random question message A + B = ?
        $randomMsg =  $nbrA . " + " .$nbrB . " = ";
        var_dump($total);
        return $randomMsg;
    }

    function captchaVerif($total){
        return $total;
        if($total = $_POST['response']){
            $to = "exemple@hotmail.com";
        }
        else{
            $to = $_POST['email'];
        }
    }
?>