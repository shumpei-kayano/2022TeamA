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
            <a href="{{ route('account/index') }}" class="c-back">戻る</a>
            <h4>訪れたスポット</h4>
        </div>
        <p class="c-hukidashi__date--spot">
            2022/10/29
        </p>
        {{--  各お店を押したら店舗詳細に飛ぶ。まだルート記述してないです。11/11。河野  --}}
        <div class="c-coupon__box--spot">
            <div class="c-modal__flex">
                <p class="c-modal__flex__img"><img src="/images/coupon.jpg" alt="クーポン"></p>
                <div class="c-modal__flex__text">
                    <p class="c-modal__flex__coupon">cafe Green Brown</p>
                    <p class="c-modal__flex__store">大分市別府市鉄輪499-18</p>
                    <p class="c-modal__flex__address">
                        白いスタイリッシュな建物が目印のカフェ。メニューのほとんどを陶芸作家が手掛あああああああああああああああああああああああああああああああああああ</p>
                </div>
            </div>
        </div>
        <div class="c-coupon__box">
            <div class="c-modal__flex">
                <p class="c-modal__flex__img"><img src="/images/lunch.png" alt="クーポン"></p>
                <div class="c-modal__flex__text">
                    <p class="c-modal__flex__coupon">つばめ食堂</p>
                    <p class="c-modal__flex__store">大分県大分市玉沢335-3</p>
                    <p class="c-modal__flex__address">
                        ここでいただけるのは、地元の無農薬野菜・有機野菜をたっぷり使ったプレートラあああああああああああああああああああああああああああああああああああああああああああ</p>
                </div>
            </div>
        </div>
        <p class="c-hukidashi__date--spot">
            2022/10/29
        </p>
        <div class="c-coupon__box--spot">
            <div class="c-modal__flex">
                <p class="c-modal__flex__img"><img src="/images/coupon.jpg" alt="クーポン"></p>
                <div class="c-modal__flex__text">
                    <p class="c-modal__flex__coupon">cafe Green Brown</p>
                    <p class="c-modal__flex__store">大分市別府市鉄輪499-18</p>
                    <p class="c-modal__flex__address">
                        白いスタイリッシュな建物が目印のカフェ。メニューのほとんどを陶芸作家が手掛あああああああああああああああああああああああああああああああああああ</p>
                </div>
            </div>
        </div>
        <div class="c-coupon__box">
            <div class="c-modal__flex">
                <p class="c-modal__flex__img"><img src="/images/lunch.png" alt="クーポン"></p>
                <div class="c-modal__flex__text">
                    <p class="c-modal__flex__coupon">つばめ食堂</p>
                    <p class="c-modal__flex__store">大分県大分市玉沢335-3</p>
                    <p class="c-modal__flex__address">
                        ここでいただけるのは、地元の無農薬野菜・有機野菜をたっぷり使ったプレートラあああああああああああああああああああああああああああああああああああああああああああ</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
