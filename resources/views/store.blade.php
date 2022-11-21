<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

    <div class="c-container">
        <section class="c-store__section">
            <div class="c-header">
                <a href="" class="c-back">クーポン一覧</a>
            </div>
            <p class="c-store u-magin--top--0">
                <img src="/images/cafe01.jpg" alt="PHOTO">
                <img src="/images/cafe02.jpg" alt="PHOTO">
                <img src="/images/cafe03.jpg" alt="PHOTO">
            </p>
            {{--  @foreach ($items as $item)  --}}
            <p class="c-store__name">店舗名</p>
            {{--  @endforeach  --}}
            <div class="p-store__star">
                <img src="/images/star.png" alt="">
                <img src="/images/star.png" alt="">
                <img src="/images/star.png" alt="">
                <img src="/images/star.png" alt="">
                <img src="/images/star.black.png" alt="">
            </div>
        </section>
        <section class="c-store__section">
            <div class="c-coupon__top">
                {{--  <p class="c-coupon__address">ここから約1.2Km </p>  --}}
                <a class="c-btn c-btn--navy c-btn--small"
                    href="https://www.google.com/maps/dir/?api=1&destination={lat},{lng}"
                    target="_blank">このお店までの経路を見る</a>
            </div>
        </section>
        <section class="c-store__section">
            <p class="c-store__item">住所</p>
            {{--  <p class="c-store__text">〒874-0000 <br>  --}}

            <div class="p-admin__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13348.960939626255!2d131.60939519999997!3d33.2340092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1667803739558!5m2!1sja!2sjp"
                    width="360" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <div class="c-store__card">
            <a href="">
                <p class="c-store__card-img"><img src="/images/coupon.jpg" alt="クーポン"></p>
                <div class="c-store__card-desc">
                    <h3>cafe Green Brown</h3>
                    <p>大分市別府市鉄輪499-18</p>
                    <p>白いスタイリッシュな建物が目印のカフェ。メニューのほとんどを陶芸作家が手掛あああああああああああああああああああああああああああああああああああ</p>
                </div>
            </a>
        </div>
        <div class="c-store__card">
            <a href="">
                <p class="c-store__card-img"><img src="/images/lunch.png" alt="クーポン">
                </p>
                <div class="c-store__card-desc">
                    <h3>つばめ食堂</h3>
                    <p>大分県大分市玉沢335-3</p>
                    <p>ここでいただけるのは、地元の無農薬野菜・有機野菜をたっぷり使ったプレートラあああああああああああああああああああああああああああああああああああああああああああ</p>
                </div>
            </a>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    <script type="module">

 
  var slider = tns({
    container: '.c-store',
    items: 1,
    slideBy: 'page',
    controls:false,
    nav:false,
    autoplay: true,
    autoplayButtonOutput:false
  });
  </script>
</body>

</html>
