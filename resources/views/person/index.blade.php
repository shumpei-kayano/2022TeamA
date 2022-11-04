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


        <div class="c-hukidashi">
            <p class="c-hukidashi__username"> ニックネーム</p>
            <div class="c-hukidashi__flame">
                <div class="c-hukidashi__header">
                    <h3 class="c-hukidashi__tittle">店舗名</h3>
                    <div class="c-hukidashi__star">★★★☆☆</div>
                </div>
                <div class="c-hukidashi__honbun">
                    職人さんが経営する個人オーナーのイタリアンではなかなかできない演出力である。その反面、こういった資本力のある会社さんのお店だとクオリティが・・・
                </div>
            </div>
        </div>
        <div class="c-hukidashi__date">
            2022/10/29
        </div>
        <div class="c-hukidashi--other">
            <p class="c-hukidashi__username"> ニックネーム</p>
            <div class="c-hukidashi--other__flame">
                <div class="c-hukidashi__header">
                    <h3 class="c-hukidashi__tittle">店舗名</h3>
                    <div class="c-hukidashi__star">★★★☆☆</div>
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
        <div class="c-hukidashi__edit">
            <div class="c-hukidashi__edit_icon">
                <img src="/images/pencil.png">編集
            </div>
            <div class="c-hukidashi__delete_icon">
                <img src="/images/gomibako.png">削除
            </div>
        </div>


    </div>
</body>

</html>
