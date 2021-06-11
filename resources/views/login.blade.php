<!DOCTYPE html>
<html lang="pt-br"style="justify-content: center;
display: flex">;
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados para login:</title>
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        #cabecalho{
            background-color: #cccccc;
            width: 600px;
            padding: 40px;
            color: black;
            text-align: center;
            justify-content: center;
            display: block;
            margin: auto;
        }
        #corpo{
            background-color: red;
            width: 600px;
            padding: 10px;
            display: block;
            margin: auto;
        }
        textarea {
            width: 574px;
            height: 120px;
            line-height: 20px;
            display: block;
            margin: auto;
        }
        form{
            font-size: 16px;
            background: #CCC;
            margin: 0 auto;
            padding: 0 10px 10px 10px;
            display: block;
            margin: auto;
        }
        .submit input {
            width: 100px;
            height: 40px;
            background-color:  rgb(212, 182, 162);;
            color: rgb(212, 182, 162);
            border-radius: 3px;
            moz-border-radius: 3px;
            -webkit-border-radius: 3px;                     
        }                                                                                        
    </style>
</head>
<body>
    <div style="text-align:center">
        <div class="imagem">
            <div class="texto">
                <table width="100%">
                    <table border="1" cellpadding="30" bgcolor="white">
                        <tr>
                            <td>
                                <form action="" method="post">
                                @include('_menu')
                                <h1 style="font-size: 40px"><strong>Dados para Login:</strong></h1>
                                    </div><br /><br />
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                                value="email@exemplo.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword"
                                                placeholder="Senha">
                                        </div>
                                    </div>
                    
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Confirmar
                                            Senha</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword"
                                                placeholder="Confirmar Senha">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                Sua senha deve ter entre 6 e 8 caracteres, os quais
                                                devem ser letras e números, sem espaços, caracteres
                                                especiais ou emojis.
                                            </small><br />
                                            <input id="user_remember_me" style="float: left; margin-right: 10px;"
                                                type="checkbox" name="user[remember_me]" value="1" />
                                            <label class="string optional" for="user_remember_me"> Lembrar
                                            </label><br />
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2">Entrar</button>
                                    </div><br /><br />
                                    <div class="text">
                                        <table width="100%">
                                            <table border="1" align="center" cellpadding="30" bgcolor="white">
                                                <tr>
                                                    <td>
                                                    </form>
                                                        <h3 style="font-size: 20px"><strong>Nosso
                                                                maior foco é com a prevenção e
                                                                controle
                                                                de
                                                                covid-19!</strong></h3>
                                                    </td>
                                                </tr>
                                            </table>
</body>
</html>