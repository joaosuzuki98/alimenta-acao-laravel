<?php $user = auth()->user();?>

<div style="height: 120px; background-color: red; width: 350px;" class="mb-4">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><strong>SAIR</strong></a>
    </form>
</div>

<div class="d-flex justify-content-evenly py-5">
    <div class="col-4 d-flex justify-content-center bg-quartenaria">

        @if(isset($anuncio_edicao))
        <form action="{{ route('atualiza') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <input type="hidden" name="id" value="{{ $anuncio_edicao->id }}">

                <label for="titulo" class="text-light fs-4 mb-2 mt-4">Título</label>
                <input type="text" id="titulo" name="titulo" class="w-100 mb-2 fs-5" maxlength="120" value="{{ $anuncio_edicao->titulo }}">

                <label for="descricao" class="text-light fs-4 mb-2">Descrição</label>
                <textarea name="descricao" id="descricao" cols="60" rows="10" class="mb-2" maxlength="500">
                    {{ $anuncio_edicao->descricao }}
                </textarea>

                <label for="n-pessoas" class="text-light fs-4 mb-2">Nº de pessoas para receber</label>
                <input type="number" id="n-pessoas" name="num_donatarios" class="w-100 mb-2 fs-5" min="0" max="20" value="{{ $anuncio_edicao->num_donatarios }}">

                <label for="n-instituicoes" class="text-light fs-4">Nº de instituições para receber<label>
                <input type="number" id="n-instituicoes" name="num_donatarios_instituicoes" class="w-100 mb-4 mt-2 fs-5" min="0" max="5" value="{{ $anuncio_edicao->num_donatarios_instituicoes }}">

                <label for="foto" class="form-label">
                Selecione uma foto
                </label>
                <input type="file" class="form-control mb-3" name="foto" id="foto" value="{{ $anuncio_edicao->foto }}">

                <div class="d-flex justify-content-center">
                    <button class="col-4 bg-primaria text-light fs-4 text-center mt-2 mb-5 py-3 efeito-hover-button border-0" type="submit">
                        Atualizar
                    </button>
                </div>
            </form>
        @else
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
        @endif
    </div>

    <div class="col-4 d-flex flex-column justify-content-between">
        <div class="col-12 pb-3 d-flex flex-column align-items-center bg-quartenaria">
            <h2 class="mb-4 mt-3 text-light text-center">Anúncios ativos</h2>
            <div class="d-flex justify-content-center align-items">
                @if(count($anuncios_ativos) == 0)
                    <p>Não há anúncios cadastrados no momento</p>
                @else
                    @foreach($anuncios_ativos as $anuncio_ativo)
                        @if($anuncio_ativo->id_user == auth()->user()->id)
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="fw-bold fs-5">{{ $anuncio_ativo->titulo }}</p>
                                <p class="mb-2 fw-light">{{ $anuncio_ativo->descricao }}</p>
                                
                                <form method="POST" action="{{ route('deletar', [$anuncio_ativo->id]) }}" class="bg-white">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="border-0 bg-white">
                                        <i class="fa-solid fa-trash-can fa-lg"></i>
                                    </button>
                                </form>

                                <a href="{{ route('editar', [$anuncio_ativo->id]) }}">
                                    <i class="fa-solid fa-pen-to-square fa-lg"></i>
                                </a>

                                <form method="POST" action="{{ route('atualiza_concluido') }}" class="bg-white">
                                    @csrf
                                    @method('PUT')

                                    <input type="hidden" name="id" value="{{ $anuncio_ativo->id }}">

                                    <button type="submit" class="border-0 bg-white">
                                        @if($anuncio_ativo->concluido == 1)
                                            <i class="fa-solid fa-square-check fa-lg"></i>
                                        @else
                                            <i class="fa-regular fa-square"></i>
                                        @endif
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>



        <div class="col-12 pb-3 d-flex flex-column align-items-center bg-quartenaria">
            <h2 class="mb-4 mt-3 text-light text-center">Histórico de anúncios</h2>
            @if(count($anuncios_desativados) > 0 )
                @foreach($anuncios_desativados as $anuncio_desativado)
                    <?php $conta_anuncios_desativados = 0; ?>
                    @if($anuncio_desativado->id_user == $user->id) 
                        <?php $conta_anuncios_desativados ++; ?>
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                            <p>{{ $anuncio_desativado->titulo }}</p>
                            <p>{{ $anuncio_desativado->descricao }}</p>
                            </div>
                        </div>
                    @endif
                    @if($conta_anuncios_desativados == 0)
                        <p>Não histórico de anúncios no momento</p>
                    @endif
                @endforeach
            @endif


            {{-- @if(count($anuncios_desativados) == 0 )
                <p>Não há histórico de anúncios no momento</p>
            @else
                @foreach($anuncios_desativados as $anuncio_desativado)
                    @if($anuncio_desativado->id_user == $user->id)
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                            <p>{{ $anuncio_desativado->titulo }}</p>
                            <p>{{ $anuncio_desativado->descricao }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif --}}
        </div>

    </div>
</div>
