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
                <p class="c-modal__title c-modal__title--pink">クーポンゲット
                    <small>有効期限：2022.10.30</small>
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
                <a type="submit" class="c-btn c-btn--navy u-margin-top--0">クーポン一覧へ</a>
                <a href="">店舗情報を見る</a>
            @endslot
        @endcomponent
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
    </script>
</body>

</html>
