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
        <div class="c-header">
            <a href="" class="c-back">戻る</a>
            <h4>新規会員登録</h4>
        </div>

        <div class="p-add__text">全ての項目を入力して、会員登録を行って下さい</div>

        <form action="" class="c-form">
            <div class="c-form__group">
                <label for="">メールアドレス</label><input type="email">
            </div>

            <div class="c-form__group">
                <label for="">ニックネーム(半角英数)</label><input type="text">
            </div>

            <div class="c-form__group">
                <label for="">パスワード</label><input type="password">
            </div>

            <div class="p-add__btn">
                <button type="submit" class="c-btn c-btn--navy">新規会員登録</button>
            </div>
    </div>
</body>

</html>
