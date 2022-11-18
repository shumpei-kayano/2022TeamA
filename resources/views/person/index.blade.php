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
        <a href="{{ route('notice/index') }}">
            <div class="c-header__bell">
                <img src="/images/bell.png">
                <div class="c-header__notice">
                    1
                </div>
            </div>
        </a>

        <p class="c-hukidashi__date">
            2022/10/29
        </p>
        <div class="c-hukidashi c-hukidashi--b">
            <p class="c-hukidashi__photo">
                <img src="/images/phot-account.jpg">
            </p>
            <div class="c-fukidashi__container">
                <p class="c-hukidashi__username"> ニックネーム</p>
                <div class="c-hukidashi__frame">
                    <div class="c-hukidashi__header">
                        <p class="c-hukidashi__visited">訪問日：2022/10/29</p>
                        <div class="c-hukidashi__stars">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.black.png" alt="">
                            <img src="/images/star.black.png" alt="">
                        </div>
                    </div>
                    <h3 class="c-hukidashi__tittle">店舗名店舗名店舗名店舗名店舗名店舗名店舗名店舗名店舗名</h3>
                    <p class="c-hukidashi__honbun">
                        職人さんが経営する個人オーナーのイタリアンではなかなかできない演出力である。その反面、こういった資本力のある会社さんのお店だとクオリティが・・・
                    </p>
                    <div class="c-hukidashi__footer">
                        <label class="c-hukidashi__good">
                            <input type="checkbox" class="warning">
                            <span class="c-hukidashi__good-icon"></span>
                            <span class="c-hukidashi__good-num">50</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
