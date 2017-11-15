$(document).ready(function () {
    $("#cep").on('blur', function () {
        jQuery(function ($) {
            correios.init('507Oo1p7bCKj5J3LNAaFlBG2SKl4yqIq', '13JbX5ZVdXedb2K2F4514GySGIxPqvsPmsbmd86eZIfyaff7');
            $('#cep').correios('#endereco', '#bairro', '#cidade', '#uf-estado');
        });
    })
})

function validaForm(form){
    if ($("#nome").val() == "" ){
        alert("Preencha com seu nome");
        $("#nome").focus();
        return false;
    }

    else if ($("#email").val() == "") {
        alert("Preencha com seu email");
        $("#email").focus();
        return false;
    }

    else if ($("#telCelular").val() == "") {
        alert("Preencha com seu númeor de celular");
        $("#telCelular").focus();
        return false;
    }

    else if ($("#data-nascimento").val() == "") {
        alert("Preencha sua data de nascimento");
        $("#data-nascimento").focus();
        return false;
    }

    else if ($("#cep").val() == "") {
        alert("Preencha com seu cep");
        $("#cep").focus();
        return false;
    }

    else if (($("#endereco").val() == "") || ($("#bairro").val() == "") || ($("#cidade").val() == "") || ($("#uf-estado")).val() == "" ){
        alert("Digite seu CEP e espere o complemento das informações do seu endereço!");
        $("#cep").focus();
        return false;
    }
    return true;
}