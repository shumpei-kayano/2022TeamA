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
        <p class="c-hukidashi__date">
            2022/10/29
        </p>
        {{-- 左にアイコンがある吹き出し --}}
        <div class="c-hukidashi c-hukidashi--b">
            <p class="c-hukidashi__photo">
                <img src="/images/phot-account.jpg">
            </p>
            <div class="c-fukidashi__container">
                <p class="c-hukidashi__username"> ニックネーム</p>
                <div class="c-hukidashi__frame">
                    <div class="c-hukidashi__header">
                        <p class="c-hukidashi__visit">訪問日：2022/10/29</p>
                        <div class="c-hukidashi__stars">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.black.png" alt="">
                            <img src="/images/star.black.png" alt="">
                        </div>
                    </div>
                    <h3 class="c-hukidashi__tittle">店舗名店舗名店舗名店舗名店舗名店舗名店舗名店舗名店舗名</h3>
                    <div class="c-hukidashi__honbun">
                        職人さんが経営する個人オーナーのイタリアンではなかなかできない演出力である。その反面、こういった資本力のある会社さんのお店だとクオリティが・・・
                    </div>
                    <div class="c-hukidashi__good">
                        <a href="">50</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 右にアイコンがある吹き出し --}}
        <div class="c-hukidashi c-hukidashi--a">
            <p class="c-hukidashi__photo">
                <img src="/images/phot-account.jpg">
            </p>
            <div class="c-fukidashi__container">
                <p class="c-hukidashi__username"> ニックネーム</p>
                <div class="c-hukidashi__frame">
                    <div class="c-hukidashi__header">
                        <p class="c-hukidashi__visit">訪問日：2022/10/29</p>
                        <div class="c-hukidashi__stars">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.black.png" alt="">
                            <img src="/images/star.black.png" alt="">
                        </div>
                    </div>
                    <h3 class="c-hukidashi__tittle">店舗名店舗名店舗名店舗名店舗名店舗名店舗名店舗名店舗名</h3>
                    <div class="c-hukidashi__honbun">
                        職人さんが経営する個人オーナーのイタリアンではなかなかできない演出力である。その反面、こういった資本力のある会社さんのお店だとクオリティが・・・
                    </div>
                    <div class="c-hukidashi__good">
                        <div class="c-hukidashi__good__icon">
                            <img src="/images/good-icon.png" alt="いいねアイコン">
                        </div>
                        <div class="c-hukidashi__goodnumber">
                            50
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
