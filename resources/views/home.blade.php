@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-center m-3 fs-1">Visita La Union</h2>
        </div>
        <div class="row d-flex justify-content-around">
            <a href="{{ route('packages') }}" class="round-img-link img1">
                <img src="{{ URL('images/1.png') }}" class="rounded-circle round-img" alt="Circular Image">
            </a>
            <a href="{{ route('guides') }}" class="round-img-link img2">
                <img src="{{ URL('images/2.png') }}" class="rounded-circle round-img" alt="Circular Image">
            </a>
            <a href="{{ route('accommodation') }}" class="round-img-link img3">
                <img src="{{ URL('images/3.png') }}" class="rounded-circle round-img" alt="Circular Image">
            </a>
        </div>
    </div>
@endsection
