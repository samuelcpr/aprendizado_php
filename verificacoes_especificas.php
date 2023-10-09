<?php 

$idade = 17;
$nome = 'samuel';

echo "voce so pode entrar se tiver mais do que 18 anos. e se o seu nome for \"$nome\"" .PHP_EOL;

# se a sua idade for Maior que 18 anos voce pode entrar 
# se não voce não pode entrar

//if ($idade > 18 || $idade == 18) também é um método para adicionar verificacão
//if ($idade > 18 or $idade == 18) também é um método para adicionar verificacão


# verifica se a idade é maior ou igual a 18 e se o convidade se chama samuel
# se sim ele vai poder entrar

// if ($idade >= 18 || $nome == 'samuel')também é um método para adicionar verificacão
// if ($idade >= 18 and $nome == 'samuel') também é um método para adicionar verificacão
if ($idade >= 18 && $nome == 'samuel'){
    echo "Voce tem \"$idade\" anos  e voce se chama \"$nome\" ".PHP_EOL;
    echo "voce pode entra".PHP_EOL;
}
else{
    echo'voce não tem 18 anos'.PHP_EOL;
    echo 'voce não pode entrar'.PHP_EOL;
}