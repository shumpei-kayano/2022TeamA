<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>投稿したクチコミ画面</title>
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
        <h4>投稿したクチコミ</h4>
    </div>
    @foreach ($reviews as $review)
        <p class="c-hukidashi__date">
            {{ $review->posted_date }}
        </p>

        <div class="c-hukidashi c-hukidashi--a">

            <div class="c-hukidashi__container">

                <div class="c-hukidashi__frame">
                    <div class="c-hukidashi__header">
                        <p class="c-hukidashi__visited">訪問日：{{ $review->visited }}
                        </p>
                        <div class="c-hukidashi__stars">
                            @for ($i = 0; $i < $review->star; $i++)
                                <img src="/images/star.png" alt="">
                            @endfor
                            @for ($i = 0; $i < 5 - $review->star; $i++)
                                <img src="/images/star.black.png" alt="">
                            @endfor
                        </div>
                    </div>
                    <h3 class="c-hukidashi__tittle">{{ $review->store->store_name }}</h3>
                    <p class="c-hukidashi__honbun">
                        {{--  職人さんが経営する個人オーナーのイタリアンではなかなかできない演出力である。その反面、こういった資本力のある会社さんのお店だとクオリティが・・・  --}}
                        {{ $review->comment }}
                    </p>

                </div>
            </div>
        </div>
        <div class="c-hukidashi__edit">


            {{--  <form action="{{ route('review/edit', ['id' => $review->id]) }}" method="POST">
                    @csrf  --}}
            <a href="{{ route('review/edit', ['id' => $review->id]) }}" class="c-hukidashi__edit-edit">編集</a>
            {{--  </form>  --}}


            {{--  <a href="{{ route('review/edit', ['id' => $review->id]) }}" class="c-hukidashi__edit-edit">編集</a>  --}}
            {{--  reviewsテーブルからデータを引っ張ってくる  --}}
            <a href="{{ route('review/delete', ['id' => $review->id]) }}" class="c-hukidashi__edit-delete">削除</a>

        </div>
    @endforeach
    {{--  <p class="c-hukidashi__date">
            2022/10/29
        </p>

        <div class="c-hukidashi c-hukidashi--a">

            <div class="c-hukidashi__container">

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

                </div>
            </div>
        </div>
        <div class="c-hukidashi__edit">  --}}

    {{--  <a href="{{ route('review/edit') }}" class="c-hukidashi__edit-edit">編集</a>
        {{--  reviewsテーブルからデータを引っ張ってくる  --}}
    {{--  <a href="" class="c-hukidashi__edit-delete">削除</a>  --}}

    {{--  </div>  --}}
</div>
</body>

</html>
