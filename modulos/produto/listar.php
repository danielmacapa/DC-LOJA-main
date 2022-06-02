<?php

$objetos = Produto::listar();

foreach($objetos as $cliente){
    $id = $produto->getId();
    $descricao = $produto->getDescricao();
    $preco_venda = $produto->getPreco_venda();
    $preco_aluguel = $produto->getPreco_aluguel();
    $quantidade = $produto->getQuantidade();

    echo $id, $descricao, $preco_venda, $preco_aluguel, $quantidade;
}

?>