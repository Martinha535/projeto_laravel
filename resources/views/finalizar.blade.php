<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página final</title>
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
        .paginaFinal{
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
        .Juntos somos mais fortes! Diga NÃO ao coronavírus! Apesar da vacina ainda devemos manter todos os protocolos para evitar sua propagação!{
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
    <div style="text-align:center">
        <div class="imagem">
            <div class="texto">
                <table width="100%">
                    @include('_menu')
                    <table border="1" cellpadding="30" bgcolor="white">
                        <tr>
                            <td>
                                <h1 style="font-size: 80px"><strong>Página final!</strong></h1><br />
                                <p style="font-size: 50px"><strong>Juntos somos mais fortes! Diga NÃO ao coronavírus! Apesar da vacina ainda devemos manter todos os protocolos para evitar sua propagação!</strong></p><br />
                                <img class="imagem"
                                    src="https://d2kc6373olxhzl.cloudfront.net/uploader/conteudo/imagem-covid-19.jpg" /><br /><br /><br /><br />
                                <h2>Continue a usar máscara, fazer uso de álcool em gel ou lavagem constante das mãos e distanciamento social neste período!</h2><br /><br />
                            </td>
                        </tr>
                    </table>
                </table>
            </div><br />
            <br />
            <br />
            <br />
            <br />
            <br />
</body>
</html>