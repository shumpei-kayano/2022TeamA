<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="p-admin__header">
        <div class="p-admin__logo"><img src="/images/admin_header_logo.png" alt="店舗管理画面ロゴ"></div>
        <div class="p-admin__logout">
            <p>店舗名</p>
            <p><a href="{{ route('admin.logout') }}" class="c-btn c-btn--small c-btn--navy">ログアウト</a></p>
        </div>
    </div>
    <div class="c-container--pc">
        <div class="p-admin__side">
            <ul>
                <li> <a href="{{ route('admins.store') }}" class="p-admin__side-store ">店舗情報</a></li>
                <li> <a href="{{ route('admin.coupon') }}" class="p-admin__side-coupon">クーポン情報</a></li>
                <li> <a href="{{ route('admin.review') }}" class="p-admin__side-review is-current">クチコミ</a></li>
            </ul>
        </div>
        <div class="p-admin__content">
            <div class="p-admin__contentbox">
                <div class="p-admin__contentbox--a">
                    <div class="p-admin__contentheader--a">
                        <h1>クチコミ</h1>
                    </div>

                    <div class="p-admin__a">
                        <div class="c-form__group">
                            <label>これまでに投稿されたクチコミ総数</label>
                        </div>
                        {{--  @foreach ($reviews as $review)  --}}
                        <div class="p-admin__historynumber">
                            <p>{{ $reviews }}</p>
                        </div>
                        {{--  @endforeach  --}}
                    </div>
                </div>
                <p class="c-hukidashi__date">
                    2022/10/29
                </p>
                @foreach ($goods as $good)
                    <div class="c-hukidashi c-hukidashi--b">
                        {{--  <p class="c-hukidashi__photo">
                            <img src={{ $good->review->user->icon_photo }}>
                        </p>  --}}
                        <div class="c-fukidashi__container">
                            <p class="c-hukidashi__username"> {{ $good->user->name }}</p>
                            <div class="c-hukidashi__frame">
                                <div class="c-hukidashi__header">
                                    <p class="c-hukidashi__visited">訪問日：{{ $good->visited }}</p>
                                    <div class="c-hukidashi__stars">
                                        @for ($i = 0; $i < $good->star; $i++)
                                            <img src="/images/star.png" alt="">
                                        @endfor
                                        @for ($i = 0; $i < 5 - $good->star; $i++)
                                            <img src="/images/star.black.png" alt="">
                                        @endfor
                                    </div>
                                </div>
                                <p class="c-hukidashi__honbun">
                                    {{ $good->comment }}
                                </p>

                                <div class="c-hukidashi__footer">
                                    <label class="c-hukidashi__good disabled">
                                        <input type="checkbox" class="warning">
                                        <span class="c-hukidashi__good-icon"></span>
                                        {{--  @foreach ($items ?? [] as $item)  --}}
                                        <span class="c-hukidashi__good-num">{{ $good->goodnum }}</span>
                                        {{--  @endforeach  --}}
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
        </div>
    </div>
</body>

</html>
