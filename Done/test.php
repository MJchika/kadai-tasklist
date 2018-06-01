
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("H");
?>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <?php if (6 <= $now_hour && $now_hour < 12) { ?>
            <p>おはよう、太郎さん</p>
        <?php } elseif (12 <= $now_hour && $now_hour < 18) { ?>
            <p>こんにちは、太郎さん</p>
        <?php } else { ?>
            <p>こんばんは、太郎さん</p>
        <?php } ?>
    </body>
</html>