<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/base.min.css" />
    <link rel="stylesheet" href="./styles/index.min.css" />
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script src="/scripts/validacao.js"></script>
</head>

<body>

    <section class="spikes" id="separator-info">
        <h3>
            FLASHBOARD
        </h3>
        <p>Faça login para acessar seus produtos!</p>
    </section>

    <form method="POST" action="/scripts/validacao.php" class=" container register-form" id="register-form">
                <div class="row ">
                    <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                        <label for="user-input">Usuário</label>
                        <input type="text" name="usuario" id="user-input" class="form-control form-control-lg"
                            placeholder="Nome do usuário" aria-label="Usuario" required>
                    </div>
                    <div class="col-sm-12 col-lg-6 mb-lg-5 mb-3">
                        <label for="password-input">Senha</label>
                        <input type="text" name="senha" id="password-input" class="form-control form-control-lg"
                            placeholder="Nome do senha" aria-label="Senha" required>
                    </div>
                </div>

                <input id="submit-button" name="btn-entrar" type="submit" class="btn btn-primary mb-3" onclick="valida()" value="Login" />
            
            </form>

</body>
</html>