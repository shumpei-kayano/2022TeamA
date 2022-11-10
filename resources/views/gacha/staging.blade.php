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
    <div class="c-container u-padding-top--0">
        <div class="p-gacha-top">

            <video video src="/images/gatcha_animation.mp4" autoplay muted></video>
            <div class="p-gacha__handle">
                <p class="p-gacha__circle"><img src="/images/gacha-circle.png" alt="ガチャワッカ"></p>
            </div>

        </div>
    </div>
    @component('components.modal')
        @slot('title')
            <p class="c-modal__top">クーポンゲット</p>
            <p class="c-modal__use">有効期限：2022.10.31</p>
        @endslot
        @slot('content')
            <div class="c-modal__flex">
                <p class="c-modal__flex__img">
                    <img src="/images/coupon.jpg" alt="クーポン">
                </p>
                <div class="c-modal__flex__text">
                    <p class="c-modal__flex__coupon">ハロウィン限定アフタヌーンティー50%OFF</p>
                    <p class="c-modal__flex__store">the LOUNGE</p>
                </div>
            </div>
        @endslot
        @slot('button')
            <button type="submit" class="c-btn c-btn--navy u-margin-top--0">クーポン一覧へ</button>
            <p class="c-modal__sineup"><a href="">店舗詳細を見る</a></p>
        @endslot
    @endcomponent
    <script>
        //  映像終了後にモーダルオープン
        const video = document.querySelector('video');

        video.addEventListener('ended', (event) => {
            dialog.showModal();
        });
    </script>
</body>

</html>
