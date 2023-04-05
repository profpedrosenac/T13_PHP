function AbrirTabelaUsuario(){
    $('#abrirTabela').load('usuario_tabela.php');
}

function CadastrarUsuario(){
    console.log('apertei no cadastrar');
    //realizar a validação dos dados//

    let nome_usuario = $('#txtNome').val();
    let login_usuario = $('#txtLogin').val();
    let senha_usuario = $('#txtSenha').val();
    let status_usuario = $('#txtStatus').val();
    let obs_usuario = $('#txtObs').val();
    
    let action = 'usuario_cadastrar.php';

    $.ajax({
        url:    action,
        type:   'post',
        data:{
            txtNome: nome_usuario,
            txtLogin: login_usuario,
            txtSenha: senha_usuario,
            txtStatus: status_usuario,
            txtObs: obs_usuario
        },
        beforend : function(){
            $("#resultado").html("ENVIANDO...");
        },
        success: function(data, status, xhr){
            $( "#resultado" ).empty().html( data );
            $("#txtID").val($('#idGerado').text());
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error' + errorMessage);
        }
    })

}