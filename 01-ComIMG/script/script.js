$(function(){
	
	var debuga = $('#resposta');
	//var enviar = $('form[name="frmUsuario"]');
	var enviar = $('#frmUsuario');
	var action = 'php01.php';
	
	function resposta(datas){
		debuga.empty().html('<pre>'+datas+'</pre>');
	}
	
	enviar.submit(function(){
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