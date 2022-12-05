<!doctype html>
<html lang="pt-BR">

<head>
  <title>Doe alimentos ou os receba</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Swiper.js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  <!-- My css -->
  <link rel="stylesheet" href="/css/style.css">

</head>

<body onresize="responsiveFonts()">
  <header>
    <nav class="navbar navbar-expand-sm bg-primaria py-4">
      <div class="container">
        <div class="logo">
          <img src="/img/alimenta-acao-logo.svg" alt="Duas sacolas com comida representando o logo do site">
        </div>
        <button class="navbar-toggler d-lg-none ativa-modal" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0 fs-5">
            <li class="nav-item">
              <a class="nav-link text-light" href="#por-que-doar">Por que doar?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#doe">Doe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#receba">Receba</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light me-2" href="#sobre">Sobre</a>
            </li>
            <div class="d-flex my-2 my-lg-0">
              <button type="button" class="btn btn-primary my-2 my-sm-0 p-3 d-block d-sm-none"> <span
                  class="text-center me-2"><i class="fa-solid fa-user"></i></span>
                Área do usuário</button>
              {{-- <a href="#escolha-usuario">
                <button class="custom-btn btn-12 d-none d-sm-block ativa-modal"><span class="fw-bold">Entrar/cadastrar</span><span
                    class="fw-bold">Área do
                    usuário</span></button>
              </a> --}}
              <a href="{{ route('register') }}" class="btn text-light bg-quartenaria text-center me-3 py-2 efeito-hover-button">
                Cadastrar-se
              </a>

              <a href="{{ route('login') }}" class="btn text-light bg-quartenaria text-center py-2 efeito-hover-button">
                Login
              </a>
            </div>
        </div>
      </div>
    </nav>

  </header>
  <main>
    <figure class="col-10 offset-1 my-5 overflow-hidden altura-banner">
      <img src="/img/pexels-rodnae-productions-6646967.jpg" alt="Voluntários entregando comida para pessoas necessitadas" id="img-main">
    </figure>

    <section id="por-que-doar" class="margin-top-maior">
      <h1 class="text-center txt-titulo">Doe para quem mais precisa</h1>
      <p class="text-center col-4 offset-4 fw-light fs-3 mt-4 mb-5">Ajude pessoas ou instituições que estão precisando
        de alimentos, ou seja ajudado por alguém</p>

      <h2 class="txt-titulo text-center col-8 offset-2 margin-top-maior">
        33,1 milhão de brasileiros estão situação de fome
      </h2>

      <div class="grafico-container my-4 d-flex justify-content-center">
        <canvas id="grafico-fome"></canvas>
      </div>

      <button class="col-2 offset-5 bg-primaria text-light fs-4 text-center mt-2 mb-5 py-3 ativa-modal efeito-hover-button">
        Começar
      </button>
    </section>

    <section id="doe"
      class="bg-quartenaria padding-y-maior d-flex justify-content-evenly align-items-center margin-top-maior">
      <div class="col-4">
        <h2 class="fs-1 fw-bold text-light text-center mb-3">
          Doe alimentos
        </h2>
        <p class="text-light text-center fs-4 fw-light">
          Tem uma empresa ou comércio? Crie anúncios de doação de alimentos para pessoas carentes ou instituições de
          caridade. Escolha quantos serão beneficiados, o local de entrega/retirada, a quantidade e os tipos dos
          alimentos e mais!
        </p>
      </div>

      <div style="height: 600px; width: 400px; background-color: white;"></div>
    </section>

    <section id="receba" class="bg-terciaria padding-y-maior d-flex justify-content-evenly align-items-center">
      <div style="height: 600px; width: 800px; background-color: white;"></div>

      <div class="col-4">
        <h2 class="fs-1 fw-bold text-light text-center mb-3">
          Receba alimentos
        </h2>
        <p class="text-light text-center fs-4 fw-light">
          É uma pessoa em necessidade ou uma instituição de caridade? Veja anúncios de doação e se candidate a receber
          alimentos, entre em contato com o doador e explique a sua situação e mais!
        </p>
      </div>
    </section>

    <section>
      <h2 class="col-10 offset-1 text-center fw-bold fs-1 margin-top-maior">Venha fazer parte desta comunidade!</h2>
      <p class="text-center fs-4 fw-light">
        Junte-se a milhares de usuários e faça o bem ou o receba
      </p>
      <button class="col-2 offset-5 bg-primaria text-light fs-4 text-center mt-4 py-3 ativa-modal efeito-hover-button">
        Começar
      </button>
    </section>

    <section id="sobre" class="margin-top-maior padding-y-maior bg-quintenaria py-5">
      <div class="col-6 offset-3 my-5">
        <h2 class="fw-bold fs-1 text-center mb-5">Sobre o projeto</h2>
        <p class="fw-light fs-3 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia beatae,
          sed vel odit sunt itaque porro facilis voluptates hic ratione odio distinctio rem quidem quasi fugiat sint
          natus! Dolore, tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est debitis rem itaque soluta
          velit illum nesciunt nobis quam odit sapiente rerum aspernatur, impedit labore facilis omnis voluptates iusto
          unde delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus perferendis porro at ducimus
          obcaecati, doloremque esse magnam velit culpa qui necessitatibus distinctio error temporibus quibusdam, et
          dolore asperiores! Ea, necessitatibus?</p>
      </div>
    </section>

    <section class="margin-top-maior">
      <h2 class="fw-bold fs-1 text-center mb-5">Quem recebe nunca esquece</h2>

      <div class="swiper col-6 offset-3 py-5">
        <div class="swiper-wrapper col-6">
          <div class="swiper-slide d-flex flex-column align-items-center">
            <figure class="swiper-retrato">
              <img src="/img/foto1.png" alt="Foto de uma pessoa" class="w-100 borda-redonda">
            </figure>
            <p class="text-center col-5 mt-4 fst-italic fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, deserunt placeat libero fuga voluptas nesciunt unde commodi quia dolorum error accusamus impedit quae delectus iure vitae cumque, nostrum et esse?</p>
          </div>
          <div class="swiper-slide d-flex flex-column align-items-center">
            <figure class="swiper-retrato">
              <img src="/img/foto2.png" alt="Foto de uma pessoa" class="w-100 borda-redonda">
            </figure>
            <p class="text-center col-5 mt-4 fst-italic fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, deserunt placeat libero fuga voluptas nesciunt unde commodi quia dolorum error accusamus impedit quae delectus iure vitae cumque, nostrum et esse?</p>
          </div>
          <div class="swiper-slide d-flex flex-column align-items-center">
            <figure class="swiper-retrato">
              <img src="/img/foto3.png" alt="Foto de uma pessoa" class="w-100 borda-redonda">
            </figure>
            <p class="text-center col-5 mt-4 fst-italic fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, deserunt placeat libero fuga voluptas nesciunt unde commodi quia dolorum error accusamus impedit quae delectus iure vitae cumque, nostrum et esse?</p>
          </div>
          <div class="swiper-slide d-flex flex-column align-items-center">
            <figure class="swiper-retrato">
              <img src="/img/foto4.png" alt="Foto de uma pessoa" class="w-100 borda-redonda">
            </figure>
            <p class="text-center col-5 mt-4 fst-italic fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, deserunt placeat libero fuga voluptas nesciunt unde commodi quia dolorum error accusamus impedit quae delectus iure vitae cumque, nostrum et esse?</p>
          </div>
          <div class="swiper-slide d-flex flex-column align-items-center">
            <figure class="swiper-retrato">
              <img src="/img/foto5.png" alt="Foto de uma pessoa" class="w-100 borda-redonda">
            </figure>
            <p class="text-center col-5 mt-4 fst-italic fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, deserunt placeat libero fuga voluptas nesciunt unde commodi quia dolorum error accusamus impedit quae delectus iure vitae cumque, nostrum et esse?</p>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      
      </div>    
    </section>

    <div class="position-fixed modal-cad-login" id="modal">
      <div class="tela-cad-login d-flex flex-column align-items-center justify-content-evenly">
        <i class="fa-solid fa-square-xmark position-relative x-mark fa-2xl txt-quintenaria" id="fechar-modal"></i>
        <h2 class="text-light fw-bold fs-1 mb-5 mt-4">Escolha o tipo de usuário</h2>
        <div class="d-flex justify-content-evenly h-100 w-100">

          <a class="escolha-usuario" href="{{ route('register') }}"></a>
          <a class="escolha-usuario" href="{{ route('register') }}"></a>
        </div>
      </div>
    </div>
  </main>

  <div class="seta-cima" id="volta-cima">
    <span class="text-light fs-1 text-center">
      <i class="fa-solid fa-chevron-up"></i>
    </span>
  </div>

  <footer class="mt-5 bg-primaria py-5 d-flex justify-content-evenly align-items-center">

    <div style="height: 200px; width: 200px;">
      <img src="/img/alimenta-acao-logo.svg" alt="Duas sacolas com comida representando o logo do site">
    </div>

    <div class="border border-1 border-top-0 border-bottom-0 cor-borda text-light pd-direita-esquerda bloco-footer">
      <h3 class="fw-light text-center fs-2 mb-5">Links rápidos</h3>
      <p class="text-center fs-5">
        <a href="#por-que-doar" class="nav-link">
          Por que doar?
        </a> 
      </p>
      <p class="text-center fs-5">
        <a href="#doe" class="nav-link">
          Doe
        </a> 
      </p>
      <p class="text-center fs-5">
        <a href="#receba" class="nav-link">
          Receba
        </a> 
      </p>
      <p class="text-center fs-5">
        <a href="#sobre" class="nav-link">
          Sobre
        </a> 
      </p>
      <p class="text-center fs-5">
        <a href="#" class="nav-link ativa-modal">
          Começar
        </a> 
      </p>
    </div>

    <div class="text-light bloco-footer">
      <h3 class="fw-light text-center fs-2 mb-5">Outros links</h3>
      <p class="text-center fs-5">
        <a href="#" class="nav-link ativa-modal">
          Política de privacidade
        </a> 
      </p>
      <p class="text-center fs-5">
        <a href="#" class="nav-link ativa-modal">
          Dúvidas frequentes
        </a> 
      </p>
      <p class="text-center fs-5">
        <a href="#" class="nav-link ativa-modal">
          Termos de uso
        </a> 
      </p>
      <p class="text-center fs-5">
        <a href="#" class="nav-link ativa-modal">
          Dê uma sugestão
        </a> 
      </p>
    </div>

    <div
      class="text-light border border-1 border-top-0 border-bottom-0 border-end-0 cor-borda pd-direita-esquerda bloco-footer">
      <h3 class="fw-light text-center fs-2 mb-5">Contatos</h3>
      <p class="text-center fs-5">
        <a href="mailto: joaosuzuki98@outlook.com" class="nav-link">
          Email
        </a> 
      </p>
      <p class="text-center fs-5">
        <a href="https://wa.me/5512992557050" target="_blank" class="nav-link">
          Whatsapp
        </a> 
      </p>
      <p class="text-center fs-5">
        <a href="#" class="nav-link ativa-modal">
          Linkedin
        </a> 
      </p>
    </div>
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-deferred"></script>

  <!-- Swiper.js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- Meu javascript -->
  <script src="/js/script.js"></script>
</body>

</html>