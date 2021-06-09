<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Covid-19 Universitário</title>
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
    <div style="text-align:center">
        <div class="imagem">
            <div class="texto">
                <table width="100%">
                    <table border="1" cellpadding="30" bgcolor="white">
                        <tr>
                            <td>
                                <h1 style="font-size: 80px"><strong>Bem-vindo!</strong></h1><br />
                                <p style="font-size: 50px"><strong>Controle de Covid-19 Universitário: Estamos prontos
                                        para ajudar!</strong></p><br />
                                <img class="imagem"
                                    src="https://d2kc6373olxhzl.cloudfront.net/uploader/conteudo/imagem-covid-19.jpg" /><br /><br /><br /><br />
                                <h2>Vamos controlar o avanço da pandemia de covid-19?</h2><br /><br />
                            </td>
                            @include('_menu')
                        </tr>
                    </table>
                </table>
            </div><br />
            <br />
            <br />
            <br />
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
            <script>
                function limpa_formulario_cep() {
                    //Limpa valores do formulário de cep.
                    document.getElementById('rua').value = ("");
                    document.getElementById('bairro').value = ("");
                    document.getElementById('cidade').value = ("");
                    document.getElementById('estado').value = ("");

                }

                function meu_callback(conteudo) {
                    if (!("erro" in conteudo)) {
                        //Atualiza os campos com os valores.
                        document.getElementById('rua').value = (conteudo.logradouro);
                        document.getElementById('bairro').value = (conteudo.bairro);
                        document.getElementById('cidade').value = (conteudo.localidade);
                        document.getElementById('estado').value = (conteudo.uf);
                    } //end if.
                    else {
                        //CEP não Encontrado.
                        limpa_formulario_cep();
                        alert("CEP não encontrado.");
                        document.getElementById('cep').value = ("");
                    }
                }

                function pesquisacep(valor) {

                    //Nova variável "cep" somente com dígitos.
                    var cep = valor.replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep !== "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if (validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            document.getElementById('rua').value = "...";
                            document.getElementById('bairro').value = "...";
                            document.getElementById('cidade').value = "...";
                            document.getElementById('estado').value = "...";

                            //Cria um elemento javascript.
                            var script = document.createElement('script');

                            //Sincroniza com o callback.
                            script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                            //Insere script no documento e carrega o conteúdo.
                            document.body.appendChild(script);

                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulario_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulario_cep();
                    }
                }

                function formatar(mascara, documento) {
                    var i = documento.value.length;
                    var saida = mascara.substring(0, 1);
                    var texto = mascara.substring(i);

                    if (texto.substring(0, 1) != saida) {
                        documento.value += texto.substring(0, 1);
                    }

                }

                function idade() {
                    var data = document.getElementById("dtnasc").value;
                    var dia = data.substr(0, 2);
                    var mes = data.substr(3, 2);
                    var ano = data.substr(6, 4);
                    var d = new Date();
                    var ano_atual = d.getFullYear(),
                        mes_atual = d.getMonth() + 1,
                        dia_atual = d.getDate();

                    ano = +ano,
                        mes = +mes,
                        dia = +dia;

                    var idade = ano_atual - ano;

                    if (mes_atual < mes || mes_atual == mes_aniversario && dia_atual < dia) {
                        idade--;
                    }
                    return idade;
                }


                function exibe(i) {



                    document.getElementById(i).readOnly = true;




                }

                function desabilita(i) {

                    document.getElementById(i).disabled = true;
                }
                function habilita(i) {
                    document.getElementById(i).disabled = false;
                }


                function showhide() {
                    var div = document.getElementById("newpost");

                    if (idade() >= 18) {

                        div.style.display = "none";
                    }
                    else if (idade() < 18) {
                        div.style.display = "inline";
                    }

                }
</script>
<script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
</script>
<script>
    (function () {
        window.onload = function () {
            localStorage.removeItem('blipSdkUAccount');
            new BlipChat()
            .withAppKey('Y29udHJvbGJvdDQ6ZTNlMDYzMzEtMjMxOS00OTBlLWFjMTItOWE4YmE2N2FjN2Rl')
            .withButton({"color":"#2CC3D5","icon":""})
            .withCustomCommonUrl('https://chat.blip.ai/')
            .build();
        }
    })();
</script>
                                
            
</body>

</html>