<?php
    session_start();
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<a class="btn btn-primary" href="login.php" style="margin-left: 970px; margin-top: 20px;">Voltar</a>

<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
                    <div class="panel-heading">
                        <h class="panel-title">Criar uma nova conta</h3>
                    </div>
                    <h4 id="feedback">
                        <?php
                            if (!empty($_SESSION['cadastrado']) && ($_SESSION['cadastrado'] == 'false')) { 
                                echo ('<div class="alert alert-warning" role="alert">
                                Esse email ja está cadastrado, escolhar outro email.
                            </div>');
                            }
                        ?>
                    </h4>
                    <div class="panel-body">
                        <form role="form" method="post" action="../controller/gravar_conta.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nome" name="nome" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senhas" name="senha" type="password" autofocus="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-primary btn-lg">Cadastrar-se</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
    </div>
</div>
<hr>

</div>
