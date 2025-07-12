<?php
$tableau =["dano","max","dino",4];
function affiche($tab){
    foreach ($tab as $membre){
        echo $membre. "<br>";
    }
}           
affiche($tableau)
?>