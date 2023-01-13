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
        <div class="c-coupon">
            <div class="c-btn--tab">
                <a class="is-active" href="">使用可能</a>
                <a href="">使用済み</a>
            </div>
            <div class="c-coupon__box">
                <p class="c-coupon__use">有効期限：2022.10.30</p>
                <p class="c-coupon__alert">アラートを表示</p>
                <div class="c-modal__flex">
                    <p class="c-modal__flex__img">
                        <img src="/images/coupon.jpg" alt="クーポン">
                    </p>
                    <div class="c-modal__flex__text">
                        <p class="c-modal__flex__coupon">ハロウィン限定アフタヌーンティー50%OFF</p>
                        <p class="c-modal__flex__store">the LOUNGE</p>
                    </div>
                </div>
                <div class="c-coupon__top">
                    <p class="c-coupon__address">大分市別府市鉄輪499-18</p>
                    <a class="c-btn c-btn--navy c-btn--small">詳細を見る</a>
                </div>
                <button type="submit" class="c-btn c-btn--navy u-margin-top--0">このクーポンを使う</button>
            </div>
        </div>

    </div>





</body>


</html>
