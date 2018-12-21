<?php
/*$fruits に配列で好きなフルーツを5個代入し、
foreach文で順番に出力してください。
*/

//"$fruits"に配列としてフルーツ5つ代入
$fruits = ["Apple", "Pear", "Lemon", "Orange", "Melon"];

/*$fruits1要素ずつ$valueに代入し
$valueに結合演算子"."で\n(ラインフィード)を接続し
1要素ずつ改行して出力する。*/
foreach ($fruits as $value) {
  echo $value."\n";
}

 ?>
