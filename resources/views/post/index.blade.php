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
        <p>このお店はいかがでしたか？<br>
            味・雰囲気・コスパなどの感想や、お店の良かった点を教えて下さい。</p>
        <div class="p-post__star">
            <p>満足度</p>
            <img src="/images/star.black.png" alt="">
            <img src="/images/star.black.png" alt="">
            <img src="/images/star.black.png" alt="">
            <img src="/images/star.black.png" alt="">
            <img src="/images/star.black.png" alt="">
        </div>
        <form action="" class="c-form">
            <div class="c-form__group">
                <label for=" ">クチコミ</label>
                <textarea rows="10" cols="33"></textarea>
            </div>
            <div class="c-form__group">
                <label for="">訪問日</label>
                <input type="date">
            </div>
            <button type="submit" class="c-btn c-btn--navy">投稿する</button>
            <p class="c-modal__sineup"><a href="">後で</a></p>
        </form>
    </div>

</body>

</html>
