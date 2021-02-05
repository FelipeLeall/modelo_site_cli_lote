
<?php
    $hostname ="localhost";
    $username ="root";
    $senha ="";
    $banco ="excellencecorporation";

    $db = @mysqli_connect($hostname,$username,$senha,$banco) or die ("Erro ao conectar ao banco de dados");
    
?>