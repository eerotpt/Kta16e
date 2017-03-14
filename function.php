<?php

function aeg(){
 date_default_timezone_set("Europe/Tallinn");   
$time = date("H:i:s");
    
    echo $time;
    if ($time > 17){
        echo "tund lõppenud";
    } else {
        echo "tund kestab";
    }
    
}

function home(){
    echo '<li><a href="index.php">Tagasi</a></li>';
}
function GetVisitorIp(){
    $ip =$_SERVER['REMOTE_ADDR'];
    $time = date("H:i:s");
    $visitor = $ip." : ". $time."\n";
    $file = fopen('visitor.txt',"a") or
    die ("Ei saanud avada");
    fwrite($file, $visitor);{
        echo "kylastate saiti aadressilt".$ip;
        fclose($file);
    }
}


?>