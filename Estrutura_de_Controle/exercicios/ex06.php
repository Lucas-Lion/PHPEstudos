<?php
    
// AcessoAutorizado
$idade = (int) 22;
$permissao = (bool) true;

function verificarAcesso($idade, $permissao) {

    if($idade >= 18 && $permissao == true) {
        return "Acesso Autorizado";
    } else if ($idade >= 18 && $permissao != true) {
        return "Acesso negado. Autorização necessária";
    } else if ($idade < 18 && $permissao == true) {
        return "Acesso negado. Idade mínima requerida: 18 anoss";
    } else {
        return "Acesso negado.";
    }
}

verificarAcesso($idade, $permissao);

?>