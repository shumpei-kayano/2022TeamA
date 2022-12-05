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
        <div class="c-header">
            <a href="{{ route('account/index') }}" class="c-back">戻る</a>
            <h4>アカウント設定</h4>
        </div>
        <div class="p-account__top--set">
            <p class="p-account__phot--set"><img src="/images/phot-account.jpg" alt="アバター画像"></p>
        </div>

        <form action="/account/setting" method="POST" class="c-form">
            @csrf
            <div class="c-form__group">
                <label for="">メールアドレス</label><input value={{ $users->email }} name='email' type="email">
            </div>

            <div class="c-form__group">
                <label for="">ニックネーム(半角英数)</label><input value={{ $users->name }} name='name' type="text"
                    name="user_name">
            </div>

            <div class="c-form__group">
                <label for="">パスワード</label><input type="password" name='password'>
            </div>

            <div class="p-add__btn">
                <button type="submit" class="c-btn c-btn--navy">更新する</button>
            </div>
            <input type="hidden" name="user_id" value="{{ $users->id }}">
        </form>
    </div>
</body>

</html>
