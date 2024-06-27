<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <style>
        .remainder-zero {
            color: red;
        }
    </style>
    <title>Quiz2</title>
</head>
<body>
<input
              type="button"
              onclick="location.href='https://muds.gdl.jp/~s2322057/20240625/index.html'"
              value="homeにもどる↩️"
              class="col"
            />
    <h3>整数を割ってあまりを計算してくれるプログラム</h3>
    
    <form action="Quiz2.php" method="post">
        <label for="number">数字:</label>
        <input type="number" id="number" name="number"required><br><br>
        <input class='bottn' type="submit" value="実行">
    </form>
    <?php

    echo "入力した数値: . $number";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']);
        $divisors = [2, 3, 5, 7, 11, 13, 17, 19];

        foreach ($divisors as $divisor) {
            $remainder = $number % $divisor;
            $class = ($remainder === 0) ? 'remainder-zero' : '';
            echo "<p class='$class'>$divisor で割った時のあまり: $remainder</p>";
        }
    }
    ?>
    
</body>
</html>