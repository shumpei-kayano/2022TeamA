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
            <a href="{{ route('account/review') }}" class="c-back">戻る</a>
            <h4>クチコミ編集</h4>
        </div>
        <form action="/review/edited" method="POST" class="c-form">
            @csrf
            @foreach ($reviews as $review)
                <section class="c-store__section--edit ">
                    <p class="c-store__item">店舗名</p>
                    <p class="c-form__group">{{ $review->store->store_name }}</p>
                </section>
                <section class="c-store__section--edit c-form">
                    <p class="c-store__item">訪問日</p>
                    <p class="c-form__group"><input type="date" name="visited">
                </section>
                <section class="c-store__section--edit">
                    <div class="p-post__star">
                        <p class="c-store__item">満足度</p>
                        {{--  <p class="c-store__text">
                            <img src="/images/star.black.png" alt="">
                            <img src="/images/star.black.png" alt="">
                            <img src="/images/star.black.png" alt="">
                            <img src="/images/star.black.png" alt="">
                            <img src="/images/star.black.png" alt="">
                        </p>  --}}
                        <input type="text" name="manzoku">
                    </div>
                </section>
                <section class="c-store__section--edit">

                    <div class="c-form__group">
                        <p class="c-store__item">クチコミ</p>
                        <textarea rows="10" cols="33" name="review"></textarea>
                    </div>
                    <input type="hidden" name="id" value="{{ $review->id }}">
                    <input type="hidden" name="user_id" value="{{ $review->user_id }}">
                    <input type="hidden" name="store_id" value="{{ $review->store_id }}">
                    <input type="hidden" name="posted_date" value="{{ \Carbon\Carbon::today() }}">

                    <button type="submit" class="c-btn c-btn--navy">更新する</button>
                </section>
            @endforeach
        </form>
    </div>



</body>

</html>
