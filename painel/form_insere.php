<?php
    session_start();

    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');
    include_once "cabecalho.php";//incluindo o arquivo cabecalho antes da tabela
?>
<div class="content mt-3">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-12">
                
                <form action="insere.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome do cliente" name="nome_cliente" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite o email do cliente" name="email_cliente" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="senha">Cidade</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Digite a cidade do cliente" name="cidade_cliente" autocomplete="off">
                    </div>          
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
                </div>
            </div>
            <!--/.col-->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Fim Painel Direito -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>