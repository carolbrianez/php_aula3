<?php
    $email = $_GET['email'];
    $senha = $_GET['senha'];

    if($email == "fulano@email.com" && $senha == "1234Thanos"){
        echo "Login bem-sucedido! ✔️";
    } else{
        echo "Login ou senha incorretos! ❌";
    }

?>