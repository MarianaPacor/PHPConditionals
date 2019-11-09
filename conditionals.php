<?php
/* Definir duas variáveis com números, comparar com um if para decidir qual
deles é maior e imprimir “O maior número é N”, sendo que N é o valor da maior
variável. */
// Adicionar um else ao exercício anterior para cobrir o caso inverso.
$n1 = 12;
$n2 = 24;
if ($n1 > $n2) {
    echo "O maior número é: $n1";
} else if ($n1 == $n2) {
    echo 'Os números são iguais';
} else {
    echo "O maior número é: $n2";
}                      /* quebra de linha */ echo '<br>';
//ternário
$higherNumber = $n1 > $n2 ? "O maior número é $n1" : "O maior número é $n2";
echo $higherNumber;
// Ou com uma função                
/* quebra de linha */ echo '<br>';
function higherNumber($n1, $n2) {
    if ($n1 > $n2) {
    return "O maior número é: $n1";
} else if ($n1 == $n2) {
    return 'Os números são iguais';
} else {
    return "O maior número é: $n2";
}
}
echo higherNumber(8, 89);               /* quebra de linha */ echo '<br>';                 
/* Usando a função mt_rand(x,y), em que “x” é o número mínimo e “y” é o número
máximo, gerar um número aleatório entre 1 e 5, atribuí-lo a uma variável e
imprimir essa variável apenas se o número gerado for 3 ou 5. */
$randomNumberOneToFive = mt_rand(1, 5);
if ($randomNumberOneToFive == 3 || $randomNumberOneToFive = 5) {
    echo $randomNumberOneToFive;
}                                           /* quebra de linha */ echo '<br>';
/* Utilizando a variável do exercício anterior, imprimir “O número NÃO é 3” caso
essa premissa seja verdadeira. Caso o número seja 3, imprimir simplesmente o
número 3. */
if ($randomNumberOneToFive == 3) {
    echo 'O número é 3.';
} else {
    echo 'O numéro NÃO é 3.';
}                                           /* quebra de linha */ echo '<br>';
//ternário
$isBigger = $randomNumberOneToFive = 3 ? 'O número é 3.' : 'O número NÃO é 3.';
echo $isBigger;                             /* quebra de linha */ echo '<br>';
/* Gerar um número entre 1 e 100, verificar se é maior que 50. Caso seja
verdadeiro, retornar “O número é maior que 50” e, caso seja falso: “O número é
menor que 50”. */
if (mt_rand(1, 100) > 50) {
    echo "O número é maior que 50.";
} else {
    echo "O número é menor que 50.";
}                                              /* quebra de linha */ echo '<br>';
// ternário                         
$greater = mt_rand(1, 100) > 50 ? "O número é maior que 50." : "O número é menor que 50.";
echo $greater;                              /* quebra de linha */ echo '<br>';
/* Gerar um número aleatório entre 0 e 100. Se ele for maior que 50 e par,
imprimir “O número cumpre a condição”. Caso contrário, imprimir “O número
NÃO cumpre a condição” */
$randomOneTo100 = mt_rand(1, 100);
$greaterAndEven = $randomOneTo100 > 50 && $randomOneTo100%2==0 ? "O número cumpre a condição." : "O número NÃO cumpre a condição.";
echo $greaterAndEven;                               /* quebra de linha */ echo '<br>';
// Modificar o exercício anterior para que o número 0 também cumpra a condição.
$randomOneTo100 = mt_rand(1, 100);
$greaterAndEven = $randomOneTo100 > 50 && $randomOneTo100%2==0 || $randomOneTo100==0 ? "O número cumpre a condição." : "O número NÃO cumpre a condição.";
echo $greaterAndEven;                                       /* quebra de linha */ echo '<br>';
/* Teremos 3 variáveis: idade (um número), casado (um booleano) e sexo (string
que pode ser “Masculino”, “Feminino” ou “Outro”). Se a pessoa tiver mais de 18
anos e não for casada, será impressa a mensagem “Boas-vindas”. */
$idade = 25;
$casado = false;
$sexo = 'Outro';
if ($idade > 18 && $casado==false) {
    echo "Boas-vindas";
}                                                          /* quebra de linha */ echo '<br>';
//dentro de uma função                                      
function welcome ($idade, $casado, $sexo) {
    if ($idade > 18 && $casado==false) {
        echo "Boas-vindas";
    }
}
echo welcome(24, false, 'Feminino');                        /* quebra de linha */ echo '<br>';
//ternário
$welcome = $idade > 18 && $casado!=true ? 'Boas-vindas' : '' ;
echo $welcome;                                            /* quebra de linha */ echo '<br>';
// Modificar o exercício anterior para também imprimir “Boas-vindas” se o sexo for “Outro”, sem importar o restante das condições.
$welcome = $sexo == 'Outro' ? 'Boas-vindas' : ' ';
echo $welcome;                                       /* quebra de linha */ echo '<br>';
// Definir uma variável chamada quantidadeDeAlunos, contendo um número. Em seguida, escrever o seguinte código:
$quantidadeDeAlunos = 100;
if ($quantidadeDeAlunos) {
echo "true";
} else {
echo "false";
}                                                       /* quebra de linha */ echo '<br>';
// O que é impresso? True
/*Testar com os valores -100, -1, 0, 1 e 100 para quantidadeDeAlunos
-100 = true; -1 = true; 0 = false; 1 e 100 = true.*/
//Testar o seguinte código:
$i = 0;
if ($i == 1 ) {
echo "true";
} else {
echo "false";
}                                                     /* quebra de linha */ echo '<br>';
//O que é impresso? True, ou Um
//Se trocamos 1 por 0, o que é impresso? False ou nada 
/*Definir uma variável $numero com um número. Imprimir “O número é par” ou
“O número é impar”, de acordo com a situação. Este exercício deve ser
resolvido com um if ternário (operador ?)*/
$number = 42;
$even = $number%2==0 ? "O número é par." : "O número não é par.";
echo $even;                                         /* quebra de linha */ echo '<br>';
// Utilizando mt_rand(), gerar um número aleatório entre 1 e 5 na variável “$i”.
$i = mt_rand(1, 5);
// Utilizando SWITCH, imprimir “i é igual a X”.
switch($i) {
    case 1:
    echo 'i igual a 1';
    break;
    case 2:
    echo 'i igual a 2';
    break;
    case 3:
    echo 'i igual a 3';
    break;
    case 4:
    break;
    echo 'i igual a 4';
    break;
    case 5: 
    echo 'i igual a 5';
    break;
}                                                       /* quebra de linha */ echo '<br>';
/* Utilizando o mesmo switch, deixar apenas os casos do número 1 e 2. Se o número 
for outro, imprimir “NÃO é igual a 1 ou 2” */
switch($i) {
    case 1:
    echo 'i igual a 1';
    break;
    case 2:
    echo 'i igual a 2';
    break;
    default: 
    echo 'NÃO é igual a 1 ou 2';
    break;
}                                                   /* quebra de linha */ echo '<br>';
/* Utilizando mt_rand(), gerar dois números aleatórios entre 1 e 100 na variável
“$x” e a variável “$y”. Imprimir qual é o maior entre os dois ou se são iguais. */
$x = mt_rand(1, 100);
$y = mt_rand(1, 100);
if ($x > $y) {
    echo "O maior número é: $x";
} else if ($x == $y) {
    echo 'Os números são iguais';
} else {
    echo "O maior número é: $y";
}                      /* quebra de linha */ echo '<br>';