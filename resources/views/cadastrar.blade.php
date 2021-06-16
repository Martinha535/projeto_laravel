<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faça seu cadastro!</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div class="">
        <h1 style="font-size: 80px; text-align: center"><strong>Cadastro de Paciente</strong></h1>
    </div>
    @include('_menu')
    <div class="container">
        <form action="{{ route('paciente.cadastrar.criar') }}" method="post" style="margin-bottom: 50px">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="Nome" placeholder="Digite seu nome" />
            </div>
            <div class="mb-3">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="Sobrenome"
                    placeholder="Digite seu sobrenome" />
            </div>
            <div class="mb-3">
                <label for="rg" class="form-label">RG</label>
                <input type="text" class="form-control" id="rg" name="RG" placeholder="Digite seu RG" />
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="CPF" placeholder="Digite seu CPF" maxlength="11"
                    pattern="[0-9]+$" />
            </div>
            <div class="mb-3">
                <label for="nomeDaMae" class="form-label">Nome da Mãe</label>
                <input type="text" class="form-control" id="nomeDaMae" name="NomeMae"
                    placeholder="Digite o nome da sua Mãe" />
            </div>
            <div class="mb-3">
                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNascimento" name="Datadenascimento"
                    placeholder="Informe sua data de nascimento" />
            </div>
            <div class="mb-3">
                <label class="form-label">Sexo</label>
                <select class="form-select" name="Sexo">
                    <option value="feminino" selected>Feminino</option>
                    <option value="masculino">Masculino</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input id="telefone" name="Telefone" class="form-control" placeholder="XX XXXXX-XXXX" required
                    type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                    OnKeyPress="formatar('## #####-####', this)">
            </div>
            <div class="mb-3">
                <label for="nacionalidade" class="form-label">Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade" name="Nacionalidade"
                    placeholder="Digite sua nacionalidade" />
            </div>
            <div class="mb-3">
                <label for="naturalidade" class="form-label">Naturalidade</label>
                <input type="text" class="form-control" id="naturalidade" name="Naturalidade"
                    placeholder="Digite sua naturalidade" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="Email" placeholder="Digite seu Email" />
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="CEP" placeholder="Digite seu CEP" maxlength="8"
                    pattern="[0-9]+$" />
                <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
            </div>
            <div class="mb-3">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua" name="Rua" placeholder="Digite sua Rua" />
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="Numero" placeholder="Digite seu número" />
            </div>
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="Bairro" placeholder="Digite seu bairro" />
            </div>
            <div class="mb-3">
                <label for="complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="Complemento"
                    placeholder="Digite um complemento" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="estado">Estado</label>
                <select class="form-select" name="UF" id="estado">
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
            </div>
            <div class="mb-3">
                <label class="form-label">Estado Civil</label>
                <select class="form-select" name="EstadoCivil">
                    <option value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
                    <option value="Viuvo(a)">Viuvo(a)</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Escolaridade</label>
                <select class="form-select" name="Escolaridade">
                    <option value="Analfabeto">Analfabeto</option>
                    <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                    <option value="Fundamental Completo">Fundamental Completo</option>
                    <option value="Médio Incompleto">Médio Incompleto</option>
                    <option value="Médio Completo">Médio Completo</option>
                    <option value="Superior Incompleto">Superior Incompleto</option>
                    <option value="Superior Completo">Superior Completo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="profissao" class="form-label">Profissão</label>
                <input type="text" class="form-control" id="profissao" name="Profissao"
                    placeholder="Digite sua profissão" />
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="button" class="btn btn-danger" onclick="js:window.history.back();">Voltar</button>
        </form>
    </div>
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
            } else if (idade() < 18) {
                div.style.display = "inline";
            }

        }

    </script>

</body>

</html>
