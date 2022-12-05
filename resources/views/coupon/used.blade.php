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
                        @if ($ticket->reviewflg == 0)
                            <div class="c-store__card">
                                <div class="c-store__card-header">
                                    <a class="c-btn c-btn--navy c-btn--small"
                                        href={{ route('post/used', ['store_id' => $ticket->store_id, 'ticket_id' => $ticket->id]) }}>クチコミを書く</a>
                                </div>
                                <a href={{ route('store/index', ['id' => $ticket->store->id]) }}>
                                    <p class="c-store__card-img"><img src={{ $ticket->coupon->coupon_photo }}
                                            alt="クーポン">
                                    </p>
                                    <div class="c-store__card-desc">
                                        <h3>{{ $ticket->store->store_name }}</h3>
                                        <h4>{{ $ticket->coupon->coupon_name }}</h4>
                                        <p>{{ $ticket->store->address }}</p>
                                    </div>
                                </a>
                            </div>
                        @else($ticket->reviewflg==1)
                            <div class="c-store__card">
                                <div class="c-store__card-header">
                                    <a class="c-btn c-btn--gray c-btn--small" tabindex="-1">クチコミを書く</a>
                                </div>
                                <a href={{ route('store/index', ['id' => $ticket->store->id]) }}>
                                    <p class="c-store__card-img"><img src={{ $ticket->coupon->coupon_photo }}
                                            alt="クーポン">
                                    </p>
                                    <div class="c-store__card-desc">
                                        <h3>{{ $ticket->store->store_name }}</h3>
                                        <h4>{{ $ticket->coupon->coupon_name }}</h4>
                                        <p>{{ $ticket->store->address }}</p>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endif
            @endif
        </div>
    </div>
</body>

</html>
