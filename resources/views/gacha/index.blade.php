<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

    @component('components.gnav')
    @endcomponent
    <div class="c-container u-padding-top--0">
        <div class="p-gacha-top">
            <div id="googleMap" class="p-gacha__map">

            </div>
            <div class="p-gacha__handle p-gacha__handle--slideup">
                <p class="p-gacha__circle"><img src="/images/gacha-circle.png" alt="ガチャワッカ"></p>

                <p class="p-gacha__mawasu"><a href="{{ route('gacha/staging') }}"><img src="/images/turn.png"
                            alt="ガチャ回す"></a>

                </p>
                @component('components.modal')
                    @slot('title')
                        <p class="c-modal__title">制限回数オーバー</p>
                    @endslot
                    @slot('content')
                        このエリアで回すことができるガチャの制限数を越えました。他のエリアでお試し下さい。
                    @endslot
                    @slot('button')
                        <button type="submit" class="c-btn c-btn--navy u-margin-top--0">OK</button>
                    @endslot
                @endcomponent

            </div>
        </div>
        <div class="p-gacha__control" id="current-area">
            <div class="p-gacha__control-window">
                <ul>
                    <li><a id="go-kannawa">鉄輪に移動</a></li>
                    <li><a id="go-ohara">大原周辺に移動</a></li>
                </ul>


                <p id="latlng"></p>
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
                    center: latlng
                };

                map = new google.maps.Map(document.getElementById("googleMap"), options);
                polygonObj = new google.maps.Polygon({
                    paths: oharaArea,
                    strokeColor: "#FF0000",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#FF0000",
                    fillOpacity: 0.25,
                    map: map
                });
                addMarker(latlng);
                document.getElementById("current-area").classList.remove("beppu");
                document.getElementById("current-area").classList.add("oita");
                document.getElementById("latlng").innerHTML = latlng;
                return false;
                //document.getElementById("res").innerText = "エリア「大原周辺」範囲内にいます。";
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
                    center: latlng
                };

                map = new google.maps.Map(document.getElementById("googleMap"), options);
                polygonObj = new google.maps.Polygon({
                    paths: kannawaArea,
                    strokeColor: "#FF0000",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#FF0000",
                    fillOpacity: 0.25,
                    map: map
                });
                addMarker(latlng);
                document.getElementById("current-area").classList.remove("oita");
                document.getElementById("current-area").classList.add("beppu");
                document.getElementById("latlng").innerHTML = latlng;
                return false;
                //document.getElementById("res").innerText = "エリア「鉄輪」範囲内にいます。";
            }




            //マーカー移動
            function addMarker(pos) {
                /* var res = google.maps.geometry.poly.containsLocation(pos, polygonObj); */
                marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                });
            }
            //初期化
            ohara();
            //鉄輪に行くボタン
            document.getElementById('go-kannawa').addEventListener('click', (event) => {
                kannawa();
            });
            //大原に行くボタン
            document.getElementById('go-ohara').addEventListener('click', (event) => {
                ohara();
            });
        }

        function fail(error) {
            alert('位置情報の取得に失敗しました。エラーコード：' + error.code);
        }

        navigator.geolocation.getCurrentPosition(success, fail);
    </script>
    {{-- <script>
        function initMap() {
            function success(pos) {
                var lat = pos.coords.latitude;
                var lng = pos.coords.longitude;
                var latlng = new google.maps.LatLng(lat, lng); //中心の緯度, 経度
                var map = new google.maps.Map(document.getElementById('googleMap'), {
                    zoom: 17,
                    center: latlng
                });
                var marker = new google.maps.Marker({
                    position: latlng, //マーカーの位置（必須）
                    map: map //マーカーを表示する地図
                });
            }

            function fail(error) {
                alert('位置情報の取得に失敗しました。エラーコード：' + error.code);
                var latlng = new google.maps.LatLng(35.6812405, 139.7649361); //東京駅
                var map = new google.maps.Map(document.getElementById('maps'), {
                    zoom: 10,
                    center: latlng
                });
            }
            navigator.geolocation.getCurrentPosition(success, fail);
        }
    </script> --}}

</html>
