<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

    @component('components.gnav')
    @endcomponent
    <div class="c-container">
        <div class="c-header">
            <a href="" class="c-back">戻る</a>
            <h4>アカウント設定</h4>
        </div>
        <div class="p-account__top--set">
            <p class="p-account__phot--set"><img src="/images/phot-account.jpg" alt="アバター画像"></p>
        </div>

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
                <button type="submit" class="c-btn c-btn--navy">更新する</button>
            </div>
    </div>
</body>

</html>
