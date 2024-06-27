function logar() {
    const usuario = document.getElementById('usuario').value;
    const senha = document.getElementById('senha').value;
    if (usuario === "admin" && senha === "admin") {
        window.location.href = 'assistencia/assistencia.php';
    } else {
        alert("Login e/ou senha inválida");
    }
}
function home() {
    if (window.confirm("Você realmente quer retornar a página inicial?")) {
        window.location.href = '../assistencia/assistencia.php';
    }
}
function cadastrar() {
    window.location.href = '../cliente/cliente.php';
}
function cadastrarprod() {
    window.location.href = '../produto/produto.php';
}
function consulta() {
    window.location.href = '../consultarproduto/ordemdeservico.php';
}
function consultaum() {
    if (window.confirm("Você realmente quer retornar a página anterior?")) {
        window.location.href = '../consultarproduto/ordemdeservico.php';
    }
}
function paginainicial() {
    if (window.confirm("Você realmente quer retornar a página anterior?")) {
        window.location.href = '../assistencia/assistencia.php';
    }
}
function salvar() {
    var cpf = document.getElementById("cpf").value;
    var nome = document.getElementById("nome").value;
    var telefone = document.getElementById("telefone").value;
    var email = document.getElementById("email").value;
    var endereco = document.getElementById("endereco").value;
    var cidade = document.getElementById("cidade").value;
    var cep = document.getElementById("cep").value;
    var estado = document.getElementById("estado").value;

    if (cpf === '' || nome === '' || telefone === '' || email === '' || endereco === '' || cidade === '' || cep === '' || estado === '') {
        alert('Por favor, preencha todos os campos.');
        return false;
    }
    let formularioum = document.getElementById("formularioum");
    formularioum.submit();
}
function salvarprod() {
    var cpf_cliente = document.getElementById("cpf_cliente").value;
    var ordemdeservico = document.getElementById("ordemdeservico").value;
    var nome = document.getElementById("nome").value;
    var produto = document.getElementById("produto").value;
    var cor_volt = document.getElementById("cor_volt").value;
    var eminota = document.getElementById("eminota").value;
    var numnota = document.getElementById("numnota").value;
    var valorproduto = document.getElementById("valorproduto").value;
    var defeito = document.getElementById("defeito").value;
    var entrada_ga = document.getElementById("entrada_ga").value;

    if (cpf_cliente === '' || ordemdeservico === '' || nome === '' || produto === '' || cor_volt === '' || eminota === '' || numnota === '' || valorproduto === '' || defeito === '' || entrada_ga === '') {
        alert('Por favor, preencha todos os campos.');
        return false;
    }
    let formulariodois = document.getElementById("formulariodois");
    formulariodois.submit();
}
function consultaOS() {
    document.getElementById("ordemOS").value;
    let formularioconsulta = document.getElementById("formularioconsulta");
    formularioconsulta.submit();
}
function home() {
    window.location.href = '../assistencia/assistencia.php';
}
function cadastro() {
    window.location.href = '../consultarcadastro/cadastro.php';
}
function cadastroum() {
    if (window.confirm("Você realmente quer retornar a página anterior?")) {
        window.location.href = '../consultarcadastro/cadastro.php';
    }
}
function consultacadastro() {
    document.getElementById("cpf_cadastro").value;
    let formcadastro = document.getElementById("formcadastro");
    formcadastro.submit();
}
function logout() {
    if (window.confirm("Você realmente quer sair?")) {
        window.location.href = '../index.php';
    }
}
function updateproduto() {
    document.getElementById("cpf_cliente").value;
    document.getElementById("ordemdeservico").value;
    document.getElementById("nome").value;
    document.getElementById("produto").value;
    document.getElementById("cor_volt").value;
    document.getElementById("eminota").value;
    document.getElementById("numnota").value;
    document.getElementById("valorproduto").value;
    document.getElementById("defeito").value;
    document.getElementById("entrada_ga").value;
    let consultadeproduto = document.getElementById("consultadeproduto");
    consultadeproduto.submit();
}
function updatecliente() {
    document.getElementById("cpf").value;
    document.getElementById("nome").value;
    document.getElementById("telefone").value;
    document.getElementById("email").value;
    document.getElementById("endereco").value;
    document.getElementById("cidade").value;
    document.getElementById("cep").value;
    document.getElementById("estado").value;
    let consultadecadastro = document.getElementById("consultadecadastro");
    consultadecadastro.submit();
}
function deletarcad() {
    document.getElementById("cpf").value;
    let deletecpf = document.getElementById("deletecpf");
    deletecpf.submit();
}
function excluir() {
    window.location.href = '../excluir/excluirtudo.php';
}

function formatarCPF(campo) {
    campo.value = campo.value.replace(/\D/g, '');
    var cpfFormatado = '';
    for (var i = 0; i < campo.value.length; i++) {
        cpfFormatado += campo.value.charAt(i);
        if ((i == 2 || i == 5) && campo.value.length > 3) {
            cpfFormatado += '.';
        } else if (i == 8 && campo.value.length > 7) {
            cpfFormatado += '-';
        }
    }
    campo.value = cpfFormatado;
}

function formatarCEP(campo) {
    campo.value = campo.value.replace(/\D/g, '');
    var cepFormatado = '';
    for (var i = 0; i < campo.value.length; i++) {
        cepFormatado += campo.value.charAt(i);
        if (i == 4) {
            cepFormatado += '-';
        }
    }
    campo.value = cepFormatado;
}

function formatarTelefone(campo) {
    campo.value = campo.value.replace(/\D/g, '');
    var telefoneFormatado = '';
    if (campo.value.length < 11) {
        telefoneFormatado += '(' + campo.value.substring(0, 2) + ') ';
        telefoneFormatado += campo.value.substring(2, 6) + '-';
        telefoneFormatado += campo.value.substring(6);
    } else {
        telefoneFormatado += '(' + campo.value.substring(0, 2) + ') ';
        telefoneFormatado += campo.value.substring(2, 7) + '-';
        telefoneFormatado += campo.value.substring(7);
    }
    campo.value = telefoneFormatado;
}
function formatarData(input) {
    var inputValue = input.value.replace(/\D/g, '');
    if (inputValue.length > 2) {
        inputValue = inputValue.substring(0, 2) + '/' + inputValue.substring(2);
    }
    if (inputValue.length > 5) {
        inputValue = inputValue.substring(0, 5) + '/' + inputValue.substring(5, 9);
    }
    input.value = inputValue;
}