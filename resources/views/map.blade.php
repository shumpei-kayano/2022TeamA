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
        <div class="p-gacha__map" id="googleMap">{{-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6674.726977339957!2d131.6073871096625!3d33.23077951304794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1667368193255!5m2!1sja!2sjp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtYsX-DTTQHaRPfZ3xTaCrtPoKVv2k6nM&callback=initMap" async
        defer></script>
    <script>
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
    </script>
</body>

</html>
