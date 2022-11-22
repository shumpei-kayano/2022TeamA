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
                {{--  @foreach ($tickets as $ticket)  --}}
                <a class="is-active" href="{{ route('coupon/index') }}">使用可能</a>
                {{--  @endforeach  --}}
                {{--  @foreach ($tickets as $ticket)  --}}
                {{--  @if ($ticket->flg == 1)  --}}
                <a href="{{ route('coupon/used') }}">使用済み</a>
                {{--  @endif  --}}
                {{--  @endforeach  --}}
            </div>
            @foreach ($tickets as $ticket)
                @if ($ticket->flg == 0)
                    {{--  @if (!isset($ticket))  --}}
                    <div class="c-coupon__box">

                        <small class="c-coupon__use">
                            有効期限{{ \Carbon\Carbon::tomorrow()->format('Y/m/d ') }}23:59</small>
                        <div class="c-modal__flex">
                            <p class="c-modal__flex__img">
                                <img src={{ $ticket->coupon->coupon_photo }}>
                            </p>
                            <div class="c-modal__flex__text">

                                <p class="c-modal__flex__coupon">{{ $ticket->coupon->coupon_name }}</p>
                                <p class="c-modal__flex__store"> {{ $ticket->store->store_name }}</p>

                            </div>
                        </div>
                        <div class="c-coupon__top">
                            <p class="c-coupon__address">{{ $ticket->store->address }}</p>
                            {{--  <a href="{{ route('store/index') }}" class="c-btn c-btn--navy c-btn--small">詳細を見る</a>  --}}
                            <a href={{ route('store/index', ['id' => $ticket->coupon->store_id]) }}
                                class="c-btn c-btn--navy c-btn--small">詳細を見る</a>
                        </div>
                        <button id="btn-open" type="submit"
                            class="c-btn c-btn--navy u-margin-top--0">このクーポンを使う</button>
                    </div>
                    {{--  @else  --}}
                    {{--    --}}
                    {{--  @endif  --}}
                @else
                    {{--  <div class="c-coupon__era">  --}}
                    @php
                        $era = '使用できるクーポンはありません';
                    @endphp
                    {{--  </div>  --}}
                @endif
            @endforeach
            {{ $era }}
        </div>

    </div>




    @component('components.modal')
        @slot('title')
            <p class="c-modal__title c-modal__title--pink">
                <transition>
                    <span v-if="couponUsed" key="used">
                        この画面を店舗スタッフに提示して下さい。
                    </span>
                    <span v-else key="use">
                        本当に使用しますか<small>このクーポンは一回のみ使用できます。</small>
                    </span>
                </transition>
            </p>
        @endslot
        @slot('content')
            <div class="c-modal__flex">
                <p class="c-modal__flex__img">
                    <img src={{ $ticket->coupon->coupon_photo }} alt="クーポン">
                </p>

                <p class="c-modal__flex__text">
                    {{ $ticket->coupon->coupon_name }}<small>{{ $ticket->store->store_name }}</small></p>

            </div>
        @endslot
        @slot('button')
            <transition>
                <a href="{{ route('post/index') }}" class="c-btn c-btn--navy u-margin-top--0" v-if="couponUsed"
                    key="used">クチコミを書く</a>
                <button type="submit" class="c-btn c-btn--navy u-margin-top--0" v-else v-on:click="useCoupon"
                    key="use">クーポンを使う</button>
            </transition>
            <transition>
                <a href="" v-if="couponUsed" key="used">後で書く</a>
                <a href="" v-else key="use">後で</a>
            </transition>
        @endslot
    @endcomponent


    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
        new Vue({
            el: '#dialog',
            data: {
                couponUsed: false
            },
            methods: {
                useCoupon: function() {
                    this.couponUsed = true
                }
            }
        })
    </script>
    <script>
        // 開くボタンが押されたときの処理
        const dialog = document.getElementById('dialog');
        document.getElementById('btn-open').addEventListener('click', (event) => {
            dialog.showModal();
        });
        // OKが押されたときの処理
        /* dialog.querySelector('.c-btn').addEventListener('click', () => {
            dialog.close();
        }); */
    </script>
</body>


</html>
