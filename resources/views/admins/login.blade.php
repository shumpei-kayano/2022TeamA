<!DOCTYPE html>

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

    <div class="c-container">
        {{--  <a id="btn-open">ログインエラー</a>  --}}
        <p class="p-admin-top__logo"><img src="/images/admin-logo.png" alt="管理者ログイン"></p>
        <form action="{{ route('admin.login') }}" method="POST" class="c-form">
            @csrf

            <div class="c-form__group">
                <label for="name">{{ __('メールアドレス') }}</label>

                <div class="c-form__group">
                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="c-form__group">
                <label for="password">{{ __('パスワード') }}</label>

                <div class="c-form__group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="c-form__group">
                <div class="c-form__group">
                    <button type="submit" class="c-btn c-btn--pink c-btn--50p">
                        {{ __('ログイン') }}
                    </button>
                </div>
                <div class="c-form__group c-form__group--a">
                    <a href="{{ route('admin.register') }}">
                        <p class="p-welcome__sineup">{{ __('新規会員登録') }}</p>
                    </a>
                </div>
            </div>

        </form>
        <div class="c-form__group c-form__group--a">
            <a href="{{ route('password.request') }}">
                <p class="p-welcome__sineup">{{ __('パスワードを忘れた方はこちら') }}</p>
            </a>
        </div>
        {{--  <div class="c-form__group c-form__group--a">
            <a href="{{ route('register') }}">
                <p class="p-welcome__sineup">{{ __('新規会員登録') }}</p>
            </a>
        </div>  --}}
    </div>

    {{-- ログインエラーホップアップ
      @component('components.modal')
        @slot('title')
            <p class="c-modal__title">ログインエラー</p>
        @endslot
        @slot('content')
            ニックネーム、またはパスワードが間違っています。ご確認の上、再度お試し下さい。
        @endslot
        @slot('button')
            <button type="submit" class="c-btn c-btn--navy u-margin-top--0">OK</button>
        @endslot
    @endcomponent
    </form>
    </div>

    <script>
        // 開くボタンが押されたときの処理
        const dialog = document.getElementById('dialog');
        document.getElementById('btn-open').addEventListener('click', (event) => {
            dialog.showModal();
        });
        // OKが押されたときの処理
        dialog.querySelector('.c-btn').addEventListener('click', () => {
            dialog.close();
        });
    </script>  --}}
</body>

</html>
