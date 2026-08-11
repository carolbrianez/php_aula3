<?php
    $email = $_GET['email'];

    echo "E-mail: " .$email . '<br>';

    if(isset($_GET['noticias']) && isset($_GET['promocoes'])){
        echo "Você receberá notícias e promoções" . '<br>';
    } else if(isset($_GET['noticias'])){
        echo "Você receberá notícias" . '<br>';
    } else if(isset($_GET['promocoes'])){
        echo "Você receberá promoções" . '<br>';
    } else{
        echo "Assinatura recusada!" . '<br>';
    }

?>