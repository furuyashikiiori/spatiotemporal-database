<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Quiz3</title>
</head>
<body>
<input
              type="button"
              onclick="location.href='https://muds.gdl.jp/~s2322057/20240625/index.html'"
              value="homeにもどる↩️"
              class="col"
            />
    
    <h3>フィボナッチ数列を計算してくれるよ！！</h3>
    
    <form action="Quiz3.php" method="post">
        <label for="number">数字:</label>
        <input type="number" id="number" name="number" min="1"required><br><br>
        <input class='bottn' type="submit" value="実行">
    </form>

    <?php
    function fibonacci($n) {
        $fib = [];
        if ($n >= 1) $fib[0] = 1;
        if ($n >= 2) $fib[1] = 1;
        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST['number']);
        if ($n > 0) {
            $fibSequence = fibonacci($n);
            echo "<h4>フィボナッチ数列の $n 番目まで:</h4>";
            echo "<p>" . implode(", ", $fibSequence) . "</p>";
        } else {
            echo "<p>正の整数を入力してください。</p>";
        }
    }
    ?>
    
</body>
</html>