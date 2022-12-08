<div style="height: 120px; background-color: red; width: 350px;" class="mb-4">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><strong>SAIR</strong></a>
    </form>
</div>

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
            @if(count($anuncios_ativos) == 0)
            <p>Não há anúncios perto de você no momento</p>
        @else
            @foreach($anuncios_ativos as $anuncio_ativo)
                @if($anuncio_ativo->estado == auth()->user()->estado && $anuncio_ativo->concluido == 1)
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



        <div class="col-12 pb-3 d-flex flex-column align-items-center bg-quartenaria">
            <h2 class="mb-4 mt-3 text-light text-center">Histórico de participações</h2>
            @if(count($anuncios_desativados) == 0)
                <p>Não há histórico de participações no momento</p>
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
