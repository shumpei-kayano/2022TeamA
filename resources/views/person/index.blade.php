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

        @foreach ($reviews as $review)
            <div
                class="c-hukidashi @if ($review->user_id == $id) c-hukidashi--a
            @else c-hukidashi--b @endif">
                <div class="c-fukidashi__container">
                    {{-- <p class="c-hukidashi__username">{{ $review->user->name }}</p>  --}}
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
                            </div>
                        </div>
                        <h3 class="c-hukidashi__tittle">{{ $review->store->store_name }}</h3>
                        <p class="c-hukidashi__honbun">
                            {{ $review->comment }}
                        </p>
                        <div class="c-hukidashi__footer">
                            <form action="/home/good" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $review->id }}">
                                <label class="c-hukidashi__good">
                                    <input type="submit" class="warning">
                                    <span class="c-hukidashi__good-icon"></span>
                                    <span class="c-hukidashi__good-num">50</span>
                                </label>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
