<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="c-container">
        <p class="p-welcome__logo"><img src="/images/logo-plat.png" alt="plat"></p>
        <form action="" class="c-form">
        <div class="c-form__group">
            <label for="">ニックネーム</label><input type="text">
        </div>

        <div class="c-form__group">
            <label for="">パスワード</label><input type="password">
        </div>

        <button type="submit" class="c-btn c-btn--pink">ログイン</button>

        <p class="p-welcome__sineup"><a href="">新規会員登録</a></p>



        </form>
    </div>
</body>

</html>