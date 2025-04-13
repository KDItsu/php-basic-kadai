<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    // ソートする配列を宣言
      function sort_2way(array $array, string $order = 'asc'){
        if ($order === 'asc') {
            sort($array);
        }elseif ($order === 'desc') {
            rsort($array);
        }
        
        return $array;// ソート後の配列を返す

      }

      $nums = [15, 4, 18, 23, 10 ];
      
      $sorted_asc = sort_2way($nums, 'asc');
      echo '昇順にソートします。<br>';
      foreach ($sorted_asc as $v) {
        var_dump($v);
    }
      $sorted_desc = sort_2way($nums, 'desc');
      echo '<br> 降順にソートします。<br>';
      foreach ($sorted_desc as $v) {
        var_dump($v);
    }
    ?>
  </p>

</body>
</html>