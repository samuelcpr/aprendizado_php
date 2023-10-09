<?php 

$idade = 18;

echo "voce so pode entrar se tiver mais do que 18 anos." .PHP_EOL;

# se a sua idade for Maior que 18 anos voce pode entrar 
# se não voce não pode entrar

//if ($idade > 18 || $idade == 18) também é um método para adicionar verificacão
//if ($idade > 18 or $idade == 18) também é um método para adicionar verificacão
if ($idade >= 18){
    echo "Voce tem \"$idade\" anos ".PHP_EOL;
    echo "voce pode entra".PHP_EOL;
}
else{
    echo'voce não tem 18 anos'.PHP_EOL;
    echo 'voce não pode entrar'.PHP_EOL;
}