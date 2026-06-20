<?php
// 割引計算プログラム
// 変数の定義
$original_price = 5000;
$discount_rate = 0.20;
// 計算
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;
//表示
echo "<h1>割引計算プログラム</h1>";
echo "元の価格: " . $original_price . "円<br>";
echo "割引率: " . ($discount_rate * 100) . "%<br>";
echo "割引後の価格: " . $final_price . "円<br>";

// 奇数判定プログラム
// 変数の定義
$number = 7;
//表示
echo "<h1>奇数判定プログラム</h1>";
if ($number % 2 == 0) {
    echo "{$number}は偶数です";
} else {
    echo "{$number}は奇数です";
}

// 複数条件の判定
// 変数の定義
$age = 25;
$is_member = true;
$is_student = false;
//表示
echo "<h1>複数条件の判定</h1>";
if ($age >= 18 && $is_member) {
    echo "割引が適用されます";
}
if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます";
}

// 複合代入演算子の練習
// 変数の定義
$score = 100;
echo "<h1>複合代入演算子の練習</h1>";
echo "初期スコア: {$score}点<br>";
// ボーナスステージクリア
$score += 50;
echo "ボーナス後: {$score}点<br>";
// ダメージを受ける
$score -= 30;
echo "ダメージ後: {$score}点<br>";
// 2倍アイテム使用
$score *= 2;
echo "最終スコア: {$score}点<br>";
?>