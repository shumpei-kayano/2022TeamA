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
            <a href="" class="c-back">戻る</a>
            <h4>クチコミ編集</h4>
        </div>
        <section class="c-store__section--edit">
            <p class="c-store__item">店舗名</p>
            <p class="c-store__text">the LOUGE</p>
        </section>
        <section class="c-store__section--edit">
            <p class="c-store__item">訪問日</p>
            <p class="c-store__text">22022/09/27</p>
        </section>
        <section class="c-store__section--edit">
            <div class="p-post__star">
                <p class="c-store__item">満足度</p>
                <p class="c-store__text">
                    <img src="/images/star.black.png" alt="">
                    <img src="/images/star.black.png" alt="">
                    <img src="/images/star.black.png" alt="">
                    <img src="/images/star.black.png" alt="">
                    <img src="/images/star.black.png" alt="">
                </p>
            </div>
        </section>
        <section class="c-store__section--edit">
            <form action="" class="c-form">
                <div class="c-form__group">
                    <p class="c-store__item">クチコミ</p>
                    <textarea rows="10" cols="33"></textarea>
                </div>

                <button type="submit" class="c-btn c-btn--navy">更新する</button>

            </form>
        </section>
    </div>

</body>

</html>
