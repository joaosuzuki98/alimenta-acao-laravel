<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/doador-anuncios.css">
</head>

<body>

    <div style="height: 120px; background-color: red; width: 350px;" class="mb-4"></div>

    <div class="grid-container">
        <div style="background: green;" class="col-4 d-flex justify-content-center">

            <form action="">
                <label for="titulo" class="text-light fs-4 mb-2 mt-4">Título</label>
                <input type="text" id="titulo" name="titulo" class="w-100 mb-2 fs-5">

                <label for="descricao" class="text-light fs-4 mb-2">Descrição</label>
                <textarea name="descricao" id="descricao" cols="60" rows="10" class="mb-2"></textarea>

                <label for="n-pessoas" class="text-light fs-4 mb-2">Nº de pessoas para receber</label>
                <input type="text" id="n-pessoas" name="n-pessoas" class="w-100 mb-2 fs-5">

                <label for="n-instituicoes" class="text-light fs-4">Nº de instituições para receber<label>
                        <input type="text" id="n-instituicoes" name="n-instituicoes" class="w-100 mb-4 mt-2 fs-5">

                        <div class="d-flex justify-content-center mb-4">
                            <button>Enviar</button>
                        </div>
            </form>
        </div>

        <div style="background: green;" class="col-4 pb-3 d-flex flex-column align-items-center">
            <h2 class="mb-3 text-light text-center">Anúncios ativos</h2>
            <input type="text" readonly class="fs-5 mb-3 largura" name="ativo-1">
            <input type="text" readonly class="fs-5 mb-3 largura" name="ativo-2">
            <input type="text" readonly class="fs-5 mb-3 largura" name="ativo-3">
            <input type="text" readonly class="fs-5 largura" name="ativo-4">
        </div>



        <div style="background: green;" class="col-4 pb-3 d-flex flex-column align-items-center">
            <h2 class="mb-3 text-light text-center">Histórico de anúncios</h2>
            <input type="text" readonly class="fs-5 mb-3 largura" name="historico-1">
            <input type="text" readonly class="fs-5 mb-3 largura" name="historico-2">
            <input type="text" readonly class="fs-5 mb-3 largura" name="historico-3">
            <input type="text" readonly class="fs-5 largura" name="historico-4">
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