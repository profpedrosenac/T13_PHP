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

function PesquisarUsuario(){
    console.log('apertei no pesquisar');
    //realizar a validação dos dados//

    let id_usuario = $('#txtID').val();
       
    let action = 'usuario_pesquisar.php';

    $.ajax({
        url:    action,
        type:   'post',
        data:{
            txtID: id_usuario
        },
        beforend : function(){
            $("#resultado").html("ENVIANDO...");
        },
        success: function(data, status, xhr){
            $( "#resultado" ).empty().html( data );
            $("#txtID").val($('#idGerado').text());
            $("#txtNome").val($('#nomeUsuario').text());
            $("#txtLogin").val($('#loginUsuario').text());
            $("#txtSenha").val($('#senhaUsuario').text());
            $("#txtData").val($('#cadastroUsuario').text());
            $("#txtStatus").val($('#statusUsuario').text());
            $("#txtObs").val($('#obsUsuario').text());
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error' + errorMessage);
        }
    })

}

function AlterarUsuario(){
    console.log('apertei no alterar');
    //realizar a validação dos dados//

    let id_usuario = $('#txtID').val();
    let nome_usuario = $('#txtNome').val();
    let login_usuario = $('#txtLogin').val();
    let senha_usuario = $('#txtSenha').val();
    let status_usuario = $('#txtStatus').val();
    let obs_usuario = $('#txtObs').val();
    
    let action = 'usuario_alterar.php';

    $.ajax({
        url:    action,
        type:   'post',
        data:{
            txtID: id_usuario,
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
            PesquisarUsuario();
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error' + errorMessage);
        }
    })
}

function ExcluirUsuario(){
    console.log('apertei no excluir');
    //realizar a validação dos dados//

    let id_usuario = $('#txtID').val();
    
    let action = 'usuario_excluir.php';

    $.ajax({
        url:    action,
        type:   'post',
        data:{
            txtID: id_usuario
        },
        beforend : function(){
            $("#resultado").html("ENVIANDO...");
        },
        success: function(data, status, xhr){
            $( "#resultado" ).empty().html( data );
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error' + errorMessage);
        }
    })
}