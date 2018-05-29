@extends('template.base')

@section('title', 'Votaciones Unimag 2018')

@section('content')
<div class="container">
    <div class="container">
        <div class="card-panel center" style="overflow:hidden;">
            @if($user != null)
                <h5>El usuario con codigo {{$user->codigo}}, debe presentarse en la  {{$user->mesa->nombre}} ubicada en {{$user->mesa->lugar->nombre}}</h5>
            @else
                <div class="row">
                    <center>
                        <h4>No fue encontrado ningua usuario con este codigo</h4>
                    </center>
                    <big>Intenta nuevamente</big>

                </div>
                <div class="col s12 offset-m2 m8">
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
            @endif
        </div>
    </div>
</div>

@endsection
