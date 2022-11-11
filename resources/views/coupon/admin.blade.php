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
            <p><a class="c-btn c-btn--small c-btn--navy">ログアウト</a></p>
        </div>
    </div>
    <div class="c-container--pc">
        <div class="p-admin__side">
            <ul>
                <li> <a href="{{ route('store/admin') }}" class="p-admin__side-store ">店舗情報</a></li>
                <li> <a href="{{ route('coupon/admin') }}" class="p-admin__side-coupon is-current">クーポン情報</a></li>
                <li> <a href="{{ route('review/admin') }}" class="p-admin__side-review">クチコミ</a></li>
            </ul>
        </div>
        <div class="p-admin__content">
            <div class="p-admin__contentbox">
                <div class="p-admin__contentheader">
                    <h1>クーポン情報</h1>
                </div>
                <form action="" class="c-form">
                    <div class="c-form--admin">
                        <div class="c-form__group">
                            <label for="">クーポン名</label><input type="text">
                        </div>
                        <div class="c-form__group">
                            <label for="">提供数</label><input type="text">
                        </div>

                        <div class="p-admin__a">
                            <div class="c-form__group">
                                <label>これまでに使用されたクーポン:</label>
                            </div>
                            <div class="p-admin__historynumber">
                                <p>48</p>
                            </div>
                        </div>
                        <label for="">写真</label>
                        <p>下記より1つ選んでください</p>
                        <div class="p-admin__photo--check c-form--check">
                            <div class="c-form__group"><input type="radio" class="p-admin__photocheck" name="riyu"
                                    value="1" id="check" checked><label for="check"><img
                                        src="/images/lunch.png" alt=""></label>
                            </div>
                            <div class="c-form__group"><input type="radio" class="p-admin__photocheck" name="riyu"
                                    value="1" id="check1"><label for="check1"><img src="/images/cake.png"
                                        alt=""></label></div>
                            <div class="c-form__group"><input type="radio" class="p-admin__photocheck" name="riyu"
                                    value="1" id="check2"><label for="check2"><img src="/images/gaikan.png"
                                        alt=""></label></div>
                        </div>
                        <div class="c-form__group">
                            <label for="">掲載終了日時</label>

                            <input type="date" id="start" name="trip-start" value="2022-11-01" min="2022-11-01"
                                max="2023-03-31">
                        </div>


                    </div>
                    <div class="c-form--check">
                        <label>掲載を一時停止</label>

                        <input type="checkbox" name="riyu" value="1">掲載を一時停止する
                    </div>
                </form>


            </div>
            <p><a class="c-btn c-btn--update c-btn--navy">更新する</a></p>
        </div>
    </div>
    </div>
</body>

</html>
