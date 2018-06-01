<?php
    function greeting($hour) {
        $result = "";

        if (6 <= $hour && $hour < 12) {
            $result = "おはよう";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "こんにちは";
        }
        else {
            $result = "こんばんは";
        }

        return $result;
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>名前: <input type="text" name="target_name"></label>
            <label>年齢: <input type="text" name="age"></label>
            <input type="submit" value="送信">
        </form>
        <?php
            date_default_timezone_set('Asia/Tokyo');
            $now_hour =  (int)date("H");
        ?>
        <p>今は<?php print $now_hour; ?>時です。<br>
        <?php print greeting($now_hour); ?>、
        <?php print $_POST['target_name']; ?>さん
       (<?php print $_POST['age']; ?>歳)</p>
    </body>
</html>