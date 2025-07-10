<h1>ciao</h1>

<?php
error_reporting(E_ALL);
echo "ciao sono un codice php";
echo "<h2>ciao sono un codice php</h2>";

$variabile = "3 luglio";

echo $variabile . "</br>";

$variabile = 7;

echo $variabile . "</br>";

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



echo "</br>";
echo "-------------------------------------";
echo "</br>";
class Studente
{

  public $altezza;

  public function __construct($altezza)
  {
    $this->altezza = $altezza;
  }


  public function getAltezza()
  {
    return $this->altezza;
  }

  public static function calcolaMediaVoti(array $array_voti): float
  {
    return array_sum($array_voti) / count($array_voti);
  }
}

$studente = new Studente(180);
// $altezza_studente = $studente->getAltezza();
$altezza_studente = $studente->altezza;
echo "l' altezza dello studente in cm è $altezza_studente";

echo "</br>";
echo "-------------------------------------";
echo "</br>";


echo "media voti " . Studente::calcolaMediaVoti([1, 2, 3, 4, 6]);

echo "</br>";
echo "-------------------------------------";
echo "</br>
Variabili variabili";
echo "</br>";
$nome = "pippo";

echo $nome;
echo "</br>";
$$nome = 'topolino';

echo $pippo;
echo "</br>";
echo $$nome;
echo "</br>";
$nome = 'aaaa';

echo $pippo;
echo "</br>";
echo $$nome;
echo "</br>";



$mostra = !true;

?>

<?php if ($mostra): ?>

  <h1> ciao sono il then </h1>

<?php else: ?>

  <h1> ciao sono l' else </h1>

<?php endif ?>

<?php
$array = [1, 2, 3, 17];

foreach ($array as $value) {
  echo "Current element of \$array: $value.\n";
}
echo "</br>";
/* Example: key and value */
$array = [
  "one" => 1,
  "two" => 2,
  "three" => 3,
  "seventeen" => 17
];

foreach ($array as $key => $value) {
  echo "Key: $key => Value: $value\n";
}

echo "</br>";
echo "</br>";
$var = 5;
$var2 = 6;

switch ($var) {
  case $var2:
    echo "sono il 5";
    break;
  case 10:
    echo "sono il 10";
    break;
  default:
    echo "sono default";
    break;
}

echo "</br>";
echo "</br>";

switch (true) {
  case $var2 == $var:
    echo "sono uguali";
    break;
  case $var2 > $var:
    echo "var2 maggiore di var";
    break;
  default:
    echo "sono default";
    break;
}


?>