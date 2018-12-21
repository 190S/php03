<?php

/*
$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。
*/

//"$name"に"Suzuki Ikuo"を代入
$name = "Suzuki Ikuo";

//もし"$name"が"Suzuki Ikuo"と同一なら
//"私は$nameです"を出力する。
if ($name == "Suzuki Ikuo") {
  echo "私は{$name}です。";
}

//それ以外なら
//"私はSuzuki Ikuoではありません"を出力する
else {
  echo "私はSuzuki Ikuoではありません。";
}


 ?>
