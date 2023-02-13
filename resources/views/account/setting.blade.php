<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>アカウント設定画面</title>
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
<div class="c-container">
    <div class="c-header">
        <a href="{{ route('account/index') }}" class="c-back">戻る</a>
        <h4>アカウント設定</h4>
    </div>
    <form enctype="multipart/form-data" action="/account/setting" method="POST" class="c-form">
        @csrf
        <div class="c-form">
            <label class="c-form__group" for="">アイコン</label>
        </div>
        <div class="p-account__top--set" id="preview"></div>
        <div class="p-account__top--set">
            <p class="p-account__phot--set"><input type="file" name="example"></p>
        </div>

        <div class="c-form__group">
            <label for="">メールアドレス</label><input value={{ $users->email }} name='email' type="email">
        </div>

        <div class="c-form__group">
            <label for="">ニックネーム(半角英数)</label><input value={{ $users->name }} name='name' type="text"
                name="user_name">
        </div>

        <div class="c-form__group">
            <label for="">新規パスワード</label><input type="password" name='newpwd'>
        </div>
        <div class="col-md-6">

            {{--  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  --}}
        </div>

        <div class="c-form__group">
            <label for="">新規パスワード（確認）</label><input type="password" name='newpwd_confirmation'>
            @error('newpwd')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>


        <div class="p-add__btn">
            <button type="submit" class="c-btn c-btn--navy">更新する</button>
        </div>
        <input type="hidden" name="user_id" value="{{ $users->id }}">
    </form>
</div>
</body>
<script>
    function imgPreView(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        var preview = document.getElementById("preview");
        var previewImage = document.getElementById("previewImage");

        if (previewImage != null) {
            preview.removeChild(previewImage);
        }
        reader.onload = function(event) {
            var img = document.createElement("img");
            img.setAttribute("src", reader.result);
            img.setAttribute("id", "previewImage");
            preview.appendChild(img);
        };

        reader.readAsDataURL(file);
    }
</script>

</html>
