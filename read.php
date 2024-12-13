<?php

$str = '';

$file = fopen('data/data.csv', 'r');
flock($file, LOCK_EX);

if ($file){
  while ($line = fgets($file)) {
    $str .= "{$line}";
  }
}

flock($file, LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>イチ推し飲み屋リスト（一覧画面）</title>
</head>

<body>
  <fieldset class="result">
    <legend>イチ推し飲み屋リスト<span>一覧画面</span></legend>
      <?= $str ?>
    <div class="btn">
      <a class="list-btn" href="index.php">入力画面へ</a>
    </div>
  </fieldset>
</body>

</html>