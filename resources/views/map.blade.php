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
        <p id="latlng"></p>
        <p id="res"></p>
    </div>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtYsX-DTTQHaRPfZ3xTaCrtPoKVv2k6nM&callback=initMap&libraries=geometry"
        async defer></script>

    <script>
        function initMap() {

            function success(pos) {

                var lat = pos.coords.latitude;
                var lng = pos.coords.longitude;
                var latlng = new google.maps.LatLng(lat, lng);

                var map = new google.maps.Map(document.getElementById('googleMap'), {
                    zoom: 17,
                    center: latlng
                });
                var marker = new google.maps.Marker({
                    position: latlng, //マーカーの位置（必須）
                    map: map //マーカーを表示する地図
                });
                document.getElementById("latlng").innerHTML = latlng;
                //
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
                var polygonObj = new google.maps.Polygon({
                    paths: polArray,
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.5,
                    strokeWeight: 2,
                    fillColor: '#FF0000',
                    fillOpacity: 0.25,
                    map: map
                });

                var msg = "";
                var res = google.maps.geometry.poly.containsLocation(latlng, polygonObj);
                if (res) {
                    msg = "エリア「大原周辺」範囲内にいます。"
                } else {
                    msg = "エリアの範囲外にいます。"
                }
                document.getElementById("res").innerHTML = msg;
            }

            function fail(error) {
                alert('位置情報の取得に失敗しました。エラーコード：' + error.code);
            }
            navigator.geolocation.getCurrentPosition(success, fail);
        }
    </script>
</body>

</html>
