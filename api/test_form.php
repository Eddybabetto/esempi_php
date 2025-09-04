<?php

//mette in pausa l'esecuzione per tot secondi
sleep(3);
//$_POST $_GET o $_REQUEST contengono i dati della richiesta che arriva al file php
// echo print_r($_POST);
// echo var_dump($_POST);
// echo var_dump($_REQUEST);

if (isset($_POST["submit"])) {
  $string = file_get_contents("./credenziali.json");
  $json_a = json_decode($string);
  $is_registered = false;
  foreach ($json_a as $obj_user) {
    if ($obj_user->username == $_POST["name"] && $obj_user->password == $_POST["password"]) {
      $is_registered = true;
      break;
    }
  }

  header("Content-Type: application/json");
  if ($is_registered) {
    setcookie("cookie-sessione", $_POST["name"], 1757103590, "/");
    echo json_encode(["registered" => true]);
  } else {
    setcookie("cookie-sessione", "", 1757103590, "/");
    echo json_encode(["registered" => false]);
  }

  // imposta un cookie sul richiedente (browser), con il valore che desideriamo per il path che desideriamo

  // $_COOKIE accedew ai cookie di una richiesta (se esistono)

  //se arriva da dentro il nostro form, questo campo è compilato, potrebbe anche essere un altro controllo
  // header("Content-Type: application/json"); //imposto il formato di ritorno a json (meglio tenere una risposta sensata)
  // $json_stringa = json_encode($_POST);

  // $ARRAY_JSON = json_decode($json_stringa); //ritorna un oggetto
  // echo var_dump($_POST["name"]);
  // echo var_dump($ARRAY_JSON->name);
  // echo json_encode($_POST); //ritorno, in questo caso, il nostro array di richiesta formattato come json
} else {
  echo "non autorizzato";
  die();
}
