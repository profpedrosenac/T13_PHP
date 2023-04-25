// JavaScript Document

$(function(){
	debuga = $('#resposta');
	enviar = $('form[name="frmUsuario"]');
	action = 'php01.php';
	
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
	
	$.ajaxSetup({
			type:				'POST',
			url:				action,
			beforeSend:	carregando,
			error:			errosend,
			success:		sucesso,
			complete:		completo
		});
	
	enviar.submit(function(){
		$.ajax({
			data:				$(this).serialize()
		});
		return false;
	});
});