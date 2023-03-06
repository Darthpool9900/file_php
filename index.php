<?php 
$content = "Voce que é";
    if(file_exists('request.txt')){
        file_put_contents('request.txt',$content);
    }

    echo file_get_contents('request.txt');
?>