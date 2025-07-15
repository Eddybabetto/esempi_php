<?php

//mette in pausa l'esecuzione per tot secondi
sleep(3);
//$_POST $_GET o $_REQUEST contengono i dati della richiesta che arriva al file php
// echo print_r($_POST);
// echo var_dump($_POST);
// echo var_dump($_REQUEST);

if (isset($_POST["submit"])) {

  // imposta un cookie sul richiedente (browser), con il valore che desideriamo per il path che desideriamo
  setcookie("cookie-sessione", $_POST["name"], 0, "/");
 // $_COOKIE accedew ai cookie di una richiesta (se esistono)

  //se arriva da dentro il nostro form, questo campo è compilato, potrebbe anche essere un altro controllo
  header("Content-Type: application/json"); //imposto il formato di ritorno a json (meglio tenere una risposta sensata)
  echo json_encode($_POST); //ritorno, in questo caso, il nostro array di richiesta formattato come json
} else {
  echo "non autorizzato";
  die();
}
