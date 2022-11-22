<!DOCTYPE html>
<html lang="ja">

{{--  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>  --}}

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

    <div class="c-container">
        {{--  <a id="btn-open">ログインエラー</a>  --}}
        <p class="p-welcome__logo"><img src="/images/logo-plat.png" alt="plat"></p>
        <form method="POST" action="{{ route('login') }}" class="c-form">
            @csrf

            <div class="c-form__group">
                <label for="name">{{ __('ニックネーム') }}</label>

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
                    <div class="c-form__group c-form__group--a">
                        <a href="{{ route('register') }}">
                            <p class="p-welcome__sineup">{{ __('新規会員登録') }}</p>
                        </a>
                    </div>
                </div>
            </div>
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
