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

  .loader {
    border: 16px solid #f3f3f3;
    /* Light grey */
    border-top: 16px solid #3498db;
    /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }
</style>

<form action="api/test_form.php" method="post" class="form-example" id="form">
  <div class="form-example">
    <label for="name">Nome: </label>
    <input type="text" name="name" id="name" required />
  </div> 
   <div class="form-example">
    <label for="name">password: </label>
    <input type="password" name="password" id="password" required />
  </div>

  <div class="form-example">
    <input type="submit" name="submit" value="invia" />
  </div>

</form>

<script>
  async function sendData(form) {

    const formData = new FormData(form);
    formData.append("submit", "true");

    try {
      document.getElementById("form").innerHTML = "<div class=\"loader \"></div>"

      // con query params
      // const params = new URLSearchParams(formData);
      // const response = await fetch("api/test_form_email.php?"+params);   


      const response = await fetch("api/test_form.php", {
        method: "POST",
        body: formData,
      });


      oggetto_risposta = await response.json()

      console.log(oggetto_risposta.registered)

      document.getElementById("form").innerHTML = "<h1>Ben fatto form inviato</h1>"

    } catch (e) {
      console.error(e);
    }
  }

  document.getElementById("form").addEventListener("submit", (e) => {
    e.preventDefault();

    sendData(e.target)

  })
</script>