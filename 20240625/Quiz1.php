<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/
xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" href="./style.css">
<title>Quiz1</title>
</head>
<body>
    <input
              type="button"
              onclick="location.href='https://muds.gdl.jp/~s2322057/20240625/index.html'"
              value="homeにもどる↩️"
              class="col"
            />

<img src="./Manga icon _3☆○.jpeg" alt="">
    <h1>誕生月と誕生日を入力してください</h1>
    <form action="Quiz1.php" method="post">
        <label for="month">誕生月:</label>
        <input type="number" id="month" name="month" min="1" max="12" required><br><br>
        <label for="day">誕生日:</label>
        <input type="number" id="day" name="day" min="1" max="31" required><br><br>
        <input class='bottn' type="submit" value="実行">
    </form>

    <?php
function getSign($month, $day) {
    if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        return "水瓶座（みずがめ座）今日は絶好調!!";
    } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        return "魚座（うお座）今日は絶好調!!";
        return "牡羊座（おひつじ座）今日は絶好調!!";
    } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        return "牡牛座（おうし座）今日は絶好調!!";
    } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
        return "双子座（ふたご座）今日は絶好調!!";
    } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
        return "蟹座（かに座）今日は絶好調!!";
    } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        return "獅子座（しし座）今日は絶好調!!";
    } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        return "乙女座（おとめ座）今日は絶好調!!";
    } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        return "天秤座（てんびん座）今日は絶好調!!";
    } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        return "蠍座（さそり座）今日は絶好調!!";
    } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        return "射手座（いて座）今日は絶好調!!";
    } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
        return "山羊座（やぎ座）今日は絶好調!!";
    } else {
        return "不明";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month = intval($_POST['month']);
    $day = intval($_POST['day']);

    if ($month > 0 && $month <= 12 && $day > 0 && $day <= 31) {
        $Sign = getSign($month, $day);
        echo "<h1>あなたの星座は $Sign です。</h1>";
    } else {
        echo "<h1>無効な日付です。</h1>";
    }
} 
?>


</body>
</html>