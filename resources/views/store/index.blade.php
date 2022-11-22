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
                <img src={{ $items->picture1 }} alt="PHOTO">
                <img src={{ $items->picture2 }} alt="PHOTO">
                <img src={{ $items->picture3 }} alt="PHOTO">
            </p>
            {{--  @foreach ($items as $item)  --}}
            <p class="c-store__name">{{ $items->store_name }}</p>
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
                    href="https://maps.google.com/maps?saddr=現在地&daddr={{ $items->store_name }}"
                    target="_blank">このお店までの経路を見る</a>
                <p></p>
            </div>
        </section>
        <section class="c-store__section">
            <p class="c-store__item">住所</p>
            {{--  <p class="c-store__text">〒874-0000 <br>  --}}
            {{ $items->address }}
            <div class="p-admin__map">
                <iframe
                    src="https://www.google.com/maps/embed/v1/place?q={{ $items->store_name }}&key=AIzaSyAtYsX-DTTQHaRPfZ3xTaCrtPoKVv2k6nM&zoom=15"
                    width="360" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section class="c-store__section">
            <p class="c-store__item">電話番号</p>
            <p class="c-store__text">{{ $items->tel }}</p>
        </section>
        <section class="c-store__section">
            <p class="c-store__item">ホームページ</p>
            <a class="c-store__text" href="{{ $items->link }}">{{ $items->link }}</a>
        </section>
        <section class="c-store__section">
            <p class="c-store__item">営業時間</p>
            <p class="c-store__text">{{ $items->start_time }}~{{ $items->end_time }}</p>
        </section>
        <section class="c-store__section">
            <p class="c-store__item">駐車場</p>
            <p class="c-store__text">{{ $items->parking }}</p>
        </section>
        <section class="c-store__section">
            <p class="c-store__item">サービス内容</p>
            <p class="c-store__text">{{ $items->service }}</p>
        </section>

        <section class="c-store__section">
            <p class="c-store__item">近くの施設</p>
            {{-- <div class="c-store__card">
                <a href="">
                    <p class="c-store__card-img"><img src="/images/coupon.jpg" alt="クーポン"></p>
                    <div class="c-store__card-desc">
                        <h3>cafe Green Brown</h3>
                        <p>大分市別府市鉄輪499-18</p>
                        <p>白いスタイリッシュな建物が目印のカフェ。メニューのほとんどを陶芸作家が手掛あああああああああああああああああああああああああああああああああああ</p>
                    </div>
                </a>
            </div> --}}
            <ol>
                @php
                    $counter = 0;
                    $rands = [];
                    $min = 1;
                    $max = 5;
                    for ($i = $min; $i <= $max; $i++) {
                        while (true) {
                            /** 一時的な乱数を作成 */
                            $tmp = mt_rand($min, $max);
                    
                            /*
                             * 乱数配列に含まれているならwhile続行、
                             * 含まれてないなら配列に代入してbreak
                             */
                            if (!in_array($tmp, $rands)) {
                                array_push($rands, $tmp);
                                break;
                            }
                        }
                    }
                @endphp
                @while ($counter < $max)
                    <li>{{ $rands[$counter] }}</li>
                    @php
                        $counter++;
                    @endphp
                @endwhile
            </ol>
        </section>






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
