<?php

$produto = new Produto();
$produto->setDescricao("Catan");
$produto->setPreco_venda("5.99");
$produto->setPreco_aluguel("1.99");
$produto->setQuantidade("5");
$produto->adicionar();

?>

<label><h1>CADASTRO DE PRODUTOS</h1></label>
<label>Nome:</label>
<input type='text' name='input_nome'/><br><br>
<label>Preço:</label>
<input type='text' name='input_preco'/><br><br>
<label>Quantidade:</label>
<input type='text' name='input_quantidade'/><br><br>
<label>Categoria:</label>
<select name='categoria'>
    <option value='jogo_tabuleiro'>Jogo de Tabuleiro</option>
    <option value='cardgame'>Cardgame</option>
    <option value='acessorio'>Acessório</option>
</select><br><br>
<label>Observações:</label>
<textarea name='input_observacoes'></textarea><br><br>
<input type='submit' name='btn_salvar' value='Salvar' />
