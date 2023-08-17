<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Locadora 2000</title>

    <!-- ? Fav Icon -->
    <link rel="icon" type="image/png" href="/img/icon.png" />
    <!-- ? Arquivo CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!-- ? Script JS Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </head>
  <body style="background-color: #f5f5f5;">
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <img class="me-3" src="/img/film.svg" alt="Locadora 2000" />
        <a class="navbar-brand text-light" href="#topo">Locadora 2000</a>

        <div class="collapse navbar-collapse" id="navBarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li>
              <a class="nav-link active text-light" aria-current="page" href="#tabfilmes"
                >Filmes Disponíveis</a
              >
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-light"
                id="dropGeneros"
                role="button"
                data-bs-toggle="dropdown"
                href="#drop"
                aria-expanded="false"
              >
                Filmes por Categoria
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="#gacao">Ação</a></li>
                <li><a class="dropdown-item" href="#ganim">Animação</a></li>
                <li><a class="dropdown-item" href="#groman">Romance</a></li>
                <li><a class="dropdown-item" href="#gsus">Suspense</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light" href="#cadfilmes">Cadastrar Filmes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <h1 class="display-1 text-center mb-5 mt-3" id="topo">Locadora 2000</h1>

    <div class="container">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" style="color: #fff; background-color: #343a40;">Código</th>
            <th scope="col" style="color: #fff; background-color: #343a40;">Título</th>
            <th scope="col" style="color: #fff; background-color: #343a40;">Diretor</th>
            <th scope="col" style="color: #fff; background-color: #343a40;">Lançamento</th>
            <th scope="col" style="color: #fff; background-color: #343a40;">Ator/Atriz Principal</th>
            <th scope="col" style="color: #fff; background-color: #343a40;">Nota IMDb</th>
            <th scope="col" style="color: #fff; background-color: #343a40;">Gêneros</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th class="text-center table-primary" colspan="7" id="gacao">
              <span style="color: #fff;">Ação</span>
            </th>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td scope="col">Homem-Aranha</td>
            <td scope="col">Sam Raimi</td>
            <td scope="col">17 de maio de 2002</td>
            <td scope="col">Tobey Maguire</td>
            <td scope="col">7.3</td>
            <td scope="col">Ação</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td scope="col">Príncipe da Pérsia: As Areias do Tempo</td>
            <td scope="col">Mike Newell</td>
            <td scope="col">3 de junho de 2010</td>
            <td scope="col">Jake Gyllenhaal</td>
            <td scope="col">6.6</td>
            <td scope="col">Ação</td>
          </tr>

          <tr>
            <th class="text-center table-primary" colspan="7" id="ganim">
              <span style="color: #fff;">Animação</span>
            </th>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td scope="col">Homem-Aranha: Através do Aranhaverso</td>
            <td scope="col">Joaquim Dos Santos</td>
            <td scope="col">1 de junho de 2023</td>
            <td scope="col">Shameik Moore</td>
            <td scope="col">8.4</td>
            <td scope="col">Animação</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td scope="col">Soul</td>
            <td scope="col">Pete Docter</td>
            <td scope="col">11 de outrubro de 2020</td>
            <td scope="col">Jamie
            <td scope="col">8</td>
            <td scope="col">Animação</td>  