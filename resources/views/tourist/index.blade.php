<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

            <div class="c-store__card">
                <a href={{ route('store/index', ['id' => $ticket->store->id]) }}>
                    <p class="c-store__card-img"><img src="/upload/{{ $ticket->coupon->coupon_photo }}"
                            alt="クーポン"></p>
                    <div class="c-store__card-desc">
                        <h3>{{ $ticket->store->store_name }}</h3>
                        <p>{{ $ticket->store->address }}</p>
                        <p>{{ $ticket->store->service }}</p>
                    </div>
                </a>
            </div>
        @endif
    @endforeach
</div>

</body>

</html>
