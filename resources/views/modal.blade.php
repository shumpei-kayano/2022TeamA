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
        <a id="btn-open">モーダルを開く</a>
        <p><img src="/images/lunch.png" alt=""></p>

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
                        <img src="/images/coupon.jpg" alt="クーポン">
                    </p>

                    <p class="c-modal__flex__text">ハロウィン限定アフタヌーンティー50%OFF<small>the LOUNGE</small></p>

                </div>
            @endslot
            @slot('button')
                <transition>
                    <button type="submit" class="c-btn c-btn--navy u-margin-top--0" v-if="couponUsed"
                        key="used">クチコミを書く</button>
                    <button type="submit" class="c-btn c-btn--navy u-margin-top--0" v-else v-on:click="useCoupon"
                        key="use">クーポンを使う</button>
                </transition>
                <transition>
                    <a href="" v-if="couponUsed" key="used">後で書く</a>
                    <a href="" v-else key="use">後で</a>
                </transition>
            @endslot
        @endcomponent

    </div>
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
