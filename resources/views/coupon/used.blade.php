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


                <a href="{{ route('coupon/index') }}">使用可能</a>


                <a class="is-active" href="{{ route('coupon/used') }}">使用済み</a>

            </div>
            @if (isset($tickets))
                @if ($tickets->isEmpty())
                    <div class="c-coupon__moji">
                        <p>使用済みのクーポンはありません</p>
                    </div>
                @else
                    @foreach ($tickets as $ticket)
                        <div class="c-coupon__box">
                            <div class="c-coupon__top">
                                {{--  <p class="c-coupon__use">2022.7.15に使用済み</p>  --}}
                                <a class="c-btn c-btn--navy c-btn--small" href="{{ route('post/index') }}">クチコミを書く</a>
                            </div>
                            <div class="c-modal__flex">
                                <p class="c-modal__flex__img"><img src={{ $ticket->coupon->coupon_photo }}>
                                </p>
                                <div class="c-modal__flex__text">
                                    <p class="c-modal__flex__coupon">{{ $ticket->coupon->coupon_name }}</p>
                                    <p class="c-modal__flex__store">{{ $ticket->store->store_name }}</p>
                                    <p class="c-modal__flex__address">{{ $ticket->store->address }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
</body>

</html>
