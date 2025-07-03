<h1>ciao</h1>

<?php

echo "ciao sono un codice php";
echo "<h2>ciao sono un codice php</h2>";

$variabile = "3 luglio";

echo $variabile . "</br>";

$variabile = 7;

echo $variabile . "</br>";;

$variabile_che_non_esiste = NULL;
echo $variabile_che_non_esiste . "</br>";;


$variabile = True;
echo $variabile  . "</br>";;
$variabile = False;
echo $variabile . "</br>";


// numeri con virgola

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1_234.567;
echo $a . "</br>";
echo $b . "</br>";
echo $c . "</br>";
echo $d . "</br>";

//stringhe

$testo = "ciao sono un testo con un apostrofo a caso '";
echo $testo . "</br>";
$testo = 'ciao sono un testo con un apostrofo a caso \'';
echo $testo . "</br>";
$testo = `Questa non è una stringa \'`;
echo var_dump($testo) . "</br>";


// stringa con variabile
$numero = 3;

$testo = "ciao {$numero} {{$numero} sono un testo con un apostrofo a caso \" ";
echo $testo . "</br>";
echo var_dump($testo) . "</br>";
$testo = 'ciao {$numero} sono un testo con un apostrofo a caso \'';
echo $testo . "</br>";
echo var_dump($testo) . "</br>";

//array

$array_numeri = array(
  2,
  3,
  4
);
//questa cosa ritorna errore perchè tecnicamente array non è un dato semplice e quindi stampabile (niente conversione implicita a stringa come in js)
echo $array_numeri . "</br>";
//var_dump stampa la tipologia della variabile, con la lunghezza della stessa e il contenuto in maniera ricorsiva
echo var_dump($array_numeri) . "</br>";

$array_chiave_valore = [
  "chiave1" => "valore1",
  2,
  "elemento in indice 1",
  3 => "stringa"
];

// $array_chiave_valore = array(
//   "chiave1" => "valore1",
//   2,
//   3 => "stringa"
// );


echo "-------------------</br>";

echo ($array_chiave_valore["chiave1"]) . "</br>";
echo ($array_chiave_valore[0]) . "</br>";
echo ($array_chiave_valore[3]) . "</br>";
echo ($array_chiave_valore[1]) . "</br>";
echo ($array_chiave_valore[2]) . "</br>";
echo var_dump($array_chiave_valore) . "</br>";


$array_chiave_valore["chiave_nuova che prima non esiste"] = 90;
//aggiunge un elemente in coda all'array (chiave numerica successiva)
$array_chiave_valore[] = 91;
echo var_dump($array_chiave_valore) . "</br>";


echo "-------------------</br>";

$array_castato = [
  "+1" => "sono una chiave stringa",
  "1" => "sono chiave intero",
  "01" => "sono chiave stringa",
  3.4 => "sono chiave intero",
  true => "sono chiave intero da booleano",
  false => "sono chiave intero da booleano false",
  "array" => [1, 2, 34]
];

echo var_dump($array_castato) . "</br>";

?>