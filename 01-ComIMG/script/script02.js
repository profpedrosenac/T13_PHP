// JavaScript Document

$(function(){
	debuga = $('#resposta');
	enviar = $('form[name="frmUsuario"]');
	action = 'php01.php';
	
	alert("teste");
	
	function carregando(datas){
		debuga.empty().html('Carregando...');
	};
	
	function sucesso(datas){
		debuga.empty().html('<pre>'+datas+'</pre>');
	};
	
	function errosend(datas){
		debuga.empty().html('Erro ao Enviar');
	};
	
	function completo(datas){
		window.setTimeout(function(){
			debuga.empty().html('dados enviados com sucesso')},2000);
	};
	
	enviar.submit(function(){
		alert("Clicou em OK");
		$.ajax({
			type:				'POST',
			url:				action,
			data:				$(this).serialize(),
			beforeSend:	carregando,
			error:			errosend,
			success:		sucesso,
			complete:		completo
		});
		return false;
	});
});