<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

    <div class="c-container">
        @if ($badges->isEmpty())
            <section class="p-badge__section">
                <h3 class="p-badge__title">ガチャを回した回数</h3>
                <div class="p-badge__group">
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_5gacha_off_02.png" alt="5ガチャ">
                        </p>

                        <p class="p-badge__name">5ガチャ</p>

                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_20gacha_off_04.png" alt="5ガチャ">
                        </p>

                        <p class="p-badge__name">20ガチャ</p>

                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_50gacha_off_06.png" alt="5ガチャ">
                        </p>

                        <p class="p-badge__name">50ガチャ</p>

                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_100gacha_off_08.png" alt="5ガチャ">
                        </p>

                        <p class="p-badge__name">100ガチャ</p>

                    </div>

                </div>
            </section>

            <section class="p-badge__section">
                <h3 class="p-badge__title">訪れた店舗数</h3>
                <div class="p-badge__group">
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_3spot_off_10.png" alt="3店舗">
                        </p>

                        <p class="p-badge__name">3店舗</p>


                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_5spot_off_12.png" alt="5店舗">
                        </p>

                        <p class="p-badge__name">5店舗</p>


                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_10spot_off_14.png" alt="10店舗">
                        </p>

                        <p class="p-badge__name">10店舗</p>


                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_50spot_off_16.png" alt="50店舗">
                        </p>

                        <p class="p-badge__name">50店舗</p>


                    </div>
                </div>
            </section>


            <section class="p-badge__section">
                <h3 class="p-badge__title">クチコミ投稿回数</h3>
                <div class="p-badge__group">
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_1review_off_18.png" alt="初めての投稿">
                        </p>

                        <p class="p-badge__name">初めての投稿</p>


                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_5review_off_20.png" alt="5回目の投稿">
                        </p>

                        <p class="p-badge__name">5回目の投稿</p>


                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_10review_off_22.png" alt="10回目の投稿">
                        </p>

                        <p class="p-badge__name">10回目の投稿</p>


                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_50review_off_24.png" alt="50回目の投稿">
                        </p>

                        <p class="p-badge__name">50回目の投稿</p>


                    </div>
                </div>
            </section>

            <section class="p-badge__section">
                <h3 class="p-badge__title">獲得したいいね数</h3>
                <div class="p-badge__group">
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_1good_off_26.png" alt="1いいね獲得">
                        </p>

                        <p class="p-badge__name">1いいね獲得</p>


                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_20good_off_28.png" alt="20いいね獲得">
                        </p>

                        <p class="p-badge__name">20いいね獲得</p>


                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_50good_off_30.png" alt="50いいね獲得">
                        </p>

                        <p class="p-badge__name">50いいね獲得</p>


                    </div>
                    <div class="p-badge__item">
                        <p class="p-badge__img">
                            <img src="/images/badge_100good_off_32.png" alt="100いいね獲得">
                        </p>

                        <p class="p-badge__name">100いいね獲得</p>


                    </div>
                @else
                    <section class="p-badge__section">
                        <h3 class="p-badge__title">ガチャを回した回数</h3>
                        <div class="p-badge__group">
                            <div class="p-badge__item">
                                @foreach ($badges as $badge)
                                    @if ($badge->badge_id == 1)
                                        {{--  @foreach ($gets as $get)  --}}
                                        @if ($badge->getflg == 0)
                                            <p class="p-badge__img new">
                                                <img src="/images/badge_5gacha_on_01.png" alt="5ガチャ">
                                            </p>
                                            <p class="p-badge__name">5ガチャ</p>
                                            <p class="p-badge__date">{{ $badge->get_date }}</p>
                                        @break

                                    @else
                                        <p class="p-badge__img">
                                            <img src="/images/badge_5gacha_on_01.png" alt="5ガチャ">
                                        </p>
                                        <p class="p-badge__name">5ガチャ</p>
                                        <p class="p-badge__date">{{ $badge->get_date }}</p>
                                    @endif
                                @break

                            @else
                                @if ($loop->last)
                                    <p class="p-badge__img">
                                        <img src="/images/badge_5gacha_off_02.png" alt="5ガチャ">
                                    </p>
                                    <p class="p-badge__name">5ガチャ</p>
                                @endif
                                @continue
                            @endif
                        @endforeach

                    </div>
                    <div class="p-badge__item">
                        @foreach ($badges as $badge)
                            @if ($badge->badge_id == 2)
                                @if ($badge->getflg == 0)
                                    <p class="p-badge__img new">
                                        <img src="/images/badge_20gacha_on_03.png" alt="20ガチャ">
                                    </p>
                                    <p class="p-badge__name">20ガチャ</p>
                                    <p class="p-badge__date">{{ $badge->get_date }}</p>
                                @break

                            @else
                                <p class="p-badge__img">
                                    <img src="/images/badge_20gacha_on_03.png" alt="20ガチャ">
                                </p>
                                <p class="p-badge__name">20ガチャ</p>
                                <p class="p-badge__date">{{ $badge->get_date }}</p>
                            @endif
                        @break

                    @else
                        @if ($loop->last)
                            <p class="p-badge__img">
                                <img src="/images/badge_20gacha_off_04.png" alt="20ガチャ">
                            </p>
                            <p class="p-badge__name">20ガチャ</p>
                        @endif
                        @continue
                    @endif
                @endforeach

            </div>
            <div class="p-badge__item">
                @foreach ($badges as $badge)
                    @if ($badge->badge_id == 3)
                        @if ($badge->getflg == 0)
                            <p class="p-badge__img new">
                                <img src="/images/badge_50gacha_on_05.png" alt="50ガチャ">
                            </p>
                            <p class="p-badge__name">50ガチャ</p>
                            <p class="p-badge__date">{{ $badge->get_date }}</p>
                        @break

                    @else
                        <p class="p-badge__img ">
                            <img src="/images/badge_50gacha_on_05.png" alt="50ガチャ">
                        </p>
                        <p class="p-badge__name">50ガチャ</p>
                        <p class="p-badge__date">{{ $badge->get_date }}</p>
                    @endif
                @break

            @else
                @if ($loop->last)
                    <p class="p-badge__img">
                        <img src="/images/badge_50gacha_off_06.png" alt="50ガチャ">
                    </p>
                    <p class="p-badge__name">50ガチャ</p>
                @endif
                @continue
            @endif
        @endforeach

    </div>
    <div class="p-badge__item">
        @foreach ($badges as $badge)
            @if ($badge->badge_id == 4)
                @if ($badge->getflg == 0)
                    <p class="p-badge__img new">
                        <img src="/images/badge_100gacha_on_07.png" alt="100ガチャ">
                    </p>
                    <p class="p-badge__name">100ガチャ</p>
                    <p class="p-badge__date">{{ $badge->get_date }}</p>
                @break

            @else
                <p class="p-badge__img">
                    <img src="/images/badge_100gacha_on_07.png" alt="100ガチャ">
                </p>
                <p class="p-badge__name">100ガチャ</p>
                <p class="p-badge__date">{{ $badge->get_date }}</p>
            @endif
        @break

    @else
        @if ($loop->last)
            <p class="p-badge__img">
                <img src="/images/badge_100gacha_off_08.png" alt="100ガチャ">
            </p>
            <p class="p-badge__name">100ガチャ</p>
        @endif
        @continue
    @endif
