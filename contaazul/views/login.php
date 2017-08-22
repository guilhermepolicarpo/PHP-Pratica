<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CONTA AZUL | Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">CA</h1>
            </div>
            <h3>Bem-vindo ao Conta Azul</h3>
            <form class="m-t" role="form" method="POST">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Senha" required>
                </div>

                <?php if(isset($error) && !empty($error)): ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Esqueceu a senha?</small></a>
                <p class="text-muted text-center"><small>Ainda não tem uma conta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Criar Conta</a>
            </form>
            <p class="m-t"> <small>&copy; Conta Azul 2017. Todos os direitos reservados</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>