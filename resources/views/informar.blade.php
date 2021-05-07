<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informações para o paciente:</title>
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style type="text-css">
        .conteiner{
            width: 800px;
            position: relative;
            color: white;
        }
        .conteiner img{
            width: 100%;
        }
        .bemVindo{
            position:absolute;
            text-align: center;
            background-color: rgba(233, 18, 18, 0.5);
            padding: 10px;
        }
        .centro{
            position:absolute;
            top:50%;
            left: 50%;
            transition: translate (50%, 50%);
            text-align: center;
            background-color: rgba(233, 18, 18, 0.5);
            padding: 10px;
        }
        .imagem {
            width: 100%;
            height: 800px;
            margin:auto;
            border-radius: 100px;
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .texto {
            position: absolute;
            margin-top: -30px;
            text-align: center;
        }
        .Controle de Covid-19 Universitário: Estamos prontos para ajudar!{
            position:absolute;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }
        <h1> {
            position:absolute;
            color: red;
            font-size: 80px;
            border: 1px solid red;
            margin-top: 30px;
            padding-top: 10px;
            text-align: center;
            font-family: Arial;
        }
        .p {
            position:absolute;
            font-size:80%; 
            font-family: Arial;  
            text-align: center; 
            color: black; 
            border: 1px solid black;
        }
        h11 {
    color:red;
}

        #logo {
            width:50%;
            height:50%;
}

        .panel-heading{
            font-size:150%;
}

    </style>
</head>
<body>
    <div class="content" style="text-align:center; display:flex; justify-content:center;">
        <img class="imagem"
            src="https://www.esp.ce.gov.br/wp-content/uploads/sites/78/2020/02/Header-Coronav%C3%ADrus.png">
    </div><br />

    <div class="text">
        <table width="100%">
            @include('_menu')
            <table border="1" align="center" cellpadding="100" bgcolor="white">
                <tr>
                    <td>
                        <h3 style="font-size:30px">
                            <ol class="decimal">
                                <li>O que é covid-19?</li>
                                <li>Anamnese</li>
                                <li>Sintomas</li>
                                <li>Diagnóstico</li>
                                <li>Tratamento</li>
                                <li>Transmissão</li>
                                <li>Acompanhamento</li>
                                <li>Orientações</li>
                                <li>Controle</li>
                                <li>Unidades de saúde próximas</li>
                            </ol>
                        </h3>
                    </td>
                </tr>
            </table>
    </div>
    <br />
    <br />
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
</body>
</html>