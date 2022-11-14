@extends('helloapp')

@section('title', 'SessionTest')

@section('menubar')
    @parent
    セッションページ
@endsection

@section('content')
    <p>{{ $session_data }}</p>
    <form action="/SessionTest" method="post">
        @csrf
        <input type="text" name="input">
        <input type="submit" value="send">
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
