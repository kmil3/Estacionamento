<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css" >
</head>

<body>
    <div class="container2">
        <div class="login">
            <h1 style="font-size:35px; text-align:center;">LOGIN</h1> 
            <h1 style="font-size:45px; text-align:center;"><i class="bi bi-house-door-fill"></i></h1> 
                <form class="form" action="Telas/tela_placa.php" method="post">
            
                    <div class="form-group">
                        <label for="username" >Nome de Usuário</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>

                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    <input type="submit" class="btn btn-light" value="Enviar">

                </form>
        </div>
    </div>
      
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>


</html> 