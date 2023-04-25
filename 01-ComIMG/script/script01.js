// JavaScript Document

$(function(){
	debuga = $('#resposta');
	enviar = $('form[name="frmUsuario"]');
	action = 'php01.php';
	
	//alert("teste");
	
	function resposta(datas){
		debuga.empty().html('<pre>'+datas+'</pre>');
	};
	
	enviar.submit(function(){
		//alert("Clicou em OK");
		$.ajax({
			type:			'POST',
			url:			action,
			data:			$(this).serialize(),
			success:	resposta,
			error:		resposta('erro ao enviar')
		});
		return false;
	});
});