<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>
<body>
  <p>
    <?php
      // クラスを定義する
      class Food {
        // プロパティを定義する
        private $name;
        private $price;

        // コンストラクタを定義する
        public function __construct($name, $price){
          $this->name = $name;
          $this->price = $price;
         }

        // メソッドを定義する
        public function show_price(){
          echo $this->price . '<br>';
        }
      }
      $food = new Food('potato', 250);

      print_r($food);

    ?>
  </p>
  <p>
    <?php
      class Animal {
        private $name;
        private $height;
        private $weight;

        // コンストラクタを定義する
        public function __construct($name, $height, $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
         }

        public function show_height(){
          echo $this->height . '<br>';
        }
      }
      $animal = new Animal('dog', 60, 5000);

      print_r($animal);


      // メソッドにアクセスして実行する
      $food->show_price();
      $animal->show_height();
    ?>
  </p>
</body>
</html>