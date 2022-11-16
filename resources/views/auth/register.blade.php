{{--  @extends('layouts.app')  --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

{{--  @section('content')  --}}
{{--  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>  --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head lang="ja">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
</head>

<div class="c-container">
    <div class="c-header">
        <a href="" class="c-back">戻る</a>
        <h4>新規会員登録</h4>
    </div>
    <div class="p-add__text">全ての項目を入力して、会員登録を行って下さい</div>
    <div class="card-body">
        {{--  <form method="POST" action="{{ route('register') }}">
        @csrf

        {{--  メールアドレス  --}}
        <form action="" class="c-form">
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{--  名前  --}}
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ニックネーム(半角英数)') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{--  パスワード  --}}
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm"
                    class="col-md-4 col-form-label text-md-right">{{ __('パスワードの確認') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="p-add__btn">
                    <button type="submit" class="c-btn c-btn--navy">新規会員登録</button>
                </div>
            </div>
    </div>
    </form>
    {{--  </form>  --}}
</div>
</div>
</div>
</div>
</div>
{{--  @endsection  --}}
