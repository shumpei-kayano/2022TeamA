<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>いいね一覧画面</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

    @if ($gets->isEmpty())
        @component('components.gnav')
        @endcomponent
    @else
        @foreach ($gets as $get)
            @if ($get->getflg == 0)
                @component('components.gnav-new')
                @endcomponent
            @break

        @else
            @component('components.gnav')
            @endcomponent
        @endif
    @endforeach
@endif
<div class="c-container">
    <div class="c-header">
        <a href="{{ route('account/index') }}" class="c-back">戻る</a>
        <h4>いいね一覧 </h4>
    </div>
    <p class="c-hukidashi__date">

    </p>
    @foreach ($goods as $good)
        <div class="c-hukidashi c-hukidashi--b">
            <p class="c-hukidashi__photo">
                <img src="/upload/{{ $good->review->user->icon_photo }}">
            </p>
            <div class="c-hukidashi__container">
                <p class="c-hukidashi__username"> {{ $good->review->user->name }}</p>
                <div class="c-hukidashi__frame">
                    <div class="c-hukidashi__header">
                        <p class="c-hukidashi__visited">訪問日：{{ $good->review->visited }}</p>
                        <div class="c-hukidashi__stars">
                            @for ($i = 0; $i < $good->review->star; $i++)
                                <img src="/images/star.png" alt="">
                            @endfor
                            @for ($i = 0; $i < 5 - $good->review->star; $i++)
                                <img src="/images/star.black.png" alt="">
                            @endfor
                            {{--  <img src="/images/star.png" alt="">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.black.png" alt="">
                                <img src="/images/star.black.png" alt="">  --}}
                        </div>
                    </div>
                    <h3 class="c-hukidashi__tittle">{{ $good->review->store->store_name }}</h3>
                    <p class="c-hukidashi__honbun">
                        {{ $good->review->comment }}
                    </p>
                    <div class="c-hukidashi__footer">
                        <label class="c-hukidashi__good disabled">
                            <input type="checkbox" class="warning">
                            <span class="c-hukidashi__good-icon"></span>
                            <span class="c-hukidashi__good-num">{{ $good->review->goodnum }}</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{--  <div class="c-hukidashi c-hukidashi--b">
            <p class="c-hukidashi__photo">
                <img src="/images/phot-account.jpg">
            </p>
            <div class="c-hukidashi__container">
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
                        <label class="c-hukidashi__good disabled">
                            <input type="checkbox" class="warning">
                            <span class="c-hukidashi__good-icon"></span>
                            <span class="c-hukidashi__good-num">50</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <p class="c-hukidashi__date">
            2022/10/29
        </p>
        <div class="c-hukidashi c-hukidashi--b">
            <p class="c-hukidashi__photo">
                <img src="/images/phot-account.jpg">
            </p>
            <div class="c-hukidashi__container">
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
                        <label class="c-hukidashi__good disabled">
                            <input type="checkbox" class="warning">
                            <span class="c-hukidashi__good-icon"></span>
                            <span class="c-hukidashi__good-num">50</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>  --}}
</div>
</body>

</html>
