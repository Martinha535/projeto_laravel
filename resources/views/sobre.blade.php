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
                        <h1><strong>Sabemos que muitas pessoas lutam para encontrar as informa????es e os recursos dos quais precisam num momento t??o delicado no qual estamos passando com esta pandemia. ?? por isso que o site controle de covid-19 universit??rio: nossa linha de ajuda oferece suporte atrav??s deste aplicativo, 24 horas por dia, todos os dias da semana, um servi??o de orienta????o e condutas. Aqui ser?? disponibilizado um sistema completo, onde al??m de conter as funcionalidades de outros sistemas, interligar?? o paciente ao sistema ao Cart??o SUS (base de dados do SUS). Utilizar?? uma plataforma confi??vel, integrada, inteligente e sustent??vel, colocando uma autentica????o de seguran??a. Disponibilizar?? v??rias op????es para quem t??m ou n??o sintomas, perguntas referentes a contatos com pessoas suspeitas  de cont??gio, abrangendo todas as cidades brasileiras. Faremos o monitoramento e acompanhamento das fam??lias brasileiras, sobre as vacinas, doen??as, consultas, exames,...Ser?? um prontu??rio eletr??nico do paciente, para assim facilitar o acesso dos pacientes ??s a????es e servi??os que venham a necessitar ao longo da vida.  </strong></h1><br />
                    </td>
                    @include('_menu')
                </tr>
            </table>
</div><br />

</body>
</html>