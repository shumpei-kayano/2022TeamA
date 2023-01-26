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
            {{--  @foreach ($coupons as $coupon)  --}}
            <p>{{ $coupons->store->store_name }}</p>
            {{--  @endforeach  --}}
            <p><a href="{{ route('admin.logout') }}" class="c-btn c-btn--small c-btn--navy">ログアウト</a></p>
        </div>
    </div>
    <div class="c-container--pc">
        <div class="p-admin__side">
            <ul>
                <li> <a href="{{ route('store.register') }}" class="p-admin__side-store ">店舗情報</a></li>
                <li> <a href="{{ route('coupon.register') }}" class="p-admin__side-coupon is-current">クーポン情報</a></li>
                <li> <a href="{{ route('admin.review') }}" class="p-admin__side-review">クチコミ</a></li>
            </ul>
        </div>
        <div class="p-admin__content">
            <div class="p-admin__contentbox">
                <div class="p-admin__contentheader">
                    <h1>クーポン情報</h1>
                </div>

                <form action="/coupon/couponupdate" method="POST" class="c-form">
                    @csrf
                    {{--  @foreach ($coupons as $coupon)  --}}
                    <div class="c-form--admin">
                        <div class="c-form__group">
                            <label for="">クーポン名</label><input value={{ $coupons->coupon_name }} type="text"
                                name="coupon_name">
                        </div>
                        <div class="c-form__group">
                            <label for="">提供数</label><input value={{ $coupons->provide }} type="text"
                                name="provide">
                        </div>

                        <div class="p-admin__a">
                            <div class="c-form__group">
                                <label>利用者に当たったクーポン数:</label>
                            </div>
                            <div class="p-admin__historynumber">
                                <p>{{ $tickets0 }}</p>
                            </div>
                            <div class="c-form__group">
                                <label>そのうち使われたクーポン数:</label>
                            </div>
                            <div class="p-admin__historynumber">
                                <p>{{ $tickets }}</p>
                            </div>
                        </div>
                        <label for="">写真</label>
                        <p>下記より1つ選んでください</p>

                        <div id="preview"></div>
                        <div class="c-form__group c-form__input">
                            <input type="file" name="example" onChange="imgPreView(event)" value="1"
                                id="check" checked>
                            <input type="file" name="example2" onChange="imgPreView(event)" value="1"
                                id="check" checked>
                            <input type="file" name="example3" onChange="imgPreView(event)" value="1"
                                id="check" checked>
                        </div>
                        <img id="coupon_photo" src="/images/{{ $coupons->coupon_photo }}" alt="">
                        <img id="coupon_photo" src="/images/{{ $coupons->coupon_photo2 }}"alt="">
                        <img id="coupon_photo" src="/images/{{ $coupons->coupon_photo3 }}"alt="">
                        </label>

                        {{--  <div class="c-form__group"><input type="radio" class="p-admin__photocheck"
                                        name="riyu" value="1" id="check1"><label for="check1"><img
                                            src={{ $coupon->coupon_photo }} alt=""></label></div>
                                <div class="c-form__group"><input type="radio" class="p-admin__photocheck"
                                        name="riyu" value="1" id="check2"><label for="check2"><img
                                            src={{ $coupon->coupon_photo }} alt=""></label></div>  --}}
                    </div>
                    <div class="c-form__group">
                        <label for="">掲載終了日時</label>

                        <input value={{ $coupons->closetime }} type="date" id="start" name="closetime"
                            value="2022-11-01" min="2022-11-01" max="2023-03-31">
                    </div>


            </div>
            <div class="c-form--check">
                <label>掲載を一時停止</label>

                <input type="checkbox" name="riyu" value="1">掲載を一時停止する
            </div>
            <input type="hidden" name="id" value="{{ $coupons->id }}">
            <input type="hidden" name="store_id" value="{{ $coupons->store_id }}">
            <input type="hidden" name="coupon_photo" value="{{ $coupons->coupon_photo }}">
            <button type="submit" class="c-btn c-btn--update c-btn--navy">更新する</button>
            {{--  @endforeach  --}}
            </form>


        </div>

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
            preview.appendChild(img);
        };

        reader.readAsDataURL(file);
    }
</script>

</html>
