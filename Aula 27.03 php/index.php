<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3 " crossorigin="anonymous ">
    </script>
</head>

<body>

    <div class="d-flex flex-column wrapper" >
    <nav class="navbar navbar-expand-lg navbar bg-primary" data-bs-theme="dark">
              <div class="container">
                         <a class="navbar-brand text-white" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target=".navbar-collapse">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item">
                                 <a class="nav-link text-white active " href="#">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link text-white" href="#">Consultar</a>
                            </li>
                        </ul>
                     </div>
                </div>
        </nav>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            </div>
        </div>
        <main class="flex-fill">
            <div class="container">
                <div class="texto">
                  <br>
                    <h3>Cadastrar - Agendamento de Potenciais Clientes</h3>
                  Sistema utilizado para agendamento de serviços
                </div>
                
              <form class=" mt-3 " method="POST" action="dados.php">
                          
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nome">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="(xx) xxxxxx-xxxx" name ="telefone">
                                </div>

                                <legenda>Origem</legenda>
                                     <select class="form-select" aria-label="Default select example" name="origem">
                                    <option selected>Celular</option>
                                </select>
                                <br>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Data do contato</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="contato">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="observacao"></textarea>
                                  </div>
                         
                                  <input type="submit" value="Cadastrar" class="btn btn-primary">
                </form>
            </div>
        </main>
    </div>
    </div>
</body>

</html>