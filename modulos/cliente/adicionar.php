<?php

$cliente = new Cliente();
$cliente->setNome("Marcos");
$cliente->setEndereco("alameda A");
$cliente->setCpf("255553265");
$cliente->setTelefone("2888999");
$cliente->adicionar();

?>

<label><h1>CADASTRO DE CLIENTES</h1></label>
<label>Nome:</label>
<input type='text' name='input_nome'/><br><br>
<label>CPF:</label>
<input type='text' name='input_cpf'/><br><br>
<label>Endereço:</label>
<input type='text' name='input_endereco'/><br><br>
<label>Telefone:</label>
<input type='text' name='input_telefone'/><br><br>
<label>Sexo:</label>
<input type='radio' name='input_sexo' value='feminino' /> 
Feminino
<input type='radio' name='input_sexo' value='masculino' /> 
Masculino<br><br>
<input type='submit' name='btn_salvar' value='Salvar' />
