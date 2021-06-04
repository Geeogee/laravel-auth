@extends('layouts.app')

@section('content')
    <section id="edit-car">
        <div class="container">
            <form action="{{ route('update', $car -> id) }}" method="POST">
                @csrf
                @method('POST')
    
                <div class="wrapper-field">
                    <label for="name">
                        Car name:
                    </label>
                    <input type="text" id="name" name="name" value="{{ $car -> name }}">
                </div>
                <div class="wrapper-field">
                    <label for="model">
                        Car model:
                    </label>
                    <input type="text" id="model" name="model" value="{{ $car -> model }}">
                </div>
                <div class="wrapper-field">
                    <label for="kw">
                        Car kw:
                    </label>
                    <input type="number" id="kw" name="kw" value="{{ $car -> kw }}">
                </div>
                <label for="brand_id">
                    Brand:
                </label>
                <select id="brand_id" name="brand_id">
                    @foreach ($brands as $brand)
                        <option value="{{ $brand -> id }}" 
                            @if ($brand -> id == $car -> brand -> id)
                                selected
                            @endif
                        >
                            {{ $brand -> name }} 
                            ({{ $brand -> nationality }})
                        </option>  
                    @endforeach
                </select>
                <label for="pilots_id[]">
                    Pilots :
                </label>
                <select id="pilots_id[]" name="pilots_id[]" multiple>
                    @foreach ($pilots as $pilot)
                        <option value="{{ $pilot -> id }}"
                            
                            @foreach ($car -> pilots as $carPilot)
                                @if ($carPilot -> id == $pilot -> id)
                                    selected
                                @endif
                            @endforeach
                        >
                            {{ $pilot -> firstname }} 
                            {{ $pilot -> lastname }} 
                            ({{ $pilot -> nationality }})
                        </option>
                    @endforeach
                </select>
                <button type="submit">
                    Edit
                </button>
            </form>
        </div>
    </section>
@endsection