@extends('test session')

@section('a')
    <div class="c-container u-padding-top--0">
        <a id="btn-open">制限回数オーバー</a>
    </div>
@endsection
@section('b')
    <div class="p-gacha__map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6674.726977339957!2d131.6073871096625!3d33.23077951304794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1667368193255!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
@component('components.gnav')
@endcomponent
@component('components.modal')
    @slot('title')
        <p class="c-modal__title">制限回数オーバー</p>
    @endslot
    @slot('content')
        このエリアで回すことができるガチャの制限数を越えました。他のエリアでお試し下さい。
    @endslot
    @slot('button')
        <button type="submit" class="c-btn c-btn--navy u-margin-top--0">OK</button>
    @endslot
@endcomponent
