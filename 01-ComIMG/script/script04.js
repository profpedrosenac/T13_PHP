// JavaScript Document

$(function(){
	debuga = $('#resposta');
	enviar = $('#frmUsuario');
	//formulario = new FormData($('#frmUsuario'));
	//action = 'php01.php';
	action = '';

	function carregando(datas){
		debuga.empty().html('Carregando...');
	};
	
	function sucesso(datas){
		debuga.empty().html('<pre>'+datas+'</pre>');
		$('#txtID').val($('#idGerado').text());
	};
	
	function sucessoPesquisa(datas){
		debuga.empty().html('<pre>'+datas+'</pre>');

		LimparDados();
		$('#txtID').val($('#idGerado').text());
		$('#txtNome').val($('#nomePesquisa').text());
		$('#txtUsuario').val($('#usuarioPesquisa').text());
		$('#txtSenha').val($('#senhaPesquisa').text());
		$('#txtStatus').val($('#statusPesquisa').text());
		$('#txtObs').val($('#obsPesquisa').text());

		document.getElementById("txtImg").value = "";
		var preview = document.getElementById('preImg');
		
		$('#base64Code').val('data:image/png;base64,'+$('#imgPesquisa').text());
		$('#base64CodePHP').val($('#imgPesquisa').text());
		preview.src = $('#base64Code').val();
	};
	
	function errosend(datas){
		debuga.empty().html('Erro ao Enviar');
	};
	
	$.ajaxSetup({
			type:			'POST',
			beforeSend:		carregando,
			error:			errosend,
			success:		sucesso
		});
	
	enviar.submit(function(){
		return false;
	});
	
	function LimparDados(){
		$('#txtID').val("");
		$('#txtNome').val("");
		$('#txtUsuario').val("");
		$('#txtSenha').val("");
		$('#txtStatus').val("");
		$('#txtObs').val("");
	};
	
	$('#btoCadastrar').click(function(){
		action = 'php_cadastro.php';
		//action = 'php01.php';
		
		$.ajax({
			url: action,
			data:{
				txtNome: $('#txtNome').val(),
				txtUsuario: $('#txtUsuario').val(),
				txtSenha: $('#txtSenha').val(),
				txtImg: $('#base64CodePHP').val(),
				txtStatus: $('#txtStatus').val(),
				txtObs: $('#txtObs').val()
			}
		});

		
	});
	
	$('#btoPesquisar').click(function(){
		
		action = 'php_pesquisa.php';
		
		$.ajax({
			url: action,
			data:{
				txtID: $('#txtID').val()
			},
			success: sucessoPesquisa
		});
	});
	
	$('#btoAlterar').click(function(){
		
		action = 'php_alterar.php';
		
		$.ajax({
			url: action,
			data:{
				txtID: $('#txtID').val(),
				txtNome: $('#txtNome').val(),
				txtUsuario: $('#txtUsuario').val(),
				txtSenha: $('#txtSenha').val(),
				txtImg: $('#base64CodePHP').val(),
				txtStatus: $('#txtStatus').val(),
				txtObs: $('#txtObs').val()
			}
		});
	});
	
	$('#btoExcluir').click(function(){
		
		action = 'php_excluir.php';
		
		$.ajax({
			url: action,
			data:{
				txtID: $('#txtID').val(),
			}
		});
	});
	
});