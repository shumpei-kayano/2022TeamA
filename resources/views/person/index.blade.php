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
        {{--  @if ($review->user_id == 2)  --}}

        {{-- @foreach ($reviews as $review)

            <p class="c-hukidashi__date">
                {{ $review->posted_date }}
            </p>
            <div
                class="c-hukidashi @if ($review->user_id == 3) c-hukidashi--a
                    @else c-hukidashi--b @endif">
                <p class="c-hukidashi__photo">
                    <img src={{ $review->user->icon_photo }}>
                </p>
                <div class="c-fukidashi__container">
                    <p class="c-hukidashi__username">{{ $review->user->name }}</p>
                    <div class="c-hukidashi__frame">
                        <div class="c-hukidashi__header">
                            <p class="c-hukidashi__visited">訪問日{{ $review->visited }}</p>
                            <div class="c-hukidashi__stars">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.black.png" alt="">
                                <img src="/images/star.black.png" alt="">
                            </div>
                        </div>
                        <h3 class="c-hukidashi__tittle"> {{ $review->store->store_name }}</h3>
                        <p class="c-hukidashi__honbun">{{ $review->comment }}</p>
                        {{--  <p class="c-hukidashi__visited">訪問日{{ $review->visited }}</p>  --}}
        @if (!($review->user_id == 3))
            {{--  色ついてない  --}}
            <div class="c-hukidashi__good">
                <div class="c-hukidashi__good__icon " id="goodicon">
                    <a href="{{ route('home/good') }}"> <img src="/images/good-icon.png" alt="いいねアイコン"></a>
                </div>
                <div class="c-hukidashi__goodnumber">
                    50
                </div>
            </div>
            {{--  色ついてる  --}}
            {{--  <div class="c-hukidashi__good show">
                                <div class="c-hukidashi__good__icon ">
                                    <img src="/images/good-icon-on.png" alt="いいねアイコン" id="goodicon">
                                </div>
                                <div class="c-hukidashi__goodnumber">
                                    50
                                </div>
                            </div>  --}}
        @endif
    </div>
    </div>
    </div>
    {{--  @else
                <p class="c-hukidashi__date">
                    {{ $review->posted_date }}
                </p>
                <div class="c-hukidashi c-hukidashi--b">
                    <p class="c-hukidashi__photo">
                        <img src={{ $review->user->icon_photo }}>
                    </p>
                    <div class="c-fukidashi__container">
                        <p class="c-hukidashi__username">{{ $review->user->name }}</p>
                        <div class="c-hukidashi__frame">
                            <div class="c-hukidashi__header">
                                <h3 class="c-hukidashi__tittle"> {{ $review->store->store_name }}</h3>
                                <div class="c-hukidashi__star--a">
                                    <div class="p-admin__star--spot">
                                        <img src="/images/star.png" alt="">
                                        <img src="/images/star.png" alt="">
                                        <img src="/images/star.png" alt="">
                                        <img src="/images/star.black.png" alt="">
                                        <img src="/images/star.black.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <p class="c-hukidashi__honbun">{{ $review->comment }}</p>
                            {{--  <p class="c-hukidashi__visited">訪問日{{ $review->visited }}</p>  --}}
    {{--  </div>
                    </div>
                </div>
            @endif  --}}
    @endforeach
    {{--  <p class="c-hukidashi__date">
                    </div>
                </div>
            </div>
        @endforeach --}}
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
</body>

</html>
