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
            <a href="{{ route('person/home') }}" class="c-back">戻る</a>
            <h4>プロフィール</h4>
        </div>
        <div class="p-account">
            <div class="p-account__top">
                <p class="p-account__phot"><img src="/images/phot-account.jpg" alt="アバター画像"></p>
                <p class="p-account__nickname">
                    アスモデウスアリス
                </p>
            </div>
        </div>
        <div class="c-form">
            <div class="c-form__group">
                <label for="">自己紹介</label><input value="初めまして。" name='email' type="text">
            </div>
        </div>
        <div class="p-admin__a">
            <div class="c-form__group">
                <label>訪れた店舗数:</label>
            </div>
            <div class="p-admin__historynumber">
                <p>12</p>
            </div>
        </div>
        <div class="c-form__group">
            <label>これまでに獲得したバッジ:</label>
        </div>
        <div class="p-badge__group">
            <div class="p-badge__item">
                <p class="p-badge__img">
                    <img src="/images/badge_1review_off_18.png" alt="初めての投稿">
                </p>

                <p class="p-badge__name">初めての投稿</p>


            </div>
        </div>
    </div>
</body>

</html>
