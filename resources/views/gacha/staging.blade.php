<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ガチャ演出画面</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    @if ($gets->isEmpty())
        @component('components.gnav')
        @endcomponent
    @else
        @foreach ($gets as $get)
            @if ($get->getflg == 0)
                @component('components.gnav-new')
                @endcomponent
            @break

        @else
            @component('components.gnav')
            @endcomponent
        @endif
    @endforeach
@endif
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
    @foreach ($coupons as $coupon)
        {{-- <div class="c-modal__area">AREA : {{ Session::get('current_area') }} , ID : {{ $coupons->id }}</div> --}}
        <p class="c-modal__title c-modal__title--pink">クーポンが当たりました

            {{--  <small> 有効期限{{ \Carbon\Carbon::tomorrow()->format('Y/m/d ') }}23:59</small>  --}}
        </p>
        <div class="c-modal__content">
            <div class="c-modal__flex">
                <p class="c-modal__flex__img">
                    {{--  <img src="/images/coupon.jpg" alt="クーポン">  --}}
                    <img src="/upload/{{ $coupon->coupon_photo }}">
                </p>
                <p class="c-modal__flex__text">

                    {{ $coupon->coupon_name }}
                    <small>{{ $coupon->store->store_name }}</small>

                </p>
            </div>
        </div>
        <div class="c-modal__button">
            <a
                href={{ route('coupon/get', ['store_id' => $coupon->store_id, 'coupon_id' => $coupon->id, 'areaid' => $areaid]) }}>
                <button type="submit" class="c-btn c-btn--navy u-margin-top--0">クーポン一覧へ</button></a>
            <a
                href="{{ route('store/get', ['store_id' => $coupon->store_id, 'coupon_id' => $coupon->id, 'areaid' => $areaid]) }}">店舗詳細を見る</a>
            <a href="{{ route('model/test', ['store_id' => $coupon->store_id, 'coupon_id' => $coupon->id, 'areaid' => $areaid]) }}"
                class="c-modal__close"><img src="/images/close_line.png" alt=""></a>
        </div>
    @endforeach
</dialog>



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
