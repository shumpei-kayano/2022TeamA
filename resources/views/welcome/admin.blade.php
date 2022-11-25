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
    </nav>
    <div class="p-admin-top">
        <div class="p-admin-top__box">
            <p class="p-admin-top__logo"><img src="/images/admin-logo.png" alt="管理者ログイン"></p>
            <form method="POST" action="{{ route('welcome.admin') }}" class="c-form">
                <div class="c-form__group">
                    <label for="">メールアドレス</label><input type="text">
                    <div class="c-form__group">
                        <input id="mail" type="mail" class="form-control @error('mail') is-invalid @enderror"
                            name="mail" value="{{ old('mail') }}" required autocomplete="mail" autofocus>
                    </div>
                </div>>

                <div class="c-form__group">
                    <label for="">パスワード</label><input type="password">
                    <div class="c-form__group">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                    </div>
                </div>

                <button type="submit" class="c-btn c-btn--pink">ログイン</button>

            </form>
        </div>
    </div>
</body>

</html>
