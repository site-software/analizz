<?php 
@ob_start();
@session_start();
try {

    $db = new PDO("mysql:host=localhost; dbname=avtoanal_izoto; charset=utf8","avtoanal_izoto","&NJaeyHy75gy");
    
} catch (PDOException $e) {
    
    echo $e->GetMessage();
}









?>