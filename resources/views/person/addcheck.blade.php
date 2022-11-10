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
            <h4>新規会員登録確認</h4>
        </div>

        <div class="p-add__text">以下の内容で会員登録を行います。</div>

        <form action="" class="c-form">
            <section class="c-store__section">
                <p class="c-store__item"--addcheck>メールアドレス</p>
                <p class="c-store__text--addcheck">aaaaaa@icloud.com</p>
            </section>

            <section class="c-store__section">
                <p class="c-store__item--addcheck">ニックネーム（半角英数）</p>
                <p class="c-store__text--addcheck">aaaaaaa</p>
            </section>

            <section class="c-store__section">
                <p class="c-store__item--addcheck">パスワード</p>
                <p class="c-store__text--addcheck">aaaaaaaa</p>
            </section>

            <div class="p-add__btn">
                <button type="submit" class="c-btn c-btn--navy">登録する</button>
            </div>
    </div>
</body>

</html>
