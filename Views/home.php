<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styles.css" id="theme-stylesheet">
</head>

<body class="login">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <?php if (isset($_GET['msg'])) { ?>
                <div class="toast ml-auto" id="errorPass" data-delay="3000" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="<?php echo base_url(); ?>Assets/img/error.png" class="rounded mr-2" width="20">
                        <strong class="mr-auto">Alerta</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        Usuario o contraseña incorrecta
                    </div>
                </div>
            <?php } ?>
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card border-0 rounded-lg mt-5 sb-sidenav-dark">
                                <div class="card-header text-center ">
                                    <h3 class="font-weight my-4"></h3>
                                    <img class="img-thumbnail" src="<?php echo base_url(); ?>Assets/img/loogo.png" width="150">
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url(); ?>Usuarios/login" method="post" autocomplete="off">
                                        <div class="form-group">
                                            <strong class="text-white"></strong>
                                            <input id="usuario" class="form" type="text" name="usuario" placeholder="Informe seu email">
                                        </div>
                                        <div class="form-group">
                                            <strong class="text-white"></strong>
                                            <input id="clave" class="formcpf" type="tel" name="clave" placeholder="Informe seu CPF" maxlength=14>
                                        </div>
                                        <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>Assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            $('#errorPass').toast('show');
        });
    </script>
<script>
    var el = document.querySelector('input.formcpfr');
el.addEventListener('keyup', function (event) {
  if (event.which >= 37 && event.which <= 40) return;

  this.value = this.value.replace(/^([\d]{3})([\d]{3})([\d]{3})([\d]{2})$/, "$1.$2.$3-$4");
});
</script>
</body>

</html>