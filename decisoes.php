<?php
$idade = 17;
$numeropessoas = 2;

echo "Entrada permitida a partir de 18 anos ou 16 anos acompanhado.<br>";

if ($idade >=18){
echo "Você tem $idade anos. Pode entrar";
}
else if($idade >=16 && $numeropessoas > 1){
    echo "Voce tem $idade anos, mas está acompanhado. Pode entrar.";
    }
    else {
    echo "Você tem $idade anos. Não pode entrar";
    }
?>