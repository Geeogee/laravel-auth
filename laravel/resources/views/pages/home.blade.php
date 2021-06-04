@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section id="car-list">
    <div class="container">
        <h1>
            Cars:
        </h1>
        <ul>
            @foreach ($cars as $car)
                <li>
                    <a href="{{ route('show', $car -> id) }}">
                        {{ $car -> name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
