<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</html><link href="style.css" rel="stylesheet" id="bootstrap-css">


<body>
    

<form method="post" action="action.php">
        <fieldset id="cadastro">

            <legend>Login</legend>
            <img src="./img/senac.png" alt="Senac">         
            <h3 class="text-center text-info">Digite Suas Credenciais</h3>
                <?php
                session_start();
                if(isset($_SESSION["nao_autenticado"])): ?>
                <p> Usuário ou senha inválidos!</p>
                <?php
                endif;
                unset($_SESSION["nao_autenticado"]); ?>

                            <div class="form-group">
                                <label for="nome" class="text-info">Username:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="senha" class="text-info">Password:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
            </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>