// Mascara para os campos
$(document).ready(function () {
    var $campoCpf = $(".maskCpf");
    var $campoCep = $(".maskCep");
    var $campoTelefone = $(".maskTelefone");
    $campoCpf.mask('000.000.000-00', {
        reverse: true
    });
    $campoCep.mask('00000-000', {
        reverse: true
    });
    $campoTelefone.mask('00 00000-0000', {
        reverse: true
    });
});