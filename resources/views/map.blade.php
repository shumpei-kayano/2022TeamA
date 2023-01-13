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
            @else
                @component('components.gnav')
                @endcomponent
            @endif
        @endforeach
    @endif
    <div class="c-container">
        <div class="p-gacha__map" id="googleMap">
            {{-- ここに地図が入る --}}
        </div>
        <button id="go-kannawa">鉄輪に移動</button>
        <button id="go-ohara">大原に移動</button>
        <p id="latlng"></p>
        <p id="res"></p>
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
                document.getElementById("latlng").innerHTML = latlng;
                document.getElementById("res").innerText = "エリア「大原周辺」範囲内にいます。";
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
                document.getElementById("latlng").innerHTML = latlng;
                document.getElementById("res").innerText = "エリア「鉄輪」範囲内にいます。";
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
</body>

</html>
