<!doctype html>
<html lang="pt-BR">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
      
    {{-- Meu css --}}
    <link rel="stylesheet" href="/css/anuncios.css">
</head>

<body>

    <div style="height: 120px; background-color: red; width: 350px;" class="mb-4"></div>

    <div class="d-flex justify-content-evenly py-5 altura-vh">
        <div class="col-4 d-flex justify-content-center bg-quartenaria">

            <form action="">
                <textarea readonly name="descricao" id="descricao" cols="60" rows="15" class="margin-top-maior"></textarea>

                <div class="d-flex justify-content-center">
                    <button class="col-4 bg-primaria text-light fs-4 text-center my-5 py-3 efeito-hover-button">
                        Inscrever-se
                    </button>
                </div>
            </form>
        </div>

        <div class="col-4 d-flex flex-column justify-content-between">
            <div class="col-12 pb-3 d-flex flex-column align-items-center bg-quartenaria">
                <h2 class="mb-4 mt-3 text-light text-center">Perto de você</h2>
                <input type="text" readonly class="fs-5 mb-3 largura" name="ativo-1">
                <input type="text" readonly class="fs-5 mb-3 largura" name="ativo-2">
                <input type="text" readonly class="fs-5 mb-3 largura" name="ativo-3">
                <input type="text" readonly class="fs-5 largura mb-4" name="ativo-4">
            </div>
    
    
    
            <div class="col-12 pb-3 d-flex flex-column align-items-center bg-quartenaria">
                <h2 class="mb-4 mt-3 text-light text-center">Histórico de participações</h2>
                <input type="text" readonly class="fs-5 mb-3 largura" name="historico-1">
                <input type="text" readonly class="fs-5 mb-3 largura" name="historico-2">
                <input type="text" readonly class="fs-5 mb-3 largura" name="historico-3">
                <input type="text" readonly class="fs-5 largura mb-4" name="historico-4">
            </div>
    
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