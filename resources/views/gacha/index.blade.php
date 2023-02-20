<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ガチャ画面</title>
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
<div class="c-container u-padding-top--0">
    <div class="p-gacha-top">
        @if ($gatya_flg == 0 && Session::get('{{Session::get('current_area')}}_time') == 0)
            <div id="a" class="p-gacha__message">
                <p>このエリア<small>（ {{ Session::get('current_area') }}
                        ）</small>のクーポン数：{{ Session::get('area_count') }}</p>
            </div>
            <div id="googleMap" class="p-gacha__map">
            </div>
            <div class="p-gacha__handle p-gacha__handle--slideup">
                <p class="p-gacha__circle"><img src="/images/gacha-circle.png" alt="ガチャワッカ"></p>

                <p id="b"class="p-gacha__mawasu"><a href="{{ route('gacha/staging') }}"><img
                            src="/images/turn.png" alt="ガチャ回す"></a>
                </p>
            </div>
        @elseif($gatya_flg == 1)
            <div class="p-gacha__message">
                <p>ガチャ回数制限オーバー</p>
                <p><small>このエリアでは{{ $hours }}時間{{ $minutes }}分後に引けます。</small></p>
            </div>
            <div id="googleMap" class="p-gacha__map">
            </div>
            <div class="p-gacha__handle p-gacha__handle--slideup">
                <p class="p-gacha__circle"><img src="/images/gacha-circle.png" alt="ガチャワッカ"></p>
                <p class="p-gacha__mawasu"><img src="/images/turn.png" alt="ガチャ回す">
                </p>
            </div>
            {{--  @elseif($gatya_flg == 2)
            <div id="a" class="p-gacha__message">
                <p>エリア外です</p>
                <p><small>エリア内に入ってください</small></p>
            </div>  --}}
        @endif
        {{--  <button id="btn-close" type="submit" class="c-btn c-btn--navy u-margin-top--0">制限オーバー</button>  --}}


    </div>

    @php
        $currentArea = session('current_area');
    @endphp
    @if ($currentArea == 'oita')
        <div class="p-gacha__control oita" id="current-area">
        @elseif ($currentArea == 'beppu')
            <div class="p-gacha__control beppu" id="current-area">
            @elseif($currentArea == 'hakata')
                <div class="p-gacha__control hakata" id="current-area">
                @elseif($currentArea == 'dazaifu')
                    <div class="p-gacha__control dazaifu" id="current-area">
                    @else
                        <div class="p-gacha__control" id="current-area">
    @endif

    <div class="p-gacha__control-window">

        <form action="/gacha/index" method="POST">
            @csrf
            <ul>
                <input type="submit" value="鉄輪" id="go-kannawa" name="beppu">
                <input type="submit" value="大原周辺" id="go-ohara" name="oita">
                <input type="submit" value="太宰府" id="go-dazaifu" name="dazaifu">
                <input type="submit" value="博多" id="go-hakata" name="hakata">
                <input type="hidden" value="lat" id="lat">
                <input type="hidden" value="lng" id="lng">
            </ul>
        </form>

        <p>{{ Session::get('current_area') }} <span id="latlng"></span></p>
    </div>

</div>
</div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtYsX-DTTQHaRPfZ3xTaCrtPoKVv2k6nM&libraries=geometry"
    async defer></script>

