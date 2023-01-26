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
            <p><a class="c-btn c-btn--small c-btn--navy">ログアウト</a></p>
        </div>
    </div>
    <div class="c-container--pc">
        <div class="p-admin__side">
            <ul>
                <li> <a href="{{ route('store.register') }}" class="p-admin__side-store is-current">店舗情報</a></li>
                <li> <a href="{{ route('coupon.register') }}" class="p-admin__side-coupon">クーポン情報</a></li>
                <li> <a href="{{ route('admin.review') }}" class="p-admin__side-review">クチコミ</a></li>
            </ul>
        </div>
        <div class="p-admin__content">
            <div class="p-admin__contentbox">
                <div class="p-admin__contentheader">
                    <div class="p-admin__tittle">
                        <h1>店舗情報</h1>
                        {{--  編集ボタン追加。ルートはadmins.store  --}}
                        <a href="{{ route('admins.store') }}" class="c-btn c-btn--small c-btn--navy ">　　編集　　</a>
                    </div>
                </div>
                <form action="/store/storeregister" method="POST" class="c-form">
                    @csrf
                    <div class="c-form--admin">
                        <div class="c-form__group">
                            <label for="">店舗名</label><input type="text" name="store_name">
                        </div>
                        <div class="c-form__group">
                            <label for="">住所</label><input type="text" name="address">
                        </div>
                        <div class="c-form__group">
                            <label for="">電話番号</label><input type="text" name="tel">
                        </div>
                        <div class="c-form__group">
                            <label for="">ホームページ</label><input type="text" name="link">
                        </div>
                        <div class="c-form__group">
                            <label for=" ">サービス内容</label>
                            <textarea id="servicecontent" name="service" rows="5" cols="33"></textarea>
                        </div>
                        <label for="">写真</label>
                        <div class="p-admin__photo">
                            <div id="preview"></div>
                            <div class="c-form__group">
                                <input type="file" name="example" accept="/images" multiple="multiple"
                                    onChange="imgPreView(event)">

                            </div>
                            <div class="c-form__group">
                                <input type="file" name="example1" accept="/images" onChange="imgPreView(event)">

                            </div>
                            <div class="c-form__group">
                                <input type="file" name="example2" accept="/images" onChange="imgPreView(event)">

                            </div>
                        </div>
                    </div>
                    <div class="p-admin__time">
                        <div class="c-form__group--time">
                            <label for="">営業開始時間</label><input type="text" name="start_time">
                        </div>
                        <div class="c-form__group--time">
                            <label for="">営業終了時間</label><input type="text" name="end_time">
                        </div>
                    </div>
                    <div class="c-form__group">
                        <label for="">駐車場</label><input type="text" name="parking">
                    </div>
                    <div class="c-form__group">
                        <label>エリア名選択
                            {{--  <span class="req">※</span>  --}}
                        </label>
                        <select name="op">
                            <option value="-----------">
                                ---------------------------------------------------------</option>

                            <option value="1">大原周辺</option>
                            <option value="2">鉄輪</option>
                            {{--  データベースから引っ張ってくる  --}}
                        </select>
                    </div>
                    <div class="c-form__group">
                        <label for="">都道府県コード</label><input type="text" name="perfecture_id">
                    </div>
                    <div class="c-form__group">
                        <label for="">緯度</label><input type="text" name="latitude">
                    </div>
                    <div class="c-form__group">
                        <label for="">経度</label><input type="text" name="longitude">
                    </div>
            </div>
            <input type="hidden" name="id">
            <button type="submit" class="c-btn c-btn--update c-btn--navy">登録する</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
