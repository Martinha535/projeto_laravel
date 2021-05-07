<!DOCTYPE html>
<html lang="pt-br" style="justify-content: center;
display: flex">;
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Queixas</title>
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style type="text-css">
        * {
            margin: 0;
            padding: 0;
        }

        fieldset {
            border: 0;
        }

        body, input, select, textarea, button {
            font-family: sans-serif;
            font-size: 1em;
        }
        .grupo:before, .grupo:after {
            content: " ";
            display: table;
        }

        .grupo:after {
            clear: both;
        }

        .campo {
            margin-bottom: 1em;
        }

        .campo label {
            margin-bottom: 0.2em;
            color: #666;
            display: block;
        }

        fieldset.grupo .campo {
            float:  left;
            margin-right: 1em;
        }

        .campo input[type="text"],
        .campo input[type="email"],
        .campo input[type="url"],
        .campo input[type="tel"],
        .campo select,
        .campo textarea {
            padding: 0.2em;
            border: 1px solid #CCC;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
            display: block;
        }

        .campo select option {
            padding-right: 1em;
        }

        .campo input:focus, .campo select:focus, .campo textarea:focus {
            background: #FFC;
        }

        .campo label.checkbox {
            color: #000;
            display: inline-block;
            margin-right: 1em;
        }

        .botao {
            font-size: 1.5em;
            background: #F90;
            border: 0;
            margin-bottom: 1em;
            color: #FFF;
            padding: 0.2em 0.6em;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
            text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
        }

        .botao:hover {
            background: #FB0;
            box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
            text-shadow: none;
        }

        .botao, select, label.checkbox {
            cursor: pointer;
        }   
</style>
</head>
<body>
    <div style="text-align:center">
        <div class="imagem">
            <div class="texto">
                <table width="100%">
                    @include('_menu')
                    <table border="1" cellpadding="30" bgcolor="white">
                        <tr>
                            <td>
                                <h1 style="font-size: 40px"><strong>Formulário de Queixas:</strong></h1>
                                    </div><br /><br />
    <form action="{{route('paciente.queixa.criar')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" style="width: 10em" value="">
                </div><br/>
                <br/>
                <div class="campo">
                    <label for="snome">Sobrenome</label>
                    <input type="text" id="snome" name="sobrenome" style="width: 10em" value="">
                </div><br/>
                <br/>
            </fieldset>
            <div class="campo">
                <label>Sexo</label>
                <label>
                    <input type="radio" name="sexo" value="masculino"> Masculino
                </label>
                <label>
                    <input type="radio" name="sexo" value="feminino"> Feminino
                </label>
            </div><br/>
            <br/>
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" style="width: 20em" value="">
            </div><br/>
            <br/>
            <div class="campo">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone" style="width: 10em" value="">
            </div><br/>
            <br/>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" style="width: 10em" value="">
                </div>
                <div class="campo">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado">
                        <option value="">--</option>
                        <option value="AL">AL</option>
                    </select>

                    @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Erro!</strong>

                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                         @endforeach
                   
                </div>
                @endif
                </div><br/>
                <br/>
            </fieldset> 
            <div class="campo">
                <label for="mensagem">Mensagem</label>
                <textarea rows="6" style="width: 20em" id="mensagem" name="mensagem"></textarea>
            </div><br/>
            <br/>
            <div class="campo">
                <label>Controle covid-19</label>
                <label>
                    <input type="checkbox" name="contrlole covid-19" value="1"> Gostaria de receber nossas mensagens?
                </label>
            </div><br/>
            <br/>
            <button type="submit" name="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>