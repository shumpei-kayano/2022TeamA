<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        @if ($gatya_flg == 1)
            <div class="p-gacha__message">
                <p>ガチャ回数制限オーバー</p>
                <p><small>このエリアでは{{ $hours }}時間{{ $minutes }}分後に引けます</small></p>
            </div>
            <div id="googleMap" class="p-gacha__map">
            </div>
            <div class="p-gacha__handle p-gacha__handle--slideup">
                <p class="p-gacha__circle"><img src="/images/gacha-circle.png" alt="ガチャワッカ"></p>
                <p class="p-gacha__mawasu"><img src="/images/turn.png" alt="ガチャ回す">
                </p>
            </div>
        @else
            <div class="p-gacha__message">
                <p>このエリア<small>（ {{ Session::get('current_area') }}
                        ）</small>のクーポン数：{{ Session::get('area_count') }}</p>
            </div>
            <div id="googleMap" class="p-gacha__map">
            </div>
            <div class="p-gacha__handle p-gacha__handle--slideup">
                <p class="p-gacha__circle"><img src="/images/gacha-circle.png" alt="ガチャワッカ"></p>

                <p class="p-gacha__mawasu"><a href="{{ route('gacha/staging') }}"><img src="/images/turn.png"
                            alt="ガチャ回す"></a>
                </p>
            </div>
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
            @else
                <div class="p-gacha__control" id="current-area">
    @endif

    <div class="p-gacha__control-window">

        <form action="/gacha/index" method="POST">
            @csrf
            <ul>
                <input type="submit" value="鉄輪" id="go-kannawa" name="beppu">
                <input type="submit" value="大原周辺" id="go-ohara" name="oita">
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
    function success(pos) {
        var map;
        var marker;
        var polygonObj;
        var intPos;
        var exPos;
        var oharaPos;
        var oharaArea = [{
                lat: 33.23498,
                lng: 131.60622
            },
            {
                lat: 33.23334,
                lng: 131.60942
            },
            {
                lat: 33.2307,
                lng: 131.60731
            },
            {
                lat: 33.23227,
                lng: 131.6045
            }
        ];
        var kannawaPos;
        var kannawaArea = [{
                lat: 33.31615,
                lng: 131.4758
            },
            {
                lat: 33.31619,
                lng: 131.47793
            },
            {
                lat: 33.31534,
                lng: 131.47773
            },
            {
                lat: 33.31534,
                lng: 131.47559
            }
        ];

        //大原に移動
        function ohara() {
            //大原周辺
            /* var lat = pos.coords.latitude;
            var lng = pos.coords.longitude; */
            /* ↑現在地を取得する場合はこっち */
            var lat = 33.231344;
            var lng = 131.606886;
            var latlng = new google.maps.LatLng(lat, lng);
            oharaPos = latlng;
            //
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
            return false;
        }
        //鉄輪に移動
        function kannawa() {
            //鉄輪
            var lat = 33.315699;
            var lng = 131.476847;
            var latlng = new google.maps.LatLng(lat, lng);
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
        @else
            ohara();
        @endif
    }

    function fail(error) {
        alert('位置情報の取得に失敗しました。エラーコード：' + error.code);
    }

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
