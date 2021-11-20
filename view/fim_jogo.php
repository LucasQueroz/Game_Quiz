<?php
    session_start();
    include_once('../controller/db_connect.php');
    
    if (empty($_SESSION['indice_questao'])) { 
        $_SESSION['indice_questao'] = '1';
        $_SESSION['pontuacao'] = '0';
    } else {
        $indice_questao = $_SESSION['indice_questao'];
        $_SESSION['indice_questao'] = $indice_questao;
    }
    
    $indice_questao = $_SESSION['indice_questao'];
    $pontuacao = $_SESSION['pontuacao'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="css/template.css" rel="stylesheet">
    <script type="text/javascript" src="../model-controller/Play_Quiz.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fim de Jogo</title>
</head>

<body>
    <div class="container-fluid bg-info" style="background-color: #2686ac">
        <div class="modal-dialog">
            <div class="modal-content">
                <a class="btn btn-info" href="../controller/destroi_sessions_jogo.php"><img src="img/home.png"/></a>
                <div class="modal-header">
                    <h2 id="pergunta">Fim de Jogo</h2>
                </div>
                <div class="modal-body">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>

                    <div class="quiz" id="quiz" data-toggle="buttons">
                        <h3><img src="img/trofeu.png"/><?php echo ' R$ '.$_SESSION['pontuacao'] * 1000?></h3>
                        <br>
                        <h4><?php echo 'Questões acertadas: '.$_SESSION['pontuacao']?></h4>
                        <h4><?php echo 'Questões respondidas: '.$_SESSION['indice_questao']?></h4>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>