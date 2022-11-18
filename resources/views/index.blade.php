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
        <div class="logo"></div>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0 fs-5">
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Por que doar?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Doe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Receba</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Sobre</a>
            </li>
            <div class="d-flex my-2 my-lg-0">
              <button type="button" class="btn btn-primary my-2 my-sm-0 p-3 d-block d-sm-none sombra"> <span
                  class="text-center me-2"><i class="fa-solid fa-user"></i></span>
                Área do usuário</button>
              <a href="#escolha-usuario">
                <button class="custom-btn btn-12 d-none d-sm-block"><span class="fw-bold">Entrar/cadastrar</span><span
                    class="fw-bold">Área do
                    usuário</span></button>
              </a>
            </div>
            </form>
        </div>
      </div>
    </nav>

  </header>
  <main>
    <figure class="col-10 offset-1 my-5" style="background-color: red; height: 500px;">

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

      <button class="col-2 offset-5 bg-primaria text-light fs-4 text-center mt-2 mb-5 py-3">
        Começar
      </button>
    </section>

    <section class="margin-top-maior">
      <div class="swiper py-5 col-6 offset-3">
        <div class="swiper-wrapper d-flex justify-content-center">
          {{-- <div class="swiper-slide d-flex align-items-center flex-column">
            <div class="swiper-retrato mb-5"></div>
            <p class="text-center col-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui numquam ipsum minima, eveniet repellat accusantium dolorum quidem doloribus dicta sint ab harum, consectetur placeat voluptate voluptas optio alias reprehenderit incidunt?</p>
          </div> --}}
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
        </div>
        <div class="swiper-pagination"></div>
      
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>    
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
      <div style="height: 500px; width: 700px; background-color: white;"></div>

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

    <section id="sobre" class="my-5 padding-y-maior col-6 offset-3">
      <h2 class="fw-bold fs-1 text-center mb-5">Sobre o projeto</h2>
      <p class="fw-light fs-3 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia beatae,
        sed vel odit sunt itaque porro facilis voluptates hic ratione odio distinctio rem quidem quasi fugiat sint
        natus! Dolore, tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est debitis rem itaque soluta
        velit illum nesciunt nobis quam odit sapiente rerum aspernatur, impedit labore facilis omnis voluptates iusto
        unde delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus perferendis porro at ducimus
        obcaecati, doloremque esse magnam velit culpa qui necessitatibus distinctio error temporibus quibusdam, et
        dolore asperiores! Ea, necessitatibus?</p>
    </section>
  </main>

  <footer class="mt-5 bg-primaria py-5 d-flex justify-content-evenly align-items-center">

    <div style="background-color: white; height: 200px; width: 200px;"></div>

    <div class="border border-1 border-top-0 border-bottom-0 cor-borda text-light pd-direita-esquerda bloco-footer">
      <h3 class="fw-light text-center fs-2 mb-5">Links rápidos</h3>
      <p class="text-center fs-5">Por que doar?</p>
      <p class="text-center fs-5">Doe</p>
      <p class="text-center fs-5">Receba</p>
      <p class="text-center fs-5">Sobre</p>
      <p class="text-center fs-5"> Começar</p>
    </div>

    <div class="text-light bloco-footer">
      <h3 class="fw-light text-center fs-2 mb-5">Outros links</h3>
      <p class="text-center fs-5">Política de privacidade</p>
      <p class="text-center fs-5">Dúvidas frequentes</p>
      <p class="text-center fs-5">Termos</p>
      <p class="text-center fs-5"> Dê uma sugestão</p>
    </div>

    <div
      class="text-light border border-1 border-top-0 border-bottom-0 border-end-0 cor-borda pd-direita-esquerda bloco-footer">
      <h3 class="fw-light text-center fs-2 mb-5">Contatos</h3>
      <p class="text-center fs-5">Email</p>
      <p class="text-center fs-5">Whatsapp</p>
      <p class="text-center fs-5">Linkedin</p>
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