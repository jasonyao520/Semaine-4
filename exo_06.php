<?php 
function anonyme($func){
    if(is_string($func)){//si le variable est une chaine de caracter
        echo strtolower($func);//afficher toutes la phrase en miniscule 
    }
    else{
        echo "ce que vous venez de faire rentre est pas une chaine de caracter excuse monsieur ,madame ou pd ";
    }
}
echo anonyme("BNJOUR")."<br><br>";

echo anonyme("Bro")."<br><br>";

anonyme(4);
?>