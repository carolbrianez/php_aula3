<?php
    $transporte = trim(strtolower($_GET['transporte']));

    
    if($transporte == "carro"){
        echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaDl9kB0DYmjgqj1xQ9piNEEUBvOJd-swRcfxk3nIBeZ1H-Ud6dzK8yUE&s=10" alt="carro">';
    }

    if($transporte == "moto"){
        echo '<img src="https://newr7-r7-prod.web.arc-cdn.net/resizer/v2/CRAZYMAHMFISDK5WGAPZ4PPC5A.jpg?auth=b23ba2e410452392b7394a938506eea2cd97db347262bbb85683326d63a717a1&width=780&height=520" alt="moto">';
    }

    if($transporte == "bicicleta"){
        echo '<img src="https://i.pinimg.com/474x/53/cf/2b/53cf2b12ad8321c04f1e63d9c2be473c.jpg" alt="bicicleta">';
    }

    if($transporte == "onibus"){
        echo '<img src="https://gasolinanaveiaeferrugemnapele.wordpress.com/wp-content/uploads/2017/11/1.jpg?w=736" alt="onibus">';
    }

    if($transporte == "skate"){
        echo '<img src="https://d1o6h00a1h5k7q.cloudfront.net/imagens/img_m/16190/7429139.jpg" alt="skate">';
    }


?>