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
        <a id="btn-open">制限回数オーバー</a>
        <div class="p-gacha-top">
            <div id="googleMap" class="p-gacha__map">
                {{--  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6674.726977339957!2d131.6073871096625!3d33.23077951304794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1667368193255!5m2!1sja!2sjp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>  --}}</div>
            <div class="p-gacha__handle p-gacha__handle--slideup">
                <p class="p-gacha__circle"><img src="/images/gacha-circle.png" alt="ガチャワッカ"></p>
                <p class="p-gacha__mawasu"><a href="{{ route('gacha/staging') }}"><img src="/images/turn.png"
                            alt="ガチャ回す"></a>

                </p>
                @component('components.modal')
                    @slot('title')
                        <p class="c-modal__title">制限回数オーバー</p>
                    @endslot
                    @slot('content')
                        このエリアで回すことができるガチャの制限数を越えました。他のエリアでお試し下さい。
                    @endslot
                    @slot('button')
                        <button type="submit" class="c-btn c-btn--navy u-margin-top--0">OK</button>
                    @endslot
                @endcomponent

            </div>
        </div>
    </div>
    <script>
        // 開くボタンが押されたときの処理
        const dialog = document.getElementById('dialog');
        document.getElementById('btn-open').addEventListener('click', (event) => {
            dialog.showModal();
        });
        // OKが押されたときの処理
        dialog.querySelector('.c-btn').addEventListener('click', () => {
            dialog.close();
        });
        // ボタンを押した時の処理
        window.onload = function() {
            // 位置情報を取得する
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        };
    </script>
    @extends('session')
    @section('script')
    @endsection
</body>

</html>
