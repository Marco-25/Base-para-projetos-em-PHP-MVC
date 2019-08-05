<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/materialize/js/jquery-3.4.1.min.js">
    <link rel="stylesheet" href="../assets/materialize/js/materialize.min.js">
    <style>
        .login{
            margin-top:5%;
        }
        body{
            /*
            background-image: url(aqui vai a imagem);
            background-size:cover;
            color:#fff;
            */
            background-color: gray;
        }
    </style>
    <title></title>
</head>
<body>
<div class="row login">
    <div class="col 12 m4 offset-m4">
        <div class="card">
            <!-- ------------------------------------------ -->
            <div class="card-action teal lighten-1 white-texte">
                    <h5>Tela Login Básica</h5>
            </div>

            <form action="../Controller/LoginController.php" method="post">
                <div class="card-content">
                    <div class="form-field">
                        <label for="email">Usuario</label>
                        <input type="text" name="email" id="email">
                    </div><br/><br/>
                    <!-- _______________________________________________ -->
                    <div class="form-field">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div><br/><br/>
                    <!-- _______________________________________________ -->
                    <div class="form-field">
                        <button type="submit" style="width:100%" class="btn-small waves-effect waves-dark">Login</button>
                    </div><br/>
                    <!-- _______________________________________________ -->
                    <div class="form-field">
                        <button type="reset" style="width:100%" class="btn-small waves-effect waves-dark">Clear</button>
                    </div>  
                </div>
            </form>

            <!-- ------------------------------------------ -->
        </div>
    </div>
</div>
<p style="color:white; font-weight:bolder;" class="center">&copy; Marco Antônio - <?php echo date("Y"); ?> - Todos os direitos Reservados</p>

</body>
</html>