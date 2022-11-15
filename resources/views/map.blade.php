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
    <div class="c-container">
        <div class="p-gacha__map" id="googleMap">
            {{-- ここに地図が入る --}}
        </div>
        <button id="move">マーカー移動</button>
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
            var latlng;
            var polArray = [{
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
            //初期化
            function initialize() {
                var lat = pos.coords.latitude;
                var lng = pos.coords.longitude;
                latlng = new google.maps.LatLng(lat, lng);
                var options = {
                    zoom: 17,
                    center: latlng
                };
                map = new google.maps.Map(document.getElementById("googleMap"), options);
                addPolygon();
                addMarker(latlng);
            }
            //ポリゴン追加
            function addPolygon() {
                polygonObj = new google.maps.Polygon({
                    paths: polArray,
                    strokeColor: "#FF0000",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#FF0000",
                    fillOpacity: 0.25,
                    map: map
                });
            }
            //マーカー移動
            function addMarker(pos) {

                latlng = new google.maps.LatLng(pos.lat, pos.lng);
                var res = google.maps.geometry.poly.containsLocation(pos, polygonObj);
                console.log(res);
                if (res) {
                    msg = "エリア「大原周辺」範囲内にいます。"
                } else {
                    msg = "エリアの範囲外にいます。"
                }
                document.getElementById("latlng").innerHTML = latlng;
                document.getElementById("res").innerText = msg;
                marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                });

            }

            function moveMarker(callback) {
                marker.setMap(null);
                callback({
                    lat: 33.229498,
                    lng: 131.606412
                });
            }
            initialize();
            document.getElementById('move').addEventListener('click', (event) => {
                moveMarker(addMarker);
            });

        }

        function fail(error) {
            alert('位置情報の取得に失敗しました。エラーコード：' + error.code);
        }

        navigator.geolocation.getCurrentPosition(success, fail);
    </script>
</body>

</html>
