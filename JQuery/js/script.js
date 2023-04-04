var n1 = 0;
var n2 = 0;
var total = 0;
var resultado = $('#resultado');

function pegarValor(){
    n1 = parseFloat($('#txtN1').val());
    n2 = parseFloat($('#txtN2').val());
}

$('#btoShow').click(function () {
   resultado.show();
})
$('#btoHide').click(function () {
    resultado.hide();
 })
 $('#btoToggle').click(function () {
    resultado.toggle();
 })

$('#TituloHue').click(function () {
    alert('Clicou na bagaça');
})
$('#btoMais').click(function () {
    pegarValor();
    total = n1 + n2;
    resultado.html(total);
})
$('#btoMenos').click(function () {
    pegarValor();
    total = n1 - n2;
    resultado.html(total);
})
$('#btoMult').click(function () {
    pegarValor();
    total = n1 * n2;
    resultado.html(total);
})
$('#btoDividir').click(function () {
    pegarValor();
    total = n1 / n2;
    resultado.html(total);
})