@endforeach

</div>

</div>
</section>

<section class="p-badge__section">
<h3 class="p-badge__title">訪れた店舗数</h3>
<div class="p-badge__group">
<div class="p-badge__item">
@foreach ($badges as $badge)
    @if ($badge->badge_id == 5)
        @if ($badge->getflg == 0)
            <p class="p-badge__img new">
                <img src="/images/badge_3spot_on_09.png" alt="3店舗">
            </p>
            <p class="p-badge__name">3店舗</p>
            <p class="p-badge__date">{{ $badge->get_date }}</p>
        @break

    @else
        <p class="p-badge__img">
            <img src="/images/badge_3spot_on_09.png" alt="3店舗">
        </p>
        <p class="p-badge__name">3店舗</p>
        <p class="p-badge__date">{{ $badge->get_date }}</p>
    @endif
@break

@else
@if ($loop->last)
    <p class="p-badge__img">
        <img src="/images/badge_3spot_off_10.png" alt="3店舗">
    </p>

    <p class="p-badge__name">3店舗</p>
@endif
@continue
@endif
@endforeach

</div>
<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 6)
@if ($badge->getflg == 0)
    <p class="p-badge__img new">
        <img src="/images/badge_5spot_on_11.png" alt="5店舗">
    </p>
    <p class="p-badge__name">5店舗</p>
    <p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
    <img src="/images/badge_5spot_on_11.png" alt="5店舗">
</p>
<p class="p-badge__name">5店舗</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_5spot_off_12.png" alt="5店舗">
</p>
<p class="p-badge__name">5店舗</p>
@endif
@continue
@endif
@endforeach

</div>
<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 7)
@if ($badge->getflg == 0)
<p class="p-badge__img new">
<img src="/images/badge_10spot_on_13.png" alt="10店舗">
</p>
<p class="p-badge__name">10店舗</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
<img src="/images/badge_10spot_on_13.png" alt="10店舗">
</p>
<p class="p-badge__name">10店舗</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_10spot_off_14.png" alt="10店舗">
</p>

<p class="p-badge__name">10店舗</p>
@endif
@continue
@endif
@endforeach

</div>
<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 8)
@if ($badge->getflg == 0)
<p class="p-badge__img new">
<img src="/images/badge_50spot_on_15.png" alt="50店舗">
</p>
<p class="p-badge__name">10店舗</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
<img src="/images/badge_50spot_on_15.png" alt="50店舗">
</p>
<p class="p-badge__name">10店舗</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_50spot_off_16.png" alt="50店舗">
</p>

<p class="p-badge__name">50店舗</p>
@endif
@continue
@endif
@endforeach

