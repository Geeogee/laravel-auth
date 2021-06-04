@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            <li>
                <strong>Car name: </strong>
                {{ $car -> name }}
            </li>
            <li>
                <strong>Car model: </strong>
                {{ $car -> model }}
            </li>
            <li>
                <strong>Kw:</strong>
                {{ $car -> kw }}
            </li>
            <li>
                <strong>Car brand:</strong>
                {{ $car -> brand -> name }} ({{ $car -> brand -> nationality }})
            </li>
            <li> 
                <strong>Pilots: </strong>
                @foreach ($car -> pilots as $pilot)
                <ul>
                    <li>
                        {{ $pilot -> firstname }} {{ $pilot -> lastname }}
                    </li>
                </ul>
                @endforeach
            </li>
        </ul>
    </div>
@endsection