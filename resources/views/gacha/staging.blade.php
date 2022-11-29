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

    {{--  ダイアログ1  --}}
    <dialog id="dialog" class="c-modal__box">
        <p class="c-modal__title c-modal__title--pink">クーポンが当たりました
            <small> 有効期限{{ \Carbon\Carbon::tomorrow()->format('Y/m/d ') }}23:59</small>
        </p>
        <div class="c-modal__content">
            <div class="c-modal__flex">
                <p class="c-modal__flex__img">
                    {{--  <img src="/images/coupon.jpg" alt="クーポン">  --}}
                    <img src="{{ $coupons->coupon_photo }}">
                </p>
                <p class="c-modal__flex__text">

                    {{ $coupons->coupon_name }}
                    <small>{{ $coupons->store->store_name }}</small>

                </p>
            </div>
        </div>
        <div class="c-modal__button">
            <a href="{{ route('coupon/index') }}">
                <button type="submit" class="c-btn c-btn--navy u-margin-top--0">クーポン一覧へ</button></a>
            <a href="{{ route('store/index', ['id' => $coupons->store_id]) }}">店舗詳細を見る</a>
        </div>
    </dialog>
    {{--  ダイアログ2  --}}
    {{--  <dialog id="dialog2" class="c-modal__box">
        <p class="c-modal__title c-modal__title--pink">2が当たりました
            <small>有効期限{{ \Carbon\Carbon::tomorrow()->format('Y/m/d ') }}23:59</small>
        </p>
        <div class="c-modal__content">
            <div class="c-modal__flex">
                <p class="c-modal__flex__img">
                    <img src="/images/coupon.jpg" alt="クーポン">
                </p>
                <p class="c-modal__flex__text">
                    @foreach ($tickets as $ticket)
                        {{ $ticket->coupon->coupon_name }}
                        <small>{{ $ticket->store->store_name }}</small>
                    @endforeach
                </p>
            </div>
        </div>
        <div class="c-modal__button">
            <a href="{{ route('coupon/index') }}">
                <button type="submit" class="c-btn c-btn--navy u-margin-top--0">クーポン一覧へ</button></a>
            <a href="{{ route('store/index') }}">店舗詳細を見る</a>
        </div>
    </dialog>  --}}
    {{--  ダイアログ3  --}}
    {{--  <dialog id="dialog3" class="c-modal__box">
        <p class="c-modal__title c-modal__title--pink">3が当たりました
            <small>有効期限{{ \Carbon\Carbon::tomorrow()->format('Y/m/d ') }}23:59</small>
        </p>
        <div class="c-modal__content">
            <div class="c-modal__flex">
                <p class="c-modal__flex__img">
                    <img src="/images/coupon.jpg" alt="クーポン">
                </p>
                <p class="c-modal__flex__text">
                    @foreach ($tickets as $ticket)
                        {{ $ticket->coupon->coupon_name }}
                        <small>{{ $ticket->store->store_name }}</small>
                    @endforeach
                </p>
            </div>
        </div>
        <div class="c-modal__button">
            <a href="{{ route('coupon/index') }}">
                <button type="submit" class="c-btn c-btn--navy u-margin-top--0">クーポン一覧へ</button></a>
            <a href="{{ route('store/index') }}">店舗詳細を見る</a>
        </div>
    </dialog>  --}}
    {{--  ダイアログ4  --}}
    {{--  <dialog id="dialog4" class="c-modal__box">
        <p class="c-modal__title c-modal__title--pink">4が当たりました
            <small>有効期限{{ \Carbon\Carbon::tomorrow()->format('Y/m/d ') }}23:59</small>
        </p>
        <div class="c-modal__content">
            <div class="c-modal__flex">
                <p class="c-modal__flex__img">
                    <img src="/images/coupon.jpg" alt="クーポン">
                </p>
                <p class="c-modal__flex__text">
                    @foreach ($tickets as $ticket)
                        {{ $ticket->coupon->coupon_name }}
                        <small>{{ $ticket->store->store_name }}</small>
                    @endforeach
                </p>
            </div>
        </div>
        <div class="c-modal__button">
            <a href="{{ route('coupon/index') }}">
                <button type="submit" class="c-btn c-btn--navy u-margin-top--0">クーポン一覧へ</button></a>
            <a href="{{ route('store/index') }}">店舗詳細を見る</a>
        </div>
    </dialog>  --}}
    {{--  ダイアログ5  --}}
    {{--  <dialog id="dialog5" class="c-modal__box">
        <p class="c-modal__title c-modal__title--pink">5が当たりました
            <small>有効期限{{ \Carbon\Carbon::tomorrow()->format('Y/m/d ') }}23:59</small>
        </p>
        <div class="c-modal__content">
            <div class="c-modal__flex">
                <p class="c-modal__flex__img">
                    <img src="/images/coupon.jpg" alt="クーポン">
                </p>
                <p class="c-modal__flex__text">
                    @foreach ($tickets as $ticket)
                        {{ $ticket->coupon->coupon_name }}
                        <small>{{ $ticket->store->store_name }}</small>
                    @endforeach
                </p>
            </div>
        </div>
        <div class="c-modal__button">
            <a href="{{ route('coupon/index') }}">
                <button type="submit" class="c-btn c-btn--navy u-margin-top--0">クーポン一覧へ</button></a>
            <a href="{{ route('store/index') }}">店舗詳細を見る</a>
        </div>
    </dialog>  --}}


    <script>
        //  映像終了後にモーダルオープン
        const video = document.querySelector('video');

        video.addEventListener('ended', (event) => {

            var dialog = document.getElementById('dialog');
            dialog.showModal();

        });
    </script>
</body>

</html>
