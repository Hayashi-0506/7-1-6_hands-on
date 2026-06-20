<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php 
    // 変数作成
    $product_name = 'ノートパソコン';
    $price = 80000;
    $quantity = 2;
    $tax_rate = 0.1;
    // 計算結果
    $subtotal = $price * $quantity;
    $tax_amount = $subtotal * $tax_rate;
    $total = $subtotal + $tax_amount;

    //表示
    echo "商品名: " . $product_name . "<br>";
    echo "単価: " . $price . "円<br>";
    echo "数量: " . $quantity . "個<br>";
    echo "小計: " . $subtotal . "円<br>";
    echo "消費税(10%): " . $tax_amount . "円<br>";
    echo "<strong>合計金額: " . $total . "円</strong>";
    ?>
</body>
</html>

