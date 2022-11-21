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
        @foreach ($tickets as $ticket)
            @if ($ticket->flg == 1)
                {{--  <p class="c-hukidashi__date--spot">
                    2022/10/29
                </p>  --}}
                {{--  各お店を押したら店舗詳細に飛ぶ。まだルート記述してないです。11/11。河野  --}}
                <div class="c-coupon__box--spot">
                    <div class="c-modal__flex">
                        <p class="c-modal__flex__img"><img src={{ $ticket->coupon->coupon_photo }} alt="クーポン"></p>
                        <div class="c-modal__flex__text">
                            <p class="c-modal__flex__coupon">{{ $ticket->store->store_name }}</p>
                            <p class="c-modal__flex__store">{{ $ticket->store->address }}</p>
                            <p class="c-modal__flex__address">
                                {{ $ticket->store->service }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

</body>

</html>