<script>
    //DBから緯度経度とってくる(緯度は横。経度は縦。)
    //if文で大分鉄輪分けてwhereで大分鉄輪を取得する
    //successの上にlatlngを定義する（別府は直打ち）

    function success(pos) {
        /* 現在地の緯度経度 */
        var lat = pos.coords.latitude;
        var lng = pos.coords.longitude;

        var map;
        var marker;
        var polygonObj;
        var intPos;
        var exPos;
        var oharaPos;
        var oharaArea = [{
                //左上の緯度・経度
                lat: {{ $arealatlng->left_top_ido }},
                lng: {{ $arealatlng->left_top_keido }}
            },
            {
                //右上の緯度・経度
                lat: {{ $arealatlng->right_top_ido }},
                lng: {{ $arealatlng->right_top_keido }}
            },
            {
                //右下の緯度・経度
                lat: {{ $arealatlng->right_bottom_ido }},
                lng: {{ $arealatlng->right_bottom_keido }}
            },
            {
                //左下の緯度・経度
                lat: {{ $arealatlng->left_bottom_ido }},
                lng: {{ $arealatlng->left_bottom_keido }}
            }
        ];
        var kannawaPos;
        var kannawaArea = [{
                lat: {{ $arealatlng->left_top_ido }},
                lng: {{ $arealatlng->left_top_keido }}
            },
            {
                lat: {{ $arealatlng->right_top_ido }},
                lng: {{ $arealatlng->right_top_keido }}
            },
            {
                lat: {{ $arealatlng->right_bottom_ido }},
                lng: {{ $arealatlng->right_bottom_keido }}
            },
            {
                lat: {{ $arealatlng->left_bottom_ido }},
                lng: {{ $arealatlng->left_bottom_keido }}
            }
        ];

        //大原に移動
        function ohara() {
            /*var lat = 33.231344;
            var lng = 131.606886; */
            var latlng = new google.maps.LatLng(lat, lng);
            oharaPos = latlng;

            var options = {
                zoom: 17,
                center: latlng,
                disableDefaultUI: true
            };

            map = new google.maps.Map(document.getElementById("googleMap"), options);
            polygonObj = new google.maps.Polygon({
                paths: oharaArea,
                strokeColor: "#EEC94A",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#EEC94A",
                fillOpacity: 0.25,
                map: map
            });
            addMarker(latlng);
            document.getElementById("latlng").innerHTML = latlng;

            //エリア内判定
            if (lat >= {{ $arealatlng->left_bottom_ido }} &&
                lat <= {{ $arealatlng->right_top_ido }} &&
                lng >= {{ $arealatlng->left_bottom_keido }} &&
                lng <= {{ $arealatlng->right_bottom_keido }}) {

            } else {

                let text = document.getElementById('a').innerHTML;
                document.getElementById('a').innerHTML = ' <p>エリア内に入ってください</p>';
            }

            return false;
        }
        //鉄輪に移動
        function kannawa() {
            //鉄輪
            var lat2 = 33.315699;
            var lng2 = 131.476847;
            var latlng = new google.maps.LatLng(lat2, lng2);
            kannawaPos = latlng;

            //
            var options = {
                zoom: 18,
                center: latlng,
                disableDefaultUI: true
            };

            map = new google.maps.Map(document.getElementById("googleMap"), options);
            polygonObj = new google.maps.Polygon({
                paths: kannawaArea,
                strokeColor: "#EEC94A",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#EEC94A",
                fillOpacity: 0.25,
                map: map
            });
            addMarker(latlng);
            document.getElementById("latlng").innerHTML = latlng;

            //エリア内判定
            if (lat2 >= {{ $arealatlng->left_bottom_ido }} &&
                lat2 <= {{ $arealatlng->right_top_ido }} &&
                lng2 >= {{ $arealatlng->left_bottom_keido }} &&
                lng2 <= {{ $arealatlng->right_bottom_keido }}) {

            } else {
                let text = document.getElementById('a').innerHTML;
                document.getElementById('a').innerHTML = ' <p>エリア内に入ってください</p>';

            }
            return false;
        }

        function hakata() {
            var lat3 = 33.595595474615564;
            var lng3 = 130.4075020843385;
            var latlng = new google.maps.LatLng(lat3, lng3);
            oharaPos = latlng;

            var options = {
                zoom: 17,
                center: latlng,
                disableDefaultUI: true
            };

            map = new google.maps.Map(document.getElementById("googleMap"), options);
            polygonObj = new google.maps.Polygon({
                paths: oharaArea,
                strokeColor: "#EEC94A",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#EEC94A",
                fillOpacity: 0.25,
                map: map
            });
            addMarker(latlng);
            document.getElementById("latlng").innerHTML = latlng;

            //エリア内判定
            if (lat3 >= {{ $arealatlng->left_bottom_ido }} &&
                lat3 <= {{ $arealatlng->right_top_ido }} &&
                lng3 >= {{ $arealatlng->left_bottom_keido }} &&
                lng3 <= {{ $arealatlng->right_bottom_keido }}) {

            } else {

                let text = document.getElementById('a').innerHTML;
                document.getElementById('a').innerHTML = ' <p>エリア内に入ってください</p>';
            }

            return false;
        }

        function dazaifu() {
            var lat4 = 33.521378625168126;
            var lng4 = 130.53483462666347;
            var latlng = new google.maps.LatLng(lat4, lng4);
            oharaPos = latlng;

            var options = {
                zoom: 17,
                center: latlng,
                disableDefaultUI: true
            };

            map = new google.maps.Map(document.getElementById("googleMap"), options);
            polygonObj = new google.maps.Polygon({
                paths: oharaArea,
                strokeColor: "#EEC94A",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#EEC94A",
                fillOpacity: 0.25,
                map: map
            });
            addMarker(latlng);
            document.getElementById("latlng").innerHTML = latlng;

            //エリア内判定
            if (lat4 >= {{ $arealatlng->left_bottom_ido }} &&
                lat4 <= {{ $arealatlng->right_top_ido }} &&
                lng4 >= {{ $arealatlng->left_bottom_keido }} &&
                lng4 <= {{ $arealatlng->right_bottom_keido }}) {

            } else {

                let text = document.getElementById('a').innerHTML;
                document.getElementById('a').innerHTML = ' <p>エリア内に入ってください</p>';
            }

            return false;
        }

        //マーカー移動
        function addMarker(pos) {
            marker = new google.maps.Marker({
                position: pos,
                map: map,
            });
        }
        @if ($currentArea == 'oita')
            ohara();
        @elseif ($currentArea == 'beppu')
            kannawa();
        @elseif ($currentArea == 'hakata')
            hakata();
        @elseif ($currentArea == 'dazaifu')
            dazaifu();
        @else
            ohara();
        @endif
    }

    function fail(error) {
        alert('位置情報の取得に失敗しました。エラーコード：' + error.code);
    }

    {{--  端末現在位置の取得  --}}
    navigator.geolocation.getCurrentPosition(success, fail);

    {{--  ガチャ制限  --}}

    new Vue({
        el: '#dialog',
        data: {
            gachaUsed: false
        },
        methods: {
            gachaCoupon: function() {
                this.gachaUsed = true
            }
        }
    })
    const dialog = document.getElementById('dialog');
    document.getElementById('btn-open').addEventListener('click', (event) => {
        dialog.showModal();
    });
    dialog.querySelector('c-modal__close').addEventListener('click', () => {
        dialog.close();
    });
    dialog.addEventListener("click", function(event) {
        var rect = dialog.getBoundingClientRect();
        var isInDialog = (rect.top <= event.clientY && event.clientY <= rect.top + rect.height && rect
            .left <=
            event.clientX && event.clientX <= rect.left + rect.width);
        if (!isInDialog) {
            dialog.close();
        }
    });
</script>

</html>
