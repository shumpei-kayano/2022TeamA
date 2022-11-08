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
        <div class="c-coupon">
            <div class="c-btn--tab">
                <a href="">使用可能</a>
                <a class="is-active" href="">使用済み</a>
            </div>
            <div class="c-coupon__box">
                <div class="c-coupon__top">
                    <p class="c-coupon__use">2022.7.15に使用済み</p>
                    <a class="c-btn c-btn--navy c-btn--small">クチコミを書く</a>
                </div>
                <div class="c-modal__flex">
                    <p class="c-modal__flex__img"><img src="/images/Beer.jpg" alt="生ビール"></p>
                    <div class="c-modal__flex__text">
                        <p class="c-modal__flex__coupon">生ビール1杯無料</p>
                        <p class="c-modal__flex__store">ROUTE 502 COFFEE</p>
                        <p class="c-modal__flex__address">大分県臼杵市市浜1129-3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
