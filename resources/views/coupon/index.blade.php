<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    @php
        use Carbon\Carbon;
    @endphp

    @if ($gets->isEmpty())
        @component('components.gnav')
        @endcomponent
    @else
        @foreach ($gets as $get)
            @if ($get->getflg == 0)
                @component('components.gnav-new')
                @endcomponent
            @else
                @component('components.gnav')
                @endcomponent
            @endif
        @endforeach
    @endif


    <div class="c-container">
        <div class="c-coupon">
            <div class="c-btn--tab">
                <a class="is-active" href="{{ route('coupon/index') }}">使用可能</a>
                <a href="{{ route('coupon/used') }}">使用済み</a>
            </div>

            @if ($tickets->isEmpty())
                <div class="c-coupon__moji">
                    <p>使用可能なクーポンはありません</p>
                </div>
            @else
                @foreach ($tickets as $key => $ticket)
                    <div class="c-coupon__box">

                        <small class="c-coupon__use">
                            有効期限{{ $ticket->term_of_use }}</small>

                        {{--  foreach($tickets as $ticket){  --}}
                        @php
                            $get_date = \Carbon\Carbon::now()->format('Y/m/d H:i:s');
                            $first = new Carbon($ticket->term_of_use);
                            $second = new Carbon($get_date);
                            $sabun = $first->diffInHours($second);
                            
                        @endphp
                        @if ($sabun <= 3)
                            <p class="c-coupon__alert">期限が迫ってきています</p>
                        @endif

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
                                <a href={{ route('post/index', ['store_id' => $ticket->store_id, 'ticket_id' => $ticket->id]) }}
                                    class="c-btn c-btn--navy u-margin-top--0" v-if="couponUsed" key="used">クチコミを書く</a>
                                <button type="submit" class="c-btn c-btn--navy u-margin-top--0" v-else v-on:click="useCoupon"
                                    key="use ">クーポンを使う</button>

                                {{--  <a href="#" class="c-btn c-btn--navy u-margin-top--0" v-else v-on:click="useCoupon"
                                    key="use">クーポンを使う</a>  --}}
                            </transition>
                            <transition>
                                <a href="{{ route('coupon/flg', ['id' => $ticket->id]) }}" v-if="couponUsed"
                                    key="used">後で書く</a>
                                <a href="" v-else key="use">後で</a>
                            </transition>
                        @endslot
                    @endcomponent
                @endforeach
            @endif


        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
        let tickets = JSON.parse('<?php echo json_encode($tickets); ?>');
        console.log(tickets);
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
