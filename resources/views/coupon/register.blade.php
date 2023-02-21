<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>クーポン情報登録画面</title>
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
                <li> <a href="{{ route('store.register') }}" class="p-admin__side-store ">店舗情報</a></li>
                <li> <a href="{{ route('coupon.register') }}" class="p-admin__side-coupon is-current">クーポン情報</a></li>
                <li> <a href="{{ route('admin.review') }}" class="p-admin__side-review">クチコミ</a></li>
            </ul>
        </div>
        <div class="p-admin__content">
            <div class="p-admin__contentbox">
                <div class="p-admin__contentheader">
                    <div class="p-admin__tittle">
                        <h1>クーポン情報</h1>
                        {{--  <a href="{{ route('admin.coupon') }}">
                            <button class="c-btn c-btn--edit c-btn--navy ">編集</button>
                        </a>  --}}
                    </div>
                </div>

                <form enctype="multipart/form-data" action="/coupon/couponregister" method="POST" class="c-form">
                    @csrf
                    <div class="c-form--admin">

                        <div class="c-form__group">
                            <label for="">クーポン名</label><input type="text" name="coupon_name"
                                required="required">
                        </div>
                        <div class="c-form__group">
                            <label for="">提供数</label><input type="text" name="provide" required="required">
                        </div>


                        <label for="">写真</label>
                        <div class="p-admin__photo">
                            <div id="preview">
                                <div class="c-form__group">
                                    <input type="file" name="example" onChange="imgPreView(event)"
                                        required="required">
                                </div>
                            </div>
                        </div>
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

                        <input type="date" id="start" name="closetime" value="2023-02-22" min="2022-02-22"
                            required="required">
                    </div>


            </div>
            {{--  {{ dd($stores[0]) }}  --}}
            <input type="hidden" name="id">
            <input type="hidden" name="store_id">
            {{--  <input type="hidden" name="coupon_photo">  --}}
            @if (!isset($stores->areanum))
                <input type="hidden">
            @else
                <input type="hidden" name="areanum" value="{{ $stores->areanum }}">
            @endif
            <button type="submit" class="c-btn c-btn--update c-btn--navy">登録する</button>
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
            img.classList.add('p-admin__photo');
            preview.appendChild(img);

        };

        reader.readAsDataURL(file);
    }
</script>

</html>
