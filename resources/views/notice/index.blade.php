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
            <a href="{{ route('person/home') }}"class="c-back">戻る</a>
            <h4>お知らせ一覧</h4>
        </div>
        @foreach ($notices as $notice)
            <section class="c-store__section">
                <p class="p-notice__date">{{ $notice->notice }}</p>
                <p class="p-notice__text">{{ $notice->alert->comment }}</p>
            </section>
        @endforeach
        {{--  <section class="c-store__section">
            <p class="p-notice__date">2022.09.27</p>
            <p class="p-notice__text">おめでとうございます！新しいバッジを獲得しました。</p>
        </section>
        <section class="c-store__section">
            <p class="p-notice__date">2022.09.27</p>
            <p class="p-notice__text">yuk*****さんがあなたのクチコミにいいねしました。</p>
        </section>
        <section class="c-store__section">
            <p class="p-notice__date">2022.09.27</p>
            <p class="p-notice__text">初めて訪れる街です。ガチャを回してお得なクーポンをゲットしよう。</p>
        </section>
        <section class="c-store__section">
            <p class="p-notice__date">2022.09.27</p>
            <p class="p-notice__text">3日で使用期限を迎えるクーポンがあります。</p>
        </section>  --}}
    </div>
</body>

</html>
