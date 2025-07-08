<?php


//$_POST $_GET o $_REQUEST contengono i dati delal richiesta che arriva al file php
 
if (isset($_POST["submit"])) {
  //se arriva da dentro il nostro form, questo campo è compilato, potrebbe anche essere un altro controllo
  header("Content-Type: application/json"); //imposto il formato di ritorno a json (meglio tenere una risposta sensata)
  echo json_encode($_POST); //ritorno, in questo caso, il nostro array di richiesta formattato come json
}
