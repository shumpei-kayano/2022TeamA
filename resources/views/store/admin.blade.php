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
            <p><a class="c-btn c-btn--small c-btn--navy">ログアウト</a></p>
        </div>
    </div>
    <div class="c-container--pc">
        <div class="p-admin__side">
            <ul>
                <li> <a href="{{ route('store/admin') }}" class="p-admin__side-store is-current">店舗情報</a></li>
                <li> <a href="{{ route('coupon/admin') }}" class="p-admin__side-coupon">クーポン情報</a></li>
                <li> <a href="{{ route('review/admin') }}" class="p-admin__side-review">クチコミ</a></li>
            </ul>
        </div>
        <div class="p-admin__content">
            <div class="p-admin__contentbox">
                <div class="p-admin__contentheader">
                    <div class="p-admin__tittle">
                        <h1>店舗情報</h1>
                        @foreach ($reviews as $reviews)
                            <div class="p-admin__star">
                                <p>平均スコア</p>
                                @for ($i = 0; $i < $reviews->count_review; $i++)
                                    <img src="/images/star.png" alt="">
                                @endfor
                                @for ($i = 0; $i < 5 - $reviews->count_review; $i++)
                                    <img src="/images/star.black.png" alt="">
                                @endfor
                                {{--  <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.png" alt="">
                            <img src="/images/star.black.png" alt="">
                            <img src="/images/star.black.png" alt="">  --}}
                            </div>
                        @endforeach
                    </div>
                </div>
                <form action="" class="c-form">
                    <div class="c-form--admin">
                        <div class="c-form__group">
                            <label for="">店舗名</label><input type="text">
                        </div>
                        <div class="c-form__group">
                            <label for="">住所</label><input type="text">
                        </div>
                        <div class="p-admin__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13348.960939626255!2d131.60939519999997!3d33.2340092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1667803739558!5m2!1sja!2sjp"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="c-form__group">
                            <label for="">電話番号</label><input type="text">
                        </div>
                        <div class="c-form__group">
                            <label for="">ホームページ</label><input type="text">
                        </div>
                        <div class="c-form__group">
                            <label for=" ">サービス内容</label>
                            <textarea id="servicecontent" name="servicecontent" rows="5" cols="33"></textarea>
                        </div>
                        <label for="">写真</label>
                        <div class="p-admin__photo">
                            <div class="c-form__group">
                                <img src="/images/lunch.png" alt="">
                            </div>
                            <div class="c-form__group"> <img src="/images/cake.png" alt="">
                            </div>
                            <div class="c-form__group"> <img src="/images/gaikan.png" alt="">
                            </div>
                            <div class="c-form__group"> <img src="/images/plus.png" alt="">
                            </div>
                        </div>
                        <div class="p-admin__time">
                            <div class="c-form__group--time">
                                <label for="">営業開始時間</label><input type="text">
                            </div>
                            <div class="c-form__group--time">
                                <label for="">営業終了時間</label><input type="text">
                            </div>
                        </div>
                        <div class="c-form__group">
                            <label for="">駐車場</label><input type="text">
                        </div>
                        <div class="c-form__group">
                            <label>エリア名選択
                                {{--  <span class="req">※</span>  --}}
                            </label>
                            <select name="op">
                                <option value="-----------">
                                    ---------------------------------------------------------</option>
                                <option value="Option A">Option aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</option>
                                <option value="Option B">Option B</option>
                                <option value="Option C">Option C</option>
                                <option value="Option D">Option D</option>
                                {{--  データベースから引っ張ってくる  --}}
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $store->id }}">
                    <p><a class="c-btn c-btn--update c-btn--navy">更新する</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
