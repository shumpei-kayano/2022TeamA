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
            <p class="c-modal__title c-modal__title--pink">クーポンゲット
                <small>有効期限：2022.10.30</small>
            </p>
        @endslot
        @slot('content')
            <div class="c-modal__flex">
                <p class="c-modal__flex__img">
                    <img src="/images/coupon.jpg" alt="クーポン">
                </p>

                <p class="c-modal__flex__text">ハロウィン限定アフタヌーンティー50%OFF<small>the LOUNGE</small></p>

            </div>
        @endslot
        @slot('button')
            <a href="{{ route('coupon/index') }}">
                <button type="submit" class="c-btn c-btn--navy u-margin-top--0">クーポン一覧へ</button></a>
            <a href="{{ route('store/index') }}">店舗詳細を見る</a>
        @endslot
    @endcomponent
    <script>
        function gachaRandom() {
            let num = Math.floor(Math.random() * 5) + 1;
            let gachaName = "ガチャ"
            switch (num) {
                case 1:
                    gachaName = "ガチャ1が当たりました";
                    break;
                case 2:
                    gachaName = "ガチャ2が当たりました";
                    break;
                case 3:
                    gachaName = "ガチャ3が当たりました";
                    break;
                case 4:
                    gachaName = "ガチャ4が当たりました";
                    break;
                case 5:
                    gachaName = "ガチャ5が当たりました";
                    break;
                default:
                    gachaName = "エラーが出ました";

            }
            alert(gachaName);
        }

        //  映像終了後にモーダルオープン
        const video = document.querySelector('video');

        video.addEventListener('ended', (event) => {
            //dialog.showModal();
            gachaRandom();

        });
    </script>
</body>

</html>
