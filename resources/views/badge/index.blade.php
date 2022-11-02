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
    <div class="p-badge__section">
<section>
    <div class="p-badge__title"><h3>ガチャを回した回数</h3></div>
    <div class="p-badge__group">
    <div class ="p-badge__item">
    <div class="p-badge__img">
    <img src="/images/badge_5gacha_off_02.png" alt="5ガチャ">
    <img src="/images/badge_20gacha_off_04.png" alt="5ガチャ">
    <img src="/images/badge_50gacha_off_06.png" alt="5ガチャ">
    <img src="/images/badge_100gacha_off_08.png" alt="5ガチャ">
    <div class="p-badge__name">
    <p>5ガチャ</p>
    <div class="p-badge__date">
{{--  日付はデータベースから取ってくる  --}}
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
    </div>
    <nav class="p-gnav">
        <ul>
            <li><a href="" class="p-gnav__home">ホーム</a></li>
            <li><a href="" class="p-gnav__coupon">クーポン</a></li>
            <li><a href="" class="p-gnav__gacha">ガチャ</a></li>
            <li><a href="" class="p-gnav__badge">バッジ</a></li>
            <li><a href="" class="p-gnav__account">アカウント</a></li>
        </ul>
    </nav>

    </div>
</body>

</html>