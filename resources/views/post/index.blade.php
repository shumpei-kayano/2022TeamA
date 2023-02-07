<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <a href="{{ route('coupon/index') }}" class="c-back">戻る</a>
        <h4>クチコミ投稿 </h4>
    </div>
    <section class="c-store__section--edit">
        <p>このお店はいかがでしたか？<br>
            味・雰囲気・コスパなどの感想や、お店の良かった点を教えて下さい。</p>
    </section>
    <form action="/post/send" method="POST">
        @csrf
        {{--  @foreach ($items as $item)  --}}
        <section class="c-store__section--edit">
            <div class="p-post__star">
                <p class="c-store__item">満足度</p>
                <div class="c-star">
                    <input id="star5" type="radio" name="rate" value="5">
                    <label for="star5">★</label>
                    <input id="star4" type="radio" name="rate" value="4">
                    <label for="star4">★</label>
                    <input id="star3" type="radio" name="rate" value="3">
                    <label for="star3">★</label>
                    <input id="star2" type="radio" name="rate" value="2">
                    <label for="star2">★</label>
                    <input id="star1" type="radio" name="rate" value="1">
                    <label for="star1">★</label>
                </div>
            </div>
        </section>
        <section class="c-store__section--edit">
            <div class="c-form__group">
                <p class="c-store__item">クチコミ</p>
                <textarea rows="10" cols="33" name="review"></textarea>
            </div>
            <div class="c-form__group">
                <p class="c-store__item">訪問日</p>
                <input type="date" name="visited">
            </div>
            <input type="hidden" name="store_id" value="{{ $store_id }}">
            <input type="hidden" name="user_id" value="{{ $id }}">
            <input type="hidden" name="ticket_id" value="{{ $ticket_id }}">
            {{--  <input type="hidden" name="goodnum" value="{{ $id }}">  --}}
            @php
                use Carbon\Carbon;
                $dt = Carbon::now();
            @endphp
            <input type="hidden" name="posted_date" value="{{ $dt }}">
            <button type="submit" class="c-btn c-btn--navy">投稿する</button>

        </section>
        {{--  @endforeach  --}}
    </form>

</div>

</body>

</html>
