<?php

//UNIDADES VALIDAS PARA O SISTEMA
$unidades = [
    'mm' => 1,
    'cm' => 10,
    'm' => 1000,
    'km' => 1000000
];

//TEXTO DAS UNIDADES VALIDAS
$unidadesValidas = implode(', ', array_keys($unidades));


do{

    //SOLICITAR A UNIDADE BASE PARA O USUARIO
    $unidadeBase = readline('Digite a unidade base ('.$unidadesValidas.'): ');

    //MENSAGEM DE ERRO DA UNIDADE
    if(!isset($unidades[$unidadeBase])){
        echo "Unidade inválida\n\n";
    }

}while(!isset($unidades[$unidadeBase]));

do{

    //SOLICITAR O VALOR DA UNIDADE BASE PARA O USUARIO
    $valorBase = readline('Digite o valor base: ');

    //MENSAGEM DE ERRO DA VALOR
    if(!is_numeric($valorBase)){
        echo "Valor inválido!\n\n";
    } 
}while(!is_numeric($valorBase));

//VALOR EM MILIMETROS
$valorMilimetro = $valorBase * $unidades[$unidadeBase];

echo "O valor em milímetros é " .$valorMilimetro."\n";

echo "\nResultados: \n";

//IMPRIME AS UNIDADES DO SISTEMA
foreach($unidades as $unidade => $divisor){
    //IGNORA A IMPRESSÃO DA UNIDADE BASE
    if($unidade == $unidadeBase) continue;

    //IMPRIME O VALOR CORRESPONDENTE NA UNIDADE
    echo "> ".($valorMilimetro/$divisor). " ".$unidade."\n";
}