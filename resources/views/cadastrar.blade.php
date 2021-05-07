<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faça seu cadastro!</title>
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
    <form class="form-horizontal">
        <fieldset> <div class="panel panel-primary">
            <div class="text">
                <h1 style="font-size: 80px; text-align: center"><strong>Cadastro de Paciente</strong></h1>
            </div>
            @include('_menu')
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-md-11 control-label">
                        <p class="help-block">
                            <h11>*</h11> Campo Obrigatório
                        </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11>
                    </label>
                    <div class="col-md-8">
                        <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required=""
                            type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11>
                    </label>
                    <div class="col-md-2">
                        <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md"
                            required="" type="text" maxlength="11" pattern="[0-9]+$">
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">Nome da Mãe <h11>*
                            </h11></label>
                        <div class="col-md-6">
                            <input id="Nome da Mãe" name="Nome da Mãe" placeholder=""
                                class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11>
                    </label>
                    <div class="col-md-2">
                        <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md"
                            required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)"
                            onBlur="showhide()">
                    </div>
                    <br />
                    <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11>
                    </label>
                    <div class="col-md-4">
                        <label required="" class="radio-inline" for="radios-0">
                            <input name="sexo" id="sexo" value="feminino" type="radio" required>
                            Feminino
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input name="sexo" id="sexo" value="masculino" type="radio">
                            Masculino
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Telefone
                            <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon"><i
                                        class="glyphicon glyphicon-earphone"></i></span>
                                <input id="prependedtext" name="prependedtext" class="form-control"
                                    placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13"
                                    pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                    OnKeyPress="formatar('## #####-####', this)">
                            </div>
                        </div><br />
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">Nacionalidade</span>
                                <input id="nacionalidade" name="nacionalidade" placeholder=""
                                    class="form-control input-md" required="" type="text">
                            </div>

                        </div><br />
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">Naturalidade</span>
                                <input id="naturalidade" name="naturalidade" placeholder=""
                                    class="form-control input-md" required="" type="text">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext">Email
                                <h11>*</h11>
                            </label>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-addon"><i
                                            class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="prependedtext" name="prependedtext" class="form-control"
                                        placeholder="email@email.com" required="" type="text"
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11>
                            </label>
                            <div class="col-md-2">
                                <input id="cep" name="cep" placeholder="Apenas números"
                                    class="form-control input-md" required="" value="" type="search"
                                    maxlength="8" pattern="[0-9]+$">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary"
                                    onclick="pesquisacep(cep.value)">Pesquisar</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Rua</span>
                                    <input id="Rua" name="Rua" placeholder="" class="form-control input-md"
                                        required="" type="text">
                                </div>
                                <br />
                                <div class="input-group">
                                    <span class="input-group-addon">Complemento</span>
                                    <input id="Complemento" name="Complemento" placeholder=""
                                        class="form-control input-md" required="" type="text">
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon">Nº <h11>*</h11></span>
                                    <input id="numero" name="numero" class="form-control" placeholder=""
                                        required="" type="text">
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Bairro</span>
                                    <input id="Bairro" name="Bairro" placeholder=""
                                        class="form-control input-md" required="" type="text">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext"></label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Cidade</span>
                                    <input id="Cidade" name="Cidade" placeholder=""
                                        class="form-control input-md" required="" type="text">
                                </div>

                            </div><br />
                            <div class="campo">
                                <label for="Estado">Estado</label>
                                <select name="Estado" id="Estado">
                                    <option value="ac">Acre</option>
                                    <option value="al">Alagoas</option>
                                    <option value="am">Amazonas</option>
                                    <option value="ap">Amapá</option>
                                    <option value="ba">Bahia</option>
                                    <option value="ce">Ceará</option>
                                    <option value="df">Distrito Federal</option>
                                    <option value="es">Espírito Santo</option>
                                    <option value="go">Goiás</option>
                                    <option value="ma">Maranhão</option>
                                    <option value="mt">Mato Grosso</option>
                                    <option value="ms">Mato Grosso do Sul</option>
                                    <option value="mg">Minas Gerais</option>
                                    <option value="pa">Pará</option>
                                    <option value="pb">Paraíba</option>
                                    <option value="pr">Paraná</option>
                                    <option value="pe">Pernambuco</option>
                                    <option value="pi">Piauí</option>
                                    <option value="rj">Rio de Janeiro</option>
                                    <option value="rn">Rio Grande do Norte</option>
                                    <option value="ro">Rondônia</option>
                                    <option value="rs">Rio Grande do Sul</option>
                                    <option value="rr">Roraima</option>
                                    <option value="sc">Santa Catarina</option>
                                    <option value="se">Sergipe</option>
                                    <option value="sp">São Paulo</option>
                                    <option value="to">Tocantins</option>
                                </select>
                            </div><br />
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Estado Civil">Estado
                                    Civil
                                    <h11>*</h11>
                                </label>
                                <div class="col-md-2">
                                    <select required id="Estado Civil" name="Estado Civil" class="form-control">
                                        <option value=""></option>
                                        <option value="Solteiro(a)">Solteiro(a)</option>
                                        <option value="Casado(a)">Casado(a)</option>
                                        <option value="Divorciado(a)">Divorciado(a)</option>
                                        <option value="Viuvo(a)">Viuvo(a)</option>
                                    </select>
                                </div>
                                <label class="col-md-1 control-label" for="Filhos">Filhos
                                    <h11>*</h11>
                                </label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label class="radio-inline" for="radios-0">
                                                <input type="radio" name="filhos" id="filhos" value="nao"
                                                    onclick="desabilita('filhos_qtd')" required>
                                                Não
                                            </label>
                                            <label class="radio-inline" for="radios-1">
                                                <input type="radio" name="filhos" id="filhos" value="sim"
                                                    onclick="habilita('filhos_qtd')">
                                                Sim
                                            </label>
                                        </span>
                                        <input id="filhos_qtd" name="filhos_qtd" class="form-control"
                                            type="text" placeholder="Quantos?" pattern="[0-9]+$">

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-md-2 control-label" for="selectbasic">Escolaridade
                                    <h11>*</h11>
                                </label>

                                <div class="col-md-3">
                                    <select required id="escolaridade" name="escolaridade" class="form-control">
                                        <option value=""></option>
                                        <option value="Analfabeto">Analfabeto</option>
                                        <option value="Fundamental Incompleto">Fundamental
                                            Incompleto
                                        </option>
                                        <option value="Fundamental Completo">Fundamental
                                            Completo
                                        </option>
                                        <option value="Médio Incompleto">Médio Incompleto
                                        </option>
                                        <option value="Médio Completo">Médio Completo
                                        </option>
                                        <option value="Superior Incompleto">Superior
                                            Incompleto</option>
                                        <option value="Superior Completo">Superior Completo
                                        </option>
                                    </select>
                                </div>
                                <label class="col-md-1 control-label" for="profissao">Profissão
                                    <h11>*
                                    </h11>
                                </label>
                                <div class="col-md-4">
                                    <input id="profissao" name="profissao" type="text" placeholder=""
                                        class="form-control input-md" required="">

                                </div>
                            </div><br /><br />

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Cadastrar"></label>
                                <div class="col-md-8" style="justify-content:center; display:flex">
                                    <button id="Cadastrar" name="Cadastrar" class="btn btn-success"
                                        type="Submit">Cadastrar</button>
                                    <button id="Cancelar" name="Cancelar" class="btn btn-danger"
                                        type="Reset">Cancelar</button>
                                </div>
                            </fieldset>
                        </form>
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
    
</body>
</html>