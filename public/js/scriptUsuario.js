$(document).ready(function () {
    $("#cep").on('blur', function () {
        jQuery(function ($) {
            correios.init('507Oo1p7bCKj5J3LNAaFlBG2SKl4yqIq', '13JbX5ZVdXedb2K2F4514GySGIxPqvsPmsbmd86eZIfyaff7');
            $('#cep').correios('#endereco', '#bairro', '#cidade', '#uf_estado');
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

    else if ($("#tel_celular").val() == "") {
        alert("Preencha com seu númeor de celular");
        $("#telCelular").focus();
        return false;
    }

    else if ($("#data_nascimento").val() == "") {
        alert("Preencha sua data de nascimento");
        $("#data-nascimento").focus();
        return false;
    }

    else if ($("#cep").val() == "") {
        alert("Preencha com seu cep");
        $("#cep").focus();
        return false;
    }

    else if (($("#endereco").val() == "") || ($("#bairro").val() == "") || ($("#cidade").val() == "") || ($("#uf_estado")).val() == "" ){
        alert("Digite seu CEP e espere o complemento das informações do seu endereço!");
        $("#cep").focus();
        return false;
    }
    else {
        enviaDados();
        return true;
    }
}

function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}
function mtel(v) {
    v = v.replace(/\D/g, "");             //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id(el) {
    return document.getElementById(el);
}
window.onload = function () {
    id('telefone').onkeyup = function () {
        mascara(this, mtel);
    }
}

function enviaDados(){
    /* $.ajax({
        url: 'usuarios/novo',
        type: "POST",
        datatype: "JSON",
        data: {},
        success:
    }); */

    $.ajax({
        method: "POST",
        url: "usuarios/novo",
        data: { }
    }).done(function (msg) {
            alert("Data Saved: " + msg);
        });
}