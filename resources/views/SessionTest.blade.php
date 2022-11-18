<html>

<head>
    <title>SessionTest</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
            margin: 5px;
        }

        h1 {
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }

        ul {
            font-size: 12pt;
        }

        hr {
            margin: 25px 100px;
            border-top: 1px dashed #ddd;
        }

        .menutitle {
            font-size: 14pt;
            font-weight: bold;
            margin: 0px;
        }

        .content {
            margin: 10px;
        }

        .footer {
            text-align: right;
            font-size: 10pt;
            margin: 10px;
            border-bottom: solid 1px #ccc;
            color: #ccc;
        }

        th {
            background-color: #999;
            color: fff;
            padding: 5px 10px;
        }

        td {
            border: solid 1px #aaa;
            color: #999;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <h1>SessionTest</h1>
    <h2 class="menutitle">※メニュー</h2>
    <ul>
        <li>セッションページ
        </li>
    </ul>
    <hr size="1">
    <div class="content">
        <p>{{ $session_data }}</p>
        <form action="/SessionTest" method="post">
            @csrf
            <input type="text" name="input">
            <input type="submit" value="send">
        </form>
    </div>
    <div class="footer">
        copyright 2020 tuyano.
    </div>
</body>

</html>
