<?php

$objetos = Cliente::listar();

?>

<table>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>ENDEREÇO</th>
        <th>CPF</th>
        <th>TELEFONE</th>
    </tr>
    <?php
    foreach($objetos as $cliente){
    
        echo "<tr>";
        echo "<td>".$cliente->getId()."</td>";
        echo "<td>".$cliente->getNome()."</td>";
        echo "<td>".$cliente->getEndereco()."</td>";
        echo "<td>".$cliente->getCpf()."</td>";
        echo "<td>".$cliente->getTelefone()."</td>";
        echo "</tr>";
    }
    ?>
</table>