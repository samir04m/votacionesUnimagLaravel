@extends('template.base')

@section('title', 'Votaciones Unimag 2018')

@section('content')
<div class="container">
    <br><b
    <center>
        <h3>Bienvenido al portal de votaciones unimag 2018</h3>
        <br>
    </center>
    <div class="container">
        <div class="card-panel center">
            <br><br>
            <big>Aun no sabes cual es tu mesa de votacion?</big>
            <h4>Consultar Mesa de Cotacion</h4>
            <form action="{{route('buscarMesa')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s8">
                        <input type="number" name="codigo" required>
                        <label for="codigo">Ingresa tu codigo</label>
                    </div>
                    <div class="col s4">
                        <br>
                        <button type="submit" class="btn cyan">BUSCAR</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@if($date['hours'] >= 16)
    @include('template.modules.resultados')
@endif

@endsection
