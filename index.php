<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
</head>

<body>
<nav id="menu-h">
        
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
              <li>
                <a href="https://www.unopar.com.br/">Unopar</a>
            </li>
              <li>
                <a href="https://www.personare.com.br/signos">Saiba mais dos signos</a>
            </li>
            
        </ul>

    </nav>
    <style>
        
        #menu-h ul{

        list-style: none;
        padding: 0;
        background-color: rgb(90, 83, 83);

                }

        #menu-h ul li{

            display: inline;


                    }

        #menu-h ul li a{

            color: #fff;
            padding: 20px;
            display: inline-block;
            text-decoration: none;
            transition: background .4s;
            margin: right;

                        }

        #menu-h ul li a:hover{

            background-color: rgb(34, 9, 172);


                            }
    </style>
</body>


<body class="bg-light">
    <div class="container shadow rounded-3 my-5">
        <div class="row row-cols-1">
            <div class="col">
                <h1 class="text-center fw-bold mt-5">Forum Unopar - Signos</h1>
                <p class="text-muted text-center mt-2 mb-5">
                    Horóscopo <?php echo $ano = date('Y');?>: confira a previsão de hoje
                    <?php echo $hoje = date('d/m/Y');?> para seu signo.</p>
                <form action="signos.php" method="post">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="nomePess" placeholder="Seu nome" required>
                                <label for="floatingInput">Nome</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="dataNasc" placeholder="Sua data" required>
                                <label for="floatingInput">Data de Nascimento</label>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1">
                        <div class="col my-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="submit">Consultar Signo</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>