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
    <div class="c-container u-padding-top--0">
        <div class="p-gacha-top">

            <video video src="/images/gatcha_animation.mp4" autoplay muted></video>
            <div class="p-gacha__handle">
                <p class="p-gacha__circle"><img src="/images/gacha-circle.png" alt="ガチャワッカ"></p>
            </div>

        </div>
    </div>
    <div class="c-modal">
        <div class="c-modal__box">
            <p class="c-modal__top">クーポンゲット</p>
            <p class="c-modal__use">有効期限：2022.10.31</p>
            <div class="c-modal__flex">
                <p class="c-modal__flex__img"><img src="/images/coupon.jpg" alt="獲得クーポン"></p>
                <div>
                    <p class="c-modal__flex__coupon">ハロウィン限定アフタヌーンティー50%OFF</p>
                    <p class="c-modal__flex__store">the LOUNGE</p>
                </div>
            </div>
            <button type="submit" class="c-btn c-btn--navy">クーポン一覧へ</button>
            <p class="c-modal__sineup"><a href="">店舗情報を見る</a></p>
        </div>
    </div>
</body>

</html>