</div>
</div>
</section>


<section class="p-badge__section">
<h3 class="p-badge__title">クチコミ投稿回数</h3>
<div class="p-badge__group">
<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 9)
@if ($badge->getflg == 0)
<p class="p-badge__img new">
<img src="/images/badge_1review_on_17.png" alt="初めての投稿">
</p>
<p class="p-badge__name">初めての投稿</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
<img src="/images/badge_1review_on_17.png" alt="初めての投稿">
</p>
<p class="p-badge__name">初めての投稿</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_1review_off_18.png" alt="初めての投稿">
</p>
<p class="p-badge__name">初めての投稿</p>
@endif
@continue
@endif
@endforeach
</div>

<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 10)
@if ($badge->getflg == 0)
<p class="p-badge__img new">
<img src="/images/badge_5review_on_19.png" alt="5回目の投稿">
</p>
<p class="p-badge__name">5回目の投稿</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
<img src="/images/badge_5review_on_19.png" alt="5回目の投稿">
</p>
<p class="p-badge__name">5回目の投稿</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_5review_off_20.png" alt="5回目の投稿">
</p>

<p class="p-badge__name">5回目の投稿</p>
@endif
@continue
@endif
@endforeach
</div>
<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 11)
@if ($badge->getflg == 0)
<p class="p-badge__img new">
<img src="/images/badge_10review_on_21.png" alt="10回目の投稿">
</p>
<p class="p-badge__name">10回目の投稿</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
<img src="/images/badge_10review_on_21.png" alt="10回目の投稿">
</p>
<p class="p-badge__name">10回目の投稿</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_10review_off_22.png" alt="10回目の投稿">
</p>

<p class="p-badge__name">10回目の投稿</p>
@endif
@continue
@endif
@endforeach
</div>
<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 12)
@if ($badge->getflg == 0)
<p class="p-badge__img new">
<img src="/images/badge_50review_on_23.png" alt="50回目の投稿">
</p>
<p class="p-badge__name">50回目の投稿</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
<img src="/images/badge_50review_on_23.png" alt="50回目の投稿">
</p>
<p class="p-badge__name">50回目の投稿</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_50review_off_24.png" alt="50回目の投稿">
</p>
<p class="p-badge__name">50回目の投稿</p>
@endif
@continue
@endif
@endforeach
</div>
</div>
</section>

<section class="p-badge__section">
<h3 class="p-badge__title">獲得したいいね数</h3>
<div class="p-badge__group">
<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 13)
@if ($badge->getflg == 0)
<p class="p-badge__img new">
<img src="/images/badge_1good_on_25.png" alt="1いいね獲得">
</p>
<p class="p-badge__name">1いいね獲得</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
<img src="/images/badge_1good_on_25.png" alt="1いいね獲得">
</p>
<p class="p-badge__name">1いいね獲得</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_1good_off_26.png" alt="1いいね獲得">
</p>
<p class="p-badge__name">1いいね獲得</p>
@endif
@continue
@endif
@endforeach

</div>
<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 14)
@if ($badge->getflg == 0)
<p class="p-badge__img new">
<img src="/images/badge_20good_on_27.png" alt="20いいね獲得">
</p>
<p class="p-badge__name">20いいね獲得</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
<img src="/images/badge_20good_on_27.png" alt="20いいね獲得">
</p>
<p class="p-badge__name">20いいね獲得</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_20good_off_28.png" alt="20いいね獲得">
</p>

<p class="p-badge__name">20いいね獲得</p>
@endif
@continue
@endif
@endforeach
</div>
<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 15)
@if ($badge->getflg == 0)
<p class="p-badge__img new">
<img src="/images/badge_50good_on_29.png" alt="50いいね獲得">
</p>
<p class="p-badge__name">50いいね獲得</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
<img src="/images/badge_50good_on_29.png" alt="50いいね獲得">
</p>
<p class="p-badge__name">50いいね獲得</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_50good_off_30.png" alt="50いいね獲得">
</p>

<p class="p-badge__name">50いいね獲得</p>
@endif
@continue
@endif
@endforeach
</div>
<div class="p-badge__item">
@foreach ($badges as $badge)
@if ($badge->badge_id == 16)
@if ($badge->getflg == 0)
<p class="p-badge__img new">
<img src="/images/badge_100good_on_31.png" alt="100いいね獲得">
</p>
<p class="p-badge__name">100いいね獲得</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@break

@else
<p class="p-badge__img">
<img src="/images/badge_100good_on_31.png" alt="100いいね獲得">
</p>
<p class="p-badge__name">100いいね獲得</p>
<p class="p-badge__date">{{ $badge->get_date }}</p>
@endif
@break

@else
@if ($loop->last)
<p class="p-badge__img">
<img src="/images/badge_100good_off_32.png" alt="100いいね獲得">
</p>
<p class="p-badge__name">100いいね獲得</p>
@endif
@continue
@endif
@endforeach

@endif

</div>
</div>
</section>
</div>


@component('components.gnav')
@endcomponent

</body>

</html>
