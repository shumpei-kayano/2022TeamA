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
            <p class="c-coupon__top"><img src="/images/使用可能バー.png" alt="使用可能バー"></p>

            <div class="c-coupon__box">
                <p class="c-coupon__use">有効期限：2022.10.30</p>
                <div class="c-modal__flex">
                    <p class="c-modal__flex__img"><img src="/images/coupon.jpg" alt="クーポン"></p>
                    <div>
                        <p class="c-modal__flex__coupon">ハロウィン限定アフタヌーンティー50%OFF</p>
                        <p class="c-modal__flex__store">the LOUNGE</p>
                    </div>
                </div>
                <div class="c-coupon__a">
                    <button type="submit" class="c-coupon__a__btn">詳細を見る</button>
                </div>
                <p class="c-coupon__address">大分市別府市鉄輪499-18</p>
                <button type="submit" class="c-btn c-btn--navy">このクーポンを使う</button>
            </div>
        </div>

        <div class="c-coupon__box">
            <p class="c-coupon__use">有効期限：2022.11.20</p>
            <div class="c-modal__flex">
                <p class="c-modal__flex__img"><img src="/images/生ビール.jpg" alt="生ビール"></p>
                <div>
                    <p class="c-modal__flex__coupon">生ビール1杯無料</p>
                    <p class="c-modal__flex__store">ROUTE 502 COFFEE</p>
                </div>
            </div>
            <div class="c-coupon__a">
                <button type="submit" class="c-coupon__a__btn">詳細を見る</button>
            </div>
            <p class="c-coupon__address">大分県臼杵市市浜1129-3</p>
            <button type="submit" class="c-btn c-btn--navy">このクーポンを使う</button>
        </div>
    </div>
</body>

</html>
