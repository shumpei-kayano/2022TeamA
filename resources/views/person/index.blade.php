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
        <form action="home/good" method="POST">

            @foreach ($reviews as $review)
                <input type="hidden" name="id" value="$review->id">
                <p class="c-hukidashi__date">
                    2022/10/29
                </p>
                <div
                    class="c-hukidashi @if ($review->user_id == 3) c-hukidashi--a
            @else c-hukidashi--b @endif">
                    <p class="c-hukidashi__photo">
                        {{-- <img src="{{ $review->user->icon_photo }}"> --}}
                    </p>
                    <div class="c-fukidashi__container">
                        <p class="c-hukidashi__username">{{ $review->user->name }}</p>
                        <div class="c-hukidashi__frame">
                            <div class="c-hukidashi__header">
                                <p class="c-hukidashi__visited">訪問日：{{ $review->visited }}</p>
                                <div class="c-hukidashi__stars">
                                    <img src="/images/star.png" alt="">
                                    <img src="/images/star.png" alt="">
                                    <img src="/images/star.png" alt="">
                                    <img src="/images/star.black.png" alt="">
                                    <img src="/images/star.black.png" alt="">
                                </div>
                            </div>
                            <h3 class="c-hukidashi__tittle">{{ $review->store->store_name }}</h3>
                            <p class="c-hukidashi__honbun">
                                {{ $review->comment }}
                            </p>

                            {{--  <div class="c-hukidashi__footer">
                                <label class="c-hukidashi__good">
                                    <input type="checkbox" class="warning">
                                    <span class="c-hukidashi__good-icon"></span>
                                    <span class="c-hukidashi__good-num">50</span>
                                </label>
                            </div>  --}}


                            <div class="c-hukidashi__footer">
                                <label class="c-hukidashi__good">
                                    <input type="checkbox" class="warning">
                                    {{--  これを当てはめるようにする  --}}
                                    {{--  @for ($i = 0; $i < count($good); $i++)  --}}
                                    @if ($review->id == 1)
                                        //いいねを消す
                                        <form action="{{ route('nogood', ['id' => $review->id]) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="review_id" value="{{ $review->id }}">
                                            @method('DELETE')
                                            <button type="submit">消す</button>
                                        </form>
                                    @else
                                        //いいねをつける
                                        <form action="{{ route('unko', ['id' => $review->id]) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="review_id" value="{{ $review->id }}">
                                            <button type="submit">いいね</button>
                                        </form>
                                    @endif
                                    <span class="c-hukidashi__good-num">50</span>
                                </label>
                                <div class="c-fukidashi__container">
                                    <p class="c-hukidashi__username">{{ $review->user->name }}</p>
                                    <div class="c-hukidashi__frame">
                                        <div class="c-hukidashi__header">
                                            <p class="c-hukidashi__visited">訪問日：{{ $review->visited }}</p>
                                            <div class="c-hukidashi__stars">
                                                @for ($i = 0; $i < $review->star; $i++)
                                                    <img src="/images/star.png" alt="">
                                                @endfor
                                                @for ($i = 0; $i < 5 - $review->star; $i++)
                                                    <img src="/images/star.black.png" alt="">
                                                @endfor
                                                {{--  <img src="/images/star.png" alt="">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.png" alt="">
                                <img src="/images/star.black.png" alt="">
                                <img src="/images/star.black.png" alt="">  --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </form>
    </div>

</body>

</html>


{{-- <div class="c-hukidashi__footer">
    <label class="c-hukidashi__good">
        <form action="home/good" method="POST">
            <input type="hidden" name="id" value="$review->id">
            <input type="checkbox" class="warning">
            <span class="c-hukidashi__good-icon"></span>
            <span class="c-hukidashi__good-num">50</span>
        </form>
    </label>
</div> --}}
