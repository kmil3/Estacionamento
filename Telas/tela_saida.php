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
    
    <?php	
   
    ?> 
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
        include_once('../Dao/entrada_saidaDao.php');
        $id=$_GET['id'];
        $lista = BuscaVeiculoPorRegistro($id);
    ?>

    <section class="container mt-5">                
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">Placa</th>
                        <th scope="col">Fabricante</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Cor</th>
                        <th scope="col">Hora Entrada</th>
                        <th scope="col">Hora Saída</th>
                        <th scope="col">Valor a pagar</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php foreach ($lista as $item) { ?>
                        <tr>
                            <td><?= $item['placa']; ?></td>
                            <td><?= $item['fabricante']; ?></td>
                            <td><?= $item['modelo']; ?></td>
                            <td><?= $item['cor']; ?></td>
                            <td><?= $item['hr_entrada']; ?></td>
                            <td><?= $item['hr_saida']; ?></td>
                            <td><?= calculaValor($item['hr_entrada'], $item['hr_saida'])?></td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
            <a href="../remove.php?id=<?=$item['veiculo']; ?>" type="button" class="btn btn-dark mt-3">Registrar Saída</a>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
</html>''