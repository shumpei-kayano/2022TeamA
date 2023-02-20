<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>アカウント画面</title>
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
    <div class="p-account__top">
        <p class="p-account__phot"><img src="/upload/{{ $users->icon_photo }}" alt="アバター画像"></p>
        <p class="p-account__nickname">
            {{ $users->name }}
        </p>
    </div>
    <div class="p-account__navgroup">
        <a href="{{ route('account/review') }}" class="p-account__nav">投稿したクチコミ</a>
        {{--  reviewsテーブルからデータを引っ張ってくる  --}}
        <a href="{{ route('review/good') }}" class="p-account__nav">いいねしたクチコミ</a>
        {{--  goodsテーブルから引っ張ってくる  --}}
        <a href="{{ route('tourist/index') }}" class="p-account__nav">訪れたスポット</a>
        {{--  ticketsテーブルから引っ張ってくる  --}}
        <a href="{{ route('account/setting') }}" class="p-account__nav">アカウント設定</a>
        {{--  userテーブルから引っ張ってくる  --}}
    </div>
    <form action="{{ route('userlogout') }}" class="c-form">
        @csrf
        <button type="submit" class="c-btn c-btn--navy">ログアウト</button>
    </form>
</div>
</body>

</html>
