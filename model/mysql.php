<?php
    $mysql = new mysqli('localhost', 'root', '', 'aulaphp');
    $mysql->set_charset('utf8');

    if($mysql != TRUE) {
        echo "Deu ruim no banco de dados";        
    } 
?>