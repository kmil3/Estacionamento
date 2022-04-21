<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="CAMILE WEBER">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/css.css">
        
        <title>Sistema</title>
    </head>
    <body>

    <section>
        <nav class="navbar">
            <form class="container-fluid justify-content-start">
                <span class="navbar-brand mb- h1">Estacionamento</span>
                <div class="btn-toolbar">
                    <a href="../logout.php" class="btn btn-light" role="button" aria-pressed="true">Sair<i class="bi bi-box-arrow-right m-1"></i></a>
                </div>
            </form>
        </nav>
    </section>
    
    <?php
        include_once('../verifica_sessao.php');
        include_once('../Dao/veiculoDao.php');
    ?>

    <div class="container">
    </br>
    </br>
        
        <section class="container">
            <form action="../adiciona_veiculo.php" method="POST">
                <div class="form-group">
                    <label for="placa_form" >Placa do veículo</label>
                    <input type="text" class="form-control" name="placa_form" id="placa_form">
                </div>
                <div class="form-group">
                    <label for="fabricante_form" >Fabricante</label>
                    <input type="text" class="form-control" name="fabricante_form" id="fabricante_form">
                </div>
                <div class="form-group">
                    <label for="modelo_form" >Modelo</label>
                    <input type="text" class="form-control" name="modelo_form" id="modelo_form">
                </div>
                <div class="form-group">
                    <label for="cor_form" >Cor</label>
                    <input type="text" class="form-control" name="cor_form" id="cor_form">
                </div>
                <input type="submit" class="btn btn-dark mt-2" value="Registrar">
            </form>
            <a href="tela_placa.php" type="button" class="btn btn-dark mt-3">voltar</a>

        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
</html>