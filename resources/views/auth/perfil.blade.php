@extends('plantilla_blog.plantilla')

@section('contenido')
@if ( session('nombre') )
<div class="alert alert-success" role="alert">
    <strong>Felicitaciones </strong>
    Nombre y rol modificados..
</div>
@endif
@if ( session('claveIncorrecta') )
<div class="alert alert-danger" role="alert">
    <strong>Lo siento!</strong> {{ session('claveIncorrecta') }}
</div>
@endif

@if ( session('Clave') )
<div class="alert alert-success" role="alert">
    <strong>Felicitaciones !</strong>
    {{ session('Clave') }}
</div>
@endif
<div class="card  shadow-sm">
    <div class="card-header d-flex justify-content-between">Mi Perfil
        <div class="btn-group">
            <a href="{{route('usuarios')}}" class="btn btn-primary"><i class="las la-users-cog fs-3"></i></a><a href="{{route('usuarios.crear.formulario')}}" class="btn btn-warning"><i class="las la-plus-circle fs-3"></i></a>
        </div>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('perfil.actualizar', Auth::user()->id) }}">
            @csrf

            <div class="row mb-3">
                <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre :') }}</label>

                <div class="col-md-6">
                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ Auth::user()->name }}">

                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Usuario :') }}</label>

                <div class="col-md-6">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->username }}">

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            @php if(Auth::user()->rol == 'adm') { @endphp

            <div class="row mb-3">
                <label for="rol" class="col-md-4 col-form-label text-md-end">{{ __('Permisos :') }}</label>

                <div class="col-md-6">
                    <select id="rol" class="form-select" name="rol">
                        <option value="{{ Auth::user()->rol }}">{{ Auth::user()->rol }}</option>
                        <option value="adm">Administrador</option>
                        <option value="edit">Editor</option>
                    </select>

                    @error('rol')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            @php } @endphp
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email :') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Clave Anterior :') }}</label>

                <div class="col-md-6">
                    <input id="clave_vieja" type="password" class="form-control @error('clave_vieja') is-invalid @enderror" name="clave_vieja">

                    @error('clave_vieja')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Clave Nueva :') }}</label>

                <div class="col-md-6">
                    <input id="clave" type="password" class="form-control @error('clave') is-invalid @enderror" name="clave">

                    @error('clave')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar :') }}</label>

                <div class="col-md-6">
                    <input id="confirmacion_clave" type="password" class="form-control" name="confirmacion_clave">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Actualizar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection