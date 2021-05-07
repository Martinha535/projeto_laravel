<?php
print "Controle de Covid-19 Universitário";

?>

<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <title> Atividade PHP </title>

        <link href="// maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
            id="bootstrap-css">
        <script src="// maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"> </script>
        <script src="// cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <! ------ Inclua o acima em sua tag HEAD ---------->
            <style>
                corpo {
                    margem: 0;
                    preenchimento: 0;
                    cor de fundo: # 2E2532;
                    altura: 100vh;
                }

                #login .container # login-row # login-column # login-box {
                    margem superior: 50px;
                    largura máxima: 600px;
                    borda: 1px sólido # 9C9C9C;
                    cor de fundo: #EAEAEA;
                }

                #login .container # login-row # login-column # login-box # login-form {
                    preenchimento: 20px;
                }
            </style>
    </head>

    <body>
        <div id="login">
            <h3 class="text-center text-white pt-5"> Atividade PHP </h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <! - FORMULÁRIO ->
                                <form id="login-form" class="form">
                                    <h3 class="text-center"> Login </h3>

                                    <! - MENSAGEM DE ERRO [INICIO] * Só exibir se tiver falhado no login ->
                                        <p class="alert alert-danger"> Login ou senha inválidos </p>
                                        <! - MENSAGEM DE ERRO [FIM] ->

                                            <! - EMAIL ->
                                                <div class="form-group">
                                                    <label> Email: </label> <br>
                                                    <input type="text" class="form-control">
                                                </div>

                                                <! - SENHA ->
                                                    <div class="form-group">
                                                        <label> Senha: </label> <br>
                                                        <input type="password" class="form-control">
                                                    </div>

                                                    <! - ENVIAR ->
                                                        <div class="form-group">
                                                            <input type="submit" name="submit"
                                                                class="btn btn-danger btn-md" value="Enviar">
                                                        </div>
                                </form>
                                <! - FORMULÁRIO [FIM] ->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>