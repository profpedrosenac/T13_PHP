<?php
session_start();
if($_SESSION && isset($_SESSION['idUsuario']) && isset($_SESSION['nomeUsuario']) && isset($_SESSION['loginUsuario']))
{
    $idUsuario = $_SESSION['idUsuario'];
    $nomeUsuario = $_SESSION['nomeUsuario'];
    $loginUsuario = $_SESSION['loginUsuario'];
}
else{
    header('Location:index.php');
}
// echo '

// <div class="container">
//     <div class="row">
//         <div class="col-sm-12 mt-3 p-3">
//             <p>
//                 Id:'.$idUsuario.'? | 
//                 Nome:'.$nomeUsuario.'? | 
//                 Login:'.$loginUsuario.'? | 
//                 <a href="autenticar_sair.php" class="btn btn-danger">Sair</a>  
//             </p>
//         </div>
//     </div>
// </div>
// ';
?>