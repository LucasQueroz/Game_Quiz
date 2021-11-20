<?php
    session_start();
    include_once('../controller/db_connect.php');
    
    if (empty($_SESSION['indice_questao'])) { 
        $_SESSION['indice_questao'] = '1';
        $_SESSION['pontuacao'] = '0';

        $sql = "SELECT COUNT(*) FROM perguntas";
        mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc(mysqli_query($connect, $sql));
        $_SESSION['num_questoes'] = $row['COUNT(*)'];
    } else {
        $indice_questao = $_SESSION['indice_questao'];
        $_SESSION['indice_questao'] = $indice_questao;
    }
    
    $indice_questao = $_SESSION['indice_questao'];
    $pontuacao = $_SESSION['pontuacao'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--
<a class="btn btn-danger" href="../model/logout.php" style="margin-left: 970px; margin-top: 20px;">Sair</a>

<div class="alert alert-dark" role="alert" style="margin-left: 900px; margin-top: 0px;">
  Seja bem vindo,
</div>
<div class="alert alert-primary" role="alert" style="margin-left: 900px; margin-top: -50px; margin-bottom: -20px;">
    <?php echo $_SESSION['email']; ?>
</div>-->


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

<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
            <a class="btn btn-info" href="../controller/destroi_sessions_jogo.php"><img src="img/home.png"/></a>

            <?php
                if (!empty($_SESSION['acertou_pergunta'])) {
                    if($_SESSION['acertou_pergunta'] == 'true'){
                        echo ('<div class="alert alert-primary" role="alert" style="margin-bottom: 0px;">
                            Parabéns! Você acertou!
                        </div>');
                    } else {
                        echo ('<div class="alert alert-warning" role="alert" style="margin-bottom: 0px;">
                            Você errou! Resposta: B
                        </div>');
                    }
                }
            ?>
            <div class="modal-footer text-muted">
                <div style="display:flex;justify-content:center;align-items:center;">
                    <?php
                        if (empty($_SESSION['ajuda_publico'])) {
                            echo('<a href="../model/ajuda_publico.php" type="button" class="btn btn-warning" style="display:flex;justify-content:center;align-items:center;"><img src="img/group_icon.png"/></a>');
                        }
                        if (empty($_SESSION['ajuda_einstein'])) {
                            echo('<a href="../model/ajuda_einstein.php" type="button" class="btn btn-warning" style="display:flex;justify-content:center;align-items:center;"><img src="img/icon_einstein.png"/></a>');
                        }
                    ?>
                </div>
                <span id="points"><?php echo 'Questão: '.$indice_questao?></span>
                <br>
                <span id="points"><?php echo 'R$  '.$pontuacao * 1000?></span>
            </div>

            <div class="modal-header">
                <h3 id="pergunta">
                    <?php
                        $sql = "SELECT * FROM perguntas WHERE id='$indice_questao'";
                            
                        if(mysqli_query($connect, $sql)){
                            $row = mysqli_fetch_assoc(mysqli_query($connect, $sql));
                            echo $row['pergunta'];
                        } else{
                            //$_SESSION['editado'] = "false";
                            //header('Location: ../view/pesquisar-editar-viagem.php');
                        }
                    ?>
                </h3>
            </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="../model/verifica_pergunta_correta.php">
                            <br>
                            <div style="display: inline;">
                                <input type="radio" id="letra_a" name="gender" value="<?php echo $row['alternativa_a'];?>">
                                <label for="letra_a"><?php echo $row['alternativa_a'];?>
                                <?php
                                    if(!empty($_SESSION['ajuda_publico'])){
                                        if(($_SESSION['ajuda_publico'] == 'usado') && ($row['alternativa_a'] == $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-success">40%</span>');
                                        } else if(($_SESSION['ajuda_publico'] == 'usado') && ($row['alternativa_a'] != $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-secondary">20%</span>');
                                        }
                                    }
                                    if(!empty($_SESSION['ajuda_einstein'])){
                                        if(($_SESSION['ajuda_einstein'] == 'usado') && ($row['alternativa_a'] == $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-success"><img src="img/icon_einstein.png"/></span>');
                                        }
                                    }
                                ?>
                                </label><br>
                            </div>
                            <div style="display: inline;">
                                <input type="radio" id="letra_b" name="gender" value="<?php echo $row['alternativa_b'];?>">
                                <label for="letra_b"><?php echo $row['alternativa_b'];?>
                                <?php
                                    if(!empty($_SESSION['ajuda_publico'])){
                                        if(($_SESSION['ajuda_publico'] == 'usado') && ($row['alternativa_b'] == $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-success">40%</span>');
                                        } else if(($_SESSION['ajuda_publico'] == 'usado') && ($row['alternativa_b'] != $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-secondary">20%</span>');
                                        }
                                    }
                                    if(!empty($_SESSION['ajuda_einstein'])){
                                        if(($_SESSION['ajuda_einstein'] == 'usado') && ($row['alternativa_b'] == $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-success"><img src="img/icon_einstein.png"/></span>');
                                        }
                                    }
                                ?>
                                </label>
                                <br>
                            </div>
                            <div style="display: inline;">
                                <input type="radio" id="letra_c" name="gender" value="<?php echo $row['alternativa_c'];?>">
                                <label for="letra_c"><?php echo $row['alternativa_c'];?>
                                <?php
                                    if(!empty($_SESSION['ajuda_publico'])){
                                        if(($_SESSION['ajuda_publico'] == 'usado') && ($row['alternativa_c'] == $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-success">40%</span>');
                                        } else if(($_SESSION['ajuda_publico'] == 'usado') && ($row['alternativa_c'] != $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-secondary">20%</span>');
                                        }
                                    }
                                    if(!empty($_SESSION['ajuda_einstein'])){
                                        if(($_SESSION['ajuda_einstein'] == 'usado') && ($row['alternativa_c'] == $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-success"><img src="img/icon_einstein.png"/></span>');
                                        }
                                    }
                                ?>
                                </label><br>
                            </div>
                            <div style="display: inline;">
                                <input type="radio" id="letra_d" name="gender" value="<?php echo $row['alternativa_d'];?>">
                                <label for="letra_d"><?php echo $row['alternativa_d'];?>
                                <?php
                                    if(!empty($_SESSION['ajuda_publico'])){
                                        if(($_SESSION['ajuda_publico'] == 'usado') && ($row['alternativa_d'] == $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-success">40%</span>');
                                        } else if(($_SESSION['ajuda_publico'] == 'usado') && ($row['alternativa_d'] != $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-secondary">20%</span>');
                                        }
                                    }
                                    if(!empty($_SESSION['ajuda_einstein'])){
                                        if(($_SESSION['ajuda_einstein'] == 'usado') && ($row['alternativa_d'] == $row['resposta'])){
                                            echo('<span class="badge badge-pill badge-success"><img src="img/icon_einstein.png"/></span>');
                                        }
                                    }
                                ?>
                                </label><br><br>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                        </form>
                    </div>
                </div>
    </div>
</div>
<hr>

</div>

<script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script>
  $(function () {
    $('.dropdown-toggle').dropdown();
  }); 
</script>