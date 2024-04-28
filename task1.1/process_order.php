<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Підтвердження замовлення</title>
</head>
<body>
    <h1>Ваше замовлення прийнято</h1>
    <?php
    $product = htmlspecialchars($_POST['product']);
    $material = htmlspecialchars($_POST['material']);
    $quantity = htmlspecialchars($_POST['quantity']);

    echo "Замовлено виріб: " . $product . "<br>";
    echo "Матеріал: " . $material . "<br>";
    echo "Кількість: " . $quantity . "<br>";
    ?>
</body>
</html>
