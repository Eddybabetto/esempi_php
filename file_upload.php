<form
  enctype="multipart/form-data"
  method="post">
  filename: <input type="text" name="filename"><br>
  file: <input type="file" name="file"><br>
  <input type="submit" name='submit' value="Send">
</form>

<?php

if (isset($_POST["submit"])) { //verifico se submit è stato effettivavamente premito il tasto submit o sono arrivato qua in altre maniere
  // per richieste axaj, inserire anche 
  //if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
  // ajax request
  // } else {
  //   die('direct access is forbidden');
  // }
  
  

  $target_dir = "./uploads/"; //delimito la cartella degli upload 
  $target_file = $target_dir . basename($_POST["filename"] ? $_POST["filename"] :  $_FILES["file"]["name"]); // decido che nome deve avere il file, in questo caso posso settare un override
  $continue = true; // variabile accessoria per i controlli
  $file_type = explode("/", strtolower($_FILES["file"]["type"]))[1]; //recupero il tipo di file, di solito il fo0rmato è [gruppo generico]/[estensione specifica]

  // verifico che un file con lo stesso nome non esista già
  if (file_exists($target_file)) {
    echo "Spiacenti,il file esiste già";
    $continue = false;
  }

  // permetto solo a determinati formati di essere salvati, utile per esempeio per impedire all'utente di caricare qualsiasi cosa
  // attenzione, un file malevolo può comunque essere salvato e falsificato, quindi dobbiamo far attenzione a cosa facciamo caricare 
  //ed eventualmente eseguire
  // il controllo via html è, ovviamente, non limitante per un utente

  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Puoi caricare solo immagini";
    $continue = false;
  }

  //se volessimo controllare la dimensione, possiamo farlo con 
  //$_FILES['file']['size']);
  // ATTENZIONE, la dimensione è in byte 

  if ($continue) { //verifico che i controlli siano passati

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) { //muovo il file dalla richiesta al path (viene scritto un nuovo file e copiato il contenuto)
      echo "File caricato: " . htmlspecialchars(basename($_FILES["file"]["name"]));
    } else {
      //se dovesse fallire, ritorno un errore
      echo "Impossibile caricare il file, riprova";
    }

  } else {
    echo "Impossibile caricare il file: non rispetta tutti i requisiti";
  }
} else {
  echo "richiesta non derivante dall'invio del form, esco";
}


?>