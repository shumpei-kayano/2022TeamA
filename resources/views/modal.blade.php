<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

    <nav class="p-gnav">
        <ul>
            <li><a href="" class="p-gnav__home">ホーム</a></li>
            <li><a href="" class="p-gnav__coupon">クーポン</a></li>
            <li><a href="" class="p-gnav__gacha">ガチャ</a></li>
            <li><a href="" class="p-gnav__badge">バッジ</a></li>
            <li><a href="" class="p-gnav__account">アカウント</a></li>
        </ul>
    </nav>
    <div class="c-container">
        <!--  <div class="c-modal">
            <div class="c-modal__box">
                <p class="c-modal__title">制限回数オーバー</p>
                <p class="c-modal__text">このエリアで回すことができるガチャの制限数を越えました。他のエリアでお試し下さい。</p>
                <button type="submit" class="c-btn c-btn--navy">OK</button>
            </div>
        </div> -->
        <a id="btn-open">モーダルを開く</a>
        <p><img src="/images/lunch.png" alt=""></p>
        <dialog id="dialog-1" class="c-modal__box">
            <p class="c-modal__title">制限回数オーバー</p>
            <p class="c-modal__text">このエリアで回すことができるガチャの制限数を越えました。他のエリアでお試し下さい。</p>
            <button type="submit" class="c-btn c-btn--navy">OK</button>
        </dialog>
    </div>
    <script>
        // 開くボタンが押されたときの処理
        const dialog = document.getElementById('dialog-1');
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
