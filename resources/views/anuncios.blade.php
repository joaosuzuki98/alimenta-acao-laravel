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

<body class="bg-quintenaria">

    @if(auth()->user()->tipo == 'doador')
        <div style="height: 120px; background-color: red; width: 350px;" class="mb-4"></div>

        <div class="d-flex justify-content-evenly py-5">
            <div class="col-4 d-flex justify-content-center bg-quartenaria">

                <form action="{{ route('salva_anuncio') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <label for="titulo" class="text-light fs-4 mb-2 mt-4">Título</label>
                    <input type="text" id="titulo" name="titulo" class="w-100 mb-2 fs-5" maxlength="120">

                    <label for="descricao" class="text-light fs-4 mb-2">Descrição</label>
                    <textarea name="descricao" id="descricao" cols="60" rows="10" class="mb-2" maxlength="500"></textarea>

                    <label for="n-pessoas" class="text-light fs-4 mb-2">Nº de pessoas para receber</label>
                    <input type="number" id="n-pessoas" name="num_donatarios" class="w-100 mb-2 fs-5" min="0" max="20">

                    <label for="n-instituicoes" class="text-light fs-4">Nº de instituições para receber<label>
                    <input type="number" id="n-instituicoes" name="num_donatarios_instituicoes" class="w-100 mb-4 mt-2 fs-5" min="0" max="5">

                    <label for="foto" class="form-label">
                    Selecione uma foto
                    </label>
                    <input type="file" class="form-control mb-3" name="foto" id="foto">

                    <div class="d-flex justify-content-center">
                        <button class="col-4 bg-primaria text-light fs-4 text-center mt-2 mb-5 py-3 efeito-hover-button border-0" type="submit">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-4 d-flex flex-column justify-content-between">
                <div class="col-12 pb-3 d-flex flex-column align-items-center bg-quartenaria">
                    <h2 class="mb-4 mt-3 text-light text-center">Anúncios ativos</h2>
                    @if(count($anuncios_ativos) == 0)
                        <p>Não há anúncios cadastrados no momento</p>
                    @else
                        @foreach($anuncios_ativos as $anuncio_ativo)
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <p>{{ $anuncio_ativo->titulo }}</p>
                                <p>{{ $anuncio_ativo->descricao }}</p>
                                </div>
                          </div>
                        @endforeach
                    @endif
                </div>
        
        
        
                <div class="col-12 pb-3 d-flex flex-column align-items-center bg-quartenaria">
                    <h2 class="mb-4 mt-3 text-light text-center">Histórico de anúncios</h2>
                    @if(count($anuncios_desativados) == 0)
                        <p>Não há histórico de anúncios no momento</p>
                    @else
                        @foreach($anuncios_desativados as $anuncio_desativado)
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <p>{{ $anuncio_desativado->titulo }}</p>
                                <p>{{ $anuncio_desativado->descricao }}</p>
                                </div>
                          </div>
                        @endforeach
                    @endif
                </div>
        
            </div>
        </div>
    @else
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
    @endif

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>