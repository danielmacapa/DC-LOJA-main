<?php

if(isset($_POST["btn_salvar"])&&
($_POST["btn_salvar"]=="Salvar")){
    $cliente = new Cliente();
    $cliente->setNome($_POST['input_nome']);
    $cliente->setEndereco($_POST['input_endereco']);
    $cliente->setCpf($_POST['input_cpf']);
    $cliente->setTelefone($_POST['input_telefone']);
    $cliente->adicionar();

}

?>

<form method="POST" action="">
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
</form>