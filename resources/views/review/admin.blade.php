<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="p-admin__header">
        <div class="p-admin__logo"><img src="/images/admin_header_logo.png" alt="店舗管理画面ロゴ"></div>
        <div class="p-admin__logout">
            <p>店舗名</p>
            <p><a class="c-btn c-btn--small c-btn--navy">ログアウト</a></p>
        </div>
    </div>
    <div class="c-container--pc">
        <div class="p-admin__side">
            <ul>
                <li> <a href="" class="p-admin__side-store ">店舗情報</a></li>
                <li> <a href="" class="p-admin__side-coupon ">クーポン情報</a></li>
                <li> <a href="" class="p-admin__side-review is-current">クチコミ</a></li>
            </ul>
        </div>
        <div class="p-admin__content">
            <div class="p-admin__contentbox">
                <div class="p-admin__contentbox--a">
                    <div class="p-admin__contentheader--a">
                        <h1>クチコミ</h1>
                    </div>

<<<<<<< HEAD
                    <div class="p-admin__a">
                        <div class="c-form__group">
                            <label>これまでに使用されたクーポン:</label>
                        </div>
                        <div class="p-admin__historynumber">
                            <p>48</p>
                        </div>
                    </div>
                </div>
                <p class="c-hukidashi__date">
                    2022/10/29
                </p>
                <div class="c-hukidashi c-hukidashi--b">
                    <div class="p-admin__review">
                        <p class="c-hukidashi__photo">
                            <img src="/images/phot-account.jpg">
                        </p>
                        <div class="c-fukidashi__container">
                            <p class="c-hukidashi__username"> ニックネーム</p>


                            <div class="c-hukidashi__frame">
                                <div class="c-hukidashi__header--a">
                                    <div class="c-hukidashi__star--a">
                                        <div class="p-admin__star--a">
                                            <img src="/images/star.png" alt="">
                                            <img src="/images/star.png" alt="">
                                            <img src="/images/star.png" alt="">
                                            <img src="/images/star.black.png" alt="">
                                            <img src="/images/star.black.png" alt="">
                                        </div>
                                    </div>
                                </div>
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
                <div class="c-hukidashi c-hukidashi--b">
                    <div class="p-admin__review">
                        <p class="c-hukidashi__photo">
                            <img src="/images/phot-account.jpg">
                        </p>
                        <div class="c-fukidashi__container">
                            <p class="c-hukidashi__username"> ニックネーム</p>


                            <div class="c-hukidashi__frame">
                                <div class="c-hukidashi__header--a">
                                    <div class="c-hukidashi__star--a">
                                        <div class="p-admin__star--a">
                                            <img src="/images/star.png" alt="">
                                            <img src="/images/star.png" alt="">
                                            <img src="/images/star.png" alt="">
                                            <img src="/images/star.black.png" alt="">
                                            <img src="/images/star.black.png" alt="">
                                        </div>
                                    </div>
                                </div>
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
                <p class="c-hukidashi__date">
                    2022/10/29
                </p>

            </div>
        </div>
=======
    @component('components.gnav')
    @endcomponent
    <div class="c-container">
        <h1>クチコミ管理</h1>
>>>>>>> a4f7e4d42ef1afa78e004adbb12f2c54243b493d
    </div>
</body>

</html>
