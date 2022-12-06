@extends('layouts.app')

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
        <h4>新規登録が出来ました！</h4>
    </div>

    {{--  @section('content')  --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="p-add__text">ようこそ！<br>新規登録が完了しました！</div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="{{ route('person/home') }}">
                                <button type="submit" class="c-btn c-btn--navy">
                                    {{ __('ホーム画面へ') }}
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
