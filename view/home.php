<?php
    session_start();
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
                    <div class="panel-heading">
                        <h3>Criar perguntas</h3>
                    </div>
                    <h4 id="feedback">
                        <?php
                            if (!empty($_SESSION['cadastrado_pergunta'])) { 
                                if($_SESSION['cadastrado_pergunta'] == 'true'){
                                    echo ('<div class="alert alert-primary" role="alert" style="margin-bottom: 0px;">
                                        Pergunta gravada com sucesso!
                                    </div>');
                                } else if($_SESSION['cadastrado_pergunta'] == 'false'){
                                    echo ('<div class="alert alert-warning" role="alert" style="margin-bottom: 0px;">
                                        Erro ao gravar pergunta!
                                    </div>');
                                }
                            } 
                        ?>
                    </h4>
                    <div class="panel-body">
                        <form role="form" method="post" action="../controller/gravar_perguntas.php">
                            <fieldset>
                                <div class="form-group">
                                    <label for="pergunta">Pergunta</label>
                                    <input id="pergunta" class="form-control" placeholder="Pergunta" name="pergunta" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <label for="alternativaA">Alternativa A</label>
                                    <input id="alternativaA" class="form-control" placeholder="Alternativa A" name="alternativa_a" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <label for="alternativaB">Alternativa B</label>
                                    <input id="alternativaB"  class="form-control" placeholder="Alternativa B" name="alternativa_b" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <label for="alternativaC">Alternativa C</label>
                                    <input id="alternativaC" class="form-control" placeholder="Alternativa C" name="alternativa_c" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <label for="alternativaD">Alternativa D</label>
                                    <input id="alternativaD" class="form-control" placeholder="Alternativa D" name="alternativa_d" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <label for="inputGroupSelect01">Selecione a alternativa correta</label>
                                    <select class="form-control" id="inputGroupSelect01" name="resposta">
                                        <option value="A">Alternativa A</option>
                                        <option value="B">Alternativa B</option>
                                        <option value="C">Alternativa C</option>
                                        <option value="D">Alternativa D</option>
                                    </select>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-primary btn-lg">Gravar pergunta</button>
                            </fieldset>
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