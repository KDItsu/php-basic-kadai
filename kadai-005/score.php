<!-- Step2. 変数を作成し、値を代入する
生徒10人分の点数を入れる変数score1〜score10を作成し、それぞれの変数に以下の点数を代入します。

80, 60, 55, 40, 100, 25, 80, 95, 30, 60
Step3. 合計点と平均点を算出する
それぞれの変数を四則演算を使って、合計点と平均点を算出します。echo文を使いブラウザに平均点を出力します。 -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題：テストの平均点を計算しよう</title>
</head>
<body>
  <p>
    <?php
      $score1 = '80';
      $score2 = '60';
      $score3 = '55';
      $score4 = '40';
      $score5 = '100';
      $score6 = '25';
      $score7 = '80';
      $score8 = '95';
      $score9 = '30';
      $score10 = '60';

      $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
      $average = $total / 10;

      echo '合計点は'. $total . '点です。';
      echo '<br>';
      echo '平均点は'. $average . '点です。';
    ?>


  </P>
</body>
</html>