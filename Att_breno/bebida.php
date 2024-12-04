<?php
// Incluir o arquivo de classes
include 'bebida_classes.php';

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo = $_POST['tipo'];  // Tipo de bebida
    $nome = $_POST['nome'];  // Nome da bebida
    $preco = $_POST['preco'];  // Preço
    $extra = $_POST['extra'];  // Informação adicional: tipo/marca/sabor

    $bebida = null;

    // Criar o objeto conforme o tipo de bebida selecionado
    switch ($tipo) {
        case 'vinho':
            $bebida = new Vinho($nome, $preco, $extra);
            break;
        case 'refrigerante':
            $bebida = new Refrigerante($nome, $preco, $extra);
            break;
        case 'suco':
            $bebida = new Suco($nome, $preco, $extra);
            break;
    }

    // Exibir informações sobre a bebida
    if ($bebida) {
        echo "<h2>Informações da Bebida:</h2>";
        echo $bebida->mostrarBebida();
        echo "<br>";
        
        // Verificar se o preço está abaixo do limite
        if ($bebida->verificarPreco($preco)) {
            echo "O preço está dentro do valor esperado.";
        } else {
            echo "O preço está fora do valor esperado.";
        }
    }
}
?>
