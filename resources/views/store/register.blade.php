<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>店舗情報登録画面</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="p-admin__header">
        <div class="p-admin__logo"><img src="/images/admin_header_logo.png" alt="店舗管理画面ロゴ"></div>
        <div class="p-admin__logout">
            <p><a href="{{ route('admin.logout') }}" class="c-btn c-btn--small c-btn--navy">ログアウト</a></p>
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
                        {{--  <a href="{{ route('admins.store') }}">
                            <button class="c-btn c-btn--edit c-btn--navy ">編集</button>
                        </a>  --}}
                    </div>
                </div>
                <form enctype="multipart/form-data"action="/store/storeregister" method="POST" class="c-form">
                    @csrf
                    <div class="c-form--admin">
                        <div class="c-form__group">
                            <label for="">店舗名</label><input type="text" name="store_name" id="store_name"
                                required="required">
                        </div>
                        <div class="c-form__group">
                            <label for="">住所</label><input type="text" name="address" required="required">
                        </div>
                        <div class="c-form__group">
                            <label for="">電話番号</label><input type="text" name="tel" required="required"
                                placeholder="000-000-0000">
                        </div>
                        <div class="c-form__group">
                            <label for="">ホームページ</label><input type="text" name="link" required="required"
                                placeholder="https://sample.com">
                        </div>
                        <div class="c-form__group">
                            <label for=" ">サービス内容</label>
                            <textarea id="servicecontent" name="service" rows="5" cols="33" required="required"></textarea>
                        </div>
                        <label for="">写真</label>
                        <div class="p-admin__photo">
                            <div id="preview">
                                <div class="c-form__group">
                                    <input type="file" name="example" onChange="imgPreView(event)"
                                        required="required">
                                </div>
                            </div>
                            <div id="preview1">
                                <div class="c-form__group">
                                    <input type="file" name="example1" onChange="imgPreView1(event)"
                                        required="required">
                                </div>
                            </div>
                            <div id="preview2">
                                <div class="c-form__group">
                                    <input type="file" name="example2" onChange="imgPreView2(event)"
                                        required="required">
                                </div>
                            </div>
                        </div>
                        <div class="p-admin__time">
                            <div class="c-form__group--time">
                                <label for="">営業開始時間</label><input type="time" name="start_time"
                                    required="required">
                            </div>
                            <div class="c-form__group--time">
                                <label for="">営業終了時間</label><input type="time" name="end_time"
                                    required="required">
                            </div>
                        </div>
                        <div class="c-form__group">
                            <label for="">駐車場</label><input type="text" name="parking" required="required"
                                placeholder="有：10台">
                        </div>
                        <div class="c-form__group">
                            <label>エリア名選択
                                {{--  <span class="req">※</span>  --}}
                            </label>
                            <select name="op">
                                <option value="-----------">
                                    ---------------------------------------------------------</option>

                                <option value="1" required="required">大分</option>
                                <option value="2" required="required">別府</option>
                                <option value="3" required="required">福岡</option>
                                <option value="4" required="required">大宰府</option>
                                {{--  データベースから引っ張ってくる  --}}
                            </select>
                        </div>
                        <input type="hidden" name="perfecture_id" value="44">

                        <a class="c-btn c-btn--small c-btn--navy" id="store_latlng"
                            href="https://www.google.com/maps/place" target="_blank">緯度・経度を調べる</a>

                        <div class="c-form__group">
                            <label for="">緯度</label><input type="text" name="latitude"
                                required="required">
                        </div>
                        <div class="c-form__group">
                            <label for="">経度</label><input type="text" name="longitude"
                                required="required">
                        </div>
                    </div>
                    <input type="hidden" name="id">
                    <button type="submit" class="c-btn c-btn--update c-btn--navy">登録する</button>
                </form>
            </div>
        </div>
    </div>

</body>
<script>
    function imgPreView(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        var preview = document.getElementById("preview");
        var previewImage = document.getElementById("previewImage");

        if (previewImage != null) {
            preview.removeChild(previewImage);
        }
        reader.onload = function(event) {
            var img = document.createElement("img");
            img.setAttribute("src", reader.result);
            img.setAttribute("id", "previewImage");
            img.classList.add('p-admin__photo');
            preview.appendChild(img);

        };

        reader.readAsDataURL(file);
    }

    function imgPreView1(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        var preview = document.getElementById("preview1");
        var previewImage = document.getElementById("previewImage1");

        if (previewImage != null) {
            preview.removeChild(previewImage);
        }
        reader.onload = function(event) {
            var img = document.createElement("img");
            img.setAttribute("src", reader.result);
            img.setAttribute("id", "previewImage");
            img.classList.add('p-admin__photo');

            preview.appendChild(img);

        };

        reader.readAsDataURL(file);
    }

    function imgPreView2(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        var preview = document.getElementById("preview2");
        var previewImage = document.getElementById("previewImage2");

        if (previewImage != null) {
            preview.removeChild(previewImage);
        }
        reader.onload = function(event) {
            var img = document.createElement("img");
            img.setAttribute("src", reader.result);
            img.setAttribute("id", "previewImage");
            img.classList.add('p-admin__photo');

            preview.appendChild(img);

        };

        reader.readAsDataURL(file);
    }
    let store_name = document.getElementById('store_name');
    store_name.addEventListener('change', inputChange);

    function inputChange(event) {
        document.getElementById("store_latlng").setAttribute("href", "https://www.google.com/maps/place/" +
            store_name.value);
    }
</script>

</html>
