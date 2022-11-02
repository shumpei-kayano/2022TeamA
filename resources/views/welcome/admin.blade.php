<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

    <nav class="p-gnav">
    </nav>
    <div class="p-admin-top"><div class="p-admin-top__box">
        <p class="p-admin-top__logo"><img src="/images/admin-logo.png" alt="管理者ログイン"></p>
        <form action="" class="c-form">
        <div class="c-form__group">
            <label for="">メールアドレス</label><input type="text">
        </div>

        <div class="c-form__group">
            <label for="">パスワード</label><input type="password">
        </div>

        <button type="submit" class="c-btn c-btn--pink">ログイン</button>
    </form>  
    </div>
</div>
</body>

</html>