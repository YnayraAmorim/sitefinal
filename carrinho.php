<!-- products.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <ul>
        <li>Camiseta - R$25.99 <a href="carrinho.php?action=add&id=1">Adicionar ao Carrinho</a></li>
        <li>Calça - R$39.99 <a href="carrinho.php?action=add&id=2">Adicionar ao Carrinho</a></li>
    </ul>
</body>
</html>

<!-- carrinho.php -->
<?php
session_start();

// Verifica se a ação é adicionar ao carrinho
if(isset($_GET['action']) && $_GET['action'] == 'add') {
    $id = $_GET['id'];
    if(isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]++;
    } else {
        $_SESSION['carrinho'][$id] = 1;
    }
}

// Verifica se a ação é remover do carrinho
if(isset($_GET['action']) && $_GET['action'] == 'remove') {
    $id = $_GET['id'];
    if(isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]--;
        if($_SESSION['carrinho'][$id] == 0) {
            unset($_SESSION['carrinho'][$id]);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <table>
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço Unitário</th>
            <th>Total</th>
            <th>Ações</th>
        </tr>
        <?php
        $total = 0;
        if(isset($_SESSION['carrinho'])) {
            foreach($_SESSION['carrinho'] as $id => $quantidade) {
                // Aqui você buscaria os detalhes do produto no banco de dados
                // Por simplicidade, vamos apenas mostrar um exemplo
                $nome = "Produto " . $id;
                $preco = 25.99; // Preço fictício para exemplo
                $subtotal = $preco * $quantidade;
                $total += $subtotal;
                echo "<tr>";
                echo "<td>$nome</td>";
                echo "<td>$quantidade</td>";
                echo "<td>R$$preco</td>";
                echo "<td>R$$subtotal</td>";
                echo "<td><a href='carrinho.php?action=remove&id=$id'>Remover</a></td>";
                echo "</tr>";
            }
        }
        ?>
        <tr>
            <td colspan="3">Total:</td>
            <td>R$<?php echo $total; ?></td>
            <td></td>
        </tr>
    </table>
    <a href="products.php">Continuar Comprando</a>
</body>
</html>
