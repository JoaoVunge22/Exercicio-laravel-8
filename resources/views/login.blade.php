@extends('main')
@section('title','adicionar pessoas')

@section('conteud')
    <div class="row  vh">
        <div class="col-4 mx-auto mt-5 ">
            <form action="{{ route('Fazer_login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="col-12">
                    <h5 class="text-center">Login</h5>
                </div>
                <div class="row row-cols-1 gy-2">
                    <div class="col">
                        <div class="form-floating">
                            <input id="usuario" type="email" name="email" class="form-control form-control-sm rounded-0 " >
                            <label for="usuario" class="form-label">Inserir email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input id="password" type="password" name="password" class="form-control form-control-sm rounded-0 ">
                            <label for="password" class="form-label">Inserir password</label>
                        </div>
                    </div>

                    <div class="col">
                        <a href="{{ route('register') }}">Crear conta de usuario.</a>
                    </div>

                    <div class="col">
                        <button class="btn w-100 btn-primary" type="submit"><i class="fas fa-save"></i> Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
