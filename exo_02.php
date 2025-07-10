<?php 
$var = "sam";
if (isset($var)){//si var existe et est non nul
    unset($var);//supprime var
    echo "la varible variable var a ete supprime ";
}else{
    echo "la variable variable var na pas ete supprimer";
}
?>