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
            <div class="p-gacha__map"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6674.726977339957!2d131.6073871096625!3d33.23077951304794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1667368193255!5m2!1sja!2sjp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="p-gacha__handle p-gacha__handle--slideup">
                    <p class="p-gacha__circle"><img src="/images/gacha-circle.png" alt="ガチャワッカ"></p>
                    <p class="p-gacha__mawasu"><img src="/images/turn.png" alt="ガチャ回す"></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
