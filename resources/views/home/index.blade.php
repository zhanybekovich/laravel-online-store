@extends('layouts.app')
@section()
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{asset('/img/game.png')}}" class="img-fluid rounded" alt="Test"/>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{asset('/img/safe.png')}}" class="img-fluid rounded" alt="Test"/>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{asset('/img/submarine.png')}}" class="img-fluid rounded" alt="Test"/>
        </div>
    </div>
@endsection
