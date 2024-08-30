//Declaração de variáveis
<?php
$txt = "php";
echo "I love " . $txt . "!\n";
ECHO "I love " . $txt . "!";
echo "I love " . $TXT . "!\n";
?>



//Obtendo o tipo da variável com var_dump()
<?php
$number = 5456;
var_dump($number);
var_dump("John");
var_dump('John'); //As aspas duplas processam caracteres especiais, as aspas simples não.
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
?>



//Alterando o tipo das variáveis
<?php
$vx = 5;
var_dump($vx);
$vx = (string) $vx;
var_dump($vx);
?> 



//Variáveis globais
<?php
$x = 4444;

function myTest(){
echo "A variável x dentro da função é: $x \n"; //A variável não é acessível
}
myTest();

echo "A variável x fora da função: $x";
?> 


<?php
$x = 100;
$y = 33;

function globalVar() {
  global $x, $y;
  $y = $x + $y;
} 

globalVar(); 
echo ($y); 
?>


<?php
static $xv = 20; //static permite que a variável não seja excluída
$yv = 5;

function soma() {
  $GLOBALS['yv'] = $GLOBALS['xv'] + $GLOBALS['yv'];
} 

soma();
echo $yv;
?>



//Aspas simples e duplas
<?php
$name = 'Linus';
echo 'Hello $name ';
echo 'Hello '.$name.'.'; //Exige o "." quando com aspas simples
echo "Hello $name";
?>



//Retornando o tamanho de uma string com strlen()
<?php
echo strlen("novecentos");
?> 



//Contando a quantidade de palavras em uma string com str_word_count()
<?php
echo str_word_count("Uma frase com sete palavras e 1 número");
?> 



//Pesquisando uma palavra dentro de uma string com strpos()
<?php
echo strpos("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", /*A palavra que desejo*/ "Ipsum");
?> 



//Upper e Lower Case = strtoupper() strtolower()
<?php
$var = "Hello World!";
echo strtoupper($var);
echo strtolower($var);
?> 



//Substituição de palavras com str_replace()
<?php
$x = "O médico recomendou o uso de um antiinflamatório para reduzir a dor e o inchaço.";
echo str_replace("antiinflamatório", "anti-inflamatório", $x);
?> 



//Removendo espaços em branco com trim() ou str_replace()
<?php
$x = " Hello World! ";
echo trim($x); //APENAS espaços no início ou fim
$string = "   jessica@ email.com.espaco.com";
$string_sem_espacos = str_replace(' ', '', $string);
echo $string_sem_espacos;
?> 



//Separando strings a partir do primeiro espaço em branco usando explode()
<?php
$x = "Maria Pereira de Albuquerque Camps";
$y = explode(" ", $x, 2);//Dividindo em duas a partir do primeiro espaço em branco

$primeiroNome = $y[0];
$sobrenome = isset($y[1]) ? $y[1] : '';//sobrenome recebe o split na posição 1, caso vazio recebe uma string vazia

echo "Primeiro Nome: " . $primeiroNome . "\n";
echo "Sobrenome: " . $sobrenome . "\n";
?>



//Fatiando strings com substr()
<?php
$x = "2023FATEC00003212025";
echo substr($x, 4, 5);//Inicia no índice 4 e termina 5 posições após o início - Retorna FATEC
echo "\n";
echo substr($x, 9); //Inicia no 9 indo até o final - Retorna 00003212025
echo "\n";
echo substr($x, -4, 4); //Inicia de trás para frente - Retorna 2025
echo "\n";
echo substr($x, 4, -11); //Retorna FATEC
?>