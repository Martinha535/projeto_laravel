<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre covid-19:</title>
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>

        h1 {
            color:black;
            font-size: 30px;
            text-align: justify;

        }

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
    <div class="texto">
        <table width="100%">
            <table border="1" cellpadding="30" align="left" bgcolor="white">
                <tr>
                    <td>
                        <h1><strong>Sabemos que muitas pessoas lutam para encontrar as informações e os recursos dos quais precisam num momento tão delicado no qual estamos passando com esta pandemia. É por isso que o site controle de covid-19 universitário: nossa linha de ajuda oferece suporte através deste aplicativo, 24 horas por dia, todos os dias da semana, um serviço de orientação e condutas. Aqui será disponibilizado um sistema completo, onde além de conter as funcionalidades de outros sistemas, interligará o paciente ao sistema ao Cartão SUS (base de dados do SUS). Utilizará uma plataforma confiável, integrada, inteligente e sustentável, colocando uma autenticação de segurança. Disponibilizará várias opções para quem têm ou não sintomas, perguntas referentes a contatos com pessoas suspeitas  de contágio, abrangendo todas as cidades brasileiras. Faremos o monitoramento e acompanhamento das famílias brasileiras, sobre as vacinas, doenças, consultas, exames,...Será um prontuário eletrônico do paciente, para assim facilitar o acesso dos pacientes às ações e serviços que venham a necessitar ao longo da vida.  </strong></h1><br />
                    </td>
                    @include('_menu')
                </tr>
            </table>
</div><br />

</body>
</html>