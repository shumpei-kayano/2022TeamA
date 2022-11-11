<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="c-container">
        <a id="btn-open">ログインエラー</a>
        <p class="p-welcome__logo"><img src="/images/logo-plat.png" alt="plat"></p>
        <form action="" class="c-form">
            <div class="c-form__group">
                <label for="">ニックネーム</label><input type="text">
            </div>

            <div class="c-form__group">
                <label for="">パスワード</label><input type="password">
            </div>

            <button type="submit" class="c-btn c-btn--pink c-btn--50p">ログイン</button>

            <p class="p-welcome__sineup"><a href="">新規会員登録</a></p>

            @component('components.modal')
                @slot('title')
                    <p class="c-modal__title">ログインエラー</p>
                @endslot
                @slot('content')
                    ニックネーム、またはパスワードが間違っています。ご確認の上、再度お試し下さい。
                @endslot
                @slot('button')
                    <button type="submit" class="c-btn c-btn--navy u-margin-top--0">OK</button>
                @endslot
            @endcomponent


        </form>
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
