<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>DOUNUTS Shop 確認画面</title>
    </head>
    <body>
        <div class="form">
            <form method="post" action="">
                <div>
                    <label for="name">お名前</label>
                    <p><?php echo $_POST['name']; ?></p>
                </div>
                <div>
                    <label for="email">メールアドレス</label>
                    <p><?php echo $_POST['email']; ?></p>
                </div>
                <div>
                    <label for="message">メッセージ</label>
                    <p><?php echo $_POST['message']; ?></p>
                </div>
            </form>
            <form action="contact.php" method="get">
                <button>戻る</button>
            </form>
            <form action="submit.php" method="post">
                <button type="submit" class="btn btn-success">送信する</button>
            </form>
        </div>
    </body>
</html>