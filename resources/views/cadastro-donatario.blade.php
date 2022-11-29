<!doctype html>
<html lang="pt-BR">

<head>
  <title>Cadastro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/cadastro.css">

</head>

<body class="bg-quintenaria">

    <h1 class="text-center mb-5 fw-bold txt-primaria fonte-titulo mt-3">Donatário</h1>

    <div class="d-flex flex-row justify-content-evenly">
      <div class="d-flex flex-column align-items-center col-5 rounded-4 bg-degrade">

        <div style="background-color: red; height: 120px; width: 120px;" class="my-5">
        </div>

        <form action="" class="d-flex flex-column col-8 align-items-center">
          <input type="number" id="cpf" name="cpf" placeholder="CPF" class="my-3 fs-4 w-100">
          <input type="text" id="nome-donatario" name="nome-donatario" placeholder="Nome de Usuário" class="my-3 fs-4 w-100">
          <input type="email" id="email-donatario" name="email-donatario" placeholder="Email" class="my-3 fs-4 w-100">
          <input type="password" id="senha-donatario" name="senha-donatario" placeholder="Senha" class="my-3 fs-4 w-100">
          <input type="password" id="confirma-donatario" name="confirma-donatario" placeholder="Confirmar Senha" class="my-3 fs-4 w-100">

          <button class="border border-0 col-6 bg-primaria text-light fs-4 text-center margin-top-maior py-3 efeito-hover-button mb-5">
            Cadastrar-se
          </button>
        </form>
      </div>
      
      <div class="d-flex flex-column align-items-center col-5 align-self-center rounded-4 bg-degrade">

        <div style="background-color: red; height: 120px; width: 120px;" class="my-5">
        </div>

        <form action="" class="d-flex flex-column col-8 align-items-center">
          <input type="text" id="login-donatario" name="login-donatario" placeholder="Usuário ou email" class="my-3 fs-4 w-100">
          <input type="password" id="login-senha-donatario" name="login-senha-donatario" placeholder="Senha" class="my-3 fs-4 w-100">

          <button class="border border-0 col-6 bg-primaria text-light fs-4 text-center margin-top-maior py-3 efeito-hover-button mb-5">
            Entrar
          </button>
        </form>
      </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>