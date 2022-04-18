@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Bienvenidos') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesion!') }}

                    <div align="center">
                    <img src="https://i.giphy.com/media/3o7btSAxgPT9pJsTU4/giphy.gif" height="400" width="650">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
