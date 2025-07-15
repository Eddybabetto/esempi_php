<style>
  form.form-example {
    display: table;
  }

  div.form-example {
    display: table-row;
  }

  label,
  input {
    display: table-cell;
    margin-bottom: 10px;
  }

  label {
    padding-right: 10px;
  }
</style>
<!-- la action fa riferimento alla risorsa da chiamare, può essere relativa (parte dalla cartella del file) o assoluta (parte dalla root del server o chiama una risorsa esterna)  -->
<form action="api/test_form.php" method="post" class="form-example">
  <div class="form-example">
    <label for="name">Nome: </label>
    <input type="text" name="name" id="name" required />
  </div>
  <div class="form-example">
    <label for="last-name">Cognome: </label>
    <input type="text" name="last-name" id="last-name" required />
  </div>
  <div class="form-example">
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" required />
  </div>
  <div class="form-example">
    <input type="submit" name="submit" value="invia" />
  </div>

</form>

<script>
  console.log(document.cookie)
</script>