<?php
    session_start();
    
    if (empty($_SESSION['email'])) {
        header('Location: view/index.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="view/css/index.css" rel="stylesheet">

    <title>Programador Java</title>
</head>

<body>
    <div class="container-fluid bg-info" style="background-color: #2686ac">

        <div class="btn-group" style="margin-left: 970px; margin-top: 20px;">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="img/icon-usuario.png"/>
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#"><?php echo $_SESSION['nome_usuario']; ?></a></li>
                <li><a href="#"><?php echo $_SESSION['email']; ?></a></li>
                <li class="divider"></li>
                <li><a href="../model/logout.php">Sair</a></li>
            </ul>
        </div>

        <div class="modal-dialog" style="margin-top: 130px;">
            <div class="modal-content" style="margin-bottom: 168px;">
                <div class="modal-header" align="center">
                    <img src="img/baner.png">
                </div>
                <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12"  align="center">
                    <a class="btn btn-success btn-lg" href="questionario.php">Jogar Agora</a>
                </div>
                <div class="modal-footer text-muted">
                
                </div>
            </div>
        </div>
    </div>
</body>

<script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script>
  $(function () {
    $('.dropdown-toggle').dropdown();
  }); 
</script>

</html>