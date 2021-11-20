<?php
    session_start();
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
                    <div class="panel-heading">
                        <h3 class="panel-title">Entrar na minha conta</h3>
                    </div>
                    <h4 id="feedback">
                        <?php
                            if (!empty($_SESSION['altenticado']) && ($_SESSION['altenticado'] == 'false')) { 
                                echo ('<div class="alert alert-warning" role="alert">
                                Senha ou email incorreto.
                            </div>');
                            }
                        ?>
                    </h4>
                    <div class="panel-body">
                        <form role="form" method="post" action="../model/login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="password" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-success btn-lg">Entrar</button>
                                <br><br><br><br>

                                <div class="form-group">
                                    <label for="exampleInputPassword1"><a class="btn btn-primary btn-lg" href="criar_conta.php">Criar nova conta</a></label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
    </div>
</div>
<hr>

</div>
