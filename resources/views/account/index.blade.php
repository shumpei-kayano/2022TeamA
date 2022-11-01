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
        <ul>
            <li><a href="" class="p-gnav__home">ホーム</a></li>
            <li><a href="" class="p-gnav__coupon">クーポン</a></li>
            <li><a href="" class="p-gnav__gacha">ガチャ</a></li>
            <li><a href="" class="p-gnav__badge">バッジ</a></li>
            <li><a href="" class="p-gnav__account">アカウント</a></li>
        </ul>
    </nav>
    <div class="c-container">
        <div class="p-account__top"><p class="p-account__phot"><img src="/images/phot-account.jpg" alt="アバター画像"></p><p class="p-account__nickname">ニックネーム</p></div>
        <div class="p-account__navgroup"><a class="p-account__nav">投稿したクチコミ</a>
        <a class="p-account__nav">いいねしたクチコミ</a>
        <a class="p-account__nav">訪れたスポット</a>
        <a class="p-account__nav">アカウント設定</a></div>
        <button type="submit" class="c-btn c-btn--navy">ログアウト</button>
    </div>
</body>

</html>